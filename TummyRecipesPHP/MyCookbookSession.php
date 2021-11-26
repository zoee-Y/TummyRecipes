<!DOCTYPE html>

<html lang="en">
    
    <!-- Head -->
    <?php
    include "head.inc.php";
    ?>
    
    <body>
        
        <!--Navbar-->
        <?php
        include "session.inc.php";
        ?>
        
        <!--Header-->
        <header class="jumbotron text-center">    
            <h1 class="display-4">My Cookbook</h1>
            <h4>This is where you save our secrets!</h4>
        </header>
        
        <main> 
        
            <div class="container">
                <div class="row justify-content-around">
                    <div class="card">     
                        <article class="col-sm">
                            <a href="Mac and Cheese.php">
                                <figure>                                                                          
                                    <img class="card-img-top" 
                                         src="images/Mac and Cheese.jpg"
                                         alt="Mac & Cheese"
                                         title="Mac & Cheese"/>                         
                                </figure>

                                <h6>Mac & Cheese</h6>

                            </a>
                            <p style="text-align: justify;"> Macaroni and cheese 
                            is a pasta dish made with cooked macaroni 
                            and a cheese sauce, usually cheddar. 
                            Other ingredients, such as breadcrumbs<br>...
                                <a class="view-more" href="Mac and Cheese.php">
                                    <br>Press me for Recipes!
                                </a>
                            </p>
                        </article>
                    </div>


                    <div class="card"> 
                        <article class="col-sm">
                            <a href="Shrimp Fried Rice.php">
                                <figure>                        
                                    <img class="card-img-top" 
                                         src="images/Shrimp Fried Rice.jpg" 
                                         alt="Shrimp Fried Rice"
                                         title="Shrimp Fried Rice"/>                                                   
                                </figure>

                                <h6>Shrimp Fried Rice</h6>

                            </a>
                            <p style="text-align: justify;">In Chinese takeaway restaurants, 
                            shrimp fried rice is always one of the most popular fried rice meals. 
                            Fried rice is typically dark brown in color, due to a combination of dark 
                            and light soy sauce and <br>...
                               
                               <a class="view-more" href="Shrimp Fried Rice.php">
                                   <br>Press me for Recipes!
                               </a>
                            </p>
                        </article>
                    </div>


                    <div class="card"> 
                        <article class="col-sm">
                            <a href="Garlic Butter Chicken.php">
                                <figure>                        
                                    <img class="card-img-top" 
                                         src="images/Garlic Butter Chicken.jpg" 
                                         alt="Garlic Butter Chicken"
                                         title="Garlic Butter Chicken"/>                                                  
                                </figure>

                                <h6>Garlic Butter Chicken</h6>

                            </a>
                            <p style="text-align: justify;">This warm garlic butter 
                            chicken breast recipe will become a top choice if you're 
                            looking for a quick and simple 15-minute chicken dinner. 
                            It's done in a single skillet, 
                            which makes cleaning a breeze <br>...
                               
                               <a class="view-more" href="Garlic Butter Chicken.php">
                                   <br>Press me for Recipes!
                               </a>
                            </p>
                        </article>
                    </div>
                </div>
            </div> 
            
        </main> 
        
        
     <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>