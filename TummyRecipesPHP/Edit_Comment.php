<?php
include "Timezone.php";
//include "dbh.inc.php";
//include "Comment_function.php"
?>

<!doctype html>

<html lang="en">
      <!-- Head -->
    <?php
    include "head.inc.php";
    ?>
      
    <link rel='stylesheet' type='text/css' href='css/Comment.css'>
    
    <body>
        
        <!--Navbar-->
        <?php
        include "nav.inc.php";
        ?>
        
        <?php
        
        $cid = $_POST['cid'];
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
            //<!--form method='POST' action=".editComments($conn)."
             //To be added in afterwards -->
        echo "<form>
            <input type='hidden' name='cid' value=".$cid.">
            <input type='hidden' name='uid' value=".$uid.">
            <input type='hidden' name='date' value =/".$date.">
            <textarea name='message'>".$message."</textarea><br>
            <button name='submit' type='commentSubmit'>Edit</button>
        </form>;"
        ?>

        <?php
        include "footer.inc.php";
        ?>
        
    </body>
</html>







