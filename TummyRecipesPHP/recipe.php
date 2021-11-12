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
        </header>
        
        <!--Food recipes -->
        <main class="container">
            <section id="Pasta">
                <h2>Pasta</h2>
                <div class="row">
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Mac & Cheese</h3>
                <figure>                                                                          
                    <img class="img-thumbnail" 
                         src="images/Mac and Cheese.jpg"
                         alt="Mac & Cheese"
                         title="Mac & Cheese"/>                         
                </figure>
                </a>
                    <p>
                        What to put here....
                        <br>put a link with "Press for Full Recipe"
                        <br>then it redirects to a page for the recipe?
                        <a class="view-more" href="#">
                            <br>View More
                        </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Carbonara</h3>
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Carbonara.jpg" 
                         alt="Carbonara"
                         title="Carbonara"/>
                </figure>
                </a>    
                    <p>
                        To Do:
                        <br> 1)"View More" redirection link
                        <br> 2)Dropdown nav for recipe list
                        <a class="view-more" href="#">
                            <br>View More
                        </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Lasagna</h3>
                <figure>           
                    <img class="img-thumbnail" 
                         src="images/Lasagna.jpg" 
                         alt="Lasagna"
                         title="Lasagna"/>                       
                </figure>
                </a>
                    <p>
                        Shall add the link to full recipe next time
                        <a class="view-more" href="#">
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
                <a href="#">
                <h3 class="text-center">Garlic Butter Rice</h3>
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Garlic Butter Rice.jpg" 
                         alt="Garlic Butter Rice"
                         title="Garlic Butter Rice"/>                                          
                </figure>
                </a>
                    <p>
                       Maybe put description of the food i guess...
                       <a class="view-more" href="#">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Shrimp Fried Rice</h3>
                <figure>                        
                    <img class="img-thumbnail" 
                         src="images/Shrimp Fried Rice.jpg" 
                         alt="Shrimp Fried Rice"
                         title="Shrimp Fried Rice"/>                                                   
                </figure>
                </a>
                    <p>
                       more to come i guess
                       <a class="view-more" href="#">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Kimchi Fried<br>Rice</h3>
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Kimchi Fried Rice.jpg" 
                         alt="Kimchi Fried Rice"
                         title="Kimchi Fried Rice"/>                    
                </figure>
                </a>
                    <p>
                       Testing to see if images resize
                       <a class="view-more" href="#">
                           <br>View More>
                       </a>
                    </p>
                </article>
                
            </div>
            </section>
            
            <section id="Chicken">
            <h2>Chicken</h2>
            <div class="row">
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Filipino Chicken Adobo</h3>
                <figure>
                    <img class="img-thumbnail" 
                         src="images/Chicken Adobo.jpg" 
                         alt="Chicken Adobo"
                         title="Chicken Adobo"/>                                                                      
                </figure>
                </a>
                    <p>
                       This is making me hungry while doing this at 3am
                       <br>Jia : HAHAHAHA ZAI
                       <a class="view-more" href="#">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Garlic Butter Chicken</h3>
                <figure>                        
                    <img class="img-thumbnail" 
                         src="images/Garlic Butter Chicken.jpg" 
                         alt="Garlic Butter Chicken"
                         title="Garlic Butter Chicken"/>                                                  
                </figure>
                </a>
                    <p>
                       Super hungry
                       <a class="view-more" href="#">
                           <br>View More
                       </a>
                    </p>
                </article>
                    
                <article class="col-sm">
                <a href="#">
                <h3 class="text-center">Mediterranean Chicken</h3>
                <figure>                       
                    <img class="img-thumbnail" 
                         src="images/Mediterranean Chicken Skillet.jpg" 
                         alt="Mediterranean Chicken"
                         title="Mediterranean Chicken"/>
                </figure>
                </a>
                    <p>
                       uhhh might be a problem if the length of name is diff
                       cuz the images wont be aligned.
                       
                       <br>JIA: actually can try putting the name at the bottom 
                       of the image?  
                       <br> need to cite images!!
                       <a class="view-more" href="#">
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