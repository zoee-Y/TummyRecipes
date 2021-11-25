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
            <h5> Share your <button class="button button1">secret</button> with us!</h5>
            <div class="modal modal1">
                <div id="modal-content1">
                    <span class="close close1">&times;</span>
                    <p style="color:black;"><b>Do you want to share your secrets with us?</b></p>
                    <p style="color:black;"><br><b>We are more than welcome help you release your secrets!</b></p>
                    <p style="color:black;"><br><b>But first, let us login!
                            <br> Shall we?</b></p>
                    <a href="login.php">
                        <button class="btn button2">Log In</button>
                    </a>
                </div>
            </div>
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
                        <br>
                        <p> Description         
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
                        <br>
                        <p> Description         
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
                        <br>
                        <p>
                            Shall add the link to full recipe next time
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
                        <br>
                        <p>
                           Maybe put description of the food i guess...
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
                        <br>
                        <p>
                           more to come i guess
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
                        <br>
                        <p>
                           Testing to see if images resize
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
                        <br>
                        <p>
                           This is making me hungry while doing this at 3am
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
                        <br>
                        <p>
                           Super hungry
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
                        <br>
                        <p>
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