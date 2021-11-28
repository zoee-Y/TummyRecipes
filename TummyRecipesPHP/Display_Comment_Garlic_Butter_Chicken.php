<?php

$config = parse_ini_file('../../private/db-config.ini');
$conn = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);

// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    $success = false;
} else {
    
    $result =  $conn->query("SELECT * FROM tummy_recipes_comment_garlic_butter_chicken");
    
}

while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<textarea readonly>'" . $row['message'] . "' </textarea>";
    echo "</div>";
}
?>
