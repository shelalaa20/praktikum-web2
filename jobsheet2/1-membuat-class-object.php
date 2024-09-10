<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan";
    }
}

// Instansiasi objek dari class Mahasiswa
$Mahasiswa1 = new Mahasiswa();

// Mengisi nilai atribut objek
$Mahasiswa1->nama = "Shela Jaya Andini";
$Mahasiswa1->nim = "230302044";
$Mahasiswa1->jurusan = "Teknik Informatika";

// Menampilkan data mahasiswa
echo $Mahasiswa1->tampilkanData();
?>
