<?php
  // Menyiapkan nilai variabel
  $a = 25;
  $b = 10;

  // 1. Sama dengan (==)
  echo var_export($a == $b, true) . "<br>";   // false (25 apakah sama dengan 10?)

  // 2. Identik (===)
  echo var_export($a === $b, true) . "<br>";  // false (sama nilai & tipe data?)

  // 3. Tidak sama dengan (!=)
  echo var_export($a != $b, true) . "<br>";   // true  (25 tidak sama dengan 10)

  // 4. Tidak identik (!==)
  echo var_export($a !== $b, true) . "<br>";  // true

  // 5. Lebih besar dari (>)
  echo var_export($a > $b, true) . "<br>";    // true  (25 lebih besar dari 10)

  // 6. Lebih kecil dari (<)
  echo var_export($a < $b, true) . "<br>";    // false (25 lebih kecil dari 10?)

  // 7. Lebih besar atau sama dengan (>=)
  echo var_export($a >= $b, true) . "<br>";   // true  (25 >= 10)

  // 8. Lebih kecil atau sama dengan (<=)
  echo var_export($a <= $b, true) . "<br>";   // false (25 <= 10?)
?>