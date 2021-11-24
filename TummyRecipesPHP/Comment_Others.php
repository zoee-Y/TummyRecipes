<?php

function getComments($conn) {
    $sql = "SELECT * FROM tummy_recipes_comments";
    $result = $conn->query($sql);
    while ($row = $result-> fetch_assoc()) {
        echo "<div class ='comment-box'><p>";
            echo $row['uid']."<br>";
            echo $row['date']."<br>";
            // NL would check wheteher if there is new line and read it accordingly
            echo nl2br($row['message']);
        
        // First is for the delete of comments
        // second is for the edit of the comments
        echo "</p>        
            <form class = 'delete-form' method ='POST' action ='.deleteComments($conn).'>
                <input type='hidden' name='cid' value=/".$row['cid'].">
                <button type ='submit' name= 'commentDelete'>Delete</button>
            </form>
            
            <form class = 'edit-form' method ='POST' action ='Edit_Comment.php'>
                <input type='hidden' name='cid' value=/".$row['cid'].">
                <input type='hidden' name='uid' value=/".$row['uid'].">
                <input type='hidden' name='date' value=/".$row['date'].">
                <input type='hidden' name='message' value=/".$row['message'].">
                <button>Edit</button>
            </form>
        </div>";
    }
    
}

function editComments($conn){
    if (isset($_POST['commentSubmit'])){
        $cid = $_POST['cid'];
        
        //name of table is called comments
        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = $conn->query($sql);
        header("Location: index.php");
    }
}


function deleteComments($conn){
    if (isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $messgae = $_POST['message'];
        
        //name of table is called comments
        $sql = "UPDATE comments SET message='$message'WHERE cid = '$cid'";
        $result = $conn->query($sql);
        header("Location: index.php");
    }
}
?>




<?php


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
    $stmc = $conn->prepare("SELECT * FROM tummy_recipes.tummy_recipes_comments");
    $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        //name of table is called comments
        $sql = "INSERT INTO tummy_recipes.tummy_recipes_comments(uid,date,message) "
                . "VALUES ('$uid','$date','$message')";
        $result = $conn->query($sql);  
    $stmc->close();
}
$conn->close();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentSubmit']))
{
    setComments($conn);
} 

// function which insert comment into database
function setComments($conn){
    if (isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        //name of table is called comments
        $sql = "INSERT INTO tummy_recipes.tummy_recipes_comments(uid,date,message) "
                . "VALUES ('$uid','$date','$message')";
        $result = $conn->query($sql);    
    }
}
$stmt = $conn->prepare("INSERT INTO tummy_recipes_members (fname, lname, email, password) VALUES (?, ?, ?, ?)");
        
        // Bind & execute the query statement:
        $stmt->bind_param("ssss", $fname, $lname, $email, $pwd_hashed);
        if (!$stmt->execute())
        {
            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            $success = false;
        }
        $stmt->close();

?>
