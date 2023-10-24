<?php
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
?>