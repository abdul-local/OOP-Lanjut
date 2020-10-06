<?php
class Hewan {
    public $nama;
    public $kategori;
}
// membuat instance object
$objectHewan = new Hewan();
$objectHewan->nama="singa";
$objectHewan->kategori="Hewan Liar";
// mengclone Object asli
$objectClone= clone $objectHewan;
$objectClone->nama="Serigala";
$objectClone->kategori="Hewan Liar";
print_r($objectHewan)."<br>";
print_r($objectClone);




?>