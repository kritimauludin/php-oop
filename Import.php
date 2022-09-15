<?php
/**
 * use Keyword
 * Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant dinamespace kita perlu menyebutkan nama namespace nya di awal
 * Jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak duplikasi dengan menyebut namespace yang sama berkali-kali
 * Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan menggunakan kata kunci use
 */

 require_once "data/Conflict.php";
 require_once "data/Helper.php";

 use Data\One\Conflict;
 use function Helper\helpMe;
 use const Helper\APPLICATION;

 $conflict1 = new Conflict();
 $conflict2 = new Data\Two\Conflict();

 helpMe();
 echo APPLICATION. PHP_EOL;