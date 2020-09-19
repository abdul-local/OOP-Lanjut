<?php
// buat class dgn nama mobil
class mobil{
    // buat sebuah varivel dengan nama statusbensin
    private $statusbensin= false;
    // buat sebuah method dengan naman isi bensin
    public function isibensin(){
        $this->statusbensin = true;

    }
    // buat method dengan nama nayalakan mobil
    public function nyala(){
        if($this->isibensin()){
            return "Mobil sudah bisa jalan";
        }else {
            return "Mobil tidak ada bensin";
        }
    }
}

// buat instansi object dengan nama mobil saya
$mobilsaya = new mobil();
// cetak isi bensin
echo $mobilsaya->isibensin();
echo $mobilsaya->nyala();