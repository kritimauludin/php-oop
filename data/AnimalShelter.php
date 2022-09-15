<?php
/*
 * Covariance
    ● Saat kita meng override function dari parent class, biasanya di child class kita akan membuat
    function yang sama dengan function yang di parent
    ● Covariance memungkinkan kita meng override return function yang di parent dengan return value
    yang lebih spesifik
 */
namespace Data;

require_once "Animal.php";

interface AnimalShelter {
    public function adopt($name): Animal;
}

class CatShelter implements AnimalShelter {
    //demo Covariance
    //dibanding mengembalikan nilai animal yg general, kita bisa gunakan spesifik yg merupakan kelas turunannya
    //dalam kasus ini kita gunakan class cat yang merupakan turunan dari Animal
    public function adopt($name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter{
    //demo Covariance

    //dibanding mengembalikan nilai animal yg general, kita bisa gunakan spesifik yg merupakan kelas turunannya
    //dalam kasus ini kita gunakan kembalian class dog yang merupakan turunan dari Animal
    public function adopt($name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}