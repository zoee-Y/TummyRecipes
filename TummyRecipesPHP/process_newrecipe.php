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
        $rTitle = $ingredients = $steps = $errorMsg = "";
        $hours = $minutes = 0;
        $imgThumbnail = null;
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
            } else {
                if (is_numeric($_POST["hours"]) and is_numeric($_POST["minutes"])) {
                    $hours = $_POST["hours"];
                    $minutes = $_POST["minutes"];
                } else {
                    $errorMsg .= "Time taken must be a number";
                    $success = false;
                }
            }
            
            if (empty($_FILES["imgThumbnail"]["name"])) {
                echo "<p>imgThumbnail filename is empty and imgThumbnail set to null</p>";
                $imgThumbnail = null;
            }
            else {
                echo "<p>imgThumbnail filename NOT empty</p>";

                $temp = explode(".", $_FILES["imgThumbnail"]["name"]);
                $extension = end($temp);
                
                $allowedTypes = array("JPG","PNG","JPEG");
                if ((($_FILES["imgThumbnail"]["type"] == "image/gif") || ($_FILES["imgThumbnail"]["type"] == "image/jpeg") || ($_FILES["imgThumbnail"]["type"] == "image/jpg") || ($_FILES["imgThumbnail"]["type"] == "image/pjpeg") || ($_FILES["imgThumbnail"]["type"] == "image/x-png") || ($_FILES["imgThumbnail"]["type"] == "image/png"))
                        && ($_FILES["imgThumbnail"]["size"] < 20000)
                        && in_array($extension, $allowedTypes)){
                    $image = $_FILES["imgThumbnail"]["tmp_name"];
                    $imgThumbnail = addslashes(file_get_contents($image));
                }
                else {
                    $errorMsg .= "Invalid file type";
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
            
            // for future reference, getting elements from unserialized array
            /*print_r($ingredients);
            $uns = unserialize($ingredients);
            for ($i = 0; $i < count($uns); $i++) {
                echo "<p>$uns[$i]</p>";
            }*/
            
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
            //$data = stripslashes($data);
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
                
                // Prepare the statement:
                //check if imgThumbnail is null, then add the other columns only
                /*if (imgThumbnail == null) {
                    echo "<p>imgThumbnail null</p>";
                    $stmt = $conn->prepare("INSERT INTO tummy_recipes_recipes (email, rTitle, hours, minutes, ingredients, steps) VALUES (?, ?, ?, ?, ?, ?)");
                    // Bind & execute the query statement:
                    $stmt->bind_param("ssiiss", $email, $rTitle, $hours, $minutes, $ingredients, $steps); //not adding img yet  
                }
                else {
                    echo "<p>imgThumbnail not null</p>";
                    $stmt = $conn->prepare("INSERT INTO tummy_recipes_recipes (email, rTitle, hours, minutes, ingredients, steps, imgThumbnail) VALUES (?, ?, ?, ?, ?, ?, ?)");
                    $null = NULL;
                    $stmt->bind_param("ssiissb", $email, $rTitle, $hours, $minutes, $ingredients, $steps, $null); //not adding img yet
                    $stmt->send_long_data(6, $imgThumbnail);
                }*/
                
                $stmt = $conn->prepare("INSERT INTO tummy_recipes_recipes (email, rTitle, hours, minutes, ingredients, steps, imgThumbnail) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $null = NULL;
                $stmt->bind_param("ssiissb", $email, $rTitle, $hours, $minutes, $ingredients, $steps, $null); //not adding img yet
                $stmt->send_long_data(6, $imgThumbnail);
                
                if (!$stmt->execute()) {
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                    $success = false;
                }
                else {
                    echo "<p>stmt executed!</p>";
                }
                $stmt->close();
            }
            $conn->close();
            echo "<p>connection closed</p>";
            
            $imgresult = $conn->query("SELECT imgThumbnail FROM tummy_recipes_recipes ORDER BY recipe_id DESC");
            
            if($result->num_rows > 0){
                echo "<div class='gallery'>";
            
                while($row = $result->fetch_assoc()){
                    echo '<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row["image"]); ?> />';
                }
                echo "</div>";
            }
            else{
                echo "<p>Image(s) not found...</p>";
            }
            
        }
        ?>
    </body>
</html>