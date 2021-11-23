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
            <h1 class="display-4">Recipes</h1>
            <h4>This is where we share our secrets!</h4>
        </header>
        
        <!--Food recipes -->
        <main class="container">
            <section id="Pasta">
                <h2>Pasta</h2>
                <div class="row">
                    
                <article class="col-sm">
                    <a href="Mac and Cheese.php">
                <figure>                                                                          
                    <img class="img-thumbnail" 
                         src="images/Mac and Cheese.jpg"
                         alt="Mac & Cheese"
                         title="Mac & Cheese"/>                         
                </figure>
                    
                <h3>Mac & Cheese</h3>
                
                </a>
                    <p> Description
                       
                        <a class="view-more" href="Mac and Cheese.php">
                            <br>View More
                        </a>
                </p>
                </article>
                    
                <article class="col-sm">
                    <a href="Carbonara.php">
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Carbonara.jpg" 
                         alt="Carbonara"
                         title="Carbonara"/>
                </figure>
                <h3>Carbonara</h3>
                </a>    
                    <p>

                        <a class="view-more" href="Carbonara.php">
                            <br>View More
                        </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                    <a href="Lasagna.php">                
                <figure>           
                    <img class="img-thumbnail" 
                         src="images/Lasagna.jpg" 
                         alt="Lasagna"
                         title="Lasagna"/>                       
                </figure>
               
                <h3>Lasagna</h3>
              
                </a>
                    <p>
                        Shall add the link to full recipe next time
                        <a class="view-more" href="Lasagna.php">
                            <br>View More
                        </a>
                    </p>
                </article>
                    
                </div>
            </section>
            
            <section id="Rice">
            <h2>Rice</h2>
            <div class="row">
                    
                <article class="col-sm">
                    <a href="Garlic Butter Rice.php">
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Garlic Butter Rice.jpg" 
                         alt="Garlic Butter Rice"
                         title="Garlic Butter Rice"/>                                          
                </figure>
                
                <h3>Garlic Butter Rice</h3>
                
                </a>
                    <p>
                       Maybe put description of the food i guess...
                       <br>Jia: I think put like food description at the bottom will do?
                       <br>Jia: Let me know if youre okay with that,, if you okay with that then i will proceed to do itt!
                       <a class="view-more" href="Garlic Butter Rice.php">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                    <a href="Shrimp Fried Rice.php">
                <figure>                        
                    <img class="img-thumbnail" 
                         src="images/Shrimp Fried Rice.jpg" 
                         alt="Shrimp Fried Rice"
                         title="Shrimp Fried Rice"/>                                                   
                </figure>

                <h3>Shrimp Fried Rice</h3>
                
                </a>
                    <p>
                       more to come i guess
                       <a class="view-more" href="Shrimp Fried Rice.php">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                    <a href="Kimchi Fried Rice.php">
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Kimchi Fried Rice.jpg" 
                         alt="Kimchi Fried Rice"
                         title="Kimchi Fried Rice"/>                    
                </figure>

                <h3>Kimchi Fried Rice</h3>
                
                </a>
                    <p>
                       Testing to see if images resize
                       <a class="view-more" href="Kimchi Fried Rice.php">
                           <br>View More
                       </a>
                    </p>
                </article>
                
            </div>
            </section>
            
            <section id="Chicken">
            <h2>Chicken</h2>
            <div class="row">
                    
                <article class="col-sm">
                    <a href="Chicken Adobo.php">
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Chicken Adobo.jpg" 
                         alt="Chicken Adobo"
                         title="Chicken Adobo"/>                                                                      
                </figure>

                <h3>Chicken Adobo</h3>

                </a>
                    <p>
                       This is making me hungry while doing this at 3am
                       <br>Jia : HAHAHAHA ZAI
                       <a class="view-more" href="Chicken Adobo.php">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                    <a href="Garlic Butter Chicken.php">
                <figure>                        
                    <img class="img-thumbnail" 
                         src="images/Garlic Butter Chicken.jpg" 
                         alt="Garlic Butter Chicken"
                         title="Garlic Butter Chicken"/>                                                  
                </figure>

                <h3>Garlic Butter Chicken</h3>

                </a>
                    <p>
                       Super hungry
                       <a class="view-more" href="Garlic Butter Chicken.php">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                    <a href="Mediterranean Chicken Skillet.php">
                <figure>                       
                    <img class="img-thumbnail" 
                         src="images/Mediterranean Chicken Skillet.jpg" 
                         alt="Mediterranean Chicken"
                         title="Mediterranean Chicken"/>
                </figure>

                <h3>Mediterranean Chicken</h3>

                </a>
                    <p>
                       uhhh might be a problem if the length of name is diff
                       cuz the images wont be aligned.
                       
                       <br>JIA: actually can try putting the name at the bottom 
                       of the image?  
                       <br> bless thx thx
                       <br> need to cite images!!
                       <a class="view-more" href="Mediterranean Chicken Skillet.php">
                           <br>View More
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