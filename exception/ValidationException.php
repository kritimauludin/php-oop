<?php
/*
 * Exception
    ● Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error
    ● Di PHP, error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam
    bentuk class exception
    ● Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh
    PHP
    ● Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface
    Throwable atau turunan-turunannya
 */
class ValidationException extends Exception {

}
