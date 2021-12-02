<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    
    <!-- Head -->
    <?php
    include "head.inc.php";
    ?>
    
    <title>Create New Recipe</title>
    
    <?php
    include "head.inc.php";
    ?>
    
    <link rel="stylesheet" href="css/newrecipe.css"/>
    <script defer src="js/newrecipe.js"></script>
    
    <body>
        <!-- Navbar-->
        <?php
        include "nav.inc.php";
        ?>
               
        <!--Main Content-->
        <main class="container">
            <h1 class="display-4">Create New Recipe</h1>            
            <?php
            /*
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'],
                    $config['password'], $config['dbname']);

            // Check connection
            if ($conn->connect_error) {
                echo "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                echo "no connection error";
                //view in normal (asc) order
                //$result =  $conn->query("SELECT * FROM tummy_recipes_recipes");
                //view in descending recipe_id order (newest first)
                $result =  $conn->query("SELECT * FROM tummy_recipes_recipes ORDER BY recipe_id DESC");
                echo "<p>$result->num_rows</p>";
            }
            
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<img src='" . $row['imgThumbnail'] . "' >";
                echo "<p>".$row['imgThumbnail']."</p>";
                echo "</div>";
            }
            */
            
            // for future reference, getting elements from unserialized array (ingredients and steps
            /*print_r($ingredients);
            $uns = unserialize($ingredients);
            for ($i = 0; $i < count($uns); $i++) {
                echo "<p>$uns[$i]</p>";
            }*/
            
            ?>
            
            <?php
            if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] === false) {
                echo "<h2>This page is not meant to run directly.</h2>";
                echo "<p>Log in in order to post recipes!</p>";
                echo "<a href='login.php' class='btn btn-danger'>Go to Login page...</a>";
                exit();
            }
            ?>
            
            <form action="process_newrecipe.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="rTitle">Recipe Title:</label>
                    <?php
                    if (!empty($_SESSION["rTitle"]) || $_SESSION["rTitle"] != "") { ?>
                        <input class="form-control" type="text" id="rTitle" name="rTitle" required value="<?php echo $_SESSION["rTitle"]?>">
                    <?php }
                    else { ?>
                        <input class="form-control" type="text" id="rTitle" name="rTitle" required placeholder="Enter recipe title">
                    <?php }?>
                </div>
                <div class="form-group">
                    <p>Total time taken</p>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="hours">Hours:</label>
                            <?php
                                if (!empty($_SESSION["hours"]) || $_SESSION["hours"] != "") { ?>
                                    <input class="form-control" type="number" id="hours" min="0" max="24" name="hours" required value="<?php echo $_SESSION["hours"]?>">
                                <?php }
                                else { ?>
                                    <input class="form-control" type="number" id="hours" min="0" max="24" name="hours" required value="0">
                                <?php } ?>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="minutes">Minutes:</label>
                            <?php
                                if (!empty($_SESSION["minutes"]) || $_SESSION["minutes"] != "") { ?>
                                    <input class="form-control" type="number" id="minutes" min="0" max="59" name="minutes" required value="<?php echo $_SESSION["minutes"]?>">;
                                <?php }
                                else { ?>
                                    <input class="form-control" type="number" id="minutes" min="0" max="59" name="minutes" required value="0">
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingredients: (separated by enter/return key)</label>
                    <?php
                        if (!empty($_SESSION["ingredients"]) || $_SESSION["ingredients"] != "") {
                            $uns = unserialize($_SESSION["ingredients"]);
                            
                            echo '<textarea class="form-control" type="text" id="ingredients" name="ingredients" required>'; 
                                    
                            for ($i = 0; $i < count($uns); $i++) {
                                echo "$uns[$i]\n";
                            }
                            
                            echo '</textarea>';
                        }
                        else {
                            echo '<textarea class="form-control" type="text" id="ingredients" name="ingredients" required placeholder="1 cup milk ..."></textarea>';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="step">Steps: (separated by enter/return key)</label>
                    <?php
                        
                        if (!empty($_SESSION["steps"]) || $_SESSION["steps"] != "") {
                            $unsS = unserialize($_SESSION["steps"]);
                            
                            echo '<textarea class="form-control" type="text" id="steps" name="steps" required>'; 
                                    
                            for ($i = 0; $i < count($unsS); $i++) {
                                echo "$unsS[$i]\n";
                            }
                            
                            echo '</textarea>';
                        }
                        else {
                            echo '<textarea class="form-control" type="text" id="steps" name="steps" required placeholder="1 cup milk ..."></textarea>';
                        }
                    ?>
                </div>
                <div class="form-group">
                    <label for="imgThumbnail">Upload a thumbnail for your recipe:<br></label>
                    <input type="file" id="imgThumbnail" name="imgThumbnail">
                </div>
                <div class="form-group">
                    <button class="btn btn-info" type="submit" id="submitBtn">Submit</button>
                </div>
            </form>
            
        </main> 
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
    
</html>