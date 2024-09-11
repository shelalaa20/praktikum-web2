<h1> Jobsheet 1 : Implementasi Prinsip OOP dalam PHP</h1>
<p> Implementasi konsep dasar OOP dalam pemrograman PHP dengan membuat class, objek, serta menerapkan prinsip Encapsulation, Inheritance, Polymorphism, dan Abstraction</p>
<h2>Konsep Dasar OOP</h2>
<ul>
  <li>Class dan Object</li>
  <p>Class merupakan blueprint atau template untuk menciptakan objek, sedangkan Object yaitu Instance dari class yang memiliki atribut  (properties) dan perilaku
(methods).</p>
  <ul>
  <li>Class</li>
    
  ```php
  class Mahasiswa 
  ```

  <li>Object</li>
  
```php
$mahasiswa1 = new Mahasiswa
```
  </ul>
  
  <li>Atribut</li>
  <p>Atribut adalah variabel yang menyimpan data atau informasi tentang objek.</p>
  
  ```php
  public $nama;
  private $nim;
  protected $jurusan;
 ```
Access Modifier adalah kontrol akses yang menentukan siapa yang bisa melihat atau memodifikasi atribut atau metode di kelas, sebagai berikut :
<ul>
  <li>public : dapat diakses dan mengakses kelas mana saja.</li>
  <li>privat : hanaya dapat diakses oleh kelas itu sendiri.</li>
  <li>protected : hanya kelas induk dan turunan yang dapat mengakses.</li>
</ul>


  ```php
public function tampilkanData() {
        return "Nama : $this->nama<br> 
                Nim : $this->nim<br> 
                Jurusan : $this->jurusan";
    }
```
<li>Menampilkan data</li>

```
//Instantsiasi Objek
$mahasiswa1 = new Mahasiswa();

// Mengisi nilai atribut objek
$mahasiswa1->nama = "Shela Jaya Andini";
$mahasiswa1->nim = "230302044";
$mahasiswa1->jurusan = "Teknik Informatika";

echo $mahasiswa1->tampilkanData();
```
Instansiasi adalah proses pembuatan objek dari sebuah class. Dalam pemrograman berorientasi objek (OOP), class adalah blueprint atau cetak biru, sementara objek adalah instance atau contoh nyata yang dibuat berdasarkan blueprint tersebut.

echo $mahasiswa1->tampilkanData(); adalah perintah untuk menampilkan data yang dihasilkan oleh method tampilkanData() dari objek $mahasiswa1.

Output Program :
```
Nama : Shela Jaya Andini
Nim : 230302044
Jurusan : Teknik Informatika
```
</ul>
<h2>Prinsip OOP</h2>
<ul>
  <li>Encapsulation</li>
Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.
  
  ```php
    // Method untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }

    // Method untuk mengubah nilai nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
```

  - Membuat objek Mahasiswa baru dengan data awal
```
$mahasiswa1 = new Mahasiswa();
```
  - Mengatur nilai properti menggunakan setter
```
$mahasiswa1->setNama("Chitoo");
$mahasiswa1->setNim("230102078");
$mahasiswa1->setJurusan("Kedokteran Hewan");
```
  - Menampilkan data
```
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";
```
<ul>
  <li>Getter biasanya digunakan ketika properti kelas dideklarasikan sebagai private atau protected.</li>
  <li>Setter digunakan untuk mengubah nilai properti dari suatu objek.</li>
</ul>

Output Program
```
Nama: Chitoo
NIM: 230102078
Jurusan: Kedokteran Hewan
```
<li>Inheritance</li>
- Buat class Pengguna dengan atribut nama dan metode getNama().

```
// Definisi kelas Pengguna
class Pengguna {
    // Properti nama dengan akses protected (dapat diakses oleh kelas turunan)
    public $nama;

    // Method untuk mendapatkan nilai nama
    public function getNama() {
        return $this->nama;
    }
}
```

- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut
mataKuliah.

```
class Dosen extends Pengguna {
    // Properti mataKuliah hanya bisa diakses dalam kelas ini (private)
    public $mataKuliah;
```
extends digunakan untuk mendefinisikan inheritance atau pewarisan antara kelas.

- Instansiasi objek dari class Dosen dan tampilkan data dosen.

```
$pengguna1 = new Dosen();
$pengguna1->nama = "Bapak Abda'u";
$pengguna1->mataKuliah = "Pemrograman Web 2";

$pengguna1->tampilkanData();
```
Output Program :
```
Nama: Bapak Abda'u
Mata Kuliah: Pemrograman Web 2
```

<li>Polymorphism</li>
<p>Polimorfisme adalah di mana metode yang sama dapat memiliki perilaku yang berbeda tergantung pada objek yang menggunakannya.</p>
Dalam contoh ini, metode aksesFitur() di kelas Pengguna di-override di kelas Dosen dan Mahasiswa, yang menunjukkan konsep polimorfisme.

- Buat class Pengguna dengan metode aksesFitur().
```
class Pengguna {
    public function aksesFitur()
```
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan
Mahasiswa.
```
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
```
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
aksesFitur().
```
// Instansiasi objek dari Dosen dan Mahasiswa
$dosen1 = new Dosen();
$dosen1->aksesFitur();  // Output: Fitur Dosen
echo "<br>";
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->aksesFitur();  // Output: Fitur Mahasiswa
```
<p>Polimorfisme terjadi ketika metode aksesFitur() dideklarasikan di kelas induk Pengguna, tetapi kemudian metode ini di-override di kelas turunan (Dosen dan Mahasiswa) dengan implementasi yang berbeda.</p>
<p>Ketika memanggil aksesFitur() dari objek Dosen, output-nya adalah "Fitur Dosen", dan jika dari objek Mahasiswa, output-nya adalah "Fitur Mahasiswa.</p>
Output Program :

```
Fitur Dosen
Fitur Mahasiswa
```
<li>Abstraction</li>
<p>Abstraksi adalah untuk mendefinisikan struktur dasar (class abstrak) tanpa memberikan implementasi penuh. Implementasi detailnya diberikan oleh class turunannya.

- Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```
abstract class Pengguna {

    // Metode abstrak aksesFitur, harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}
```
- Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan
metode abstrak tersebut.
```
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
```
- Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang
diinstansiasi.
```
// Instansiasi objek dari class Dosen dan Mahasiswa
$dosen1 = new Dosen();
$mahasiswa1 = new Mahasiswa();

// Memanggil metode aksesFitur()
echo $dosen1->aksesFitur();       
echo $mahasiswa1->aksesFitur();
```
<p>abstract class Pengguna: Class ini adalah class abstrak, artinya kita tidak bisa membuat objek langsung dari class ini. Class ini hanya menyediakan kerangka dasar yang harus diikuti oleh class turunannya.</p>
<p>abstract public function aksesFitur();: Metode ini adalah metode abstrak, yang tidak punya isi atau cara kerja. Class yang mewarisi Pengguna wajib memberikan isi atau implementasi untuk metode ini. Intinya, Pengguna hanya menunjukkan bahwa semua pengguna harus punya metode aksesFitur, tapi tidak menjelaskan bagaimana cara kerjanya.</p>

Output Program :
```
fitur dosen.
fitur mahasiswa.
```


