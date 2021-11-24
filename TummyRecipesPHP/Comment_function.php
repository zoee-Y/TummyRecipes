<?php

$success = true;


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentSubmit']))
{
    setComments($conn);
} 

// function which insert comment into database
function setComments($conn){
    
    global $errorMsg, $success;
    // Create database connection.
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
        $stmc = $conn->prepare("INSERT INTO tummy_recipes_comments (uid, date, message) VALUES (?, ?, ?)");
        //$stmc = $conn->prepare("SELECT * FROM tummy_recipes.tummy_recipes_comments");
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $stmc->bind_param("iis", $uid,$date,$message);
        
        //name of table is called comments
        //$sql = "INSERT INTO tummy_recipes_comments(uid,date,message) "
                //. "VALUES ('$uid','$date','$message')";
        //$result = $conn->query($sql);  
        $stmc->close();
        
        
}
    $conn->close();
    }
    
?>