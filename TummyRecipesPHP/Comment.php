
<?php
include "Timezone.php";
//include "dbh.inc.php";
//include "Comment_function.php";
?>

<link rel='stylesheet' type='text/css' href='css/Comment.css'>




<form method='post' action="Commenting_function.php">
 <!--To be added in afterwards 
<form> -->
    <input type='hidden' name='uid' value='Anonymous'>
    <input type='hidden' name='date' value =".date('Y-m-d H:i:s').">
    <textarea name='message'></textarea><br>
    <button name='submit' type='commentSubmit'>Comment</button>
</form>


