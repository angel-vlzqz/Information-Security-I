<?php
    include "db_connect.php";
    $newJokeQuestion = $_GET["newjoke"];
    $newJokeAnswer = $_GET["newanswer"];

    // adds slashes to strings to prevent injections
    $newJokeQuestion = addslashes($newJokeQuestion);
    $newJokeAnswer = addslashes($newJokeAnswer);

    // pull data from test database
    echo "<h2>Trying to add a new joke: $newJokeQuestion and $newJokeAnswer</h2>";
    $sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer) VALUES (NULL, '$newJokeQuestion', '$newJokeAnswer')";
    
    // prints out result or error
    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));

    include "search_all_jokes.php";
?>

<a href="index.php">Return to main page</a>