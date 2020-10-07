<?php
include_once("Notifier.php");
class SmsNotifier implements Notifier{
    public function notify()
    {
        echo"Notifikasi dengan menggunakan SMS " ;
    }
}

?>