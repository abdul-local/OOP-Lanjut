<?php
$artikel =[
    0=>[
        'title'=>'judul 1',
        'content'=>'Konten 1'
    ],
    1=>[
        'title'=>'Judul 2',
        'content'=>'konten 2'
    ],
    3=>[
        'title'=>'Judul 3',
        'content'=>'konten 3'
    ]
    ];
    $artikel = new ArrayObject($artikel);
    $artikel1=$artikel->getIterator();
    echo 'Indeks sekarang: '.$artikel1->current()['title']."<br>";
    // lalu kita majukan index
    $artikel1->next();
    echo 'maju satu index: '.$artikel1->current()['title']."<br>";

    // Reset ke 0
    $artikel1->rewind();

    echo "setelah di reset: ".$artikel1->current()['title']."<br>";


?>