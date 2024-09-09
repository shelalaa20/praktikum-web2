<?php
//definisi class
class Buku {
    //Atribut atau Properties
    public $judul;
    public $penulis;

    //Constrktor
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    //Metode atau function
    public function tampilkanInfo() {
        return "Judul: $this->judul, Penulis:$this->penulis";
    }
}
//Instantsiasi Objek
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->tampilkanInfo();
?>