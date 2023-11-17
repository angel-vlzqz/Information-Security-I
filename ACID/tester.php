<?php
require_once 'autoLoader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$bs = new BankingBusinessService();

$checkingBalance = $bs->getCheckingBalance();
$savingBalance = $bs->getSavingsBalance();

echo "Checking Balance: " . $checkingBalance . "<br>";
echo "Saving Balance: " . $savingBalance . "<br>";

// echo "Take $100 from checking and put it in saving<br>";
$bs->transaction(100);

echo "Current values:<br>";
echo "Checking: " . $checkingBalance . "<br>";
echo "Saving: " . $savingBalance . "<br>";