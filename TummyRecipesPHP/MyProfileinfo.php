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
            <br>
            <h1 class="display-4">My Profile</h1>
            <h4>This is where you keep your secrets!</h4>
        </header>
        
        <main> 

            </div>
                <form action="" method="">
                <div class="form-group">
                    <label for="pwd">Name:</label>
                    <input class="form-control" type="Name" id="name" 
                           name="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" 
                           name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Description:</label>
                    <input class="form-control" type="description" id="description" 
                           name="description" placeholder="Short description" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" 
                           value="Submit" href="MyProfileSession.php"></input>
                </div>
                </form>
            </div>
            </div>
        </main>   
        
        <!--Footer-->
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>
