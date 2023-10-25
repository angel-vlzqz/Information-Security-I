<?php
    include "db_connect.php";
    $keywordFromForm = $_GET["keyword"];
    // search database for the word stable
    // pull data from test
    echo "<h2>Show all jokes using $keywordFromForm</h2>";
    $sql = "SELECT JokeID, Joke_question, Joke_answer FROM Jokes_table WHERE Joke_answer LIKE '%" . $keywordFromForm . "%'";

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