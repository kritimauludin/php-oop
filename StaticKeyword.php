<?php
/*
 * static Keyword
    ● Kata kunci static adalah keyword yang bisa kita gunakan untuk membuat properties atau function
    di class bisa diakses secara langsung tanpa menginstansiasi class terlebih dahulu
    ● Namun ingat, saat kita buat static properties atau function, secara otomatis hal itu tidak akan
    berhubungan lagi dengan class instance yang kita buat
    ● Untuk cara mengakses static properties dan function sama seperti mengakses constant, kita bisa
    menggunakan operator ::
    ● static function tidak bisa mengakses function biasa, karena function biasa menempel pada class
    instance sedangkan static function tidak
 */

require_once "helper/MathHelper.php";

use Helper\MathHelper;

// $mathHelper = new MathHelper();
// echo $mathHelper->name . PHP_EOL; //erorr
echo MathHelper::$name. PHP_EOL;

MathHelper::$name = "Kriti";
echo MathHelper::$name. PHP_EOL;

//contoh implement
$result = MathHelper::sum(10, 15, 20, 35, 11);
echo "Result : $result". PHP_EOL;