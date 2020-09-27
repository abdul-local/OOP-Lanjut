<?php 
error_reporting(E_ALL);
ini_set('display_errors',1);
// Interface pada sebuah CRUD
interface Crud{
    // buat method
    public function insert();
    public function update();
    public function select();
    public function delete();
    
}
// buat interface baru lagi
interface Wife{
    public function wife();
}

//Buat class yang mengurui data Posts, misalnya Artikel
class Posts implements Crud,Wife{
    // buat method insert
    public function insert(){
        echo " call method insert ..\n";
    }
    // buat method untuk update
    public function update(){
        echo " call method update ..\n";
    }
    // buat method untuk select
    public function select()
    {
        echo "call method select ..\n";
    }
    // buat method delete
    public function delete()
    {
        echo "call method delete ..\n";
    }
    // buat method wife
    public function wife(){
        echo "call method wife ..\n";
    }


}


$post = new Posts();
$post->insert();
$post->update();
$post->select();
$post->delete();
$post->wife();
?>