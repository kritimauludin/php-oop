<?php
/**
 * Saat kita membuat class, kita bisa menjadikan sebuah class sebagai abstract class.
 * Abstract class artinya, class tersebut tidak bisa dibuat sebagai object secara langsung, hanya bisa diturunkan
 * Untuk membuat sebuah class menjadi abstract, kita bisa menggunakan kata kunci abstract sebelum kata kunci class
 * Sehingga Abstract Class bisa kita gunakan sebagai kontrak child class
 */

 require_once "data/Location.php";

 use Data\{Location, City, Province, Country};

//  $location = new Location(); //erorr

//jika ingin memakai objeknya kita harus gunakan child classnya
$province = new Province();
$city = new City();
$country = new Country();