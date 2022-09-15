<?php

require_once "data/Person.php";

//setelah menambah constructor maka ketika inisialisasi object wajib menambahkan argument terlebih jika
//constructor ditambahkan parameter
$person = new Person("kriti", null);

//initialiation variabel name in person sebelum ditambah constructor
// $person->name = "Kriti";

$person->sayHello("mauludin");
$person->sayHello(null);

$person->info();
