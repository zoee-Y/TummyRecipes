<!DOCTYPE html>

<html lang="en">
    
    <!-- Head -->
    <?php
    include "head.inc.php";
    ?>
    
    <body>
        <!--Navbar-->
        <?php
        include "nav.inc.php";
        ?>
        
        <!--Header-->
        <header class="jumbotron text-center">    
            <h1 class="display-4">My Profile</h1>
            <h4>This is where you keep your secrets!</h4>
        </header>
        
        <main> 
            <div class="cookbooksession">
                 <h4 style="font-family: Times New Roman, Helvetica, sans-serif;"> Please 
                     <a class="login" href="login.php">login</a> to view your profile!</h4>
                 <h4 style="font-family: Times New Roman, Helvetica, sans-serif;"> For new users, you can 
                     <a class="signup" href="register.php">sign up</a> to join us!</h4>
            </div> 
        </main>   
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>
