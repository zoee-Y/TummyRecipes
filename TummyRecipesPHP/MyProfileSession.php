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
                                    $query_profile = "SELECT fname, lname, description, pphoto, email FROM tummy_recipes_members WHERE member_id = '{$_SESSION['member']}' ";
                                                                       
                                    // Prepare the Query
                                    $pquery = $conn->query($query_profile);
                                    
                                    if ($pquery->num_rows > 0)
                                    {
                                        while ($row = $pquery->fetch_assoc())
                                        {
                                            if (isset($_SESSION["member"]))
                                            {
                                                if ($row['pphoto'] == true)
                                                {
                                                    echo "<h7><img src='".$row['pphoto']."' alt='profilephoto' height='200px' width='200px'/></h7>";
                                                    echo '<br>';
                                                }
                                                else
                                                {
                                                    echo '<figure><img class="profilepic"src="images/profile pic.jpg"/></figure>';
                                                }
                                                
                                                // Display the User's details
                                                echo '<h7>Name: '.$row['fname'].' '.$row['lname'].'</h7>';
                                                echo '<br>';
                                                echo '<h7>Email: '.$row['email'].'</h7>';
                                                echo '<br>';
                                                echo '<h7>Description: '.$row['description'].'</h7>';
                                                echo '<br>';
                                            }
                                            
                                        }
                                    }
                                    else 
                                    {
                                        echo '<figure><img class="profilepic"src="images/profile pic.jpg"/></figure>';
                                        echo "<h7>Name: </h7>";
                                        echo "<br>";
                                        echo "<h7>Email: </h7>";
                                        echo "<br>";
                                        echo "<h7>Description: </h7>";
                                        echo '<br>';
                                    }
                                    $conn->close();
                                ?>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <a class="edit-profile" href="MyProfileinfo.php">
                                <br><h7>Edit Profile</h7>
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