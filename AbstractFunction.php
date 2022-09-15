<?php
/**
 * Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class abstract tersebut
 * Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk function tersebut
 * Artinya, abstract function wajib di override di class child
 * Abstract function tidak boleh memiliki access modifier private
 */

 require_once "data/Animal.php";

 //cara akses
 use Data\{Location, Cat, Dog};

 $cat = new Cat();
 $cat->name = "Zilo";
 $cat->run();
 
 $dog = new Dog();
 $dog->name = "Sky";
 $dog->run();