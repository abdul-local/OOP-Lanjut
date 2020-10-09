<?php
// Dengan cara biasa Tanpa Facade Pattern
class Twitter {
    public function requestToken(){
        echo "Token requested!..."."<br>";
    }
    public function login(){
        echo "Redirect to Twitter Login Page .."."<br>";
    }
}

class Facebook {
    public function requestToken(){
        echo "Token requested!..."."<br>";
    }
    public function login(){
        echo "Redirect to Facebook Login Page .."."<br>";
    }
}
class Google {
    public function requestToken(){
        echo "Token requested!..."."<br>";
    }
    public function login(){
        echo "Redirect to Google Login Page .."."<br>";
    }
}
// Sekarang kita akan simulasi keinginan users. Ceritanya user memilih mau login dengan apa.
// Ini hanya kode contoh, misalnya kode ini ada di sebuah Controller (Jika menggunakan Framework)
// Bisa juga studi kasus pada PHP Native, tanpa framework, berarti ada di sebuah file.
// Request bisa jadi datang dari POST/GET pada tombol halaman login.
// $userOption ='Google';
// if($userOption=='Google'){
//     $login = new Google;
//     $login->requestToken();
//     $login->login();
// }else if ($userOption == 'Twitter'){
//     $login = new Twitter;
//     $login->requestToken();
//     $login->login();
// }else{
//     $login=new Facebook;
//     $login->requestToken();
//     $login->login();
// }

class LoginFacade{
    public $brand;
    public function setBrand(string $brand){
        $this->brand = $brand;
        return $this;
    }

    // Method untuk menjalankan class real nya.
    public function run(){
        // cukup begini, sama dengan `new Facebook` dst
        $brand= new $this->brand;
        // Request token
        $brand->requestToken();

        $brand->login();
    }

}
$userOption = 'Twitter';
$login = new LoginFacade;
$login->setBrand($userOption)->run();

?>