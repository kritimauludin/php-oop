<?php
/*
 * DateTime
    ● Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu,
    termasuk di PHP
    ● Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
    ● Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data
    waktu
 */

 $dateTime = new DateTime();
 $dateTime->setDate(2002, 6, 5);
 $dateTime->setTime(10, 40, 10, 0);

/*
  * DateInterval
    ● Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1
    tahun, atau mengurai beberapa hari
    ● Hal ini bisa dilakukan dengan function add milik DateTime
    ● Namun function add tersebut menerima parameter berupa DateInterval
    ● Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah
    interval
    ● Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php
    ● Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period
*/
$dateTime->add(new DateInterval("P1Y")); //artinya menambah periode 1 tahun

$minusOneMonth = new DateInterval("P1M"); //artinya menambah periode 1 bulan
$minusOneMonth->invert = true; //artinya periode bulan dibalikan

$dateTime->add($minusOneMonth);
var_dump($dateTime);

/*
 * DateTimeZone
    ● Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai
    dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
    ● Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime
 */
$nowInAmericaToronto = new DateTime();
$nowInAmericaToronto->setTimezone(new DateTimeZone("America/Toronto"));

var_dump($nowInAmericaToronto);

/*
 * Format DateTime
    ● Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
    ● Hal ini bisa kita lakukan menggunakan function format()
    ● Function format() menerima argument berupa format string, ini bisa kita gunakan untuk
    memanipulasi cara kita menampilkan string format waktu
    ● Untuk detailnya kita bisa lihat di halaman dokumentasi resminya
    ● https://www.php.net/manual/en/datetime.format.php
 */
$string = $nowInAmericaToronto->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string". PHP_EOL;

/*
 * Parse DateTime
    ● Selain format DateTime menjadi string, di PHP juga kita bisa melakukan hal sebaliknya, yaitu
    memparsing string menjadi DateTime sesuai dengan format yang kita mau
    ● Untuk melakukan itu, kita bisa menggunakan static function createFromFormat() dari class
    DateTime
*/
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2022-12-12 12:12:12", new DateTimeZone("Asia/Jakarta"));
// $date = DateTime::createFromFormat("Y-m-d H:i:s", "salah", new DateTimeZone("Asia/Jakarta"));
if($date) {
    var_dump($date);
} else {
    echo "Format salah". PHP_EOL;
}