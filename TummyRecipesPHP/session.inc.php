<?php

?>
<nav class="navbar navbar-expand-sm">
    <a class="navbar-brand" href="welcome.php">
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
                    <a class="nav-link" href="aboutusSession.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recipeSession.php">Recipes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MyCookbookSession.php">My Cookbook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="MyProfile.php">My Profile</a>
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
                <a class="nav-item nav-link" href="logout.php" title="Logout">
                    <span class="ri-logout-circle-line ri-xl"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>