<?php

declare(strict_types = 1);

require_once '../http/Transaction.php';

$transaction = new Transaction(100, 'Transaction 1');
$transaction->addTax(8)->applyDiscount(10);

echo '<pre style="background-color:maroon;color:#00ff00;font-size:20px;padding:10px;">';
var_dump($transaction->getAmount());
echo '</pre>';