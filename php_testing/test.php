<?php
require_once('./paypal/transaction.php');
require_once('./razaorpay/transaction.php');

use paypal\transaction as paypal;
use razaorpay\transaction as razaorpay;

class test{
    public $transaction;
    function __construct($class){
        $this->transaction = $class;
    }
    
    public function handel(){

        return $this->transaction->handel();
    }
}


$paypal_obj = new test(new paypal());
$rozaorpay_obj = new test(new razaorpay());

print_r($paypal_obj->handel());
print_r($rozaorpay_obj->handel());
