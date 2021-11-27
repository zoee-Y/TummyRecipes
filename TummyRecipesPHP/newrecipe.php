<!DOCTYPE html>

<html lang="en">
    
    <!-- Head -->
    
    <title>Create New Recipe</title>
    
    <?php
    include "head.inc.php";
    ?>
    
    <link rel="stylesheet" href="css/newrecipe.css"/>
    <script defer src="js/newrecipe.js"></script>
    
    <body>
        <!-- Session Navbar-->
        <?php
        include "session.inc.php";
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
                $result =  $conn->query("SELECT * FROM tummy_recipes_recipes");
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
            
            <form action="process_newrecipe.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="rTitle">Recipe Title:</label>
                    <input class="form-control" type="text" id="rTitle" name="rTitle" required placeholder="Enter recipe title">
                </div>
                <div class="form-group">
                    <p>Total time taken</p>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="hours">Hours:</label>
                            <input class="form-control" type="number" id="hours" max="24" name="hours" required value="0">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="minutes">Minutes:</label>
                            <input class="form-control" type="number" id="minutes" max="59" name="minutes" required value="0">
                            </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingredients: (separated by enter/return key)</label>
                    <textarea class="form-control" type="text" id="ingredients" name="ingredients" required placeholder="1 cup milk ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="step">Steps: (separated by enter/return key)</label>
                    <textarea class="form-control" type="text" id="steps" name="steps" required placeholder="1. Add flour to mixing bowl ..."></textarea>
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