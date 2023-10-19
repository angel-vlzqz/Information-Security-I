<html>
    <head>
    </head>
    <body>
        <h1>Jokes Page</h1>
        <?php
            $host = "localhost";
            $username = "root";
            $user_pass = "root";
            $database_in_use = "test";

            $mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
            echo $mysqli->host_info . "\n";
            if ($mysqli->connect_errno) 
            {
                echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            echo $mysqli->host_info . "\n";
        ?>
    </body>
</html>