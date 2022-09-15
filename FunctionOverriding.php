<?php
    /**
     * Function Overriding
     * Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah ada di parent class
     * Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari class child, function yang di class parent tidak bisa diakses lagi
     */

    require_once "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Kriti";
    $manager->sayHello("Agus");
    
    $vp = new VicePresident("Mauludin");
    $vp->sayHello("Ahmad");