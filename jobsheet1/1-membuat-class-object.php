<?php
//Membuat Class dan Object
//definisi class
class Mahasiswa {
    //Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    //Metode atau function
    public function tampilkanData() {
        return "Nama : $this->nama<br> 
                Nim : $this->nim<br> 
                Jurusan : $this->jurusan";
    }
}
//Instantsiasi Objek
$mahasiswa1 = new Mahasiswa();

// Mengisi nilai atribut objek
$mahasiswa1->nama = "Shela Jaya Andini";
$mahasiswa1->nim = "230302044";
$mahasiswa1->jurusan = "Teknik Informatika";

echo $mahasiswa1->tampilkanData();

?>
