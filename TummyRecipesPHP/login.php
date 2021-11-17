<?php
include "head.inc.php";
?>
<body>
    <?php
    include "nav.inc.php";
    ?>
    <!-- Form -->
    <main class="container">
        <h1 class="display-4">Member Login</h1>
        <p>
            Existing members login here. For new members, please
            <a href="register.php">Register Here</a>.
        </p>
            <form action="process_login.php" method="post">
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
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Login"></input>
                </div>
            </form>
    </main>
    <!-- Footer -->
    <?php
    include "footer.inc.php";
    ?>
</body>