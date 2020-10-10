<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

// Membuat fungsi read, isinya program untuk membaca file baris per baris
function read($file){
    $output= null;

    if(!file_exists($file)){
        // return false; // kembalikan false Bool.
        throw new Exception('File tidak ditemukan'); // Throw exception
    }
    $open= fopen($file,"r");

    // fclose($file);// tutup koneksi

    return fread($open, filesize($file)); // kembalikan output

}
try {
    $read = read("material1.txt");

}catch(Exception $exception){
    // Exception pada parameter adalah class type hinting, baca tentang type hinting.
    // Blok ini akan tereksekusi jika ada Exception. Disini kita instansiasi Exception
    echo $exception->getMessage(); // Take pesan dengan method getMessage. Build-in di class Exception
}


?>