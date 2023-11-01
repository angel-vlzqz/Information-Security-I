<?php
    include "dv_connect.php";
    $newUsername = $_GET["username"];
    $newPassword1 = $_GET["password1"];
    $newPassword2 = $_GET["password2"];

    echo "<h2>Trying to add a new user " . $newUsername . " pw = " . $newPassword1 . " and " . $newPassword2 . "</h2>";

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
