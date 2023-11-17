<?php
require_once 'autoLoader.php';

$checking = new checkAccountDataService();
$balance = $checking->getBalance();

echo "Initial checking balance = " . $balance . "<br>";

echo "Add some money<br>";

$balance = $checking->updateBalance($balance + 100);
$balance = $checking->getBalance();

echo "Initial checking balance = " . $balance . "<br>";