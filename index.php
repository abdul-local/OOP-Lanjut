<?php
class myClass {
    public $mine;
    private $xpto;
    static protected $test;

    static function test(){
        var_dump(property_exists('myClass','xpto'));
    }
}
var_dump(property_exists('myClass','mine'));
var_dump(property_exists(new myClass,'mine'));
var_dump(property_exists('myClass','xpto'));
var_dump(property_exists('myClass','bar'));
var_dump(property_exists('myClass','test'));
myClass::test();

?>