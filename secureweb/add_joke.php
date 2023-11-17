<?php
session_start();

if (!$_SESSION["username"])
{
    echo "<h2>Sorry, you are not logged in. Please login first</h2>";
    echo "<a href='index.php'>Return to main page</a>";
    exit();
}


include "db_connect.php";
$newJokeQuestion = $_GET["newjoke"];
$newJokeAnswer = $_GET["newanswer"];
$userID = $_SESSION["userid"];

// adds slashes to strings to prevent injections
$newJokeQuestion = addslashes($newJokeQuestion);
$newJokeAnswer = addslashes($newJokeAnswer);

// pull data from test database
echo "<h2>Trying to add a new joke: $newJokeQuestion and $newJokeAnswer</h2>";
$sql = "INSERT INTO Jokes_table (JokeID, Joke_question, Joke_answer, userId) VALUES (NULL, '$newJokeQuestion', '$newJokeAnswer', '$userID')";

// prints out result or error
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "search_all_jokes.php";
?>

<a href="index.php">Return to main page</a>