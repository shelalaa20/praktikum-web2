<?php
// Definisi class Dosen
class Dosen {
    // Atribut
    public $nama;
    public $nip;
    public $mataKuliah;

    // Metode untuk menampilkan data dosen
    public function tampilkanData(){
        return "Nama : $this->nama<br>
                NIP : $this->nip<br>
                Mata Kuliah : $this->mataKuliah<br><br>";
    }
}

// Instansiasi objek dari class Dosen
$dosen1 = new Dosen();

// Mengisi nilai atribut objek
$dosen1->nama = "Chito";
$dosen1->nip = "1325465";
$dosen1->mataKuliah = "Kedokteran Hewan";

// Menampilkan data dosen
echo $dosen1->tampilkanData();
?>
