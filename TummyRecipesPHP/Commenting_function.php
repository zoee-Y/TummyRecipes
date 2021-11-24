<?php
$uid = $message = $errorMsg = "";
$date = 0;
$success = true;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentSubmit'])) 
{
    if (empty($_POST["message"]))
    {
        $errorMsg .= "Comment is required.<br>";
        $success = false;
    }
    else
    {
        $message = ($_POST["message"]);
        $uid = ($POST["uid"]);
        $date = ($POST["date"]);
        setComments();
    }
    
}


function setComments()
{
    global $message,$uid,$date;
    
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'],
    $config['password'], $config['dbname']);
    
     if ($conn->connect_error)
    {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    }
    else
    {
        $stmc = $conn->prepare("INSERT INTO tummy_recipes_comments (uid,date,message) VALUES (?, ?, ?)");
        $stmc->bind_param("sis", $uid,$date,$message); //not adding img yet
        
        if (!$stmc->execute()) {
            $errorMsg = "Adding of comments failed.";
            $success = false;
        }
        else
        {
            $stmc->close();
            
        }
        
                
    }
    $conn->close();
}
