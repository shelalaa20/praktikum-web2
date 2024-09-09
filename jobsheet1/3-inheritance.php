<?php
// Definisi kelas Pengguna
class Pengguna {
    // Properti nama dengan akses protected (dapat diakses oleh kelas turunan)
    protected $nama;

    // Constructor untuk menginisialisasi objek Pengguna
    public function __construct($nama) {
        $this->nama = $nama; // Inisialisasi nama
    }

    // Method untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }
}

// Kelas Dosen adalah turunan dari kelas Pengguna
class Dosen extends Pengguna {
    // Properti mataKuliah hanya bisa diakses dalam kelas ini (private)
    private $mataKuliah;

    // Constructor untuk menginisialisasi objek Dosen
    public function __construct($nama, $mataKuliah) {
        // Memanggil constructor dari kelas induk (Pengguna) menggunakan parent
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah; // Inisialisasi mata kuliah
    }

    // Method untuk mendapatkan nilai mataKuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// Membuat objek Dosen dengan nama dan mata kuliah yang diajarkan
$pengguna1 = new Dosen("Abda'u", "Pemrograman Web 2");

// Menampilkan nama dan mata kuliah yang diajarkan oleh Dosen
echo $pengguna1->getNama() . "<br>";
echo $pengguna1->getMataKuliah() . "<br>";
?>
