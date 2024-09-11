<?php
class Person {
    protected $name;
    
    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        echo "Person : ";
    }
}

class Student extends Person {
    private $nim;

    public function __construct($name, $nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getRole(){
        echo "Student : ";
    }

}

class Teacher extends Person {
    private $nidn;

    public function __construct($name, $nidn){
        parent::__construct($name);
        $this->nidn = $nidn;
    }


    public function getNidn() {
        return $this->nidn;
    }

    public function getRole(){
        echo "Teacher : ";
    }

}

// Tambahan kelas abstrak dan turunannya

abstract class Jurnal {
    protected $judul;
    protected $tanggalPengajuan;

    public function __construct($judul, $tanggalPengajuan) {
        $this->judul = $judul;
        $this->tanggalPengajuan = $tanggalPengajuan;
    }

    abstract public function prosesPengajuan();
}

class JurnalDosen extends Jurnal {
    public function prosesPengajuan() {
        echo "Pengajuan Jurnal Dosen: ";
        echo "Judul: " . $this->judul . ", Tanggal Pengajuan: " . $this->tanggalPengajuan . "<br>";
    }
}

class JurnalMahasiswa extends Jurnal {
    public function prosesPengajuan() {
        echo "Pengajuan Jurnal Mahasiswa: ";
        echo "Judul: " . $this->judul . ", Tanggal Pengajuan: " . $this->tanggalPengajuan . "<br>";
    }
}

// Instansi objek sebelumnya
$person1 = new Student("Shela", "230302044");
echo $person1->getRole() . $person1->getName() . "<br>NIM: " . $person1->getNim() . "<hr>";

$person2 = new Teacher("Rina", "230302045");
echo $person2->getRole() . $person2->getName() . "<br>NIDN: " . $person2->getNidn() . "<hr>";

// Contoh penggunaan kelas Jurnal
$jurnalDosen = new JurnalDosen("Penelitian Kesehatan", "2024-09-10");
$jurnalDosen->prosesPengajuan();

$jurnalMahasiswa = new JurnalMahasiswa("Tugas Akhir", "2024-09-11");
$jurnalMahasiswa->prosesPengajuan();
?>
