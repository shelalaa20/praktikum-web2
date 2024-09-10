# Jobsheet 2 : Menggunakan Konsep Kelas dan Objek dalam PHP
Menerapkan konsep kelas dan objek dalam PHP melalui serangkaian tugas yang menekankan pada pembuatan dan penggunaan kelas serta objek.
1. Membuat Class dan Object
   
a. Definisi Class
```
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;
```
* Class mendefinisikan atribut dan metode yang terkait dengan mahasiswa.

* public : Mendeklarasikan atribut yang bisa diakses dari luar class.

b. Metode untuk menampilkan data mahasiswa
```
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan";
    }
}
```
* public function tampilkanData(): Metode ini mengembalikan string yang menampilkan informasi mahasiswa dalam format HTML. public berarti metode ini dapat diakses dari luar class.

c. Instansiasi objek dari class Mahasiswa
```
$Mahasiswa1 = new Mahasiswa();
```
* Instansiasi: Proses pembuatan objek baru dari class menggunakan keyword new. Di sini, $Mahasiswa1 adalah objek dari class Mahasiswa.

e. Inisialisasi
```
// Mengisi nilai atribut objek
$Mahasiswa1->nama = "Shela Jaya Andini";
$Mahasiswa1->nim = "230302044";
$Mahasiswa1->jurusan = "Teknik Informatika";

// Menampilkan data mahasiswa
echo $Mahasiswa1->tampilkanData();
?>
```
* Inisialisasi: Setelah objek dibuat, kita mengisi nilai atribut objek. Dalam contoh ini, atribut nama, nim, dan jurusan diisi dengan data mahasiswa.
  
* Menampilkan Data: Memanggil metode tampilkanData() untuk menampilkan informasi mahasiswa di browser.
  
* Output Program :
xxxxx
2. Implementasi Contruktor
```
    public function __construct($nama, $nim, $jurusan) {
        // Mengisi nilai atribut dengan parameter yang diberikan
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

```
Constructor: __construct($nama, $nim, $jurusan) adalah metode khusus yang dipanggil secara otomatis saat objek dibuat. Constructor digunakan untuk menginisialisasi atribut objek dengan nilai yang diberikan saat instansiasi.
```
// Instansiasi objek dengan constructor, mengisi atribut dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa
echo $Mahasiswa1->tampilkanData();
```
Instansiasi dengan Constructor: Ketika objek Mahasiswa1 dibuat, constructor langsung menginisialisasi atribut objek dengan nilai yang diberikan.
3. Membuat Metode Tambahan
```
<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan<br><br>";
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        // Mengubah nilai atribut jurusan dengan jurusan baru
        $this->jurusan = $jurusanBaru;
    }
}

// Instansiasi objek dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa sebelum jurusan diubah
echo $Mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan
$Mahasiswa1->updateJurusan("Pendidikan Jasmani");

// Menampilkan data mahasiswa setelah jurusan diubah
echo $Mahasiswa1->tampilkanData();
?>
```
4. Penggunaan Atribut dan Metode
```
<?php
// Definisi class Mahasiswa
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk menginisialisasi atribut saat objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan<br><br>";
    }

    // Metode setter untuk mengubah nilai nim
    public function setNim($nim) {
        $this->nim = $nim;
    }
}

// Instansiasi objek dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa sebelum nim diubah
echo $Mahasiswa1->tampilkanData();

// Mengubah nim menggunakan metode setNim
$Mahasiswa1->setNim("230302055");

// Menampilkan data mahasiswa setelah nim diubah
echo $Mahasiswa1->tampilkanData();
?>
```



   

