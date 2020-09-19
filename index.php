<?php
class lingkaran{
    // dekalarasikan variabel
    const PHI =3.14;
    public $luas;
    public $jari;
    // buat method
    public function setjari($jari2){
        $this->jari = $jari2;

    }
    // buat method hitung
    public function hitung(){
        return self::PHI * $this->jari * $this->jari;
    }

}
$h= new lingkaran ();
$h->setjari(10);
echo $h->hitung();



?>