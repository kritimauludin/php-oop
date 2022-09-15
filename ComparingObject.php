<?php
/*
 * Comparing Object
    ● Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan
    operator == (equals) dan === (identity)
    ● Operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap
    properties juga akan dibandingkan menggunakan operator == (equals)
    ● Sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya
    mengacu ke object yang sama
 */

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "kriti";
$student1->value= 100;
$student1->setSample("XXX");

$student2 = new Student();
$student2->id = "1";
$student2->name = "kriti";
$student2->value= 100;
$student2->setSample("XXX");

var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);