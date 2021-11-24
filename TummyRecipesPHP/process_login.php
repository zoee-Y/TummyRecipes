<?php
$fname = $lname = $email = $errorMsg = "";
$success = true;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
{
    // validate if email is empty
    if (empty($_POST["email"]))
    {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    }
    else
    {
        $email = sanitize_input($_POST["email"]);
    }
    
    // validate if password is empty
    if (empty($_POST["pwd"]))
    {
        $errorMsg .= "Password is required.<br>";
        $success = false;
    }
    else
    {
        $pwd_hashed = sanitize_input($_POST["pwd"]);
    }
    
    // If no error, authenticate user!
    if (empty($errorMsg))
    {
        authenticateUser();
        createSession();
    }
}
else
{
    echo "<h2>This page is not meant to run directly.</h2>";
    echo "<p>You can login at the link below:</p>";
    echo "<a href='login.php'>Go to Login page...</a>";
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

// Helper function that a
function authenticateUser()
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
        $stmt = $conn->prepare("SELECT * FROM tummy_recipes_members WHERE email=?");
        
        // Bind & execute the query statement:
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0)
        {
            // Note that email field is unique, so should only have
            // one row in the result set.
            $row = $result->fetch_assoc();
            $fname = $row["fname"];
            $lname = $row["lname"];
            $pwd_hashed = $row["password"];
            
            // Check if the password matches:
            if (!password_verify($_POST["pwd"], $pwd_hashed))
            {
                $errorMsg = "Email not found or password doesn't match...";
                $success = false;
            }
            else
            {
                $_SESSION["userid"] = $row["member_id"];
                $_SESSION["user"] = $row;
            }
        }
        else
        {
            $errorMsg = "Email not found or password doesn't match...";
            $success = false;
        }
        $stmt->close();
    }
    $conn->close();
}

function createSession()
{
    global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;
    
    // start session
    session_start();
    
    // if user is already logged in then redirect user to welcome page
    if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true)
    {
        header("location: welcome.php");
        exit;
    }
}

?>

<html>
    <head>
        <title>Login Results</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    <body>
        <?php
        include "session.inc.php";
        ?>
        <main class="container">
            <br>
            <?php
            if ($success)
            {
                echo "<h2>Login successful!</h2>";
                echo "<h4>Welcome back, ", $fname . " " . $lname . ".</h4>";
                echo "<a href='welcome.php' class='btn btn-success'>Return to Home</a>";
            }
            else
            {
                echo "<h2>Oops!</h2>";
                echo "<h4>The following errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo "<a href='login.php' class='btn btn-danger'>Return to Login</a>";
            }
            ?>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>