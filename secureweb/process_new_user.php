<?php
include "db_connect.php";
$newUsername = $_GET["username"];
$newPassword1 = $_GET["password1"];
$newPassword2 = $_GET["password2"];

echo "<h2>Trying to add a new user " . $newUsername . " pw = " . $newPassword1 . " and " . $newPassword2 . "</h2>";

// check to see if the passwords match
if ($newPassword1 != $newPassword2)
{
    echo "<h2>Sorry, the passwords do not match. Try again</h2>";
    echo "<a href='index.php'>Return to main page</a>";
    exit();
}

// regex to improve security in passwords
preg_match('/[A-Za-z0-9]+/', $newPassword1, $matches);
if (sizeof($matches) == 0)
{
    echo "<h2>Sorry, the password must contain at least one letter or number. Try again</h2>";
    echo "<a href='index.php'>Return to main page</a>";
    exit();
}

if (strlen($newPassword1) < 8)
{
    echo "<h2>Sorry, the password must be at least 8 characters long. Try again</h2>";
    echo "<a href='index.php'>Return to main page</a>";
    exit();
}



// check to see if the user already has an account
$sql = "SELECT * FROM Users_table WHERE Username = '$newUsername'";

$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

// if there is a result, then the username is already taken
if ($result->num_rows > 0)
{
    echo "<h2>Sorry, that username is already taken. Try again</h2>";
    echo "<a href='index.php'>Return to main page</a>";
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

echo "<a href='index.php'>Return to main page</a>";
?>