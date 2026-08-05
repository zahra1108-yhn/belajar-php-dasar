<?php
  // Menyiapkan nilai variabel (diubah nilainya)
  $a = true;
  $b = true;

  // 1. Operator AND (&&)
  // Bernilai true HANYA JIKA keduanya true
  var_dump($a && $b);
  echo "<br>";

  // 2. Operator OR (||)
  // Bernilai true JIKA salah satu atau keduanya true
  var_dump($a || $b);
  echo "<br>";

  // 3. Operator NOT (!)
  // Membalikkan nilai (true jadi false, false jadi true)
  var_dump(!$a);
  echo "<br>";

  // 4. Operator XOR (xor)
  // Bernilai true JIKA salah satu true, tapi FALSE jika KEDUANYA true
  var_dump($a xor $b);
  echo "<br>";
?>