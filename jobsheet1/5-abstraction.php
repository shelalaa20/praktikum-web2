<?php
// Class abstrak Pengguna
abstract class Pengguna {

    // Metode abstrak aksesFitur, harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

// Class Dosen 
class Dosen extends Pengguna {
    public function aksesFitur() {
        return "fitur dosen.<br>";
    }
}

// Class Mahasiswa 
class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        return "fitur mahasiswa.<br>";
    }
}

// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen1 = new Dosen();
$mahasiswa1 = new Mahasiswa();

// Memanggil metode aksesFitur()
echo $dosen1->aksesFitur();       
echo $mahasiswa1->aksesFitur(); 
?>
