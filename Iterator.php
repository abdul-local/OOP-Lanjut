<?php
// sebuah data koleksi artikel
$articles = [
    0=>[
        'title'=>'Judul 1',
        'content'=>'Kontent 1'
    ],
    1=>[
        'title'=>'Judul 2',
        'content'=>'Kontent 2'
    ],
    3=>[
        'title'=>'Judul 3',
        'content'=>'Kontent 3'
    ],
    
    
];
// mengoversi data array menjadi object.
$articles = new ArrayObject($articles);

// Mengimplementasikan Iterator pada Array tersebut dengan method getIterator
$object = $articles->getIterator();
print_r($object);
// Maka sampai disini array kita sudah berubah menjadi object yang support iterator.
// Sekarang kita coba looping ya dengan iterator method.
while ($object->valid())
{
    if($object->current()['title'] == 'Judul 2')// kalau ketemu Judul 2
    unset($articles[$object->key()]);// Hapus
    $object->next();
}

// kasih batas
echo "\n";
print_r($articles);

?>