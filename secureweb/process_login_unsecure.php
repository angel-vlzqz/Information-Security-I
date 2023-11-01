<head>
<?php
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "db_connect.php";

    $username = $_GET["username"];
    $password = $_GET["password"];

    // not a good idea
    echo "<h2>Trying to login with username = " . $username . " and password = " . $password . "</h2>";

    $sql = "SELECT UserID, Username, Password FROM Users_table WHERE Username = '$username' AND Password = '$password'";

    echo "SQL = " . $sql . "<br>";

    $result = $mysqli->query($sql);
    
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    
    if ($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();
        $userid = $row["UserID"];
        echo "Success! You are logged in as '$username' <br>";
        $_SESSION["username"] = $username;
        $_SESSION["userid"] = $userid;
    }
    else 
    {
        echo "<h2>Sorry, there was a problem logging you in</h2>";
        echo "<a href='index.php'>Return to main page</a>";
        $_SESSION["username"] = "";
        session_destroy();
        exit();
    }

    echo "SESSION = <br>";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>