<?php
  // Nilai awal variabel $a
  $a = 20;

  // 1. Penambahan (+=)
  $a += 10; // Sama seperti: $a = $a + 10 (20 + 10 = 30)
  echo $a . "<br>";

  // 2. Pengurangan (-=)
  $a -= 5;  // Sama seperti: $a = $a - 5 (30 - 5 = 25)
  echo $a . "<br>";

  // 3. Perkalian (*=)
  $a *= 2;  // Sama seperti: $a = $a * 2 (25 * 2 = 50)
  echo $a . "<br>";

  // 4. Pembagian (/=)
  $a /= 5;  // Sama seperti: $a = $a / 5 (50 / 5 = 10)
  echo $a . "<br>";

  // 5. Sisa Bagi / Modulus (%=)
  $a %= 4;  // Sama seperti: $a = $a % 4 (10 dibagi 4, sisanya 2)
  echo $a . "<br>";
?>