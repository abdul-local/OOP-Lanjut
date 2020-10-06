<?php  

spl_autoload_register(function($class_name){
    include 'models/'.$class_name.'.php';

});
$p= new Posts();
$p->select();
$c= new PostsCategory();
$c->select();


?>