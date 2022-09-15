<?php

/**
 * Kadang kita ada kebutuhan untuk menduplikasi sebuah object
 * Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties di object awal ke object baru
 *  Untungnya PHP mendukung object cloning
 *  Kita bisa menggunakan perintah clone untuk membuat duplikasi object
 *  Secara otomatis semua properties di object awal akan di duplikasi ke object baru
 */

 require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "kriti";
$student1->value= 100;
$student1->setSample("XXX");

var_dump($student1);

//object clone with keyword clone
$student2 = clone $student1;
var_dump($student2);

//cara manual clone
// $student2 = new Student();
// $student2->id = $student1->id;
// $student2->name = $student1->name;
// $student2->value= $student1->value;

//alur function __clone();
//$student1 => clone $student2=> $student2->__clone();