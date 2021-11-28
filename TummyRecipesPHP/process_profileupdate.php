<?php
    session_start();
?>

<html>
    <head>
        <title>Update Results</title>
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
                $fname = $lname = $description = $pphoto = $errorMsg = "";
                $pphoto = NULL;
                $success = true;
                
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    // First Name
                    if (!empty($_POST["fname"]))
                    {
                        $fname = sanitize_input($_POST["fname"]);
                    }

                    // Last Name
                    if (empty($_POST["lname"]))
                    {
                        $errorMsg .= "Last name is required.<br>";
                        $success = false;
                    }
                    else
                    {
                        $lname = sanitize_input($_POST["lname"]);
                    }

                    // Short Bio
                    if (!empty($_POST["description"]))
                    {
                        $description = sanitize_input($_POST["description"]);
                    }

                    // Profile Photo
                    if (empty($_FILES["pphoto"]["name"]))
                    {
                        $pphoto = NULL;
                    }
                    else
                    {
                        $tempPhoto = explode(".", $_FILES["pphoto"]["name"]);
                        $photoExt = strtolower(end($tempPhoto));

                        $photoType = $_FILES["pphoto"]["type"];

                        $validPhotoExts = array("jpg","png","jpeg");
                        if ($_FILES["pphoto"]["size"] <= 2000000) 
                        {
                            if (($photoType == "image/gif") || ($photoType == "image/jpeg") || ($photoType == "image/jpg") || ($photoType == "image/pjpeg") || ($photoType == "image/x-png") || ($photoType == "image/png")
                                && (in_array($photoExt, $validPhotoExts))) 
                            {
                                $sanitizePhoto = trim(addslashes($_FILES["pphoto"]["name"]));
                                $photoFilename = preg_replace("/\s+/", "_", $sanitizePhoto);

                                $photoDirectory = "images/";

                                $pphoto = $photoDirectory . basename($photoFilename);

                                if (!move_uploaded_file($_FILES["pphoto"]["tmp_name"], $pphoto)) 
                                {
                                    $errorMsg .= "Failed to move uploaded file.</p>";
                                    $success = false;
                                }
                            }
                            else 
                            {
                                $errorMsg .= "Wrong file format";
                                $success = false;
                            }
                        } 
                        else 
                        {
                            $errorMsg .= "File size exceeded";
                            $success = false;
                        }
                    }
                }
                else
                {
                    echo "<h2>This page is not meant to run directly.</h2>";
                    echo "<p>You can register at the link below:</p>";
                    echo "<a href='register.php'>Go to Sign Up page...</a>";
                    exit();
                }
                
                if ($success)
                {
                    updateMemberToDB();
                    echo "<h2>You have successfully updateed your Profile!</h2>";
                    echo "<h4>Thank you. ", $fname . " " . $lname . ".</h4>";
                    header('Refresh: 1.5; URL = MyProfileSession.php');
                }
                else
                {
                    echo "<h2>Oops!</h2>";
                    echo "<h4>The following errors were detected:</h4>";
                    echo "<p>" . $errorMsg . "</p>";
                    echo "<a href='MyProfileInfo.php' class='btn btn-danger'>Return to Profile Update</a>";
                }
                
                 // Helper function that checks input for malicious or unwanted content.
                function sanitize_input($data)
                {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                /*
                * Helper function to update the member data to the DB
                */
                function updateMemberToDB()
                {
                    global $fname, $lname, $description, $pphoto, $errorMsg, $success;

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
                        // Creating the Query:
                        $update_profile = $conn->prepare("UPDATE tummy_recipes_members SET fname=?, lname=?, description=?, pphoto=? WHERE member_id='{$_SESSION['member']}'");

                        $fname = $row['fname'];
                        $lname = $row['lfname'];
                        $description = $row['description'];
                        $pphoto = $row['pphoto'];

                        // Bind & execute the query statement:
                        $update_profile->bind_param("ssss", $fname, $lname, $description, $pphoto);
                        if (!$update_profile->execute())
                        {
                            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                            $success = false;
                        }
                        $update_profile->close();
                    }
                    readMemberFromDB();

                    $conn->close();
                }

                /*
                * Helper function to read the new member data from the DB
                */
                function readMemberFromDB()
                {
                    global $fname, $lname, $description, $pphoto, $errorMsg, $success;

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
                        // Creating the Query:
                        $read_profile = $conn->prepare("UPDATE tummy_recipes_members SET fname=?, lname=?, description=?, pphoto=? WHERE member_id='{$_SESSION['member']}'");

                        // Bind & execute the query statement:
                        $read_profile->bind_param("i", $row["'{$_SESSION['member']}'"]);
                        if (!$read_profile->execute())
                        {
                            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                            $success = false;
                        }
                        $read_profile->close();
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