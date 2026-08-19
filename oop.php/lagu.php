<?php

// 1. CLASS (Cetakan Utama)
class Lagu {
    // 2. PROPERTY (Data yang disimpan)
    public $judul;
    public $penyanyi;

    // 3. METHOD (Aksi/Fungsi)
    public function putar() {
        echo "Sedang memutar lagu '" . $this->judul . "' oleh " . $this->penyanyi . " 🎵";
    }
}

// ===============================================
// 4. INSTANSIASI BANYAK OBJEK (MULTIPLE OBJECTS)

// Objek Pertama ($lagu1)
$lagu1 = new Lagu();
$lagu1->judul = "Ghibli Theme";
$lagu1->penyanyi = "Joe Hisaishi";
$lagu1->putar();

echo "<br><br>"; // Memberi jarak baris di browser

// Objek Kedua ($lagu2)
$lagu2 = new Lagu();
$lagu2->judul = "Komang";
$lagu2->penyanyi = "Raim Laode";
$lagu2->putar();