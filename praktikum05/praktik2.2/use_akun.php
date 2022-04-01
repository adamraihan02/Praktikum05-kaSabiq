<?php 
require_once 'class_akun.php';


$ac1 = new Account('C001',6000000);
echo 'sebelum menabung Ahmad:<br>';
$ac1->cetak();
$ac1->deposit(1000000);
echo '<hr/>setelah menabung<br>';
$ac1->cetak();


?>