<?php
/**
 * Namespace **
 * Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
 * Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis-jenis class
 * PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace
 * Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama namespace nya
 * Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama tidak akan menjadikan error di PHP
 */

 /*
  * Global Namespace **
  * Secara default saat kita membuat kode di PHP sebenarnya itu disimpan di global namespace
  * Global namespace adalah namespace yang tidak memiliki nama namespace

  bisa menggunakan
  namespace {

  }
  */

 require_once "data/Conflict.php";
 require_once "data/Helper.php";

 $conflict1 = new \Data\One\Conflict;
 $conflict2 = new \Data\Two\Conflict;

 Helper\helpMe();
 echo Helper\APPLICATION. PHP_EOL;