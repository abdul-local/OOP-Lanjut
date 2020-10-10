<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// $url='https://www.codepolitan.com';

// try{
//     echo file_get_contents($url);

// }catch(Throwable $t){
//     echo $t->getMessage();
// }


// echo file_get_contents($url);

// Ceritanya diambil dari Post FORM
// sengaja kita salahakan value yang sharunya int menjadi string
$_POST['fee'] = 'Sample wrong value';

function calculateBonus(string $name,int $fee,int $month){
    echo 'Nama : '.$name ."<br>";
    echo 'Bonus :'.number_format($fee*$month);
}
// calculateBonus('abdu',$_POST['fee'],12);

try{
    calculateBonus('Abdul',$_POST['fee'],12);
}catch(Throwable $t){
    echo 'Pastikan semua field mngikuti tipe data yang benar.';
}

?>