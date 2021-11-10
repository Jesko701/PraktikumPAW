<?php  
    $info = [
        'komputer mekanik' => 'Charles Babbage',
        'world wide web' => 'Tim Berners-Lee',
        'mesin uap' => 'James Watt'
    ];

    foreach ($info as $deskripsi => $nilai) : {
        echo "$nilai menemukan $deskripsi", PHP_EOL;
    } endforeach
?>