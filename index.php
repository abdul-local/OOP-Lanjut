<?php
// buat class baru dengan nama persegi 
class Persegi {
    // buat modifier public

    protected $panjang;
    protected $lebar;
    // buat method construct
    public function __construct($p,$l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    // buat method dengan nama luas
    public function luas(){

        return $this->panjang * $this->lebar ;

    }
    // buat methd dengan nama keliling
    public function kelilig(){
        return 2 *($this-> panjang + $this->lebar );
    }
    
}
// buat class baru dengan nama balok dari kelas utamanya
class Balok extends Persegi {
    public $tinggi ;
    public function __construct($p,$l,$t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    // buat method dengan nama luas
    public function volume(){
        return $this->panjang * $this->lebar * $this->tinggi ;
    }
    // buat method baru dengan nama keliling
    public function luas(){
      return (4 * ($this->panjang * $this->lebar ) ) + (2 * ( $this->lebar * $this->lebar ));
    }
}
$hitungan = new Balok(10,5,2);
echo $hitungan->volume()."<br>";
echo $hitungan->luas()."<br>";

// $hitungan->panjang = 20;
// $hitungan->lebar = 10;
$hitungan->tinggi = 5;

echo $hitungan->luas()."<br>";
echo $hitungan->volume()."<br>";
?>