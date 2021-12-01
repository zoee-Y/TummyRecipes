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
            <h1 style="text-align: center;"><b>Mediterranean Chicken Skillet</b></h1>
            <div class="Mediterranean Chicken Skillet">
                <a>
                    <p style="text-align: center;"><img src="images/Mediterranean Chicken Skillet.jpg" 
                                                        style="border-radius: 50%; width: 300px;"
                                                        alt="Mediterranean Chicken Skillet"></p>  
                </a>
                <p style="font-size: 25px"><b><u>Ingredients</u></b></p>
                <h5>- 4 (6 ounce) bone-in, skin-on chicken thighs </h5>
                <h5>- 1/4 cup fresh lemon juice, plus more for serving</h5>
                <h5>- 3 cloves garlic, minced</h5>
                <h5>- 1 tablespoon chopped fresh rosemary</h5>
                <h5>- 2 teaspoons chopped fresh oregano, plus more for garnish</h5>
                <h5>- 1/2 teaspoon crushed fennel seeds</h5>
                <h5>- 3 tablespoons extra-virgin olive oil, divided</h5>
                <h5>- 1/2 teaspoon salt</h5>
                <h5>- 1/2 teaspoon ground pepper</h5>
                <h5>- 1 large red onion, sliced (1/4-inch)</h5>
                <h5>- 1 pint cherry tomatoes</h5>
                <h5>- 1 cup uncooked orzo</h5>
                <h5>- 1/3 cup pitted Kalamata olives</h5>
                <h5>- 1 1/2 cups unsalted chicken broth</h5>
                <h5>- Chopped fresh flat-leaf parsley for garnish</h5>
                <br>
                <br>
                <p style="font-size: 25px"><b><u>Instructions</u></b></p>
                <h5>1. Combine chicken, lemon juice, garlic, rosemary, oregano, fennel seeds and 
                    2 tablespoons oil in a large zip-top plastic bag. Seal the bag; refrigerate for 25 to 30 minutes.</h5>
                <h5>2. Remove the chicken from the marinade and pat dry (discard marinade). 
                    Sprinkle the chicken evenly with salt and pepper. 
                    Heat the remaining 1 tablespoon oil in a 10-inch cast-iron skillet over medium-high heat. 
                    Arrange the chicken, skin-side down, in the pan; cook, undisturbed, until browned and crispy, about 7 minutes. Flip and cook until browned on other side, about 4 minutes. Transfer to a plate. (The chicken will not be cooked through.) Do not wipe the pan clean.</h5>
                <h5>3. Add onion and tomatoes to the pan; cook over medium-high heat, stirring occasionally, 
                    until the onion is charred and the tomatoes are blistered, about 5 minutes.</h5>
                <h5>4. Preheat oven to broil with rack in center position. Add orzo and olives to the mixture in the skillet; 
                    stir to combine. Stir in broth. Bring to a boil over medium-high heat. 
                    Reduce heat to medium-low and nestle the chicken, skin side up, into the mixture. 
                    Cover and simmer over medium-low heat until the orzo is al dente and 
                    a thermometer inserted into the thickest portion of chicken registers 165°F, 14 to 15 minutes.</h5>
                <h5>5. Remove from heat; let stand, covered, for 5 minutes. 
                    Uncover and broil until the chicken skin is crisp, 2 to 3 minutes. 
                    Garnish with parsley, oregano and a squeeze of lemon juice, if desired. Serve immediately.</h5>
                <br>
                <br>
            </div>
            
            <?php
            include "Display_Comment_Chicken_Skillet";
            ?>
            
        </main>
        
        <?php
        include "Comment_Chicken_Skillet";
        ?>
        
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
</html>