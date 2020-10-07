<?php

class CreditCard {
    public function getStatus(){
        echo "Checking  Credi card server ...."."<br>";
    }
    public function sendIssu(){
        echo "Issu send! "."<br>";
    }
}
class Dana{
    public function getStatus(){
        echo " Checking Dana server ..."."<br>";
    }
    public function sendIssu(){
        echo " Issu send !"."<br>";
    }
}
class GoPay {
    public function getStatus(){
        echo " Checking Gopay server ..."."<br>";
    }
    public function sendIssu(){
        echo "Issu sent ";
    }
}
$option ='Dana';
$payment=Null;
if($option =='GoPay'){
    $payment= new Gopay;
    $payment->getStatus();
    $payment->sendIssu();
}else if($option == 'Dana'){
    $payment = new Dana;
    $payment->getStatus();
    $payment->sendIssu();
}else {

}



?>