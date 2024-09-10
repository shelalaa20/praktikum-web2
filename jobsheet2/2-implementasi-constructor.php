<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Mengisi nilai atribut dengan parameter yang diberikan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan";
    }
}

// Instansiasi objek dengan constructor, mengisi atribut dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa
echo $Mahasiswa1->tampilkanData();

?>
