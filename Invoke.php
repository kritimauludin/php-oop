<?php

/* dua
 * __invoke() Function **
    ● __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai
    function
    ● Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis
    function __invoke() yang akan dieksekusi
 */

require_once "data/Student.php";
$student = new Student();
$student->id = "1";
$student->name = "kriti";
$student->value= 100;

$student(1,2,"kriti",4);