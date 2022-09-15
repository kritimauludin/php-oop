<?php
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
  //ini seperti dynamic property

  class Zero {
    private array $properties = [];


    public function __get($name) //Dieksekusi ketika mengakses properties yang tidak tersedia
    {
        // echo "access property $name". PHP_EOL;
        return $this->properties[$name];
    }

    public function __set($name, $value) //Dieksekusi ketika mengubah properties yang tidak tersedia
    {
        // echo "Set property $name with value $value". PHP_EOL;
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool //Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
    {
        // echo "Isset $name". PHP_EOL;
        return isset($this->properties[$name]);
    }

    public function __unset($name) //Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
    {
        // echo "Unset $name";
        unset($this->properties[$name]);
    }

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
  //ini seperti dynamic function


  //return mixed artinya boleh kembalikan value atau tidak
   public function __call($name, $arguments)//Dieksekusi ketika memanggil function yang tidak tersedia
   {
        $join = join(",", $arguments);
        echo "Call function $name, with argument [$join]". PHP_EOL;
   }

   
   public static function __callStatic($name, $arguments)//Dieksekusi ketika memanggil static function yang tidak tersedia
   {
        $join = join(",", $arguments);
        echo "Call static function $name, with argument [$join]". PHP_EOL;
   }
  }

  $zero = new Zero();
//   echo $zero->firstName. PHP_EOL; //demo __get
//   $zero->lastName = "Kriti"; //demo __set
//   isset($zero->age); //demo __isset
//   unset($zero->age); //demo __unset

  //sehingga
  $zero->firstName = "Kriti";
  $zero->lastName = "Mauludin";
  $zero->age = 20;

  echo "FirstName : $zero->firstName". PHP_EOL;
  echo "LastName : $zero->lastName". PHP_EOL;
  echo "Age : $zero->age". PHP_EOL;

 $zero->sayHello("Kriti", "Mauludin"); //demo __call
 Zero::sayGoodBye("Kriti"); //demo __callStatic