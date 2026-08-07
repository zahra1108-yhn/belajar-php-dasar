<?php

// Mendefinisikan array multidimensi (array di dalam array)
$produk = [
    ["Nama" => "Laptop", "Harga" => 8000000, "Stok" => 10],
    ["Nama" => "Smartphone", "Harga" => 3500000, "Stok" => 25],
    ["Nama" => "Headphone", "Harga" => 500000, "Stok" => 50]
];

// Mengakses elemen array multidimensi
echo $produk[0]["Nama"] . " seharga Rp " . $produk[0]["Harga"] . " (Stok: " . $produk[0]["Stok"] . ")<br>"; 
// Output: Laptop seharga Rp 8000000 (Stok: 10)

echo $produk[2]["Nama"] . " seharga Rp " . $produk[2]["Harga"] . " (Stok: " . $produk[2]["Stok"] . ")<br>"; 
// Output: Headphone seharga Rp 500000 (Stok: 50)

?>