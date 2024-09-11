# Jobsheet 3: Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
1. Inheritance (Pewarisan)
   Inheritance adalah konsep dimana suatu kelas dapat mewarisi atribut dan metode dari kelas lain. Jadi, kelas anak bisa mewarisi apa yang dimiliki oleh kelas induk.

   contoh coding :
     - Buat kelas Person dengan atribut name dan metode getName()
    ```
    class Person {
        protected $name;
        
        public function __construct($name) {
            $this->name = $name;
        }
    
        public function getName() {
            return $this->name;
        }
    }
    ```
    - Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().

    ```
    class Student extends Person {
        private $studentID;
    
        public function __construct($name, $studentID){
            parent::__construct($name);
            $this->studentID = $studentID;
        }
    
        public function getStudentID() {
            return $this->studentID;
        }
    }
    ```
      - extends Person menunjukan bahwa Student adalah turunan dari Person dan mewarisi semua atribut dan metode dari Person.
      - parent:: digunakan dalam konteks pewarisan untuk mengakses metode dari kelas induk. Digunakan ketika memanggil metode dari induk yg telah di-override atau diubah di kelas anak.
   
    - Menampilkan output
    ```
    $person1 = new Student("Shela", "230302044");
    echo $person1->getName()  . " memiliki ID " . $person1->getStudentID() . "<br>"; 
    $person2 = new Student("Rina", "230302045");
    echo $person2->getName()  . " memiliki ID " . $person2->getStudentID() . "<br>"; 
    ?>
    ```
    - [full code inheritance](https://github.com/shelalaa20/praktikum-web2/blob/main/jobsheet3/1-inheritance.php)
     - output program :
     ```
     Shela memiliki ID 230302044
     Rina memiliki ID 230302045
     ```
2. Polymorphism (Polimoefisme)
   Polymorphism memungkinkan satu metode memiliki banyak bentuk, biasanya melalui overriding di kelas turunan. Jadi, objek dapat diperlakukan sebagai bentk umum dan khusus sesuai kebutuhan.

     - Override adalah konsep di mana sebuah metode dalam subclass menggantikan implementasi metode yang sama yang ada di superclass-nya.
     - Tujuan nya adalah untuk mengubah atauu memperluas perilaku metode yang diwarisi oleh superclass, sesuai dengan kebutuhan subclass.
   - Membuat kelas Teacher yang juga mewarisi dari Person dan menambah atribut TeacherID
   ```
    class Teacher extends Person {
      private $teacherID;
  
      public function __construct($name, $teacherID){
          parent::__construct($name);
          $this->teacherID = $teacherID;
      }
  
      public function getTeacherID() {
          return $this->teacherID;
      }
   ```
   public function getTeacherID() : metode ini digunakan untuk mendapatkan teacherID dari suatu objek.
   
   - Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda
     ```
     public function getName() {
        return "Student " . $this->name;
     }
   ```
   
   public function getName() {
        return "Teacher " . $this->name;
    }
   ```
   kelas Student mewarisi dari Person dan mengganti metode getName() dengan versi baru.
   kelas Teacher mewarisi dari Person dan mengganti metode getName() dengan versi baru.

   - [full code polymorphism](https://github.com/shelalaa20/praktikum-web2/blob/main/jobsheet3/2-polymorphism.php)
   - output program :
     ```
     Student Shela memiliki ID 230302044
     Teacher Rina memiliki ID 230302045
      ```

3. Encapsulation (Enkapsulasi)
   Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.
     - Ubah atribut name dan studentID dalam kelas Student menjadi private.
   ```
   class Person {
    private $name;
   ```
   privat : hanya dapat diakses oleh kelas itu sendiri.
    - Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
     ```
   $person1 = new Student("Shela", "230302044");
   echo $person1->getName()  . " memiliki ID " . $person1->getStudentID() . "<br>"; 
   $person2 = new Teacher("Rina", "230302045");
   echo $person2->getName()  . " memiliki ID " . $person2->getTeacherID() . "<br>"; 
   $person3 = new Student("Bila", "230302000");
   echo $person3->getName()  . " memiliki ID " . $person3->getStudentID() . "<br>";
   //
   echo "<hr>";
   echo "Data setelah diubah<br>";
   $person1->setName("Shela Jaya Andini");
   $person3->setStudentID("230102034");
   //
   echo $person1->getName()  . " memiliki ID " . $person1->getStudentID() . "<br>"; 
   echo $person3->getName()  . " memiliki ID " . $person3->getStudentID() . "<br>"; 
   ?>
   ```
   Getter biasanya digunakan ketika properti kelas dideklarasikan sebagai private atau protected.
   
   Setter digunakan untuk mengubah nilai properti dari suatu objek.

   - [full code encapsulation](https://github.com/shelalaa20/praktikum-web2/blob/main/jobsheet3/3-encapsulation.php)
   - output program :
      ```
      Student Shela memiliki ID 230302044
      Teacher Rina memiliki ID 230302045
      Student Bila memiliki ID 230302000
      Data setelah diubah
      Student Shela Jaya Andini memiliki ID 230302044
      Student Bila memiliki ID 230102034
      ```
   
4. Abstraction (Abstraksi)
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai dengan menggunakan kelas abstrak atau antarmuka.
   - Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
   ```
   abstract class Course {
    abstract public function getCourseDetails();

   ```
   Kelas abstrak `Course` adalah kelas yang tidak bisa dibuat objeknya secara langsung. Fungsinya hanya sebagai kerangka dasar untuk kelas-kelas lain yang mewarisinya. Jadi, kelas ini hanya menyediakan struktur umum yang nantinya harus diisi oleh kelas-kelas turunan yang lebih spesifik.

   Method abstrak getCourseDetails() hanya didefinisikan dalam kelas Course tanpa ada implementasinya. Semua kelas yang mewarisi dari Course harus menyediakan isi atau implementasi untuk method ini, menentukan detail yang spesifik sesuai dengan kebutuhan kelas masing-masing.

   - Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan
getCourseDetails() untuk memberikan detail yang berbeda.
   ```
      class OnlineCourse extends Course {
       public function getCourseDetails(){
           return "ini OnlineCourse";
       }
   }
   class OfflineCourse extends Course {
       public function getCourseDetails(){
           return "ini OfflineCourse";
       }
   }
   ```
   Kelas OnlineCourse: Ini adalah turunan dari kelas Course. Di sini, metode getCourseDetails() mengembalikan teks "ini OnlineCourse".

   Kelas OfflineCourse: Sama seperti OnlineCourse, OfflineCourse juga mewarisi kelas Course dan memiliki metode getCourseDetails(). Namun, metode ini mengembalikan teks "ini OfflineCourse".
   
   - Menampilkan Data
   ```
   $course1= new OnlineCourse();
   echo "Detail : " . $course1->getCourseDetails() . "<br>";
   $course2= new OfflineCourse();
   echo "Detail : " . $course2->getCourseDetails();
   ```
   Di sini, kamu membuat objek baru $course1 dari kelas OnlineCourse. Ini berarti $course1 sekarang adalah sebuah instance dari kelas OnlineCourse yang memiliki semua sifat dan metode dari kelas induk Course dan metode spesifik dari OnlineCourse.
   
   Kemudian, kamu mencetak teks "Detail : " diikuti dengan hasil dari metode getCourseDetails() milik objek $course1. Karena $course1 adalah objek dari kelas OnlineCourse, maka metode getCourseDetails() akan mengembalikan teks "ini OnlineCourse".

   - [full code abstraction](https://github.com/shelalaa20/praktikum-web2/blob/main/jobsheet3/4-abstraction.php)
   - output program :
   ```
   Detail : ini OnlineCourse
   Detail : ini OfflineCourse
   ```

   
### Tugas
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```
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
```
2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan
Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
```
class Student extends Person {
    private $nim;
```
```
class Teacher extends Person {
    private $nidn;
```
3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan
override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda.
```
public function getRole() {
        echo "Person : ";
    }
```
```
    public function getRole(){
        echo "Student : ";
    }
```
```
    public function getRole(){
        echo "Teacher : ";
    }

```
Metode getRole() sudah di-override dalam kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.

5. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di
kelas Mahasiswa.
```
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
```
```
$person2 = new Dosen("Rina", "230302045");
echo $person2->getRole() . $person2->getName() . "<br>NIDN: " . $person2->getNidn() . "<hr>";

```
Atribut nidn dan nim sudah dideklarasikan sebagai private, sehingga hanya bisa diakses melalui metode getter.

7. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan
membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing
memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```
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

```
   - [full code tugas](https://github.com/shelalaa20/praktikum-web2/blob/main/jobsheet3/5-tugas.php)
   - output program :
```
Student : Shela
NIM: 230302044
Teacher : Rina
NIDN: 230302045
Pengajuan Jurnal Dosen: Judul: Penelitian Kesehatan, Tanggal Pengajuan: 2024-09-10
Pengajuan Jurnal Mahasiswa: Judul: Tugas Akhir, Tanggal Pengajuan: 2024-09-11
```
      
