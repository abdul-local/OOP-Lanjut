<?php
abstract class DBDriver {

    public function connect();
    public function executeQuery();
    public function insert_id();

    public function setHost($host){
        // Set db host
    }
    public function setUserName($user){
        {
            // Set User name
        }
    }
    public function setPassword($pwd){
        // set password
    }

}
class MySQLManager extends DBDriver {
    public function connect()
    {
        //
    }
    public function executeQuery()
    {
        
    }
    public function insert_id()
    {
        
    }
}



?>