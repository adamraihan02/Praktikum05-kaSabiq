<?php 
require_once 'class_bankAkun.php';

$ab1 = new BankAccount('C001',6000000,'Ahmad');
$ab2 = new BankAccount('C002',5350000,'Budi');
$ab3 = new BankAccount('C003',2500000,'Kurniawan');

echo 'Saldo Ahmad<br/>';
$ab1->cetak();
echo '<br/>';

echo '<hr/>Saldo Budi<br/>';
$ab2->cetak();
echo '<br/>';

echo '<hr/>Saldo kurniawan<br/>';
$ab3->cetak();
echo '<br/>';



$ab1->transfer($ab3,1500000);
echo '<hr/>sesudah transfer ke kurniawan<br/>';
$ab1->cetak();
echo '<br/>';
$ab3->cetak();

$ab1->transfer($ab2,500000);
echo '<hr/>sesudah transfer ke budi<br/>';
$ab1->cetak();
echo '<br/>';
$ab2->cetak();
?>