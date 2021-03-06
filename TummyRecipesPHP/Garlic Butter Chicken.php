<?php
    session_start();
?>

<!doctype html>

<html lang="en">
    
    <!-- Head -->
    <?php
    include "head.inc.php";
    ?>

    <body>
        
        <!-- Navbar-->
        <?php
        include "nav.inc.php";
        ?>

        <main class="container">
            <br>
            <h1 style="text-align: center;"><b>Garlic Butter Chicken</b></h1>
            <h5 style="text-align: center;">Created by John Tan</h5>
            
            <div class="Garlic Butter Chicken">
                <a>
                    <p style="text-align: center;"><img src="images/Garlic Butter Chicken.jpg" 
                                                        style="border-radius: 50%; width: 300px;" 
                                                        alt="Garlic Butter Chicken"></p>  
                </a>
                
                <p style="font-size:25px"><b><u>Duration</u></b></p>
                <h5>2 hours, 10 minutes </h5>
                
                <p style="font-size: 25px"><b><u>Ingredients</u></b></p>
                <h5>- 4 (16-ounces) boneless skinless chicken breasts </h5>
                <h5>- salt and fresh ground pepper</h5>
                <h5>- 1 stick (1/2-cup) butter</h5>
                <h5>- 6 cloves garlic , minced</h5>
                <h5>- 1 tablespoon fresh rosemary leaves</h5>
                <h5>- 1/2 cup Shredded Cheese </h5>
                <br>
                <br>
                <p style="font-size: 25px"><b><u>Instructions</u></b></p>
                <h5>1. Preheat oven to 375F.</h5>
                <h5>2. Lightly grease a baking dish with a pat of butter.</h5>
                <h5>3. Season chicken breasts with salt and pepper; 
                    arrange chicken in a single layer in prepared baking dish and set aside.</h5>
                <h5>4. Add butter to a skillet and melt over medium heat.</h5>
                <h5>5. Stir in garlic and cook over medium heat for 4 to 5 minutes, or until lightly browned, 
                    stirring very frequently. DO NOT burn the garlic.</h5>
                <h5>6. Stir in the rosemary and remove from heat.</h5>
                <h5>7. Pour the prepared garlic butter over the chicken breasts.</h5>
                <h5>8. Bake for 30 to 32 minutes, or until chicken's internal temperature is 165F.</h5>
                <h5>9. Sprinkle with cheese and cook for an additional 3 minutes, or until cheese is melted.</h5>
                <h5>10. Remove from oven and let stand a couple minutes.</h5>
                <h5>11. Transfer chicken to serving plates; 
                    spoon a little bit of the garlic butter sauce over the chicken and serve.</h5>
                <br>
                <br>
            </div>
            
            <?php
            include "Display_Comment_Garlic_Butter_Chicken.php";
            ?>
            
        </main>
        
        <?php
        include "Comment_Garlic_Butter_Chicken.php";
        ?>
        
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
</html>