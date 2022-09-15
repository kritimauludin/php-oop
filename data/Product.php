<?php
 /**
  ********************************************************
  * Modifier    **  Class   **  Subclass    **  World   **
  ********************************************************
  * Public      **  Y       **      Y       **     Y    **
  * Protected   **  Y       **      Y       **     N    **
  * Private     **  Y       **      N       **     N    **
  ********************************************************
  */

class Product {
    //visibility in property
    //jika private
    // private string $name;
    // private int $price;

    //jika protected
    protected string $name;
    protected int $price;

    public function __construct(string $name, int $price)
    {
        //karena masi dalam class yg sama jadi bisa akses
        $this->name = $name;
        $this->price = $price;
        
    }

    public function getName(): string{
        return $this->name;
    }

    public function getPrice(): int{
        return $this->price;
    }
}

class ProductDummy extends Product {
    public function info(){
        echo "Name : $this->name". PHP_EOL;
        echo "Price: $this->price". PHP_EOL;
    }
}