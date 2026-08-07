<?php

// Function dengan dua parameter yang mengembalikan hasil perkalian
function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

// Menyimpan hasil kembalian (return value) ke dalam variabel
$luas = hitungLuas(5, 10);

// Menampilkan hasil
echo "Luas persegi panjang: " . $luas; // Output: 50

?>