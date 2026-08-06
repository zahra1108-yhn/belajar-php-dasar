<?php
  $angka = 14;

  // Jika $angka dibagi 2 sisanya 0, maka Genap. Jika tidak, Ganjil.
  $jenis = ($angka % 2 == 0) ? "Angka Genap" : "Angka Ganjil";

  echo "Angka $angka adalah: $jenis";
?>