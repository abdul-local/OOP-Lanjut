<?php
class MyIterator{

    private $position = 0;
    private $data;
    public function __construct($data)
    {
        $this->position = 0;
        // masukan param data ke property
        $this->data = $data;

    }
    public function rewind(){
        $this->position = 0;
    }
    public function current(){

        return $this->data[$this->position];
    }
    public function key(){
        return $this->position;
    }
    public function next(){
        ++$this->position;
    }
    public function prev(){
        --$this->position;
    }
    public function valida(){
        return isset($this->data[$this->position]);
    }
    // Method tambah .. tidak ada pada default iterator arrayobject
    public function remove($position){
        unset($this->data[$position]);
    }
}
// Kita punya data yang sama, mirip seperti cara pertama. Yaitu data articles.
$articles = [
    0 => [
        'title' => 'Judul 1',
        'content' => 'Konten 1'
    ],
    1 => [
        'title' => 'Judul 2',
        'content' => 'Konten 2'
    ],
    2 => [
        'title' => 'Judul 3',
        'content' => 'Konten 3'
    ]
];
$object = new MyIterator($articles); // pasing artikel
echo 'Index sekarang : '.$object->current()['title']."<br>";

$object->next();

echo 'Maju satu Index :'.$object->current()['title']."<br>";

$object->prev();
echo 'Mundur satu index :'.$object->current()['title']."<br>";

// di reset ke kondisi awal
$object->rewind();

// kita cetak lagi
echo 'Setelah di reset: '.$object->current()['title']."<br>";
// menghapus index pertama
$object->remove(1);

// cetak datanya
print_r($object);

?>