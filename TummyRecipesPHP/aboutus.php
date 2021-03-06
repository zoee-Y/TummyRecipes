<?php
    session_start();
?>

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
        
        <!--Main Content-->
        <main class="container">
            <!-- About US -->
            <section id="aboutus">
                <h2>About Us</h2>
                <div class="row">
                    <!-- Introduction Of The Company -->
                    <article class="col-sm">
                        <h3 class="about"><br>The Tummy Team</h3>
                        <br><br>
                        <figure>
                            <img class="aboutusimg" src="images/TeamPhoto1.png" 
                                 alt="AboutUs" name="TheTeam">
                        </figure>
                        <p style="font-size: 20px;">
                            The team is made up of 5 wonderful individuals with
                            an extreme passion for food and making them fast!
                        </p>
                    </article>
                </div>
                <div class="col">
                    <article class="row-sm">
                        <h4 class="nameDisplay">Zoe</h4>
                        <figure>
                            <img class="aboutus" src="https://static.vecteezy.com/system/resources/previews/001/936/408/non_2x/japanese-chef-cartoon-with-cute-sushi-art-illustration-vector.jpg" alt="Zoe" name="ZoeIMG">
                            <figcaption>The food enthusiast!</figcaption>
                        </figure>
                        <p class="teaminfo">
                            No quit persona that will do anything in her power  <br>
                            to give us good food!
                        </p>
                    </article>
                    <article class="row-sm">
                        <h4 class="nameDisplay">Ariff</h4>
                        <figure>
                            <img class="aboutus" src="images/Ariff.jpg" alt="Ariff" name="AriffIMG">
                            <figcaption>The tummy tumbler!</figcaption>
                        </figure>
                        <p class="teaminfo">
                            Always on the lookout for the best Mee Soto around. <br>
                            Not gonna quit until he finds the best!
                        </p>
                    </article>
                    <article class="row-sm">
                        <h4 class="nameDisplay">JiaXin</h4>
                        <figure>
                            <img class="aboutus" src="https://static.vecteezy.com/system/resources/previews/001/936/473/non_2x/beautiful-chef-girl-holding-an-empty-plate-cartoon-illustration-vector.jpg" alt="JiaXin" name="JiaXinIMG">
                            <figcaption>The Cooking Mama!</figcaption>
                        </figure>
                        <p class="teaminfo">
                            Gamer turned foodie.<br>
                            As the name suggest, do not challenge her in a cooking contest.
                        </p>
                    </article>
                    <article class="row-sm">
                        <h4 class="nameDisplay">Jeriel</h4>
                        <figure>
                            <img class="aboutus" src="https://static.vecteezy.com/system/resources/previews/002/861/713/non_2x/cute-chef-boy-serving-food-illustration-kawaii-cartoon-character-vector.jpg" alt="Jeriel" name="JerielIMG">
                            <figcaption>The Cookie Monster!</figcaption>
                        </figure>
                        <p class="teaminfo">
                            You got bakes?<br>
                            He's our cookie connoisseur.<br>
                            Do not be intimidate by his inner cookie demon.<br>
                            Just hand him a nice piece of baked cookie, and he'll be subdued.   
                        </p>
                    </article>
                    <article class="row-sm">
                        <h4 class="nameDisplay">YuXun</h4>
                        <figure>
                            <img class="aboutus" src="https://thumbs.dreamstime.com/b/male-chef-vector-illustration-cartoon-character-put-cook-hat-uniform-136342745.jpg" alt="YuXun" name="YuXunIMG">
                            <figcaption>The Sweet Tooth!</figcaption>
                        </figure>
                        <p class="teaminfo">
                            If sugar rush has a baby, you're looking at him.<br>
                            Be careful of what you're giving him.<br>
                            One wrong dessert and he'll go Sugar Berserk.
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