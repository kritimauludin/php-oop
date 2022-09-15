<?php
/*
 Trait

● Selain class dan interface, di PHP terdapat feature lain bernama trait
● Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
● Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
● Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class
dengan trait
● Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan
ulang di beberapa class
● Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use 
 */

 //konkrit function yaitu function yang body functionya terisi

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->hello("Kriti");
$person->goodBye("");

$person->name = "Mauludin";
var_dump($person);

$person->run();



