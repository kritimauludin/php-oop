<?php
/**
 * parent Keyword
 * kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita override di class child
 * Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
 * Sederhananya, parent digunakan untuk mengakses class parent
 */

require_once "data/Shape.php";

use Data\{Shape, Rectangel};

 $shape = new Shape();
 echo $shape->getCorner(). PHP_EOL;

 $rectangel = new Rectangel();
 echo "Rectangel Corner :  ".$rectangel->getCorner(). PHP_EOL;
 echo "Parrent Corner :  ".$rectangel->getParentCorner(). PHP_EOL;