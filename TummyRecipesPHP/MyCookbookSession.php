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
                            $hours = $row['hours'];
                            $minutes = $row['minutes'];
                            $ingredients = $row['ingredients'];
                            $steps = $row['steps'];
                            
                            echo "<div class='row justify-content-around'>";
                            echo "<div class='row-sm'>";
                            echo "<article class='col-sm'>";
                            // echo "<a href ='MyCookbookSession.php#".$row['recipe_id'].";'>";
                            echo "<button class='recipeInfo'>";
                            echo "<figure>";
                            echo "<p style='text-align: center;'>";
                            echo "<img src='".$row["imgThumbnail"]."' style='border-radius: 50%; width: 200px;' alt='".$row["rTitle"]."'>";
                            echo "<h4 style='text-align: center;'>" . $row['rTitle'] . "</h4>";
                            echo "</p>";
                            echo "</figure>";
                            echo "</button>";
                            echo "<p class='recipeTog'>";
                            echo "<p style='font-size: 15px'>";
                            echo "<h4>";
                            echo "<b><u>Duration</u></b>";
                            echo "</p>";
                            echo "</h4>";
                            echo "<h6>";
                            if ($hours > 0) {
                                echo "<h6>". $hours ." hour(s)";
                                if ($minutes > 0) {
                                    echo " ". $minutes ." minutes.</h6>";
                                }
                            }
                            else if ($minutes > 0) {
                                echo "$minutes minutes";
                            }
                            echo "</h6>";
                            echo "<br>";
                            echo "<br>";
                            echo "<p style='font-size: 15px'>";
                            echo "<h4>";
                            echo "<b><u>Ingredients</u></b>";
                            echo "</h4>";
                            echo "</p>";
                            echo "<h6>";
                            $uns = unserialize($ingredients);

                            for ($i = 0; $i < count($uns); $i++) {
                                echo "<h6>$uns[$i]</h6>";
                            }
                            echo "</h6>";
                            echo "<br>";
                            echo "<br>";
                            echo "<p style='font-size: 15px'>";
                            echo "<p style='font-size: 15px'>";
                            echo "<h4>";
                            echo "<b><u>Instructions</u></b>";
                            echo "</h4>";
                            echo "</p>";
                            echo "<h6>";
                            $unsS = unserialize($steps);

                            for ($i = 0; $i < count($unsS); $i++) {
                                echo "<h6>$unsS[$i]</h6>";
                            }
                            echo "</h6>";
                            echo "</p>";
                            echo "<br>";
                            echo "<br>";
                            //include "Display_Comment_Carbonara.php";
                            echo "</article>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
                    else {
                        echo "<h4>You have Not Uploaded Any Recipes Yet! Share your recipes Now!</h4>";
                        echo "<p align='center'>";
                        // echo "<h4><a href='newrecipe.php' class='btn btn-success'>Add New Recipe!</a></h4>";
                        echo "</p>";
                        // exit();
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