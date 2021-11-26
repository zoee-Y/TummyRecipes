<?php

 // Helper function that checks input for malicious or unwanted content.
function sanitize_search($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>

<html>
    <head>
        <title>Search Results</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    <body>
        <?php
        include "session.inc.php";
        ?>
        <main class="container">
            <br>
            <?php
                
                // Check to see if the keywords were provided
                if (isset($_GET['search']) && $_GET['search'])
                {
                    // sanitize and save the keywords from the URL
                    $k = sanitize_search($_GET["search"]);

                    // create a DB query and words string
                    $query_string = "SELECT * FROM tummy_recipes_search WHERE ";
                    $display_words = "";
                    
                    // seperate each of the keywords
                    $keywords = explode(' ', $k);
                    foreach($keywords as $word)
                    {
                        $query_string .= " keywords LIKE '%".$word."%' OR ";
                        $display_words .= $word." ";
                    }
                    $query_string = substr($query_string, 0, strlen($query_string) - 3);

                    // connect to the database
                    $config = parse_ini_file('../../private/db-config.ini');
                    $conn = new mysqli($config['servername'], $config['username'], 
                            $config['password'], $config['dbname']);
                    
                    // Prepare the statement:
                    $query = mysqli_query($conn, $query_string);

                    // Bind & execute the query statement:
                    $result_count = mysqli_num_rows($query);

                    // check to see if any results were returned
                    if ($result_count > 0)
                    {
                        // display search result count to user
                        echo '<h2>Search Results For <b><i>'.$display_words.'</i></b></h2>';
                        echo 'We found <b><u>'.$result_count.'</u></b> items related to your search. <br />';
                        
                        echo '<table class="search">';

                        // display all the search results to the user
                        while ($row = mysqli_fetch_assoc($query))
                        {
                            echo '<tr>
                                <td><h2><a href="'.$row['url'].'">'.$row['title'].'</a></h2></td>
                                </tr>
                                <tr>
                                <td>'.$row['description'].'</td>
                                </tr>';
                        }
                        
                        echo '</table>';
                    }
                    else
                        echo "<h2>No results found. Please search something else.</h2>";
                    
                    $conn->close();
                }
                else
                    echo '<h2>Please Type In Something To Search..</h2>';
            ?>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>