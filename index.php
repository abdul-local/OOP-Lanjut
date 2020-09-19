<?php
// buat class baru dengan nama persegi 
class Persegi {
    // buat modifier public 
    public $panjang;
    public $lebar;
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
// buat instansiasi dengan nama hitung
    $hitung = new Persegi (5,10);
    echo $hitung->luas()."<br>";
    echo $hitung->kelilig()."<br>";


    $hitung->panjang =20;
    $hitung->lebar = 10;
    echo $hitung->luas()."<br>";
    echo $hitung->kelilig()."<br>";


?>