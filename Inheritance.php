<?php 

/**
 * Inheritance **
 * Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain
 * Dalam artian, kita bisa membuat class Parent dan class Child
 * Class Child, hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class Child
 * Saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent, secara otomatis akan dimiliki oleh class Child
 * Untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kunci extends lalu diikuti dengan nama class parent nya.
 */

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Kriti";
$manager->sayHello("Agus");

$vp = new VicePresident("Mauludin");
$vp->name = "Mauludin";
$vp->sayHello("Ahmad");