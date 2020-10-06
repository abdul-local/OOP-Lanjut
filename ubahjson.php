<?php
$array = [
    'hewan_liar'=>[
        'serigala',
        'singa',
        'Macam',
        'Beruang',
        'Ular'
    ]
    ];
    $object=json_decode(json_encode($array));
    // print_r($object);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubahjson</title>
</head>
<body>
    <?php foreach($object->hewan_liar as $hewan): ?>
        <?= $hewan ?>
    <?php endforeach ?>
</body>
</html>