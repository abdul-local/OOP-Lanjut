<?php
$hostname = "localhost";
$username="root";
$password="";
$database="abdul";
$mysqli= new mysqli($hostname,$username,$password,$database);
// cek koneksi
if(mysqli_connect_errno()){
    printf("Connect failed: ",mysqli_connect_error());
    exit();
}
// magic quotes logic
if(get_magic_quotes_gpc()){
    function stripshes_deep($value){
        $value = is_array($value);
        stripcslashes($value);
        return $value;
    }
    $_POST = array_map('stripslashes_deep',$_POST);
$_GET = array_map('stripslashes_deep',$_GET);
$_COOKIE= array_map('stripslashes_deep',$_COOKIE);
$_REQUEST= array_map('stripslashes_deep',$_REQUEST);

}


?>