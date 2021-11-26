<?php


 
// Helper function that a
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
        $stmt = $conn->prepare("INSERT INTO tummy_recipes_comment_test (message) VALUES (?)");
        
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

function getComments() 
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
        
        $stmt = $conn->prepare("SELECT * FROM tummy_recipes_comment_test WHERE message=?");
        $stmt->bind_param("s", $message);
        $stmt->execute();
        $result = mysql_query($stmt);
        
        while ($rowvalue= mysql_fetch_array($result)){
            $message = $rowvalue['message'];
        }
    $conn->close();
    }   
}

?>