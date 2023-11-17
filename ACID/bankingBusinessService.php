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

    function transaction($transfer)
    {
        $db = new Database();
        $conn = $db->getConnection();

        $conn->autocommit(false);
        $conn->begin_transaction();

        $checkingBalance = $this->getCheckingBalance();
        $checking = new CheckAccountDataService($conn);
        $okChecking = $checking->updateBalance($checkingBalance - $transfer);

        $savingsBalance = $this->getSavingsBalance();
        $savings = new SavingAccountDataService($conn);
        $okSavings = $savings->updateBalance($savingsBalance + $transfer);

        if ($okChecking && $okSavings)
        {
            $conn->commit();
        }
        else
        {
            $conn->rollback();
        }

        $conn->close();
    }
}