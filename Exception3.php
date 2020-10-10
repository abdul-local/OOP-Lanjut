<?php
error_reporting(E_ALL);
ini_set('display_erros',1);

// Membuat Registerasi
class RegisterException extends Exception{
    public function __construct($message)
    {
        // modifikasi pesan, khusus register
        parent::__construct("Registration Failure".$message);
    }

}
// Membuat EmailExtention.
class EmailException extends Exception{
    public function __construct($message)
    {
        // modifikasi pesan, khusus register
        parent::__construct("Email Failure ".$message);
    }
}

class Registerasi  {
    public function save(){
        $save=true;

        if($save==false){
            throw new RegisterException('Email sudah terdaptar sebelumnya.');
        }

        // instantsiasi email
        $email= new Email();

        $email->send();

        return true;

    }
}
// handler Email
class Email{
    public function send(){
        $send=false;
        
        if($send==false){
            throw new EmailException('subject,from, and to mail not full');
        }
        return true;
    }
}

$register= new Registerasi;
try{
    $register->save();

}catch(RegisterException $r){
    echo $r->getMessage();

}catch(EmailException $e){
    $e->getMessage();

}
?>