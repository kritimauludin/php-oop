<?php
/**
 * Function dan Constant di Namespace **
 * Selain class, kita juga menggunakan function dan constant di namespace
 * Dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dengan diawali dengan nama namespace nya
 */

//  jika ingin seluruh file menggunakan namespace yang sama gunakan
 namespace Helper;

 function helpMe(): void{
    echo "HELP ME". PHP_EOL;
 }

 const APPLICATION = "PHP OOP";