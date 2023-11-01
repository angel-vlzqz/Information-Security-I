<?php
    include "db_connect.php";
    $newUsername = $_GET["username"];
    $newPassword1 = $_GET["password1"];
    $newPassword2 = $_GET["password2"];

    echo "<h2>Trying to add a new user " . $newUsername . " pw = " . $newPassword1 . " and " . $newPassword2 . "</h2>";

    // check to see if the passwords match
    if ($newPassword1 != $newPassword2)
    {
        echo "<h2>Sorry, the passwords do not match</h2>";
        exit();
    }

    // check to see if the user already has an account
    $sql = "SELECT * FROM Users_table WHERE Username = '$newUsername'";

    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));

    // if there is a result, then the username is already taken
    if ($result->num_rows > 0)
    {
        echo "<h2>Sorry, that username is already taken</h2>";
        exit();
    }

    // insert a new user
    $sql = "INSERT INTO Users_table (UserID, Username, Password) VALUES (null, '$newUsername', '$newPassword1')";

    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));

    if ($result)
    {
        echo "<h2>Success! New user added</h2>";
    }
    else
    {
        echo "<h2>Sorry, there was a problem adding new user</h2>";
    }
?>
