<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan<br><br>";
    }

    // Metode setter untuk mengubah nilai nim
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Instansiasi objek dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa sebelum nim diubah
echo $Mahasiswa1->tampilkanData();

// Mengubah nim menggunakan metode setNim
$Mahasiswa1->setNim("230302055");

// Menampilkan data mahasiswa setelah nim diubah
echo $Mahasiswa1->tampilkanData();
?>
