<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title>Tummy Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--jQuery-->
        <script defer
                src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous">
        </script>
        <script defer src="js/mainpage.js"></script>
        <!--Bootstrap JS-->
        <script defer
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
                integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
                crossorigin="anonymous">
        </script>
        <!--CSS-->
        <link rel="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity=
              "sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <link rel="stylesheet" href="css/navbar_footer.css">
        <link rel="stylesheet" href="css/mainpage.css">
        <link rel="stylesheet" href="css/aboutus.css">
    </head>
    
    <body>
        <!--Navbar-->
        <?php
        include "nav.inc.php";
        ?>
        
        <!--Main Content-->
        <!--Main Content-->
        <main class="container">
            <!-- About US -->
            <section id="aboutus">
                <h2>About Us</h2>
                <div class="row">
                    <!-- Introduction Of The Company -->
                    <article class="col-sm">
                        <h3>The Tummy Team</h3>
                        <figure>
                            <img class="aboutusimg" src="images/sampleimg1.jpeg" alt="AboutUs" name="TheTeam">
                        </figure>
                        <p>
                        The team is made up of 5 wonderful individuals with 
                        an extreme passion for food and making them fast!
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