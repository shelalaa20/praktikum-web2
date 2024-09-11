<?php
class Pengguna {
    public function aksesFitur() {
        echo  "Fitur Pengguna";
    }
}
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Fitur Dosen";
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Fitur Mahasiswa";
    }
}
// Instansiasi objek dari Dosen dan Mahasiswa
$dosen1 = new Dosen();
$dosen1->aksesFitur();  // Output: Fitur Dosen
echo "<br>";
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->aksesFitur();  // Output: Fitur Mahasiswa
?>
