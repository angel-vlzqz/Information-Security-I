<?php
    include "db_connect.php";
    $newJokeQuestion = $_GET["newjoke"];
    $newJokeAnswer = $_GET["newanswer"];

    // search database for the word stable
    // pull data from test
    echo "<h2>Trying to add a new joke: $newJokeQuestion and $newJokeAnswer</h2>";
    $sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$newJokeQuestion', '$newJokeAnswer')";
    $result = $mysqli->query($sql);

    include "search_all_jokes.php";
?>

<a href="index.php">Return to main page</a>