<?php
// Class abstrak Pengguna
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    // Metode abstrak aksesFitur, harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

// Class Dosen 
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo $this->getNama() . " dapat mengakses fitur dosen.<br>";
    }
}

// Class Mahasiswa 
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo $this->getNama() . " dapat mengakses fgitur mahasiswa.<br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen1 = new Dosen("Bapak Abda'u");
$mahasiswa1 = new Mahasiswa("Shela");

// Memanggil metode aksesFitur()
$dosen1->aksesFitur();       
$mahasiswa1->aksesFitur(); 
?>
