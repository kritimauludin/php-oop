<?php
/* Exception
 ● Saat kita membuat aplikasi, kita tidak akan terhindar dengan yang namanya error
 ● Di PHP, error direpresentasikan dengan istilah exception, dan semua direpresentasikan dalam
 bentuk class exception
 ● Kita bisa menggunakan class exception sendiri, atau menggunakan yang sudah disediakan oleh
 PHP
 ● Jika kita ingin membuat exception, maka kita harus membuat class yang implement interface
 Throwable atau turunan-turunannya
*/
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "kriti";
$loginRequest->password = "  ";

/*
 * Try Catch
    ● Saat kita memanggil sebuah function yang bisa menyebabkan exception, maka kita disarankan
    menggunakan try-catch expression di PHP
    ● Ini gunanya agar kita bisa menangkap exception yang terjadi, karena jika tidak ditangkap, lalu
    terjadi exception, maka secara otomatis program kita akan berhenti
    ● Cara menggunakan try-catch expression di PHP sangat mudah, di block try, kita tinggal panggil
    method yang bisa menyebabkan exception, dan di block catch, kita bisa melakukan sesuatu jika
    terjadi exception
 */

/*
  * Finally Keyword
    ● Dalam try-catch, kita bisa menambahkan block finally
    ● Block finally ini adalah block dimana akan selalu dieksekusi baik terjadi exception ataupun tidak
    ● Ini sangat cocok ketika kita ingin melakukan sesuatu, tidak peduli sukses ataupun gagal, misal di
    block try kita ingin membaca file, di block catch kita akan tangkap jika terjadi error, dan di block
    finally error ataupun sukses membaca file, kita wajib menutup koneksi ke file tersebut, biar tidak
    menggantung di memory
*/
try {
    ValidateLoginRequest($loginRequest);
    echo "VALID". PHP_EOL;
} catch (ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}". PHP_EOL;

    /*
     * Debug Exception
        ● Exception di PHP memiliki sebuah function bernama getTrace()
        ● Function getTrace() berisikan informasi dari exception yang terjadi, seperti lokasi file, baris ke
        berapa, function mana sampai argumenty yang dikirim di function tersebut apa
        ● Ini sangat cocok untuk kita jika ingin mendebug ketika terjadi exception
    */
    var_dump($exception->getTrace());
    echo $exception->getTraceAsString(). PHP_EOL; //lebih simple
} finally {
    echo "Error ga error tetep dipanggil". PHP_EOL;
}

// catch (Exception $exception){ //Multiple Try Catch jika dipisah 
//     echo "Error : {$exception->getMessage()}". PHP_EOL;
// }

