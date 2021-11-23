<html>
    <head>
        <title>Registration Results</title>
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
        } else {
            echo "<h2>This page is not meant to run directly.</h2>";
            echo "<p>You can register at the link below:</p>";
            echo "<a href='register.php'>Go to Sign Up page...</a>";
            exit();
        }
        
        if ($success) {
            //saveMemberToDB();
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
         /*
         * Helper function to write the member data to the DB
         */
        /*
        function saveMemberToDB()
        {
          global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;

          // Create database connection.
          $config = parse_ini_file('../../private/db-config.ini');
          $conn = new mysqli($config['servername'], $config['username'],
          $config['password'], $config['dbname']);

          // Check connection
          if ($conn->connect_error)
          {
          $errorMsg = "Connection failed: " . $conn->connect_error;
          $success = false;
          }
          else
          {
          // Prepare the statement:
          $stmt = $conn->prepare("INSERT INTO world_of_pets_members (fname, lname, email, password) VALUES (?, ?, ?, ?)");

          // Bind & execute the query statement:
          $stmt->bind_param("ssss", $fname, $lname, $email, $pwd_hashed);
          if (!$stmt->execute())
          {
          $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
          $success = false;
          }
          $stmt->close();
          }

          $conn->close();
        } */
        
        ?>
    </body>
</html>