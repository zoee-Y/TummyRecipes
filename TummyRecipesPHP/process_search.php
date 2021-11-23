<html>
    <head>
        <title>Search Results</title>
        <?php
        include "head.inc.php";
        ?>
    </head>
    <body>
        <?php
        include "nav.inc.php";
        ?>
        <main class="container">
            <br>
            <?php
                
                // Check to see if the keywords were provided
                if (isset($_GET['search']) && $_GET['search'])
                {
                    // save the keywords from the URL
                    $k = trim($_GET['search']);

                    // create a DB query and words string
                    $query_string = "SELECT * FROM tummy_recipes WHERE ";

                    // seperate each of the keywords
                    $keywords = explode(' ', $k);
                    foreach($keywords as $word)
                    {
                        $query_string .= " keywords LIKE '%".$word."%' OR ";
                    }
                    $query_string = substr($query_string, 0, strlen($query_string) - 3);

                    // connect to the database
                    $config = parse_ini_file('../../private/db-config.ini');
                    $conn = new mysqli($config['servername'], $config['username'], 
                            $config['password'], $config['dbname']);
                    
                    // Check connection
                    if ($conn->connect_error)
                    {
                        $errorMsg = "Connection failed: " . $conn->connect_error;
                        $success = false;
                    }
                    else
                    {
                        // Prepare the statement:
                        $query = mysqli_query($conn, $query_string);

                        // Bind & execute the query statement:
                        $result_count = mysqli_num_rows($query);
                        
                        // check to see if any results were returned
                        if ($result_count > 0)
                        {
                            // display search result count to user
                            echo '<div class="right"><b><u>'.$result_count.'</u></b></div>';
                            
                            // display all the search results to the user
                        }
                        else
                            echo "No results found. Please search something else.";
                        $stmt->close();
                    }

                    $conn->close();
                }
                else
                    echo 'Please Type In Something To Search..';
            ?>
        </main>
        <br>
        <?php
        include "footer.inc.php";
        ?>
    </body>
</html>