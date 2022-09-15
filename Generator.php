<?php
/*
 * Generator
    ● Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
    ● Namun pembuatan Iterator secara manual sangatlah ribet
    ● Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara
    otomatis hanya dengan menggunakan kata kunci yield
 */

function getGenap(int $max): Iterator {
    $array = [];

    for($i=1; $i<=$max; $i++){
        if($i % 2 == 0){
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}


foreach(getGenap(100) as $value){
    echo "Genap : $value". PHP_EOL;
}

//dengan generator keyword yield
function getGanjil(int $max): Iterator {
    for($i=1; $i<=$max; $i++){
        if($i % 2 == 1){
            yield $i;
        }
    }
}

foreach(getGanjil(100) as $value){
    echo "Ganjil : $value". PHP_EOL;
}