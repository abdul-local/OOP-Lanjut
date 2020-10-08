<?php
class Database {
    public function __construct()
    {
        
    }
    public function query($sql){
        echo "Mengeksekusi {$sql} ..."."<br>";

    }
   
}

$db = new Database ();
        
    $db->query("SELECT * FROM users");


?>