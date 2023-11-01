<?php
            if ($mysqli->connect_errno) 
            {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            // pull data from test
            $sql = "SELECT JokeID, Joke_question, Joke_answer, userId FROM Jokes_table";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0)
            {
                // output data of each row
                while ($row = $result->fetch_assoc())
                {
                    echo "<h3>" . $row["Joke_question"] . "</h3>";
                    echo "<div><p>" . $row["Joke_answer"] . " -- Submitted by user #" . $row["userId"] . "</p></div>";
                }
            }
            else
            {
                echo "0 results";
            }
?>