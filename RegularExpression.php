<?php
/*
 * Regular Expression
    ● PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl
    ● Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string
    menggunakan pola tertentu
    ● Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit
    pengenalannya
    ● Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini :
    https://www.php.net/manual/en/pcre.pattern.php
 */
$matches = [];
$result = (bool)preg_match_all("/krit|mau|din/i", "Kriti Mauludin", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat|tolol/i", "***", "Dasar lu anjing, bangsat, tolol");
var_dump($result);

$result = preg_split("/[\s,.]/i", "Kriti Mauludin, arahin.ocumps.com");
var_dump($result);