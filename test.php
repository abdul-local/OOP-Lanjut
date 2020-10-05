<?php

class Student {
    private $properties = array();
    public function __get($property)
    {
        return $this->properties[$property];
    }
    public function __set($property,$value){
        $this->properties[$property]="authoSet {$property} as: ".$value;
    }

 
}
$st= new Student();
$st->name="abdul";
$st->rol=18;
echo $st->name."<br>";
echo $st->rol;

?>