<?php
/*
 * Overloading
    ● Overloading adalah kemampuan secara dinamis membuat properties atau function
    ● Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
    ● Namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
    ● Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas
 */

 /*
  * Properties Overloading
    ● Saat kita mengakses properties, maka secara otomatis properties akan diakses
    ● Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara
    otomatis menjadikan itu error
    ● PHP akan melakukan fallback ke magic function
    ● Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic
    function tersebut
    ● Ada beberapa magic function yang bisa kita gunakan untuk properties overloading
  */

  /*
   * Function Overloading
    ● Saat kita mengakses function, maka secara otomatis function akan diakses
    ● Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis
    menjadikan itu error
    ● PHP akan melakukan fallback ke magic function
    ● Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic
    function tersebut
    ● Ada beberapa magic function yang bisa kita gunakan untuk function overloading
   */