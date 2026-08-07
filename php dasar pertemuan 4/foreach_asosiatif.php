<?php

// Mendefinisikan array asosiatif (Key => Value)
$ibukota = [
    "Indonesia" => "Jakarta",
    "Jepang"    => "Tokyo",
    "Prancis"   => "Paris"
];

// Menggunakan foreach untuk mengambil kunci (Key) dan nilainya (Value)
foreach ($ibukota as $negara => $kota) {
    echo "Ibukota dari $negara adalah $kota.<br>";
}

?>