<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use \RedBeanPHP\R as R;
R::setup('mysql:host={localhost};dbname={mysql}','{root}','');

// insert
$user = R::dispense('users');// Setting table : users.
$user->name = 'Budi';
$id = R::store($user);
echo "{$user->name} berhasil terdaptar dengan id {$id} ";


?>