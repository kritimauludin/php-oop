<?php
/*
 * stdClass
    ● stdClass adalah class kosong bawaan dari PHP
    ● stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
    ● stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object
    secara otomatis
 */

$array = [
    "firstname" => "kriti",
    "lastname" => "Mauludin",
    "job"  => "Mahasiswa"
];

$object = (object)$array;

var_dump($object);

echo "Firstname : $object->firstname". PHP_EOL;
echo "Lastname : $object->lastname". PHP_EOL;
echo "Job : $object->job". PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

require_once "data/Person.php";

$person = new Person("Kriti", "Bogor");
var_dump($person);

$arrayPerson = (array)$person;
var_dump($arrayPerson);