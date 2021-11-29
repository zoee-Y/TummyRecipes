<?php
    session_start();
?>

<html>
    <head>
        <title>Delete Results</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    <body>
        <?php
        include "nav.inc.php";
        ?>
        <main class="container">
            <br>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    removeMemberFromDB();
                    session_unset();
                    session_destroy();
                    echo "<p align='center'>";
                    echo "<h4>We're sad to see you go.</h4>";
                    echo "<h4>Thank you for believing in Tummy Recipes!</h4>";
                    echo "<h4>See you on the flip side!</h4>";
                    echo "</p>";
                    header('Refresh: 2; URL = index.php');
                }
                else
                {
                    echo "<h2>This page is not meant to run directly.</h2>";
                    echo "<p>You can register at the link below:</p>";
                    echo "<a href='register.php'>Go to Sign Up page...</a>";
                    exit();
                }
                
                /*
                * Helper function to delete the member data from DB
                */
                function removeMemberFromDB()
                {
                    global $errorMsg, $success;

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
                        $del_profile = $conn->prepare("DELETE FROM tummy_recipes_members WHERE member_id='{$_SESSION['member']}'");

                        // Bind & execute the query statement:
                        $del_profile->bind_param("s", $row["{$_SESSION['member']}"]);
                        if (!$del_profile->execute())
                        {
                            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                            $success = false;
                        }
                        $del_profile->close();
                    }
                    $conn->close();
                }

            ?>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>