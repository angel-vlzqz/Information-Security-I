<?php
require_once 'autoLoader.php';

class CheckAccountDataService
{
    function getBalance()
    {
        // get db connection
        $db = new Database();
        $conn = $db->getConnection();

        // run query to get balance
        $sql = "SELECT BALANCE FROM CHECKING";
        $result = $conn->query($sql);

        // if there is more than 0 rows, return the balance
        if ($result->num_rows == 0)
        {
            // nothing found, return -1
            $conn->close();
            return -1;
        }
        else
        {
            // found the balance, return it
            $row = $result->fetch_assoc();
            $balance = $row["BALANCE"];
            $conn->close();
            return $balance;
        }
    }

    function updateBalance($balance)
    {
        // get a db connection
        $db = new Database();
        $conn = $db->getConnection();

        // run query to get balance
        $sql = "UPDATE CHECKING SET BALANCE = " . $balance;
        $result = $conn->query($sql);

        if ($result)
        {
            // update successful
            $conn->close();
            return 1;
        }
        else
        {
            // update failed
            $conn->close();
            return 0;
        }
    }
}