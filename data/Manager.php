<?php
 class Manager{
    var string $name;

    var string $title;

    //agar file yg menjalankan class ini diversi sebelumnya maka kita tambah default value
    public function __construct(string $name="", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;        
    }

    //void menandakan function tidak akan mengembalikan value
    function sayHello(string $name): void{
        echo "Hi $name, My name is manager $this->name". PHP_EOL;
    }

 }

 class VicePresident extends Manager{
    //  constructor overriding
    //constructor boleh dioveride dengan argument yang berbeda sedangkan function ketika dioverride dengan argument berbeda akan menghasilkan warning
    public function __construct(string $name)
    {
        //meskipun tidak wajib tp idealnya ketika melakukan contructor overriding kita perlu memanggil parentnya(direkomendasikan)
        //agar kode dicontruct sebelumnya bisa dieksekusi jg, karena ditakutkan ada kode yg wajib dieksekusi
        parent::__construct($name, "VP");
    }

       /**
     * Function Overriding
     * Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class
     * Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang di class parent tidak bisa diakses lagi
     */

     //mengoverride function yang ada sebelumnya
    function sayHello(string $name): void{
        echo "Hi $name, My name is VP $this->name". PHP_EOL;
    }

 }