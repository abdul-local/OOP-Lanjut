<?php
include_once("Notifier.php");
class EmailNotifier implements Notifier{
    public function notify()
    {
        echo"Notifikasi dengan menggunkan Email";
    }
}





?>