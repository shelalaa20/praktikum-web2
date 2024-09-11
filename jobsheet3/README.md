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

  -output program :
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

3. Encapsulation (Enkapsulasi)
   Encapsulation menyembunyikan detail internal dari sebuah objek dan hanya membiarkan interaksi melalui metode publik yang tersedia, menjaga data internal tetap aman dari perubahan tak terduga.
     - Ubah atribut name dan studentID dalam kelas Student menjadi private.
   ```
   class Person {
    private $name;
   ```
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
5. Abstraction (Abstraksi)
Abstraction adalah proses menyembunyikan detail implementasi internal dan
hanya menampilkan fungsionalitas utama kepada pengguna. Ini biasanya dicapai dengan menggunakan kelas abstrak atau antarmuka.

   
   
     




