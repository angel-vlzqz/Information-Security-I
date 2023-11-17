<?php

class Database
{
    // credentials for accessing the db
    // TODO: externalize this to an INI file
    private $dbservername = "localhost";
    private $dbusername = "root";
    private $dbpassword = "root";
    private $dbname = "BANKING_DEMO";

    // connection object
    function getConnection()
    {
        $conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}