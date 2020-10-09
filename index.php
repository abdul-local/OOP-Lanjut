<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use \RedBeanPHP\R as R;
R::setup('mysql:host=localhost;dbname=abdul','root','');

// insert
// $user = R::dispense('users');// Setting table : users.
// $user->name = 'Budi';
// $id = R::store($user);
// echo "{$user->name} berhasil terdaptar dengan id {$id} "."<br>";

// kita coba select data
// $user= R::load('users',1);
// print_r($user);

//menampilkan data
// $users = R::findAll('users');
// print_r($users);

// Update Data
// $user = R::findOne('users','name = ?',['Budi']);//cari user bernama Budi

// $user->name ='Muhammad';// Set nama jadi Muhammad

// R::store($user); // Simpan
// print_r($user);

// Delete Data

$user=R::findOne('users','name =? ',['Muhammad']);
R::trash($user);


?>