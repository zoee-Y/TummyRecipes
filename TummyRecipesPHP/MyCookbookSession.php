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
            <h1 class="display-4">My Cookbook</h1>
            <h4>This is where you save your secrets!</h4>
        </header>
        
        <main class="container"> 
            <br>
            <?php
                if (isset($_SESSION['member']))
                {
                    $config = parse_ini_file('../../private/db-config.ini');
                    $conn = new mysqli($config['servername'], $config['username'],
                    $config['password'], $config['dbname']);

                    // Check connection
                    if ($conn->connect_error) {
                        $errorMsg = "Connection failed: " . $conn->connect_error;
                        $success = false;
                    } else {

                        $query_recipe = "SELECT * FROM tummy_recipes_recipes WHERE email='{$_SESSION['viewRemail']}' ";
                        $query_reps = mysqli_query($conn, $query_recipe);
                        $result_recipes = mysqli_num_rows($query_reps);

                        if ($result_recipes > 0) {
                            while ($row = mysqli_fetch_assoc($query_reps)) {

                                    echo "<div class='row justify-content-around'>";
                                    echo "<div class='row-sm'>";
                                    echo "<article class='col-sm'>";
                                    echo "<a href ='recipedetails.php#".$row['recipe_id'].";'>";
                                    echo "<figure>";
                                    echo "<p style='text-align: center;'>";
                                    echo "<img src='".$row["imgThumbnail"]."' style='border-radius: 50%; width: 200px;' alt='".$row["rTitle"]."'>"; 
                                    echo "</p>";
                                    echo "</figure>";
                                    echo "<h4>".$row["rTitle"]."</h4>";
                                    echo "</a>";
                                    echo "</article>";
                                    echo "</div>";
                                    echo "</div>";
                                    exit();
                                }
                        }
                        else {
                            echo "<h4>You have Not Uploaded Any Recipes Yet! Share your recipes Now!</h4>";
                            echo "<p align='center'>";
                            echo "</p>";
                        }
                        $query_reps->close();
                    }
                    $conn->close();
                }
            ?>
            <div>
                <!-- Create New Recipe -->
                <p align="center">
                    <a class="new-recipe" href="newrecipe.php">
                    <br><h4>Add More Recipes</h4></a>
                </p>
            </div>

        </main> 
        <!--Footer-->
        <?php
           include "footer.inc.php";
        ?>
    </body>
</html>