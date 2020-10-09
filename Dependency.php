<?php

/**
 * Class Report
 * 
 * Disini kumpulan kode untuk menangani report.
 */
// class Report {

//     // Mengambil total omzet berdasarkan bulan ..
//     public function getTotalOmzetByMonth() {
//         // Kode-kode query dst
//         echo "Get omzet, return array \n";
//     }

//     // Mengambil produk paling populer
//     public function getPopularProduct() {
//         // Kode-kode query dst
//         echo "Get popular product, return array \n";
//     }
// }

// $report = new Report;
// $report->getTotalOmzetByMonth();
// $report->getPopularProduct();

class PHPExel {
    public function export($data){
        echo "Exporting data to exel format..."."<br>";
    }
}

class Report{
  
        protected $phpexecel;

       public function __construct(PHPExel $phpexecel)
       {
           $this->phpexecel = $phpexecel;
       }
    // Mengambil total omzet berdasarka bulan
    public function getTotalOmzetByMonth(){
        $data=''; // Contoh saja, harusnya ada isinya
        $this->phpexecel->export($data);

        echo "Get popular OMZET, return exported exel path..."."<br>";
    }
    public function getPopularProduct(){
        $data=''; // Contoh saja, harusnya ada isinya
        $this->phpexecel->export($data);

        echo "Get popular product, return exported exel path..."."<br>";
    }
}
$report= new Report(new PHPExel);
$report->getTotalOmzetByMonth();
$report->getPopularProduct();


?>