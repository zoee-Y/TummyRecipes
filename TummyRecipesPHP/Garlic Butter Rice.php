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
            <h1 style="text-align: center;"><b>Garlic Butter Rice</b></h1>
            <div class="Garlic Butter Rice">
                <a>
                    <p style="text-align: center;"><img src="images/Garlic Butter Rice.jpg" 
                                                        style="border-radius: 50%; width: 300px;" 
                                                        alt="Garlic Butter Rice"></p>  
                </a>
                <p style="font-size: 25px"><b><u>Ingredients</u></b></p>
                <h5>- 4 tablespoons (2oz. | 60g) butter, divided</h5>
                <h5>- 5 cloves garlic, minced</h5>
                <h5>- 1 1/2 cups uncooked white rice, long gran, Basmati or Jasmine</h5>
                <h5>- 2 1/2 cups chicken broth, or vegetable stock</h5>
                <h5>- 1 teaspoon dried parsley</h5>
                <h5>- 1/2 teaspoon salt</h5>
                <h5>- 1/4 teaspoon fresh cracked black pepper</h5>
                <h5>- 2 tablespoons fresh chopped parsley, plus extra to garnish</h5>
                <br>
                <br>
                <p style="font-size: 25px"><b><u>Instructions</u></b></p>
                <h5>1. Melt 2 tablespoons butter in a medium-sized pot over medium heat. 
                    Add garlic and stir until fragrant, about 1 minute.</h5>
                <h5>2. Stir in rice to coat with the garlic butter.</h5>
                <h5>3. Add broth, dried parsley, salt and pepper. Stir well and bring to a boil.</h5>
                <h5>4. Cover with lid and reduce heat to low so the liquid is simmering very gently. 
                    Cook until all liquid has been absorbed, about 15 minutes.</h5>
                <h5>5. Uncover and stir through fresh parsley.</h5>
                <h5>6. Remove from heat, cover with lid and let stand 5-10 minutes, until soft.</h5>
                <h5>7. Fluff rice with a fork. Stir through remaining butter and season with a little extra salt, 
                    pepper and dried parsley.</h5>
                <h5>8. Garnish with some fresh chopped parsley.</h5>
                <br>
                <br>
            </div>
            
            <?php
            include "Display_Comment_Garlic_Butter_Rice.php";
            ?>
            
        </main>
        
        <?php
        include "Comment_Garlic_Butter_Rice.php";
        ?>
        
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
</html>