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
        <div class="container">
            <div class="row profile">
		<div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- SIDEBAR USERPIC -->
                        <figure>                                                                          
                            <img class="profilepic" 
                             src="images/profile pic.jpg"
                             />                         
                        </figure>
                        <!-- END SIDEBAR USERPIC -->
                        <!-- SIDEBAR USER TITLE -->
                        <div class="profile-usertitle">
                                <div class="user-name">
                                        Name
                                </div>
                                <div class="user-email">
                                        Email
                                </div>
                                <div class="user-description">
                                        Short Description
                                </div>
                        </div>
                        <!-- END SIDEBAR USER TITLE -->
                        
                    </div>
		</div>
            </div>
	</div>
   
        </main>   
        
        
     <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>
