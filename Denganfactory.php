<?php
interface PaymentInterface {
    public function getStatus();
    public function sendIssue();
}

class CreditCard implements PaymentInterface {
    public function getStatus(){
        echo "Checking Credit Card server ..."."<br>";

    }
    public function sendIssue()
    {
        echo "Issu send!.. "."<br>";
    }
}
class Dana implements PaymentInterface {
    public function getStatus(){
        echo " Checking Dana server ..."."<br>";

    }
    public function sendIssue()
    {
        echo "Issu send!.. "."<br>";
    }
}
class GoPay implements PaymentInterface {
    public function getStatus(){
        echo "Checking GoPay server ..."."<br>";

    }
    public function sendIssue()
    {
        echo "Issu send!.. "."<br>";
    }
}
// buat class 
class PaymentFactory {
    // di method ini kita bikin konkrit class nya.
    public function getInstance($class){
        return new $class;
    }
}
$option='GoPay';
// instansiasi Pabrik beserta parameter class yang mau diproduki.
$PaymentFactory = new PaymentFactory();

$payment=$PaymentFactory->getInstance($option);
$payment->getStatus();
$payment->sendIssue();


?>