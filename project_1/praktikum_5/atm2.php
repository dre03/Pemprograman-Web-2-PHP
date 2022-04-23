<?php

require_once 'account_bank.php';


$ab1 = new AccountBank("0101", 5000000, "Ahmad");
$ab2 = new AccountBank("0102", 15000000, "Budi");


$ab1->cetak();

echo '<hr>';

$ab2->cetak();
echo '<br>Ahmad transfer uang ke Budi 1250000 <br>';
$ab2->transfer($ab1, 1250000);
$ab1->cetak();
echo '<hr>';
$ab2->cetak();