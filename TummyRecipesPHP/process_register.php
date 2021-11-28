<?php
$fname = $lname = $description = $pphoto = $email = $errorMsg = "";
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
    
    // Email
    if (empty($_POST["email"]))
    {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    }
    else
    {
        $email = sanitize_input($_POST["email"]);
        
        // Additional check to make sure e-mail address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorMsg .= "Invalid email format.";
            $success = false;
        }
    }
    
    // Password
    if (empty($_POST["pwd"]) || empty($_POST["pwd_confirm"]))
    {
        $errorMsg .= "Password and confirmation are required.<br>";
        $success = false;
    }
    else
    {
        if ($_POST["pwd"] != $_POST["pwd_confirm"])
        {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        }
        else
        {
            $pwd_hashed = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
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

 // Helper function that checks input for malicious or unwanted content.
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*
* Helper function to write the member data to the DB
*/
function saveMemberToDB()
{
    global $fname, $lname, $description, $pphoto, $email, $pwd_hashed, $errorMsg, $success;
    
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
        $stmt = $conn->prepare("INSERT INTO tummy_recipes_members (fname, lname, description, pphoto, email, password) VALUES (?, ?, ?, ?, ?, ?)");
        
        // Bind & execute the query statement:
        $stmt->bind_param("ssssss", $fname, $lname, $description, $pphoto, $email, $pwd_hashed);
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
        <main class="container">
            <br>
            <?php
            if ($success)
            {
                saveMemberToDB();
                echo "<h2>Your registration is successful!</h2>";
                echo "<h4>Thank you for signing up. ", $fname . " " . $lname . ".</h4>";
                echo "<a href='login.php' class='btn btn-success'>Log-in</a>";
            }
            else
            {
                echo "<h2>Oops!</h2>";
                echo "<h4>The following errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo "<a href='register.php' class='btn btn-danger'>Return to Sign Up</a>";
            }
            ?>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>