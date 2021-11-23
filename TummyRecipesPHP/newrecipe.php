<!DOCTYPE html>

<html lang="en">
    
    <!-- Head -->
    
    <title>Create New Recipe</title>
    
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
                    <input class="form-control" type="text" id="rTitle" name="rTitle" required placeholder="Enter recipe title">
                </div>
                <div class="form-group">
                    <p>Total time taken</p>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <label for="hours">Hours:</label>
                            <input class="form-control" type="number" id="hours" name="hours" required value="0">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="minutes">Minutes:</label>
                            <input class="form-control" type="number" id="minutes" name="minutes" required value="0">
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
                    <button class="btn btn-info" type="submit">Submit</button>
                </div>
            </form>
            
        </main> 
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
    
</html>