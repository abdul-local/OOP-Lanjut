<?php

class StaticTester {
    private static $id=0;
    function __construct()
    {
        self::$id +=1;
    }
    public static function checkIdFromStaticMethod(){
        echo " Current Id From Statict Method is ".self::$id."<br>";
    }
    public function checkIdFromNonStaticMethod(){
        echo"Current Id from Non Static Method is ".self::$id."<br>";
    }
    
}
$st1 = new StaticTester();
StaticTester::checkIdFromStaticMethod();
$st2 = new StaticTester();
$st1->checkIdFromStaticMethod();
$st1->checkIdFromNonStaticMethod();
$st2->checkIdFromStaticMethod();

$st3= new StaticTester();
StaticTester::checkIdFromStaticMethod();

?>