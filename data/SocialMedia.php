<?php
/*
 * Final Class

● Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum
class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi
● Secara otomatis semua class child nya akan error
 */

class SocialMedia {
    public string $name;
}

//keyword final
// final class Facebook extends SocialMedia //old example
class Facebook extends SocialMedia //new example for demo final function
{
    /*
     * Final Function
        ● Kata kunci final juga bisa digunakan di function
        ● Jika sebuah function kita tambahkan kata kunci final, maka artinya function tersebut tidak bisa di
        override lagi di class child nya
        ● Ini sangat cocok jika kita ingin mengunci implementasi dari sebuah method agar tidak bisa diubah
        lagi oleh class child nya
     */
    final public function login (string $username, $password): bool{
        return true;
    }

}

// class FakeFacebook extends Facebook {} //error and old example
class FakeFacebook extends Facebook {

    //error
    public function login (string $username, $password): bool{
        return false;
    }
} //new example for demo final function
