<?php
class Car {

    private $wheel;
    private  $machine;
    private  $seat;
    // buat method dengan nama setWheel
    public function setWheel($wd){
        $this->wheel = $wd;
    }
    // buat method dengan nama setmachine
    public function setmachine($machine){
        $this->machine = $machine;
    }
    // buat method dengan nama setseat
    public function setseat($seat){
        $this->seat = $seat;
    }
    // buat method dengan ama getwheel
    public function getwheel(){
        return $this->wheel;
    }
    // buat method dengan nama getmachine
    public function getmachine(){
        return $this->machine;

    }
    // buat method dengan nama getseat
    public function getseat(){
        return $this->seat;
    }
    

}
// buat sub class dengan nama truc
class Truct extends Car {
    // buat method construct
    public function __construct()
    {
        echo "Object Truct di buat .. "."<br>";
    }

}
// buat subclass dengan nama Excavator
class Excavator extends Car {
    public function __construct()
    {
        echo " Object Excavator dibuat .."."<br>";
    }

}
// buat subclass dengan nama Sport cart
class SportCar extends Car {
    public function __construct()
    {
        echo " Object SportCar dibuat .."."<br>";
    }
}

// instansisasi 
$t = new Truct();
 $t->setWheel(6);
 $t->setmachine("mesin Truct");
 $t->setseat(2);

 echo "Wheel :".$t->getwheel()."<br>";
 echo "machine: ".$t->getmachine()."<br>";
 echo "seat: ".$t->getseat()."<br>";

 $e= new Excavator();
//  $e->setWheel(3);
//  $e->setmachine("sport mobil");
//  $e->setseat(3);

$wheel = 20;
$machine ="car asu";
$seat=2;

echo $wheel;
 
 echo "Wheel: ".$e->getwheel()."<br>";
 echo "machine: ".$t->getmachine()."<br>";
 echo "seat: ".$t->getseat()."<br>";

 


?>