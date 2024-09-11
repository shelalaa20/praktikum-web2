# Jobsheet 2 : Menggunakan Konsep Kelas dan Objek dalam PHP
Menerapkan konsep kelas dan objek dalam PHP melalui serangkaian tugas yang menekankan pada pembuatan dan penggunaan kelas serta objek.
1. Membuat Class dan Object
   
Definisi Class
```
class Mahasiswa {
    // Atribut
    public $nama;
    public $nim;
    public $jurusan;
```
* Class mendefinisikan atribut dan metode yang terkait dengan mahasiswa.

* public : Mendeklarasikan atribut yang bisa diakses dari luar class.

Metode untuk menampilkan data mahasiswa
```
    public function tampilkanData() {
        return "Nama : $this->nama<br>
                Nim  : $this->nim<br>
                Jurusan : $this->jurusan";
    }
}
```
* public function tampilkanData(): Metode ini mengembalikan string yang menampilkan informasi mahasiswa dalam format HTML. public berarti metode ini dapat diakses dari luar class.

Instansiasi objek dari class Mahasiswa
```
$Mahasiswa1 = new Mahasiswa();
```
* Instansiasi: Proses pembuatan objek baru dari class menggunakan keyword new. Di sini, $Mahasiswa1 adalah objek dari class Mahasiswa.

Inisialisasi
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
  
Output Program :
```
Nama : Shela Jaya Andini
Nim : 230302044
Jurusan : Teknik Informatika
```
2. Implementasi Contruktor
   
   Constructor adalah metode khusus dalam pemrograman berorientasi objek (OOP) yang digunakan untuk menginisialisasi objek saat dibuat. Constructor dipanggil secara otomatis ketika sebuah objek dari kelas dibuat, dan bertujuan untuk mengatur kondisi awal objek tersebut.
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

Output Program :
```
Nama : Shela Jaya Andini
Nim : 230302044
Jurusan : Teknik Informatika
```

3. Membuat Metode Tambahan
```
    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        // Mengubah nilai atribut jurusan dengan jurusan baru
        $this->jurusan = $jurusanBaru;
    }
}
```
Metode updateJurusan digunakan untuk mengubah nilai atribut jurusan dari objek yang terkait dengan nilai baru yang diberikan. Metode ini berguna ketika ingin mengubah informasi jurusan dari sebuah objek yang sudah ada di dalam program Anda.
```
// Instansiasi objek dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");
// Menampilkan data mahasiswa sebelum jurusan diubah
echo $Mahasiswa1->tampilkanData();

// Mengubah jurusan menggunakan metode updateJurusan
$Mahasiswa1->updateJurusan("Pendidikan Jasmani");
// Menampilkan data mahasiswa setelah jurusan diubah
echo $Mahasiswa1->tampilkanData();
```
Metode updateJurusan() digunakan untuk mengubah jurusan mahasiswa dari "Teknik Informatika" menjadi "Pendidikan Jasmani".

Setelah perubahan jurusan, metode tampilkanData() dipanggil lagi untuk menampilkan data terbaru. Pada titik ini, jurusan telah berubah menjadi "Pendidikan Jasmani".

Output Program :
```
Nama : Shela Jaya Andini
Nim : 230302044
Jurusan : Teknik Informatika

Nama : Shela Jaya Andini
Nim : 230302044
Jurusan : Pendidikan Jasmani
```
4. Penggunaan Atribut dan Metode
```
    // Metode setter untuk mengubah nilai nim
    public function setNim($nim) {
        $this->nim = $nim;
    }
}
```
Setter adalah metode yang digunakan untuk mengubah nilai suatu atribut (variabel) dari sebuah objek secara aman dan terkontrol.

Metode setNim() digunakan untuk mengubah nilai NIM (Nomor Induk Mahasiswa) pada objek mahasiswa. Metode ini memungkinkan pengguna untuk memperbarui nilai NIM secara dinamis setelah objek mahasiswa dibuat.
```
// Instansiasi objek dengan nilai awal
$Mahasiswa1 = new Mahasiswa("Shela Jaya Andini", "230302044", "Teknik Informatika");

// Menampilkan data mahasiswa sebelum nim diubah
echo $Mahasiswa1->tampilkanData();

// Mengubah nim menggunakan metode setNim
$Mahasiswa1->setNim("230302055");

// Menampilkan data mahasiswa setelah nim diubah
echo $Mahasiswa1->tampilkanData();
```
Objek Mahasiswa dapat digunakan untuk menyimpan dan mengelola informasi dasar tentang seorang mahasiswa, seperti nama, NIM, dan jurusan, serta menyediakan metode untuk mengubah dan menampilkan informasi ini dengan mudah.

Output Program :
```
Nama : Shela Jaya Andini
Nim : 230302044
Jurusan : Teknik Informatika

Nama : Shela Jaya Andini
Nim : 230302055
Jurusan : Teknik Informatika
```
## Tugas
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
```
<?php
// Definisi class Dosen
class Dosen {
    // Atribut
    public $nama;
    public $nip;
    public $mataKuliah;
```
Class Dosen memiliki tiga atribut $nama, $nip, dan $mataKuliah, yang semuanya dideklarasikan sebagai public, sehingga bisa diakses dan dimodifikasi dari luar class. Atribut ini digunakan untuk menyimpan informasi terkait identitas dosen (nama, nomor induk pegawai, dan mata kuliah yang diajarkan).

2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
```
    // Metode untuk menampilkan data dosen
    public function tampilkanData(){
        return "Nama : $this->nama<br>
                NIP : $this->nip<br>
                Mata Kuliah : $this->mataKuliah<br><br>";
    }
}
```
Metode tampilkanData() pada class Dosen berfungsi untuk menampilkan informasi data dosen, yaitu $nama, $nip, dan $mataKuliah. Metode ini mengembalikan string yang berisi data-data tersebut dengan format yang mudah dibaca (terpisah oleh <br> untuk membuatnya tampil di baris baru saat ditampilkan di browser).

3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
```
// Instansiasi objek dari class Dosen
$dosen1 = new Dosen();

// Mengisi nilai atribut objek
$dosen1->nama = "Chito";
$dosen1->nip = "1325465";
$dosen1->mataKuliah = "Kedokteran Hewan";

// Menampilkan data dosen
echo $dosen1->tampilkanData();
?>
```
Objek dosen1 diinstansiasi dari class Dosen. Kemudian, nilai atribut $nama, $nip, dan $mataKuliah diisi langsung melalui objek, dan akhirnya, metode tampilkanData() dipanggil untuk menampilkan informasi dosen.

Output Program :
```
Nama : Chito
NIP : 1325465
Mata Kuliah : Kedokteran Hewan
```


   

