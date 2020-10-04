<?php 
// abstract class CoordinateAbstract {
//     private $x =10;
//     private $y = 50;

//     public function getX(){
//         return $this->x;

//     }
//     public function getY(){
//         return $this->y;
//     }
//     abstract public function showMessage();
// }
// class MouseCoordinate extends CoordinateAbstract {
//     public function showMessage()
//     {
//         echo " Ini adalah pesan dari Mouse Courdinate"."<br>";
//     }
// }
// class GPSCordinate extends CoordinateAbstract {
//     public function showMessage()
//     {
//         echo " Ini adalah pesan dari GPS Coordinate"."<br>";
//     }
// }
// $mc = new MouseCoordinate();
// echo $mc->getX()."<br>";
// echo $mc->getY()."<br>";
// echo $mc->showMessage();

// $gps = new GPSCordinate();
// echo $gps->getX()."<br>";
// echo $gps->getY()."<br>";
// echo $gps->showMessage();

// $coord= new  CoordinateAbstract();
// $coord->getX()."<br>";
// $coord->getY()."<br>";
// $coord->showMessage();

// buat abstract class
abstract class MouseAbstract {
    private $weight=10;
    // buat sebuah method
    public function leftClick(){
        echo" Klik kiri dijalankan "."<br>";
    }
    public function RightClick(){
        echo " Klik kanan dijalankan"."<br>";
    }
    abstract public function scroll();
}
interface IGamingMouseFeature {
    public function upVulume();
    public function downVolume();
    public function connectToWireless();
}
class ClassicMouse extends MouseAbstract {
    public function scroll(){
        echo "Melakukan scroll di dalam classic mouse"."<br>";
    }
}
class GamingMouse extends MouseAbstract implements IGamingMouseFeature {
    public function scroll(){
        echo "Mlakukan scrol di dalam gaming mouse "."<br>";
    }
    public function upVulume()
    {
        echo " call upVolume() !"."<br>";
    }
    public function downVolume()
    {
        echo " call downVolume() !"."<br>";
    }
    public function connectToWireless()
    {
        echo " call connectToWireles() "."<br>";
    }
}
$m=new ClassicMouse();
echo $m->leftClick()."<br>";
echo $m->RightClick()."<br>";
echo $m->scroll()."<br>";

$gm=new GamingMouse();
echo $gm->leftClick()."<br>";
echo $gm->RightClick()."<br>";
echo $gm->downVolume()."<br>";
echo $gm->upVulume()."<br>";
echo $gm->scroll()."<br>";
echo $gm->connectToWireless()."<br>";


?>