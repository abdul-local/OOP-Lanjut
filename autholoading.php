<?php
spl_autoload_register(function($class_name){
    include $class_name.'.php';
});
$clsA= new classA();
$clsB= new ClassB();
$clsA->showMessage();
$clsB->showMessage();



?>