<?php

/**
 * destructor adalah function yangakan dipanggil ketika object dihapus dari memori
 * bisanya ketika objek tak lagi digunakan atau aplikasi akan mati
 * khusus destructor kita tidak boleh menambahkan function argument
 * destructor akan cocok untuk menutup koneksi ke database/menutup proses menulis file sehingga tdk terjadi memori leak
 */

 require_once "data/Person.php";

 $kriti = new Person("kriti", "bogor");

 echo "Program selesai" . PHP_EOL;