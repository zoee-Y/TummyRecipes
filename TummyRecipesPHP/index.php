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
            <br>
            <h1 class="display-4">Welcome To Tummy Recipes</h1>
            <h4>We Fill In Our Recipes To Fill In Your Tummies!</h4>
        </header>
        
        <!--Main Content-->
        <main class="container">
            <!--4 Images-->
            <section id="latest">
                <h2>Latest Recipes</h2>
                <br>
                <div class="row">
                    <article class="col col-sm-3"> 
                        <a class ="" href="recipe.php">
                            <!-- Product page -->
                            <figure>
                                <img src="images/cauliflower.jpg" width="250" class="img-thumbnail" alt="Cauli">
                            </figure>
                            <h3><br> Cauliflower Risotto </h3>
                        </a>
                        <p>
                            <b>Ingredients: </b>
                            <br>
                            2 heads cauliflower, broken into florets, 
                            2 tablespoons extra-virgin olive oil, 
                            3 cloves garlic, thinly sliced 1 1/2 cups vegetable stock, 
                            ...
                        </p>
                        <p>
                            <b>Instructions: </b>
                            <br>
                            1. In a food processor, pulse the cauliflower florets 8 to 10 times, until it resembles small grains of rice. 
                            <br><br>
                            2. Heat the olive oil in a large skillet over medium heat. Add the garlic and sweat until translucent, about 4 minutes...
                            <br>
                            <a class="view-more" href="Food Recipes/Cauliflower.php">View More</a>
                        </p>       
                    </article>
                    
                    <article class="col col-sm-3">
                        <a class ="" href="recipe.php">
                            <!-- Product page -->
                            <figure>
                                <img src="images/Carbonara.jpg" width="250" class="img-thumbnail" alt="Carbonara">
                            </figure>
                            <h3><br> Carbonara </h3>
                        </a>
                        <p>
                            <b>Ingredients: </b>
                            <br>
                            Salt, 
                            2 large eggs and 2 large yolks (room temperature),
                            1 ounce (about 1/3 packed cup) grated pecorino Romano, plus additional for serving, 
                            ...
                        </p>
                        <p>
                            <b>Instructions: </b>
                            <br>
                            1. Place a large pot of lightly salted water (no more than 1 tablespoon salt) over high heat, 
                            and bring to a boil. Fill a large bowl with hot water for serving, and set aside.  
                            <br><br>
                            2. In a mixing bowl, whisk together the eggs, yolks and pecorino and Parmesan. Season with a pinch of salt and ...
                            <br>
                            <a class="view-more" href="Food Recipes/Carbonara.php">View More</a>
                        </p>
                    </article>
                    <article class="col col-sm-3">
                        <a class ="" href="recipe.php">
                            <!-- Product page -->
                            <figure>
                                <img src="images/Chicken Adobo.jpg" width="250" class="img-thumbnail" alt="Chicken Adobo">
                            </figure>
                            <h3><br> Chicken Adobo </h3>
                        </a>
                        <p>
                            <b>Ingredients: </b>
                            <br>
                            1 tablespoon (15ml) canola oil or other neutral oil,
                            4 bone-in, skin-on chicken legs, separated into thighs and drumsticks (about 2 1/2 pounds; 1.15kg,
                            Kosher salt, 
                            ...
                        </p>
                        <p>
                            <b>Instructions: </b>
                            <br>
                            1. In a heavy-bottomed pot or Dutch oven, heat oil over medium heat until shimmering. 
                            Blot chicken dry with paper towels, then season lightly all over with salt.  
                            <br><br>
                            2. Working in batches if necessary, add chicken pieces to pot in a single layer, skin ...
                            <br>
                            <a class="view-more" href="Food Recipes/Chicken Adobo.php">View More</a>
                        </p>
                    </article>
                    
                    <article class="col col-sm-3">
                        <a class ="" href="recipe.php">
                            <!-- Product page -->
                            <figure>
                                <img src="images/Mac and Cheese.jpg" width="250" class="img-thumbnail" alt="Mac n Cheese">
                            </figure>
                            <h3><br> Mac & Cheese </h3>
                        </a>
                        <p>
                            <b>Ingredients: </b>
                            <br>
                            250g / 8 oz macaroni,
                            1 tbsp (15g) unsalted butter,
                            2/3 cup breadcrumbs,
                            ...
                        </p>
                        <p>
                            <b>Instructions: </b>
                            <br>
                            1.  Bring a large pot of water to the boil. Add macaroni and cook per packet directions MINUS 1 minute.
                            <br><br>
                            2. Drain, return pasta to pot, add butter and toss until melted. Set aside to cool while making the sauce ...
                            <br>
                            <a class="view-more" href="Food Recipes/Mac and Cheese.php">View More</a>
                        </p>
                    </article>
                </div>       
            </section>
            <!-- Modal -->
            <br>
        </main> 
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
    
</html>