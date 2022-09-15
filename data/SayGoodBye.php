<?php
/*
 Trait

● Selain class dan interface, di PHP terdapat feature lain bernama trait
● Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
● Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
● Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class
dengan trait
● Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan
ulang di beberapa class
● Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use 
 */

 //konkrit function yaitu function yang body functionya terisi

 namespace Data\Traits;

 /*
    Trait Properties

    ● Berbeda dengan interface, di trait, kita bisa menambahkan properties
    ● Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang
    ada di trait 
  */
trait HasName {
    public string $name;
}

 trait SayGoodBye {
    function goodBye(?string $name): void {
        if(is_null($name)){
            echo "Good Bye". PHP_EOL;
        }else {
            echo "Good Bye $name". PHP_EOL;
        }
    }
 }

 trait SayHello {
    function hello(?string $name): void {
        if(is_null($name)){
            echo "Hello ". PHP_EOL;
        }else {
            echo "Hello  $name". PHP_EOL;
        }
    }
 }

/*
 * Trait Abstract Function
● Selain konkrit function, di trait juga kita bisa menambahkan abstract function
● Jika terdapat abstract function di trait, maka secara otomatis function tersebut harus di override di
class yang menggunakan trait tersebut
 */
trait CanRun {
    public abstract function run(): void;
}

/*
     * Trait Overriding

        ● Jika sebuah class memiliki parent class yang memiliki function yang sama dengan function di trait,
        maka secara otomatis trait akan meng-override function tersebut
        ● Namun jika kita membuat function yang sama di class nya, maka secara otomatis kita akan
        meng-override function di trait
        ● Sehingga posisinya seperti ini ParentClass =override by=> Trait =override by=> ChildClass
     */
class ParentPerson {
    public function goodBye(?string $name): void {
        echo "Good Bye in Person". PHP_EOL;
    }
    
    public function hello(?string $name): void {
        echo "Hello in Person". PHP_EOL;
    }
}

/*
 * Trait Inheritance
    ● Sebelumnya kita sudah tahu bahwa class bisa menggunakan trait lebih dari satu
    ● Lantas bagaimana dengan trait yang menggunakan trait lain?
    ● Trait bisa menggunakan trait lain, mirip seperti interface yang bisa implement interface lain
    ● Untuk menggunakan trait lain dari trait, penggunaannya sama seperti dengan penggunaan trait di
    class
 */
trait All {   
    /*
     * Trait Visibility Override

        ● Selain melakukan override function di class, kita juga bisa melakukan override visibility function
        yang terdapat di trait
        ● Namun untuk melakukan ini tidak perlu membuat function baru di class, kita bisa gunakan secara
        sederhana ketika menggunakan trait nya
     */
    use sayGoodBye, sayHello, HasName, CanRun{
        //trait bisa dioveride
        //hello as private;
        //goodBye as private;
    }
}

 class Person {
     //trait ini lebih seperti ekstensi bukan extends
    use All;

    public function run(): void
    {
        echo "Person $this->name is Running". PHP_EOL;
    }

    //example trait overiding in childclass
    // public function goodBye(?string $name): void {
    //     echo "Good Bye in Person". PHP_EOL;
    // }

    // public function hello(?string $name): void {
    //     echo "Hello in Person". PHP_EOL;
    // }
 }