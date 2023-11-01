<head>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "db_connect.php";

    $username = $_GET["username"];
    $password = $_GET["password"];

    // not a good idea
    echo "<h2>Trying to login with username = " . $username . " and password = " . $password . "</h2>";

    $sql = "SELECT UserID, Username, Password FROM Users_table WHERE Username = '$username' AND Password = '$password'";

    $result = $mysqli->query($sql);
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $userid = $row["UserID"];
        echo "Success! You are logged in as $username<br>";
    }
    else 
    {
        echo "<h2>Sorry, there was a problem logging you in</h2>";
        echo "<a href='index.php'>Return to main page</a>";
        exit();
    }
?>