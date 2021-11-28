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
            <h1 class="display-4">Recipes</h1>
            <h4>This is where we share our secrets!</h4>
            <?php
            if ($_SESSION["loggedIn"] === true) { ?>
                <h5> Share your <a href="newrecipe.php">
                    <button class="button newrecipe">secret</button></a> with us!</h5>
            <?php }
            else { ?>
            <h5> Share your <button class="button button1">secret</button> with us!</h5>
                <div class="modal modal1">
                    <div id="modal-content1">
                        <span class="close close1">&times;</span>
                        <p style="color:black;"><b>Do you want to share your secrets with us?</b></p>
                        <p style="color:black;"><br><b>We are more than welcome to help you release your secrets!</b></p>
                        <p style="color:black;"><br><b>But first, let us login!
                                <br> Shall we?</b></p>
                        <a href="login.php">
                            <button class="btn button2">Log In</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </header>
        
        <!--Food recipes -->    
        <main class="container">
            <section id="Pasta">
                <h2>Pasta</h2>
                <div class="row"> 
                    <article class="col-sm">

                        <figure>                                                                          
                            <img class="img-thumbnail" 
                                 src="images/Mac and Cheese.jpg"
                                 alt="Mac & Cheese"
                                 title="Mac & Cheese"/>                         
                        </figure>
                        <h3>Mac & Cheese</h3>
                        <p style="text-align: justify;"><br> Macaroni and cheese 
                            is a pasta dish made with cooked macaroni 
                            and a cheese sauce, usually cheddar. 
                            Other ingredients, such as breadcrumbs<br>...         
                            <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>
                    
                    <article class="col-sm">
                        <figure>
                            <img class="img-thumbnail" 
                                 src="images/Carbonara.jpg" 
                                 alt="Carbonara"
                                 title="Carbonara"/>
                        </figure>
                        <h3>Carbonara</h3>
                        <p style="text-align: justify;"><br>Carbonara is a pasta 
                            dish prepared with eggs, hard cheese, cured pork, 
                            and black pepper that originated in Rome. 
                            In the middle of the twentieth century<br>...
                                <a class="view-more" href="login.php">
                                    <br>Login to View
                                </a>
                        </p>
                    </article>
                    
                    <article class="col-sm">                
                        <figure>           
                            <img class="img-thumbnail" 
                                 src="images/Lasagna.jpg" 
                                 alt="Lasagna"
                                 title="Lasagna"/>                       
                        </figure>
                        <h3>Lasagna</h3>
                        <p style="text-align: justify;"><br>Lasagna is a form of 
                            pasta made of very wide, flat sheets that is possibly 
                            one of the oldest. Alternatively, either phrase can 
                            refer to an Italian dish consisting of stacked layers 
                            of lasagna alternating with fillings such as ragù <br>...
                            <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>
                </div>
            </section>
            
            <section id="Rice">
            <h2>Rice</h2>
                <div class="row">
                    <article class="col-sm">
                        <figure>
                            <img class="img-thumbnail" 
                                 src="images/Garlic Butter Rice.jpg" 
                                 alt="Garlic Butter Rice"
                                 title="Garlic Butter Rice"/>                                          
                        </figure>
                        <h3>Garlic Butter Rice</h3>
                        <p style="text-align: justify;"><br>This easy Garlic Fried Rice 
                            with Garlic Chips, which is garlicky and buttery, is a 
                            classic recipe that has been cooked many 
                            times over the years. This rice dish is simple to make<br>... 
                           <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>
                    
                    <article class="col-sm">
                        <figure>                        
                            <img class="img-thumbnail" 
                                 src="images/Shrimp Fried Rice.jpg" 
                                 alt="Shrimp Fried Rice"
                                 title="Shrimp Fried Rice"/>                                                   
                        </figure>
                        <h3>Shrimp Fried Rice</h3>
                        <p style="text-align: justify;"><br>In Chinese takeaway restaurants, 
                            shrimp fried rice is always one of the most popular fried rice meals. 
                            Fried rice is typically dark brown in color, due to a combination of dark 
                            and light soy sauce and <br>...
                           <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>

                    <article class="col-sm">
                        <figure>
                            <img class="img-thumbnail" 
                                 src="images/Kimchi Fried Rice.jpg" 
                                 alt="Kimchi Fried Rice"
                                 title="Kimchi Fried Rice"/>                    
                        </figure>
                        <h3>Kimchi Fried Rice</h3>
                        <p style="text-align: justify;"><br>Kimchi fried rice is 
                            a form of Korean Fried Rice that is made almost entirely 
                            with kimchi. A variety of meat and/or vegetables are 
                            frequently added to give it more texture and <br>...
                           <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>
                </div>
            </section>
            
            <section id="Chicken">
                <h2>Chicken</h2>
                <div class="row">
                    <article class="col-sm">
                        <figure>
                            <img class="img-thumbnail" 
                                 src="images/Chicken Adobo.jpg" 
                                 alt="Chicken Adobo"
                                 title="Chicken Adobo"/>                                                                      
                        </figure>
                        <h3>Chicken Adobo</h3>
                        <p style="text-align: justify;"><br>Chicken Adobo is a 
                            Filipino meal cooked by braising chicken legs 
                            (thighs and/or drumsticks) in a vinegar, soy sauce, 
                            garlic, and black pepper sauce. It's tangy, salty, 
                            garlicky, sweet, and <br>...
                           <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>                    
                        </p>
                    </article>

                    <article class="col-sm">
                        <figure>                        
                            <img class="img-thumbnail" 
                                 src="images/Garlic Butter Chicken.jpg" 
                                 alt="Garlic Butter Chicken"
                                 title="Garlic Butter Chicken"/>                                                  
                        </figure>
                        <h3>Garlic Butter Chicken</h3>
                        <p style="text-align: justify;"><br>This warm garlic butter 
                            chicken breast recipe will become a top choice if you're 
                            looking for a quick and simple 15-minute chicken dinner. 
                            It's done in a single skillet, 
                            which makes cleaning a breeze <br>...
                           <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>

                    <article class="col-sm">
                        <figure>                       
                            <img class="img-thumbnail" 
                                 src="images/Mediterranean Chicken Skillet.jpg" 
                                 alt="Mediterranean Chicken"
                                 title="Mediterranean Chicken"/>
                        </figure>
                        <h3>Mediterranean Chicken</h3>
                        <p style="text-align: justify;"><br>This Mediterranean chicken is made 
                            with sun-dried tomatoes, capers, roasted artichoke hearts, which is served 
                            with a creamy lemon sauce. They are quite simple to make <br>...
                           <a class="view-more" href="login.php">
                                <br>Login to View
                            </a>
                        </p>
                    </article>
                </div>
            </section>
        </main>
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
    </body>
    
</html>