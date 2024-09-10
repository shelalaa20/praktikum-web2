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

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        // Mengubah nilai atribut jurusan dengan jurusan baru
        $this->jurusan = $jurusanBaru;
    }
}

// Instansiasi objek dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa sebelum jurusan diubah
echo $Mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan
$Mahasiswa1->updateJurusan("Pendidikan Jasmani");

// Menampilkan data mahasiswa setelah jurusan diubah
echo $Mahasiswa1->tampilkanData();
?>
