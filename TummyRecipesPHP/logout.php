<?php
    $fname = $lname = $email = "";
    header('Refresh: 2; URL = login.php');
?>

<html>
    <head>
        <title>Logout</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    <body>
        <?php
        include "nav.inc.php";
        ?>
        <main class="container">
            <br>
            <?php
                session_start();
                unset($_SESSION["username"]);
                unset($_SESSION["password"]);
                echo "<h2>Logged Out successful!</h2>";
                echo "<h4>Goodbye!! Come Visit Again Soon!</h4>";
                echo "<a href='index.php' class='btn btn-success'>Return to Home</a>";
            ?>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>