<?php
include_once("Notifier.php");
class FaxNotifier implements Notifier{
    public function notify()
    {
        echo "Notifikasi dengan menggunakan Fax";
    }
}



?>