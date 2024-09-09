<?php
//Membuat Class dan Object
//definisi class
class Mahasiswa {
    //Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    //Constrktor
    public function __construct($nama, $nim, $jurusan) {
        $this ->nama = $nama;
        $this ->nim = $nim;
        $this ->jurusan = $jurusan;
    }
    //Metode atau function
    public function tampilkanData() {
        return "Nama : $this->nama<br> 
                Nim : $this->nim<br> 
                Jurusan : $this->jurusan";
    }
}
//Instantsiasi Objek
$mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>