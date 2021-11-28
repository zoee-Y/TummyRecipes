<?php
include "head.inc.php";
?>
<body>
    <?php
    include "nav.inc.php";
    ?>
    <!-- Form -->
    <main class="container">
        <h1 class="display-4">Member Registration</h1>
        <p>
            For existing members, please go to the
            <a href="login.php">Login page</a>.
        </p>
            <form action="process_register.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input class="form-control" type="text" id="fname" 
                           name="fname" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input class="form-control" type="text" id="lname" maxlength="45" 
                           name="lname" placeholder="Enter last name" required>
                </div>
                <div class="form-group">
                    <label for="description">Short Bio:</label>
                    <input class="form-control" type="text" id="description" maxlength="200"
                           name="description" placeholder="Enter Short Bio">
                </div>
                <div class="form-group">
                    <label for="pphoto">Upload a Profile Photo:</label>
                    <input type="file" id="pphoto"
                           name="pphoto" placeholder="Upload a Profile Photo">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" 
                           name="email" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" type="password" id="pwd" 
                           name="pwd" placeholder="Enter password" required>
                </div>
                <div class="form-group"
                    <label for="pwd_confirm">Confirm Password:</label>
                    <input class="form-control" type="password" id="pwd_confirm" 
                           name="pwd_confirm" placeholder="Confirm password" required>
                </div>
                <div class="form-check">
                    <label>
                        <input type="checkbox" name="agree" required>
                        Agree to terms and conditions.
                    </label>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
    </main>
    <!-- Footer -->
    <?php
    include "footer.inc.php";
    ?>
</body>