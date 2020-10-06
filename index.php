<?php

class foo{
    public function name(){
        echo "My name is " .get_class($this)."<br>";
    }
}

// buat sebuah object
$bar= new foo();

echo "Its name is ".get_class($bar)."<br>";

$bar->name();


class ParentClass{

}
class ChildClass extends ParentClass{

}
// buat objcet
$cc = new ChildClass();
if(is_a($cc,"ChildClass")) echo " It's a ChildClass Type Object ";
echo "<br>";
if(is_a($cc,"ParentClass")) echo "It's a also a ParentClass Type Object";

?>