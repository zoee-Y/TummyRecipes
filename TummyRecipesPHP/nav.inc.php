<?php

?>
<nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo2.jpg" alt="Logo1">
    </a>
    <button class="navbar-toggler ml-auto hidden-sm-up float-xs-right" 
            type="button" data-toggle="collapse" 
            data-target="#navbarToggleExternalContent" 
            aria-controls="navbarToggleExternalContent" 
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <div class="background">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipe.php">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MyCookbookSession.php">My Cookbook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MyProfileSession.php">My Profile</a>
                </li>
            </ul>
        </div>
        
        <?php
        include "searchbar.inc.php";
        ?>
        
    </div>

    <div class="nav navbar-nav navbar-right" id="navbaricons">
        <ul class="nav navbar-nav" id="navicons">
            <li>
                <a class="nav-item nav-link" href="register.php" title="Register">
                    <span class="ri-account-circle-line ri-xl"></span>
                </a>
            </li>
            <li>
                <a class="nav-item nav-link" href="login.php" title="Login">
                    <span class="ri-login-circle-line ri-xl"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>