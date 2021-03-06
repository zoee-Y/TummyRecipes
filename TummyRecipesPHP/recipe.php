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
                    <button class="button button1">secret</button></a> with us!</h5>
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
                        <p style="text-align: justify;"><br> Macaroni and cheese is a pasta dish made with cooked macaroni 
                            and a cheese sauce, usually cheddar. 
                            Other ingredients, such as breadcrumbs or meat, can be added.
                            <br><br>
                            Traditional macaroni and cheese is baked in a casserole, 
                            but it can also be made in a sauce pan on the stovetop or using a prepackaged mix. 
                            The cheese is usually mixed with a B??chamel sauce to make a Mornay sauce 
                            before being put to the pasta. It is considered a comfort dish in the United States.
                            <a class="view-more" href="Mac and Cheese.php">
                                <br>Press me for Recipes!
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
                        <p style="text-align: justify;"><br>Carbonara is a pasta dish prepared with eggs, 
                            hard cheese, cured pork, and black pepper that originated in Rome. 
                            In the middle of the twentieth century, the dish took on its modern form, 
                            with its current name.
                            <br><br>
                            Pecorino Romano, Parmigiano-Reggiano, or a blend of the two is usually used. 
                            The most prevalent pasta is spaghetti, but fettuccine, rigatoni, linguine, 
                            and bucatini are also popular. The meat component is usually guanciale or pancetta, 
                            but lardons of smoked bacon are a popular replacement outside of Italy.
                            <a class="view-more" href="Carbonara.php">
                                    <br>Press me for Recipes!
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
                        <p style="text-align: justify;"><br>Lasagna is a form of pasta made of very wide, 
                            flat sheets that is possibly one of the oldest. Alternatively, either phrase can 
                            refer to an Italian dish consisting of stacked layers of lasagna alternating with 
                            fillings such as rag?? (ground meats and tomato sauce), vegetables, cheeses 
                            (including ricotta, mozzarella, and parmesan), and seasonings and spices such as garlic, 
                            oregano, and basil.
                            <br><br>
                            Grated cheese, which melts after baking, can be sprinkled on top of the dish. 
                            Cooked pasta is usually mixed with the remaining ingredients and baked in the oven. 
                            The casserole is then divided into single-serving square portions.
                            <a class="view-more" href="Lasagna.php">
                                <br>Press me for Recipes!
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
                        <p style="text-align: justify;"><br>This easy Garlic Butter Rice with Garlic Chips, 
                            which is garlicky and buttery, is a classic recipe that has been cooked many 
                            times over the years. This fried rice goes perfectly with a tasty side dish 
                            like juicy grilled prawns. This rice dish is simple to make, quick to cook, 
                            and extremely tasty and delicious.
                            <br><br>
                            It is a great home-cooked supper with a salad and meat, seafood, or other protein 
                            dishes on the side to keep us well and going on those long study evenings.
                            <a class="view-more" href="Garlic Butter Rice.php">
                                <br>Press me for Recipes!
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
                            and light soy sauce and thick soy sauce, or yellow in color, 
                            due to the use of food coloring as a color agent, giving fried rice its recognizable 
                            light yellow tint.
                            <br><br>
                            While some use a combination of soy sauces and turmeric to generate a natural color and 
                            flavor balance that somehow manages to make the rice taste even better!
                            <a class="view-more" href="Shrimp Fried Rice.php">
                                <br>Press me for Recipes!
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
                        <p style="text-align: justify;"><br>Kimchi fried rice is a form of Korean 
                            Fried Rice that is made almost entirely with kimchi. A variety of meat and/or 
                            vegetables are frequently added to give it more texture and flavor.
                            <br><br>
                            Bacon and mushrooms are commonly used in kimchi fried rice (particularly 
                            enoki mushrooms). The bacon adds a lovely smokey taste to the meal, 
                            while the enoki mushrooms add a nice crunch. Along with Kimchi jjigae (Kimchi stew) 
                            and Kimchi Pancake, kimchi fried rice is one of the most popular methods to utilize 
                            up old ripened kimchi.
                            <a class="view-more" href="Kimchi Fried Rice.php">
                                <br>Press me for Recipes!
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
                        <p style="text-align: justify;"><br>Chicken Adobo is a Filipino meal cooked 
                            by braising chicken legs (thighs and/or drumsticks) in a vinegar, soy sauce, 
                            garlic, and black pepper sauce. It's tangy, salty, garlicky, sweet, and spicy 
                            all at the same time. The chicken is carefully cooked in the sauce, resulting in a 
                            delicious and tender dish.
                            <a class="view-more" href="Chicken Adobo.php">
                                <br>Press me for Recipes!
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
                        <p style="text-align: justify;"><br>This warm garlic butter chicken 
                            breast recipe will become a top choice if you're looking for a quick 
                            and simple 15-minute chicken dinner. It's done in a single skillet, 
                            which makes cleaning a breeze.
                            <br><br>
                            The chicken is pan-fried on the stovetop and is extremely soft, 
                            juicy, rich, and buttery in flavor, with lots of garlic to round off the flavor.
                            <a class="view-more" href="Garlic Butter Chicken.php">
                               <br>Press me for Recipes!
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
                            with a creamy lemon sauce. 
                            They are quite simple to make, taking only 30 minutes from start to finish. 
                            Cooked in one skillet, tender and juicy chicken with a lot of flavor.
                            <br><br>
                            With a side of rice or spaghetti, this is the ideal healthy chicken dinner 
                            meal for the whole family. This Mediterranean-style chicken breast recipe 
                            will become one of your go-to chicken recipes for midweek dinners.
                            <a class="view-more" href="Mediterranean Chicken Skillet.php">
                               <br>Press me for Recipes!
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