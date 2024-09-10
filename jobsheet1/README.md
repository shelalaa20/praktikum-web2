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
  <li>Constructor</li>
  <p>Constructor adalah metode khusus yang dipanggil secara otomatis ketika sebuah objek dibuat (diinstansiasi). Ini digunakan untuk menginisialisasi objek dengan nilai-nilai awal.</p>

  ```php
// Constructor
public function __construct($nama, $nim, $jurusan) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->jurusan = $jurusan;
}
```
<p>Dalam kode ini, __construct() digunakan untuk menginisialisasi atribut atau properti dari objek yang diinstansiasi.</p>
  <li>Methods</li>
  <p>Perilaku yang dimiliki class untuk aksi tertentu.</p>

  ```php
public function tampilkanData() {
        return "Nama : $this->nama<br> 
                Nim : $this->nim<br> 
                Jurusan : $this->jurusan";
    }
```
<li>Menampilkan data</li>

```
echo $mahasiswa1->tampilkanData();
```
Output Program :
![Screenshot 2024-09-10 123532](https://github.com/user-attachments/assets/304cb550-c4cd-4c95-8c84-d56be24e5946)

</ul>
<h2>Prinsip OOP</h2>
<ul>
  <li>Encapsulation</li>
  <ul>
<li><p>Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.</p></li>
  
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
<li>Menampilkan data awal</li>

```
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
```
<li>Mengubah nilai properti dengan setter</li>

```
$mahasiswa1->setNama("Chitoo");
```
<li>Menampilkan data setelah diubah</li>

```
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
```
</ul>
<ul>
  <li>Getter biasanya digunakan ketika properti kelas dideklarasikan sebagai private atau protected.</li>
  <li>Setter digunakan untuk mengubah nilai properti dari suatu objek.</li>
</ul>

Output Program
![Screenshot 2024-09-10 124642](https://github.com/user-attachments/assets/8681deb6-8574-47dd-8027-783b0bdff0cc)

<li>Inheritance</li>
<p>Kelas dapat mewarisi properti dan metode dari kelas lain. </p>
Deklarasi Pewarisan:

```php
class Dosen extends Pengguna {
}

```
<p>extends digunakan untuk mendefinisikan inheritance atau pewarisan antara kelas. </p>
Memanggil Constructor Kelas Induk:

```php
parent::__construct($nama);

```
<p>Digunakan untuk memanggil constructor dari kelas induk Pengguna sehingga properti nama dapat diinisialisasi dari kelas induk.</p>

Output Program :
![Screenshot 2024-09-10 125334](https://github.com/user-attachments/assets/ace3399a-6873-4f3a-9ec2-e385e246f9ac)

<li>Polymorphism</li>
<p>Polimorfisme adalah di mana metode yang sama dapat memiliki perilaku yang berbeda tergantung pada objek yang menggunakannya.</p>
Dalam contoh ini, metode aksesFitur() di kelas Pengguna di-override di kelas Dosen dan Mahasiswa, yang menunjukkan konsep polimorfisme.

```php
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
<p>Polimorfisme terjadi ketika metode aksesFitur() dideklarasikan di kelas induk Pengguna, tetapi kemudian metode ini di-override di kelas turunan (Dosen dan Mahasiswa) dengan implementasi yang berbeda.</p>
<p>Ketika memanggil aksesFitur() dari objek Dosen, output-nya adalah "Fitur Dosen", dan jika dari objek Mahasiswa, output-nya adalah "Fitur Mahasiswa.</p>
Output Program :

![Screenshot 2024-09-10 125411](https://github.com/user-attachments/assets/e09028cc-0944-4387-9556-4d5df87bbdf1)
<li>Abstraction</li>
<p>Abstraksi adalah untuk mendefinisikan struktur dasar (class abstrak) tanpa memberikan implementasi penuh. Implementasi detailnya diberikan oleh class turunannya.

```php
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

```
<p>abstract class Pengguna: Class ini adalah class abstrak, artinya kita tidak bisa membuat objek langsung dari class ini. Class ini hanya menyediakan kerangka dasar yang harus diikuti oleh class turunannya.</p>
<p>abstract public function aksesFitur();: Metode ini adalah metode abstrak, yang tidak punya isi atau cara kerja. Class yang mewarisi Pengguna wajib memberikan isi atau implementasi untuk metode ini. Intinya, Pengguna hanya menunjukkan bahwa semua pengguna harus punya metode aksesFitur, tapi tidak menjelaskan bagaimana cara kerjanya.</p>
Output Program :

![Screenshot 2024-09-10 125434](https://github.com/user-attachments/assets/d22c530b-9262-4b71-a1a3-3d8918ab4242)

</ul>

