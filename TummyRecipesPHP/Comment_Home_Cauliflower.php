<?php

    session_start();
    
    $message = $errorMsg = "";
    $success = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentSubmit']))
    {
        // validate if email is empty
        if (empty($_POST["message"]))
        {
            $errorMsg .= "Comment is required.<br>";
            $success = false;
        }
        else
        {
            $message = ($_POST["message"]);
            $uid = ($_POST["uid"]);
            $date = ($_POST["date"]);
        }



        // If no error, authenticate user!
        if (empty($errorMsg))
        {
            setComments();

        }
    }

    function setComments()
    {
        global $message, $errorMsg, $success;

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
            $stmt = $conn->prepare("INSERT INTO tummy_recipes_comment_cauliflower (message) VALUES (?)");

            // Bind & execute the query statement:
            $stmt->bind_param("s",$message);
            if (!$stmt->execute())
            {
                $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                $success = false;
            }
            $stmt->close();
        }

        $conn->close();
    }

?>






<html>
    
        <?php
        include "head.inc.php";
        ?>
    <body>
        <?php
        include "session.inc.php";
        ?>
        <main class="container">
            <br>
            <h2>Thank you for your comment. It is much appreciated.</h2>
            <a href="Cauliflower.php" class="btn btn-success">Return</a>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>
