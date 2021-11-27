<?php
    session_start();
?>

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
            <br>
            <h1 class="display-4">My Profile</h1>
            <h4>This is where you keep your secrets!</h4>
        </header>
        
        <main> 
            <div class="container">
                <div class="row-profile">
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
                                <?php
                                    // Connecting to the DB
                                    $config = parse_ini_file('../../private/db-config.ini');
                                    $conn = new mysqli($config['servername'], $config['username'], 
                                    $config['password'], $config['dbname']);
                                    
                                    if ($conn->connect_error)
                                    {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    
                                    // Create The DB Query
                                    $query_profile = "SELECT fname, lname, email FROM tummy_recipes_members WHERE member_id = ";
                                    
                                    // Prepare the Query
                                    $pquery = $conn->query($query_profile);
                                    
                                    if ($pquery->num_rows > 0)
                                    {
                                        echo '<table class="profile">';
                                        
                                        while ($row = $pquery->fetch_assoc())
                                        {
                                            // Display the User's details
                                            echo '<tr>
                                            <td><h7>Name: '.$row['fname'].' '.$row['lname'].'</h7></td>
                                            </tr>
                                            <tr>
                                            <td><h7>Email: '.$row['email'].'</h7></td>
                                            </tr>
                                            <tr>
                                            <td><h7>Description: '.$row['profiledesc'].'</h7></td>
                                            </tr>';
                                        }
                                        echo '</table>';
                                    }
                                    else
                                        echo 'Profile Empty.';
                                    
                                    $conn->close();
                                ?>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <a class="edit-profile" href="MyProfileinfo.php">
                                <br>Edit Profile
                            </a>
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