<html>
    <head>
    </head>
    <body>
        <h1>Jokes Page</h1>
        <?php
        include "db_connect.php";
        include "search_all_jokes.php";
        include "search_keyword.php";

            $mysqli->close();
        ?>
    </body>
</html>
