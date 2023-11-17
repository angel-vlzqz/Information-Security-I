<?php
require_once 'autoLoader.php';

$checking = new checkAccountDataService();
$balance = $checking->getBalance();

echo "Initial checking balance = " . $balance . "<br>";