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
                
                $config = parse_ini_file('../../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'],
                        $config['password'], $config['dbname']);

                // Check connection
                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                } else {
                    
                    $query_recipe = "SELECT * FROM tummy_recipes_recipes WHERE email='{$_SESSION['email']}' ";
                    $query_reps = mysqli_query($conn, $query_recipe);
                    $result_recipes = mysqli_num_rows($query_reps);
                    
                    if ($result_recipes > 0) {
                        while ($row = mysqli_fetch_assoc($query_reps)) {
                            
                            $imgThumb = $row['imgThumbnail'];
                            $foodTitle = $row['rTitle'];
                            $hours = $row['hours'];
                            $minutes = $row['minutes'];
                            $ingredients = $row['ingredients'];
                            $steps = $row['steps'];
                            
                            echo "<div class='row justify-content-around'>";
                            echo "<div class='row-sm'>";
                            echo "<article class='col-sm'>";
                            echo "<figure>";
                            
                            // Thumbnail and Recipe Title as Button
                            echo "<button class='recipeInfo'>";
                            echo "<p class='recipeTog' style='text-align: center;'>";
                            echo "<img src='". $imgThumb ."' style='border-radius: 50%; width: 200px;' alt='".$row["rTitle"]."'>";
                            echo "<h4 style='text-align: center;'>". $foodTitle ."</h4>";
                            echo "</p>";
                            echo "</button>";
                            echo "</figure>";
                            
                            // Duration Output
                            echo "<h4>";
                            echo "<p class='recipeTog'><b><u>Duration</u></b></p>";
                            echo "</h4>";
                            if ($hours > 0) {
                                echo "<h6><p class='recipeTog'>". $hours ." hour(s)";
                                if ($minutes > 0) {
                                    echo " ". $minutes ." minutes.</p></h6>";
                                }
                            }
                            else if ($minutes > 0) {
                                echo "<h6><p class='recipeTog'>". $minutes ." minutes</p></h6>";
                            }
                            echo "<br>";
                            echo "<br>";
                            
                            // Ingredients output
                            echo "<h4>";
                            echo "<p class='recipeTog'><b><u>Ingredients</u></b></p>";
                            echo "</h4>";
                            $uns = unserialize($ingredients);

                            for ($i = 0; $i < count($uns); $i++) {
                                echo "<h6><p class='recipeTog'>". $uns[$i] ."</p></h6>";
                            }
                            echo "<br>";
                            echo "<br>";
                            
                            // Instructions Output (Steps)
                            echo "<h4>";
                            echo "<p class='recipeTog'><b><u>Instructions</u></b></p>";
                            echo "</h4>";
                            $unsS = unserialize($steps);

                            for ($i = 0; $i < count($unsS); $i++) {
                                echo "<h6><p class='recipeTog'>". $unsS[$i] ."</p></h6>";
                            }
                            echo "<br>";
                            echo "<br>";
                            echo "</article>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                    else {
                        echo "<h4>You have Not Uploaded Any Recipes Yet! Share your recipes Now!</h4>";
                    }
                    $query_reps->close();
                }
                $conn->close();
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