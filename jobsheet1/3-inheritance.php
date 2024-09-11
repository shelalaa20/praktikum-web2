<?php
// Definisi kelas Pengguna
class Pengguna {
    // Properti nama dengan akses protected (dapat diakses oleh kelas turunan)
    public $nama;

    // Method untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen adalah turunan dari kelas Pengguna
class Dosen extends Pengguna {
    // Properti mataKuliah hanya bisa diakses dalam kelas ini (private)
    public $mataKuliah;

    // Method untuk mendapatkan nilai mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Method untuk menampilkan data dosen
    public function tampilkanData() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->getMataKuliah() . "<br>";
    }
}

// Membuat objek Dosen dengan nama dan mata kuliah yang diajarkan
$pengguna1 = new Dosen();
$pengguna1->nama = "Bapak Abda'u";
$pengguna1->mataKuliah = "Pemrograman Web 2";

$pengguna1->tampilkanData();
?>
