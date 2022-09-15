<?php

/*
 * Trait Conflict

    ● Jika kita menggunakan lebih dari satu trait, lalu terdapat function yang sama di trait tersebut
    ● Maka hal tersebut akan menyebabkan konflik
    ● Jika terjadi konflik seperti ini, kita bisa mengatasinya dengan menggunakan kata kunci insteadof
 */

 trait A{
    function doA(): void{
        echo "a". PHP_EOL;
    }

    function doB(): void{
        echo "a". PHP_EOL;
    }
 }

 trait B{
    function doA(): void{
        echo "A". PHP_EOL;
    }

    function doB(): void{
        echo "B". PHP_EOL;
    }
 }

class Sample {
    //apabila kepalang ada bentrok gunakan insteadof
    use A, B{        
        A::doA insteadOf B; //artinya untuk func doA kita akan mendahulukan trait A dibanding B
        B::doB insteadOf A; //artinya untuk func doB kita akan mendahulukan trait B dibanding A
    }
}

$sample = new Sample();

$sample->doA();
$sample->doB();