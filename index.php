<?php
// contoh studi kasuss override
// buat class
class Animal {
    // buat method dengan nama speek
    public function speek(){
        echo " Hewan sedang Bersuara "."<br>";
    }
}
// buat sublass dari class utama dengan nama dog
class Dog extends Animal {
    // buat method dengan nama yang sama dari class utama
    public function speek(){
        echo "Gok gok gok gok gok gok ";
    }
    // buat function baru dengan nama acong
    public function acong(){
        parent::speek();
        $this->speek();
    }
}
$anjay = new Dog();
$anjay->speek()."<br>";
$anjay->acong()."<br>";






?>