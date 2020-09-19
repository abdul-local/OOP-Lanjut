<?php
// buat clas s dengan nama DB
class DB {
    public function getConnection(){
        echo"Memanggil getConnection() ... "."<br>";

    }
    public function getConfig(){
        echo "Memanggil getConfig() ..."."<br>";
    }
}
// buat subclass dengan nama BaseModel
class Basemodel extends DB {
    // buat methode 
    public function select(){
        echo "Melakukan query select() "."<br>";
    }
    // buat methode untuk selectByid
    public function selectByid($id){
        echo "Melakukan query select by id - $id.."."<br>";
    }
    // buat method dengan nama insert
    public function insert(){
        echo "melakukan query insert()"."<br>";
    }
    // buat methode dengan nama update ()
    public function update(){
        echo "Melakukan query delete..."."<br>";
    }
    // buat method untuk delete
    public function delete(){
        echo "Melakuan query delete() "."<br>";
    }
}
// buat sublcass dari class BaseModel
class TransactionModel extends BaseModel {
    // buat method dengan nama getDailyReport
    public function getDailyReport(){
        echo "Menghasilkan daily report "."<br>";
    }
    // buat method dengan nama Montly report
    public function getMontlyReport(){
        echo "Menghasilkan Monly Report"."<br>";
    }
}
// buat subclass dengan class utama BaseModel
class UserModel extends Basemodel {
    // buat method untuk authentication
    public function auth(){
        echo "Melakukan authentication .."."<br>";
    }
    // buat method untuk changePaaword
    public function changePassword(){
        echo "Melakukan Penggantian Password ";
    }
    // buat method updateProfile
    public function updateProfile(){
        echo "Melakukan update password";
    }

}
// instansiasi
$tm = new TransactionModel();
$tm->getConnection();
$tm->getConfig();
$tm->select();
$tm->selectByid(2);
$tm->insert();
$tm->update();
$tm->delete();
$tm->getDailyReport();
$tm->getMontlyReport();