
<?php
include "Timezone.php";
include "dbh.inc.php";
include "Comment_function.php"
?>

<link rel='stylesheet' type='text/css' href='css/Comment.css'>



<form method='POST' action=".setComments($conn).">
 <!--To be added in afterwards 
<form> -->
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value =".date('Y-m-d H:i:s').">
    <textarea name='message'></textarea><br>
    <button name='submit' type='commentSubmit'>Comment</button>
</form>


<!--The function below is to get comments from the database 
 getComments($conn); -->


