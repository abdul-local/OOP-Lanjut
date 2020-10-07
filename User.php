<?php
include_once("EmailNotifier.php");
include_once("FaxNotifier.php");
include_once("SmsNotifier.php");

class User {
    public function getNotified(){
        return 'email';
    }
}

// instance objectnya
$user = new User();
$notifier=$user->getNotified();
switch ($notifier){
    case 'email':
        $objNotifier = new EmailNotifier();
    break;
    case 'sms': 
        $objNotifier = new SmsNotifier();
    break;
    case 'fax': 
        $objNotifier = new FaxNotifier();
    break;
}
$objNotifier->notify();


?>