<?php
// buat class dengan nama DB
class Db {
    //buat variable
    private $statusconnection = "close";
    // buat method construct
    public function __construct()
    {
        $this->statusconnection = "Connecting";
    }
   // buat method dengan nama connect
    public function connect(){
        $this->statusconnection = "Open";
    }
   // buat method denga nama getstatus Connection
    public function getstatusconnection(){
        return $this->statusconnection;
    }
    // buat method dengan __destruct 
    public function __destruct()
    {
        $this->statusconnection = "close";
        echo "status : ".$this->statusconnection;
    }

}
// buat instansiasi  object dengan ama db
$db = new Db();
echo $db->getstatusconnection()."<br>";
echo $db->connect()."<br>";
echo $db->getstatusconnection()."<br>";

//buat class baru dengan nama controller
class controller {
    // buat method consrtuct
    public function __construct()
    {
        echo "Ini dalam construct broo"."<br>";
    }

}
// buat sub class dengan nama homecontroller 
class homecontrollr extends controller {
    // buat method baru dengan nama consdtruct
    public function __construct()
    {
        parent::__construct();
        echo "Ini dalam Construct broo"."<br>";
    }
}
// instansi dengan nama abdul
$abdul = new homecontrollr();