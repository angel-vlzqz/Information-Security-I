<?php
require_once 'autoLoader.php';

class BankingBusinessService
{
    function getCheckingBalance()
    {
        $db = new Database();
        $conn = $db->getConnection();

        $checkingServise = new CheckAccountDataService($conn);
        $balance = $checkingServise->getBalance();

        $conn->close();
        return $balance;
    }

    function getSavingsBalance()
    {
        $db = new Database();
        $conn = $db->getConnection();

        $savingsService = new SavingAccountDataService($conn);
        $balance = $savingsService->getBalance();

        $conn->close();
        return $balance;
    }
}