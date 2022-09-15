<?php
/*
 * Anonymous Class
    ● Anonymous class atau class tanpa nama.
    ● Adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung
    ● Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi
    interface atau abstract class sederhana, tanpa harus membuat implementasi class nya
 */

 interface HelloWorld {
    function sayHello(): void;
 }

//terkadang kasus sederhana akan ribet ketika harus membuat class terlebih dahulu, 
//maka jika kasus sederhana gunakanlah anonymous class, dibawah ini adalah cara normal
class SampleHelloWorld implements HelloWorld {
    function sayHello(): void
    {
        echo "Hello World". PHP_EOL;
    }
}

$sample = new SampleHelloWorld();
$sample->sayHello();

//ini anonymous class
$helloWorld = new class ("kriti") implements HelloWorld{

    public string $name;
    /*
     * Constructor di Anonymous Class
        ● Anonymous class juga mendukung constructor
        ● Jadi kita bisa menambahkan constructor jika kita mau
        ● sehingga diatas kita tinggal memasukan argumennya
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    function sayHello(): void
    {
        echo "Hello $this->name From anonymous". PHP_EOL;
    }
};

$helloWorld->sayHello();