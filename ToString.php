<?php
/* 
 * __toString() Function **
    ● __toString() function merupakan salah satu magic function yang digunakan sebagai representasi
    string sebuah object
    ● Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
 */
require_once "data/Student.php";
$student1 = new Student();
$student1->id = "1";
$student1->name = "kriti";
$student1->value= 100;

$string = (string)$student1;
echo $string. PHP_EOL;
echo $student1. PHP_EOL;