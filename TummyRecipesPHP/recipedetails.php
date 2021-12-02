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
            
            <?php
                
                if ((!empty($_SESSION["viewRtitle"]) || $_SESSION["viewRtitle"] != "")
                        && (!empty($_SESSION["viewRemail"]) || $_SESSION["viewRemail"] != "")) {
                    $config = parse_ini_file('../../private/db-config.ini');
                    $conn = new mysqli($config['servername'], $config['username'],
                            $config['password'], $config['dbname']);

                    // Check connection
                    if ($conn->connect_error) {
                        $errorMsg = "Connection failed: " . $conn->connect_error;
                        $success = false;
                    } else {
                        $email = $_SESSION["viewRemail"];
                        $title = $_SESSION["viewRtitle"];
                        
                        $stmt =  $conn->prepare("SELECT * FROM tummy_recipes_recipes WHERE email = ? AND rTitle = ? ORDER BY recipe_id DESC LIMIT 1");
                        $stmt2 = $conn->prepare("SELECT fname, lname FROM tummy_recipes_members WHERE email = ? ORDER BY member_id DESC");
                        
                        $stmt->bind_param("ss", $email, $title);
                        $stmt2->bind_param("s", $email);
                        
                        if (!$stmt->execute()) {
                            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                            $success = false;
                        }
                        else {
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) {
                                $hours = $row["hours"];
                                $minutes = $row["minutes"];
                                $ingredients = $row["ingredients"];
                                $steps = $row["steps"];
                                $imgThumbnail = $row["imgThumbnail"];
                            }
                        }
                        $stmt->close();
                        
                        if (!$stmt2->execute()) {
                            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
                            $success = false;
                        }
                        else {
                            $result = $stmt2->get_result();
                            while ($row = $result->fetch_assoc()) {
                                $fname = $row["fname"];
                                $lname = $row["lname"];
                            }
                        }
                        $stmt2->close();
                        
                    }
                    $conn->close();
                }
                
                elseif (isset($row['recipe_id']))
                {
                    $_SESSION['viewRtitle'] = "";
                    $_SESSION['viewRemail'] = $_SESSION['email'];
                    
                    echo "<h1 style='text-align: center;'>" . $row['rTitle'] . "</h1>";
                    echo "<h5 style='text-align: center;'> ", $fname . " " . $lname . "</h5>";
                    echo "<div>";
                    echo "<a>";
                    echo "<p style='text-align: center;'>";
                    echo "<img src='" . $imgThumbnail . "' style='border-radius: 50%; width: 300px;' alt='" . $title . "'>";
                    echo '</p>';
                    echo '</a>';
                    echo "<p style='font-size: 25px'>";
                    echo "<b><u>Duration</u></b>";
                    echo "</p>";
                    echo "<h5>";
                    if ($hours > 0) {
                        echo "$hours hours";
                        if ($minutes > 0) {
                            echo ", $minutes minutes";
                        }
                    }
                    else if ($minutes > 0) {
                        echo "$minutes minutes";
                    }
                    echo "</h5>";
                    echo "<br>";
                    echo "<br>";
                    echo "<p style='font-size: 25px'>";
                    echo "<b><u>Ingredients</u></b>";
                    echo "</p>";
                    $uns = unserialize($ingredients);

                    for ($i = 0; $i < count($uns); $i++) {
                        echo "<h5>$uns[$i]</h5>";
                    }
                    echo "<br>";
                    echo "<br>";
                    echo "<p style='font-size: 25px'>";
                    echo "<b><u>Instructions</u></b>";
                    echo "</p>";
                    $unsS = unserialize($steps);

                    for ($i = 0; $i < count($unsS); $i++) {
                        echo "<h5>$unsS[$i]</h5>";
                    }
                    echo "<br>";
                    echo "<br>";
                    include "Display_Comment_Carbonara.php";
                    echo "</div>";
                    
                    
                }
                
                else {
                    echo "<h2>Oops!</h2>";
                    echo "<p>An error has occured, please try again!</p>";
                    echo "<a href='MyCookbookSession.php' class='btn btn-danger'>Go to MyCookbook</a>";
                    exit();
                }
                
                if ($success === false) {
                    echo "<h2>Oops!</h2>";
                    echo "<h4>The following errors were detected:</h4>";
                    echo "<p>" . $errorMsg . "</p>";
                    echo "<a href='recipe.php' class='btn btn-danger'>Go to Recipe...</a>";
                    exit();
                }
                
            ?>
            
            <h1 style="text-align: center;"><b><?php echo $title?></b></h1>
            <h5 style="text-align: center;">Created by <?php echo "$fname $lname"?></h5>
            <div>
                <a>
                    <p style="text-align: center;">
                        <img src="<?php echo $imgThumbnail?>" 
                            style="border-radius: 50%; width: 300px;"
                            alt="<?php echo $title?>">
                    </p>  
                </a>
                
                <p style="font-size: 25px"><b><u>Duration</u></b></p>
                <h5>
                    <?php
                    if ($hours > 0) {
                        echo "$hours hours";
                        if ($minutes > 0) {
                            echo ", $minutes minutes";
                        }
                    }
                    else if ($minutes > 0) {
                        echo "$minutes minutes";
                    }
                    ?>
                </h5>
                <br>
                <br>
                <p style="font-size: 25px"><b><u>Ingredients</u></b></p>
                <?php
                    $uns = unserialize($ingredients);

                    for ($i = 0; $i < count($uns); $i++) {
                        echo "<h5>$uns[$i]</h5>";
                    }
                
                ?>
                <br>
                <br>
                <p style="font-size: 25px"><b><u>Instructions</u></b></p>
                <?php
                    $unsS = unserialize($steps);

                    for ($i = 0; $i < count($unsS); $i++) {
                        echo "<h5>$unsS[$i]</h5>";
                    }
                
                ?>
                <br>
                <br>
            </div>
            <?php
            include "Display_Comment_Carbonara.php";
            ?>
            
        </main>
        
        
        <?php
        include "Comment_Carbonara.php";
        ?>
        
        
        
        <?php
        include "footer.inc.php";
        ?>
        
    </body>
</html>