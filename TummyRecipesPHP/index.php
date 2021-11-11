<!DOCTYPE html>

<html lang="en">
    
    <head>
    <meta charset= UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Material Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
    <!-- Remixicon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
           href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
           integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
           crossorigin="anonymous">
            
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Css/navbar_footer.css">
    <link rel="stylesheet" href="Css/mainpage.css">

    <!--jQuery-->
    <script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>

    <!--Bootstrap JS-->
    <script defer
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
        crossorigin="anonymous">
    </script>

    <!-- Custom JS -->
    <script defer src="js/main.js"></script>

    <title>Tummy Recipes</title>
    </head>
    
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
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="first">
                                <a class ="" href="#">
                                    <!-- Product page -->
                                    <img src="images/cauliflower.jpg" width="220" class="card-img-top" alt="Cauli">
                                    <h3><br>Cauliflower Risotto </h3>
                                </a>
                                <p>
                                    <b class="card-text">Ingredients: </b>
                                    <br>
                                    1 head cauliflower (riced coarsely), 
                                    1 lb crimini mushrooms (sliced), 3 tbsp butter (divided), 
                                    2 tbsp olive oil (divided), 
                                    1 large sweet onion (diced to ½"), ...
                                </p>
                                <p>
                                    <b class="card-text">Instructions: </b>
                                    <br>
                                    1. Rice the cauliflower. Divide the cauliflower into florets, 
                                    then place ⅓ of the florets into the bowl of a food processor. Pulse 15-20 times, 
                                    or until coarse rice-like grains form. Scrape the rice into a bowl and repeat with the remaining florets. 
                                    <br><br>
                                    2. Heat a large deep skillet or dutch oven over medium high heat; 
                                    add 1 tbsp butter and 1 tbsp olive oil until the butter melts then foams. Add the mushrooms, 
                                    toss to coat in the fat, and saute, tossing occasionally. 
                                    Saute until the mushrooms release their water content and are golden brown around the edges, 
                                    about 15 minutes....
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="second">
                                <a class ="" href="">
                                    <!-- Product page -->
                                    <img src="https://stickershop.line-scdn.net/stickershop/v1/product/718/LINEStorePC/main.png;compress=true" width="220" class="card-img-top" alt="Cauli">
                                    <h3><br>Title </h3>
                                </a>
                                <p>
                                    <b class="card-text">Ingredients: </b>
                                </p>
                                <p>
                                    <b class="card-text">Instructions: </b>
                                    <br>
                                    1.  
                                    <br><br>
                                    2. ....
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="third">
                                <a class ="" href="">
                                    <!-- Product page -->
                                    <img src="https://st1.bollywoodlife.com/wp-content/uploads/2020/09/FotoJet382.jpg" width="220" class="card-img-top" alt="Cauli">
                                    <h3><br>Title </h3>
                                </a>
                                <p>
                                    <b class="card-text">Ingredients: </b>
                                </p>
                                <p>
                                    <b class="card-text">Instructions: </b>
                                    <br>
                                    1.  
                                    <br><br>
                                    2. ....
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="card">
                            <div class="fourth">
                                <a class ="" href="">
                                    <!-- Product page -->
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeIZJVGuWZGIjpzHLVH6SKkipEmXi_3EVuWRzQay-BNo_w5qfruBCllQqeKh-NdKW9aSY&usqp=CAU" height="270" class="card-img-top" alt="Cauli">
                                    <h3><br>Title </h3>
                                </a>
                                <p>
                                    <b class="card-text">Ingredients: </b>
                                </p>
                                <p>
                                    <b class="card-text">Instructions: </b>
                                    <br>
                                    1.  
                                    <br><br>
                                    2. ....
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
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