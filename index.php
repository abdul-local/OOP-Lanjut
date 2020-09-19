<?php
// buat class baru dengan nama hero
class hero {
    // buat variabel
    protected $healthpoint;
    protected $magicpoint;
    protected $name;
    // buat method dengan nama shir
    public function shiri(){
        echo "$this->name  menyerang dengan sihir"."<br>";
    }
    // buat method dengan nama serang
    public function nyerang(){
        echo "$this->name menyerang dengan biasa "."<br>";

    }
    // buat method dengan nama tahan
    public function tahan(){
        echo "$this->name Bertahan dari serangan musuh"."<br>";
    }
    // buat method dengan nama gethealtpoint
    public function gethealtpoint(){
       return $this->healthpoint;
    }
    // buat method untuk getmagicpoint
    public function getmegicpoint(){
        return $this->magicpoint;
    }
}
// buat sub class denga nama goku
class songoku extends hero {
    // buat method costruct
    public function __construct()
    {
        $this->name = "Son Goku dragon ball";
        $this->healthpoint=2000;
        $this->magicpoint =1800;
        
    }
}
// buat sub class baru dengan nama narut
class naruto extends hero {

   // buat method construct
   public function __construct()
   {
       $this->name = "naruto sipuden";
       $this->healthpoint=1700;
       $this->magicpoint=2000;
   }
    

}
// buat class baru dengan nama avatar
class avatar extends hero {
    // buat method construct
    public function __construct()
    {
        $this->name ="avatar ang ";
        $this->healthpoint=1500;
        $this->magicpoint=1700;
    }
}
// buat sebuah instansiasi object
$dragonball = new songoku();
$dragonball->shiri();
$dragonball->nyerang();
$dragonball->tahan();
echo "Hp: ".$dragonball->gethealtpoint()."<br>";
echo "Mh: ".$dragonball->getmegicpoint()."<br>";

// buat sebuah instansiasi object
$naruto1 = new naruto();
$naruto1->shiri();
$naruto1->nyerang();
$naruto1->tahan();
echo "Hp: ".$naruto1->gethealtpoint()."<br>";
echo "Mh: ".$naruto1->getmegicpoint()."<br>";




?>