<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Accordion - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>

    <style>
        *
        {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>


</head>

<?php
    include "db_connect.php";
    $keywordFromForm = $_GET["keyword"];
    // search database for the word stable
    // pull data from test
    echo "<h1>Show all jokes using $keywordFromForm<br></h1>";
    $sql = "SELECT JokeID, Joke_question, Joke_answer, Jokes_table.userId, userName

    FROM Jokes_table

    JOIN Users_table ON Users_table.UserID = Jokes_table.userId

    WHERE Joke_question LIKE '%$keywordFromForm%'";
?>

<div id="accordion">

<?php
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0)
    {
        // output data of each row
        while ($row = $result->fetch_assoc())
        {
            echo "<h3>" . $row[Joke_question] . "</h3>";
            echo "<div><p>" . $row[Joke_answer] . " -- Submitted by user: " . $row['userName'] . "</p></div>";
        }
    }
    else
    {
        echo "0 results";
    }
?>

</div>