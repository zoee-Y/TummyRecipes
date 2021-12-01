<!DOCTYPE html>

<html lang="en">
    
    <!-- Head -->
    <?php
    include "head.inc.php";
    ?>
    
    <body>
        
        <!--Navbar-->
        <?php
        include "session.inc.php";
        ?>
        
        <!--Header-->
        <header class="jumbotron text-center">
            <br>
            <h1 class="display-4">My Profile</h1>
           
        </header>
        
        <main> 
            <div class="container">
                <div class="row profile">
                    <div class="card">
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
                                        Name: testing
                                </div>
                                <div class="user-email">
                                        Email: 
                                </div>
                                <div class="user-description">
                                        Description:
                                </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <a class="edit-profile" href="MyProfileInfo.php">
                                <br>Edit Profile
                            </a>
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
