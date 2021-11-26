
<?php
include "Commenting_function.php";

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
        getComments();
    }
}
?>

<link rel='stylesheet' type='text/css' href='css/Comment.css'>


<!--
<div class='form-group mb-3'>
    <input type =text value='<?php = $rowvalue['message'];?>'>    
</div> -->


<form  method="post">
    <div class="form-group">
        <label for="message">Comment:</label> 
        <input class="form-control" type="text" id="message" 
               name="message" placeholder="Enter your comment">
    </div>
     <div class="form-group">
        <button class="btn btn-primary" type="submit" name="commentSubmit">Comment</button>
    </div>
</form>


