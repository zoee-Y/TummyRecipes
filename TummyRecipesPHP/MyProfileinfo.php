<?php
    session_start();
?>

<!-- Head -->
<?php
include "head.inc.php";
?>
<body>
    <!-- Navbar -->
    <?php
    include "nav.inc.php";
    ?>
    <!-- Update Profile Form -->
    <main class="container"> 
        <h1 class="display-4">Profile Update</h1>
        <p>
        <h7>Don't want to update? Go back to
            <a href="MyProfileSession.php">My Profile</a>.</h7>
        </p>
        <form action="process_profileupdate.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="fname">Update First Name:</label>
                <input class="form-control" type="text" id="fname" 
                       name="fname" placeholder="Update first name">
            </div>
            <div class="form-group">
                <label for="lname">Update Last Name:</label>
                <input class="form-control" type="text" id="lname" 
                       name="lname" placeholder="Update last name" required>
            </div>
            <div class="form-group">
                <label for="description">Update Bio:</label>
                <input class="form-control" type="text" id="description" maxlength="200"
                       name="description" placeholder="Update Bio">
            </div>
            <div class="form-group">
                <label for="pphoto">Update Profile Photo:</label>
                <input type="file" id="pphoto"
                       name="pphoto" placeholder="Update Profile Photo">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
                <button class="btn btn-secondary" type="reset">Reset</button>
            </div>
        </form>
        <form action="process_delete.php" method="post" enctype="multipart/form-data">
            <button class="btn btn-danger" type="submit">Delete Profile</button>
        </form>
    </main>   

    <!--Footer-->
    <?php
    include "footer.inc.php";
    ?>
</body>
</html>
