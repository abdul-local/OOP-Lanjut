<?php
include_once("Database.php");
// $queryUsers="SELECT*FROM users WHERE id=4";
// $queryUsers="INSERT INTO users SET name='abdul'  ";
// $queryUsers="UPDATE users SET name='Hamzan' where id=10  ";
$queryUsers="DELETE from users where id=10  ";
$resultUsers=$mysqli->query($queryUsers);
if($resultUsers){
    // echo 'Berhasil menambahkan data';
    // echo 'Berhasil update data';
    echo 'Berhasil Delete data';
}else {
    // echo 'Gagal update data';
    echo 'Berhasil Delete data';
}

// $result=$resultUsers->fetch_assoc();
// print_r($result);

// echo "<p>{$result['name']}</p>";

?>