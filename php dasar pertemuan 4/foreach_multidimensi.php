<?php

// Mendefinisikan array multidimensi
$daftar_buku = [
    ["Judul" => "Laskar Pelangi", "Penulis" => "Andrea Hirata"],
    ["Judul" => "Bumi", "Penulis" => "Tere Liye"],
    ["Judul" => "Filosofi Teras", "Penulis" => "Henry Manampiring"]
];

// Menggunakan foreach untuk mengiterasi tiap baris data
foreach ($daftar_buku as $buku) {
    echo "Buku " . $buku["Judul"] . " ditulis oleh " . $buku["Penulis"] . ".<br>";
}

?>