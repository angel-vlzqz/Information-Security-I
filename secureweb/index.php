<html>
    <head>
    </head>
    <body>
        <h1>Jokes Page</h1>
        <?php
            // connect to database
            $host = "localhost";
            $username = "root";
            $user_pass = "root";
            $database_in_use = "test";

            $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
            if ($mysqli->connect_errno) 
            {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            // pull data from test
            $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0)
            {
                // output data of each row
                while ($row = $result->fetch_assoc())
                {
                    echo "JokeID: ".$row["JokeID"] ." - Joke Question: ".$row["Joke_question"]." ".$row["Joke_answer"]."<br>";
                }
            }
            else
            {
                echo "0 results";
            }


            // search database for the word stable
            // pull data from test
            echo "<h2>Show all jokes with the word Stable in them</h2>";

            $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table WHERE Joke_answer LIKE '%stable%'";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0)
            {
                // output data of each row
                while ($row = $result->fetch_assoc())
                {
                    echo "JokeID: ".$row["JokeID"] ." - Joke Question: ".$row["Joke_question"]." ".$row["Joke_answer"]."<br>";
                }
            }
            else
            {
                echo "0 results";
            }
            $mysqli->close();
        ?>
    </body>
</html>
