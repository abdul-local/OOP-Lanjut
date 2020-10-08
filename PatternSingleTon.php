<?php

class Database {

    // Bikin Wadah untuk menampung object. 
    private static $instance = null;
    public function __construct()
    {
        
    }
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function query($sql){
        echo " Mengekskusi {$sql} .."."<br>";
    }

}
$db1= Database::getInstance();
$db2= Database::getInstance();
$db3= Database::getInstance();
$db4= Database::getInstance();

if($db1 === $db2){
    echo "Sama"."<br>";
}
$db1->query("Select * form user")."<br>";
$db2->query("Select * form user")."<br>";
$db3->query("Select * form user")."<br>";
$db4->query("Select * form user")."<br>";


?>