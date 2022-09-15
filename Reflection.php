<?php
/*
 * Reflection
    ● Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
    ● Reflection adalah materi yang sangat panjang dan banyak, sehingga disini kita hanya akan
    membahas perkenalannya saja
    ● Reflection adalah fitur yang biasanya digunakan saat kita membuat framework
    ● https://www.php.net/manual/en/book.reflection.php
*/
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "kriti";
$request->password = "rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "kriti";
$register->address = "bogor";
$register->email = "kriti@gmail.com";


ValidationUtil::validateReflection($register);
