<?php
/**
 * Polymorphism
 * Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
 * Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
 * Polymorphism erat hubungannya dengan Inheritance
 */

 require_once "data/Programmer.php";
 require_once "data/Manager.php"; //for testing

 $company = new Company();
 $company->programmer = new Programmer("Kriti");
 var_dump($company);

 $company->programmer = new BackendProgrammer("Mauludin");
 var_dump($company);

 $company->programmer = new FrontendProgrammer("Agus");
 var_dump($company);

 //implementasi polymorphism di function argument
 sayHelloProgrammer(new Programmer("Kriti"));
 sayHelloProgrammer(new BackendProgrammer("Mauludin"));
 sayHelloProgrammer(new FrontendProgrammer("Agus"));

//  $company->programmer = new Manager(); //erorr karena tetep perubah bentuknya terbatas hanya pada class turunannya