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
        
        <!--Main Content-->
        <main class="container">
            <h1>Create new recipe</h1>
            
            <form action="process_newrecipe.php" method="post">
                <div class="form-group">
                    <label for="rTitle">Recipe Title:</label>
                    <input class="form-control" type="text" id="rTitle" name="rTtile" required placeholder="Enter recipe title">
                </div>
                <div class="form-group">
                    <p>Total time taken</p>
                    <label for="hours">Hours:</label>
                    <input class="form-control" type="number" id="hours" name="hours" required value="0">
                    <label for="minutes">Minutes:</label>
                    <input class="form-control" type="number" id="minutes" name="minutes" required value="0">
                </div>
                <div class="form-group">
                    <label for="ingredients">Ingredients:</label>
                    <input class="form-control" type="text" id="ingredients" name="ingredients" required placeholder="1 cup milk ...">
                    <button class="btn btn-outline-primary">Add new ingredient</button>
                </div>
                <div class="form-group">
                    <label for="step">Steps:</label>
                    <input class="form-control" type="text" id="instr" name="step" required placeholder="1. Add flour to mixing bowl ...">
                    <button class="btn btn-outline-primary">Add new step</button>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
            
        </main> 
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
    
</html>