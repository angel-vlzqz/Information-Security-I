<?php
require_once 'autoLoader.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $checking = new checkAccountDataService();
// $saving = new savingAccountDataService();
// 
// $checkingBalance = $checking->getBalance();
// $savingBalance = $saving->getBalance();
// 
// echo "Checking Balance: " . $checkingBalance . "<br>";
// echo "Saving Balance: " . $savingBalance . "<br>";
// 
// echo "Take $100 from checking and put it in saving<br>";
// $checking->updateBalance($checkingBalance - 100);
// $saving->updateBalance($savingBalance + 100);
// 
// $checkingBalance = $checking->getBalance();
// $savingBalance = $saving->getBalance();

$bs = new BankingBusinessService();

$checkBalance = $bs->getCheckingBalance();
$savingBalance = $bs->getSavingsBalance();

echo "Current values:<br>";
echo "Checking: " . $checkBalance . "<br>";
echo "Saving: " . $savingBalance . "<br>";