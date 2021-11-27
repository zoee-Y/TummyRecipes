<html>
    <head>
        <title>New Recipe Status</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    <body>
        <?php
        include "nav.inc.php";
        ?>
        
        <?php
        //error_reporting(E_ALL);
        $rTitle = $ingredients = $steps = $errorMsg = "";
        $hours = $minutes = 0;
        $imgThumbnail = NULL;
        $success = true;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["rTitle"])) {
                $errorMsg .= "Recipe title is required.<br>";
                $success = false;
            } else {
                $rTitle = sanitize_input($_POST["rTitle"]);
            }

            if (empty($_POST["ingredients"])) {
                $errorMsg .= "Ingredients are required.<br>";
                $success = false;
            } else {
                $ing_array = [];
                //split input based on newline
                $ing_input_array = preg_split("/\r\n|\n|\r/", $_POST["ingredients"]);

                //iterate through input array and sanitize
                foreach ($ing_input_array as $i) {
                    //push the sanitized input to array
                    array_push($ing_array, sanitize_input($i));
                }

                $ingredients = serialize($ing_array);
            }

            if (empty($_POST["steps"])) {
                $errorMsg .= "Instructions are required.<br>";
                $success = false;
            } else {
                $steps_array = [];
                //split input based on newline
                $steps_input_array = preg_split("/\r\n|\n|\r/", $_POST["steps"]);

                //iterate through input array and sanitize
                foreach ($steps_input_array as $s) {
                    //push the sanitized input to array
                    array_push($steps_array, sanitize_input($s));
                }

                $steps = serialize($steps_array);
            }

            if (empty($_POST["hours"]) and empty($_POST["minutes"])) {
                $errorMsg .= "Time taken is required.<br>";
                $success = false;
            }
            //if both hours and minutes are 0
            else if ($_POST["hours"] == 0 and $_POST["minutes"] == 0) {
                $errorMsg .= "Time taken must be at least 1 minute.<br>";
                $success = false;
            }
            else if ($_POST["hours"] > 24 or $_POST["minutes"] > 59) {
                $errorMsg .= "Invalid number for hours or minutes.<br>";
                $success = false;
            }
            else {
                if (is_numeric($_POST["hours"]) and is_numeric($_POST["minutes"])) {
                    $hours = $_POST["hours"];
                    $minutes = $_POST["minutes"];
                } else {
                    $errorMsg .= "Time taken must be a number";
                    $success = false;
                }
            }
            
            if (empty($_FILES["imgThumbnail"]["name"])) {
                //echo "<p>imgThumbnail filename is empty and imgThumbnail set to null</p>";
                $imgThumbnail = NULL;
            }
            else {
                //echo "<p>imgThumbnail filename NOT empty</p>";

                $temp = explode(".", $_FILES["imgThumbnail"]["name"]);
                $extension = strtolower(end($temp));
                
                $imgType = $_FILES["imgThumbnail"]["type"];
                /*
                    echo "<p>$imgType,$extension</p>";
                    echo "<p>$extension VS $allowedExts[0], $allowedExts[1], $allowedExts[2]</p>";
                    echo in_array($extension, $allowedExts)."<br>";
                    echo $_FILES["imgThumbnail"]["size"];
                */
                
                $allowedExts = array("jpg","png","jpeg");
                if ($_FILES["imgThumbnail"]["size"] <= 2000000) {
                    if (($imgType == "image/gif") || ($imgType == "image/jpeg") || ($imgType == "image/jpg") || ($imgType == "image/pjpeg") || ($imgType == "image/x-png") || ($imgType == "image/png")
                        && (in_array($extension, $allowedExts))) {
                        //echo "<p>FILE ALLOWED</p>";
                        
                        $formatfilename = trim(addslashes($_FILES["imgThumbnail"]["name"]));
                        $filename = preg_replace("/\s+/", "_", $formatfilename);
                        
                        $directory = "images/";

                        $imgThumbnail = $directory . basename($filename);

                        if (!move_uploaded_file($_FILES["imgThumbnail"]["tmp_name"], $imgThumbnail)) {
                            $errorMsg .= "Failed to move uploaded file.</p>";
                            $success = false;
                        }

                    }
                    else {
                        $errorMsg .= "Wrong file format";
                        $success = false;
                    }
                } else {
                    $errorMsg .= "File size exceeded";
                    $success = false;
                }
            }
        } else {
            echo "<h2>This page is not meant to run directly.</h2>";
            echo "<p>You can register at the link below:</p>";
            echo "<a href='register.php'>Go to Sign Up page...</a>";
            exit();
        }
        
        if ($success) {
            saveRecipeToDB();
            
            //echo "<p>imgThumbnail: $imgThumbnail</p>";
            
            echo "<main class='container'>";
            echo "<div id='processOutputContainer'>";
            echo "<h2>Successfully created new recipe!</h2>";
            echo "<p>View your recipe here</p>";
            echo "<p>(button goes to recipe details page of newly created recipe)</p>";
            echo "<a href='#' class='btn btn-success'>View recipe</a>";
            echo "</div>";
            echo "</main>";
        } else {
            echo "<main class='container'>";
            echo "<div id='processOutputContainer'>";
            echo "<h2>Oops!</h2>";
            echo "<h4>The following errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<p>(button goes back to create new recipe form, i will try and see if can fill up with previously entered details)</p>";
            echo "<a href='#' class='btn btn-danger'>Return to recipe</a>";
            echo "</div>";
            echo "</main>";
        }
        
        // Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        include "footer.inc.php";
        ?>
        
        <?php
        /*         * Helper function to write the member data to the DB */

        function saveRecipeToDB() {
            global $rTitle, $hours, $minutes, $ingredients, $steps, $imgThumbnail, $errorMsg, $success;
            // Create database connection.
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'],
                    $config['password'], $config['dbname']);

            // Check connection
            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                //using test email
                $email = "zoe@gmail.com";
                
                $stmt = $conn->prepare("INSERT INTO tummy_recipes_recipes (email, rTitle, hours, minutes, ingredients, steps, imgThumbnail) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssiisss", $email, $rTitle, $hours, $minutes, $ingredients, $steps, $imgThumbnail); //not adding img yet
                
                if (!$stmt->execute()) {
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                    $success = false;
                }
                /*else {
                    echo "<p>stmt executed!</p>";
                }*/
                $stmt->close();
            }
            $conn->close();
            //echo $imgThumbnail;
            
            //echo "<p>connection closed</p>";            
        }
        ?>
    </body>
</html>