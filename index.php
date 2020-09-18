<?php
// buat program php tanpa paradigma OOP
function hitungluas($p,$l){
    return $p*$l;
}
function hitungkeliling($p,$l){
    return  2*($p+$l);
}
$panjang=10;
$lebar=5;
printf("luas: %s\n",hitungluas($panjang,$lebar));
printf("keliling: %s\n",hitungkeliling($panjang,$lebar));

// program php dengan pardigma OOP
class Persegipanjang {
    private $panjang;
    private $lebar;
    // buat method construct
    public function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        
    }
    // buat method luas
    public function luas(){
        return $this->panjang * $this->lebar ;

    }
    public function keliling(){
        return 2 * ($this->panjang * $this->lebar);
    }
   

}
$persegi = new Persegipanjang(10,5);
printf("hitung luas : %s \n",$persegi->luas());
class lingkaran{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function luas(){
        return 3.14 * $this->radius* $this->radius;
    }
    public function keliling(){
        return 2*3.14* $this->radius;
    }


}
$lingkaran1 = new lingkaran(7);
printf("luas: %s\n",$lingkaran1->luas());
printf("keliling: %s \n",$lingkaran1->keliling());

