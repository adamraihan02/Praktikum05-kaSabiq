<?php 
require_once 'class_akun.php';

class BankAccount extends Account{
    public $customer;
    
    function __construct($nomor,$saldo,$customer){
        parent::__construct($nomor,$saldo);
        $this->customer=$customer;
    }

    
    function cetak(){
        parent::cetak();
        echo '<br/>Customer : '.$this->customer;
    }
 
    function transfer($obj_akun,$uang){
        $obj_akun->deposit($uang);
        $this->witdraw($uang);
    }

}