<?php
/**
 * Visibility
 * Visibility / Access modifier adalah kemampuan properties, function dan constant dapat diakses dari mana saja
 * Secara default, properties, function dan constant yang kita buat di dalam class bisa diakses darimana saja, atau artinya dia adalah public
 * Selain public, masih ada beberapa visibility lainnyaSecara default kata kunci var untuk properties adalah sifatnya public
 */

 /**
  ********************************************************
  * Modifier    **  Class   **  Subclass    **  World   **
  ********************************************************
  * Public      **  Y       **      Y       **     Y    **
  * Protected   **  Y       **      Y       **     N    **
  * Private     **  Y       **      N       **     N    **
  ********************************************************
  */

  require_once "data/Product.php";

  $product = new Product("Kabel USB", 7000);
  echo $product->getName(). PHP_EOL;
  echo $product->getPrice(). PHP_EOL;
  
//   echo $product->name. PHP_EOL;//error

$productDummy = new ProductDummy("Jeruk", 10000);
$productDummy->info();
