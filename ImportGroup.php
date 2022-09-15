<?php
/**
 * Group use Declaration
 * Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
 * PHP memiliki fitur grup use, dimana kita bisa import beberapa class, function atau constant dalam satu perintah use
 * Untuk melakukan itu, kita bisa menggunakan kurung { }
 */


require_once "data/Conflict.php";
require_once "data/Helper.php";

 use Data\One\{Conflict as Conflict1 , Sample, Dummy};
 use function Helper\{helpMe};
 use const Helper\APPLICATION as APP;

 $conflict1 = new Conflict1();
 $sample = new Sample();
 $dummy = new Dummy();

 helpMe();
 echo APP. PHP_EOL;