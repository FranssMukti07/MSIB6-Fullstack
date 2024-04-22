<?php
require_once 'Bank.php';

$n1 = new Bank('001', 'Alif', 5000000);
$n2 = new Bank('002', 'Jamal', 7000000);
$n3 = new Bank('003', 'Qonita', 8000000);
$n4 = new Bank('004', 'Dini', 9000000);

$n1->menabung(300000);

$n4->menarik(400000);

echo "<h3 align='center'>".Bank::BANK."</h3>";
$n1->mencetak();
$n2->mencetak();
$n3->mencetak();
$n4->mencetak();
