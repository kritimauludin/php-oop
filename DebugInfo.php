<?php
/* tiga
 * __debugInfo() Function
    ● Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
    ● Function var_dump() sebenarnya memanggil function __debugInfo()
    ● Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
 */

require_once "data/Student.php";
$student = new Student();
$student->id = "1";
$student->name = "kriti";
$student->value= 100;
$student->setSample("XXX");

var_dump($student);