<?php 

require_once "data/Person.php" ; 


$person = new Person("KM", null);
$person->name = "Kriti";
$person->address = "Bogor";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name". PHP_EOL;

$budi = new Person("KM", "Bogor");
$budi->name = "Budi";
$budi->address = null;

var_dump($budi);

//error
// $person->name = [];