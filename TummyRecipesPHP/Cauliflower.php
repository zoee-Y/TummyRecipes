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
            <h1 style="text-align: center;"><b>Cauliflower Risotto</b></h1>
            <div class="cauliflower">
                <a>
                    <p style="text-align: center;"><img src="images/cauliflower.jpg" 
                                                        style="border-radius: 50%; width: 300px;" 
                                                        alt="Cauli"></p>
                </a>
                <p style="font-size: 25px"><b><u>Ingredients</u></b></p>
                <h5>- 2 heads cauliflower, broken into florets</h5>
                <h5>- 2 tablespoons extra-virgin olive oil</h5>
                <h5>- 3 cloves garlic, thinly sliced 1 1/2 cups vegetable stock</h5>
                <h5>- 3 tablespoons grated Parmesan cheese</h5>
                <h5>- 1/4 cup chopped chives</h5>
                <br>
                <br>
                <p style="font-size: 25px"><b><u>Instructions</u></b></p>
                <h5>1. In a food processor, pulse the cauliflower florets 8 to 10 times, 
                    until it resembles small grains of rice.</h5>
                <h5>2. Heat the olive oil in a large skillet over medium heat. 
                    Add the garlic and sweat until translucent, about 4 minutes.</h5>
                <h5>3. Add the cauliflower and vegetable stock and cook until the cauliflower is softened and 
                    enough liquid has evaporated to make the mixture creamy, about 10 minutes.</h5>
                <h5>4. Stir in the Parmesan and let sit 5 minutes to thicken. Finish by stirring in the chives.</h5>
                <br>
                <br>
            </div>
        </main>
        
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
</html>