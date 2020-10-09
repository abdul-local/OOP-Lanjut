<?php

interface Observer {

    public function send();
}

// Class / model yang mengurusi user.
class User {
    // Registrasi ..
    public function register() {
        echo "User berhasil didaftarkan!"."<br>";
    }
}


class Sms implements Observer {
    public function send(){
        echo " Mengirim SMS .."."<br>";
    }
}

class Whatsup implements Observer{

    public function send(){
        echo" Mengirim Whatsaap..."."<br>";
    }
}

class UserObserver {

    // wadah untuk menampung observer yang didaftarkan
    private $observers = [];

    public function attach($object){
        $this->observers[]=$object;
        return $this;

    }
    public function run(){
        foreach($this->observers as $observer){

            $observer->send();
        }
    }
}
$user = new User;

// inser data
$user->register();

$userobserver= new UserObserver;
$userobserver->attach(new Sms)->attach(new whatsup);
$userobserver->run();

?>