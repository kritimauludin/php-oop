<?php
/*
 * Magic Function
    ● Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
    ● Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
    ● Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai
    constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
    ● Masih banyak magic function lainnya, kita bisa melihatnya di link berikut :
    https://www.php.net/manual/en/language.oop5.magic.php
 */


/* Satu
 * __toString() Function **
    ● __toString() function merupakan salah satu magic function yang digunakan sebagai representasi
    string sebuah object
    ● Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
 */

/* dua
 * __invoke() Function **
    ● __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai
    function
    ● Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis
    function __invoke() yang akan dieksekusi
 */

/* tiga
 * __debugInfo() Function
    ● Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
    ● Function var_dump() sebenarnya memanggil function __debugInfo()
    ● Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
 */