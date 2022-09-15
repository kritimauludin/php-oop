<?php
/*
 * Object Iteration
    ● Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang
    terdapat di object tersebut menggunakan foreach
    ● Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
    ● Secara default, hanya properties yang public yang bisa diakses oleh foreach
 */

/*
 * Iterator
    ● Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
    ● Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
    ● Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara
    manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu
    iterator yang menggunakan array sebagai data iterasi nya
    ● Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface
    IteratorAggregate, disana kita hanya butuh meng-override function getIterator() yang
    mengembalikan data Iterator
 */

class Data implements IteratorAggregate {
    var string $first = "First";
    public string $second = "Second";
    private string $third = "Third";
    protected string $fourth = "Fourth";

    // public function getIterator(): Traversable
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourth" => $this->fourth,
    //     ];
    //     return new ArrayIterator($array);
        
    // }
    /*
 * Generator
    ● Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
    ● Namun pembuatan Iterator secara manual sangatlah ribet
    ● Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara
    otomatis hanya dengan menggunakan kata kunci yield
 */
    public function getIterator(): Traversable
    {
      
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
        
    }
}

$data = new Data();

foreach($data as $property => $value){
    echo "$property : $value". PHP_EOL;
}