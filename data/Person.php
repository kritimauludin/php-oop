<?php

class Person{

    //constant tidak menempel diobjek, namun dia menempel keclassnya
    //sehingga cara aksesnya berbeda, cek difile constant untuk melihat cara penggunaan
    const AUTHOR = "Kriti Mauludin";

    //properties
    var string $name;

    //tanda ? menandakan variabel tsb bsa null ini adalah nullable
    //nullable juga bisa digunakan di function argument misal kita ingin parameternya bsa null
    var ?string $address;

    //set default value
    var string $country = "Indonesia";

    function sayHello(?string $name){
        if(is_null($name)){
            echo "Hello, My name is $this->name". PHP_EOL;
        }else {
            echo "Hello $name, My name is $this->name". PHP_EOL;
        }
    } 
    
    function info(){
        //keyword self untuk mengakses constant dalam class yg sama sedangkan this untuk akses variabel dalam objek 
        echo "Author : ". self::AUTHOR . PHP_EOL;
    }

    //constructor adalah function yg akan dipanggil pertama kali saat objek dibuat
    //mirip dengan function contrctor bisa ditambahkan parameter
    //nama contructor haruslah __construct()
    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function __destruct()
    {
        echo "Object $this->name has been destroyed" . PHP_EOL;
    }

}

?>