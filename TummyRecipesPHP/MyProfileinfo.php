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
                <textarea class="form-control" type="text" id="description" maxlength="500"
                          name="description" placeholder="Update Bio (Max 500 characters)"></textarea>
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
        <button class="btn btn-danger">Delete Profile</button>
        <div class="modal delmodal1">
            <div id="delmodal-delcontent1">
                <span class="close delclose1">&times;</span>
                <h4 style="color:black;"><br><b>This is Sad. :(</b></h4>
                <h4 style="color:black;"><b>Are you sure you want to delete your profile?</b></h4>
                <h4 style="color:black;"><b>Even though it's sad, we respect your decision.</b></h4>
                <form action="process_delete.php" method="post" enctype="multipart/form-data">
                    <button class="btn btn-primary" type="submit">Delete Profile</button>
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
