<?php
// Definisi kelas Mahasiswa
class Mahasiswa {
    // Properti bersifat private, hanya dapat diakses melalui method
    private $nama;
    private $nim;
    private $jurusan;
    

    // Method untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }

    // Method untuk mengubah nilai nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Method untuk mendapatkan nilai NIM
    public function getNim() {
        return $this->nim;
    }

    // Method untuk mengubah nilai NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Method untuk mendapatkan nilai jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Method untuk mengubah nilai jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat objek Mahasiswa baru dengan data awal
$mahasiswa1 = new Mahasiswa();

// Mengatur nilai properti menggunakan setter
$mahasiswa1->setNama("Chitoo");
$mahasiswa1->setNim("230102078");
$mahasiswa1->setJurusan("Kedokteran Hewan");

// Menampilkan data 
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";
?>
