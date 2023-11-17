<?php
require_once 'autoLoader.php';

$checking = new checkAccountDataService();
$saving = new savingAccountDataService();

$checkingBalance = $checking->getBalance();
$savingBalance = $saving->getBalance();

echo "Checking Balance: " . $checkingBalance . "<br>";
echo "Saving Balance: " . $savingBalance . "<br>";

echo "Take $100 from checking and put it in saving<br>";
$checking->updateBalance($checkingBalance - 100);
$saving->updateBalance($savingBalance + 100);

$checkingBalance = $checking->getBalance();
$savingBalance = $saving->getBalance();

echo "Checking Balance: " . $checkingBalance . "<br>";
echo "Saving Balance: " . $savingBalance . "<br>";