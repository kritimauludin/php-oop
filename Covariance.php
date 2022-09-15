<?php
/*
 * Covariance
    ● Saat kita meng override function dari parent class, biasanya di child class kita akan membuat
    function yang sama dengan function yang di parent
    ● Covariance memungkinkan kita meng override return function yang di parent dengan return value
    yang lebih spesifik
 */

require_once "data/Food.php";
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\AnimalFood;
use Data\CatShelter;
use Data\DogShelter;
use Data\Food;

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Zilo");
$cat->eat(new AnimalFood()); //demo contravariace

$dogShelter = new DogShelter;
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food()); //demo contravariace