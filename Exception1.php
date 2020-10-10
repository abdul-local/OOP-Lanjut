<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class Scrapper {
    public $url;
    public $output;

    // bikin konstruktor yang set URL
    public function __construct(string $url)
    {
        $this->url = $url;
    }
    // Menjalankan scrapper
    public function run(){
        $this->output = file_get_contents($this->url);
        if(empty($this->output)){
            throw new Exception('URL tidak valid, atau konten gagal dimuat');
        }
        return $this->output;
    }
}
// Mari kita coba 
try {
    $scrapper = new Scrapper('https://martinfowler.com');
    
    echo $scrapper->run();

}catch (Exception $exception){
    echo $exception->getMessage();

}finally{
    echo '<div>Bagian ini akan selalu terekskusi </div>';

}





?>