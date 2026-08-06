<?php
  // Menyiapkan nilai variabel
  $hari = "Sabtu";

  // Struktur Kontrol Switch
  switch ($hari) {
      case "Senin":
      case "Selasa":
      case "Rabu":
      case "Kamis":
      case "Jumat":
          echo "Hari Kerja (Weekday)";
          break;

      case "Sabtu":
      case "Minggu":
          echo "Akhir Pekan (Weekend)";
          break;

      default:
          echo "Nama hari tidak valid!";
          break;
  }
?>