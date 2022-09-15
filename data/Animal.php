<?php
/**
 * Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class abstract tersebut
 * Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk function tersebut
 * Artinya, abstract function wajib di override di class child
 * Abstract function tidak boleh memiliki access modifier private
 */

namespace Data;

require_once "Food.php";

abstract class Animal {
    public string $name;

    //jika diisi bodynya akan error
    abstract public function  run(): void;

    public abstract function eat(AnimalFood $animalFood): void;//for demo contravariance
}

//sehingga jika ingin menggunakan animal perlu mengoverride function run
class Cat extends Animal {
    public function run(): void
    {
        echo "Cat $this->name is running". PHP_EOL;
    }

    //kita perlu mengoveride function eat
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating whiskes". PHP_EOL;
    }
}

class Dog extends Animal{
    public function run(): void
    {
        echo "Dog $this->name is running". PHP_EOL;
    }

    /*
    * Contravariance
        ● Sedangkan contravariance adalah memperbolehkan sebuah child class untuk membuat function
        argument yang lebih tidak spesifik dibandingkan parent nya
    */

    //karena anjing mungkin saja memakan daging sehingga parameternya akan diganti dari AnimalFood menjadi Food
    //dicovariance yg parent class kita jadikan child sedangkan di contravariance child class kita jadikan parent ini dibolehkan diphp
    public function eat(Food $animalFood): void
    {
        echo "Dog is eating". PHP_EOL;
    }
}