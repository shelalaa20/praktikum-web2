# Tugas 2
Tugas ini merupakan implementasi untuk menampilkan data students dan student_classes dari database menggunakan pendekatan PHP OOP (Object-Oriented Programming). 

Program ini menggunakan konsep inheritance, enkapsulasi dan polymorphism dengan memanfaatkan beberapa kelas turunan yang meng-override method dari kelas induk.

### Task

1. Buat View berbasis OOP, dengan mengambil data dari database MySQL
2. Gunakan _construct sebagai penghubung ke database
3. Terapkan enkapsulasi sesuai dengan logika studi kasus
4. Buat kelas turunan menggunakan konsep inheritance
5. Terapkan polimorfisme untuk setidaknya 2 peran berdasarkan studi kasus

### Fitur Utama:
- Koneksi Database : Menggunakan kelas Database untuk menghubungkan aplikasi ke MySQL.
- Menampilkan Data Students : Menampilkan seluruh data mahasiswa yang terdaftar di tabel students.
- Menampilkan Data Student Classes : Menampilkan seluruh data kelas yang terdaftar di tabel student_classes.
- Polymorphism:
    - Menampilkan gabungan data students dengan student_classes secara umum.
    - Menampilkan data students dengan student_classes yang hanya mencakup tahun akademik 2023/2024.


## Membuat kelas Database
[klik untuk melihat full code]()
- Deklarasi Variabel
```
// Membuat class Database
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tugas2_pweb2";
    protected $koneksi;
```
  - $koneksi: Variabel yang digunakan untuk menyimpan hasil koneksi ke database. Ditandai sebagai protected karena akan digunakan juga di kelas turunan.

- Method __construct()
```
// Contruct untuk koneksi ke mysql
    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }
```
  - Membuat koneksi ke database dengan mysqli_connect(). Jika koneksi gagal, akan menampilkan pesan error menggunakan mysqli_connect_error().

### Menambahkan method untuk menampilkan data
```
// Function untuk menampilkan tabel students
    public function getAllStudents() {
        $query = "SELECT * FROM students";
        $result = mysqli_query($this->koneksi, $query);
        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
// Function untuk menampilkan tabel student_classes
    public function getAllClasses() {
        $query = "SELECT * FROM student_classes";
        $result = mysqli_query($this->koneksi, $query);
        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

```
  - Query SQL : $query = "SELECT * FROM namatabel": Query SQL untuk mengambil semua data dari tabel.
  - Eksekusi Query : $result = mysqli_query($this->koneksi, $query): Menjalankan query menggunakan koneksi ke database dan menyimpan hasilnya dalam variabel $result.
  - Menyimpan Hasil dalam Array :
    - while ($row = mysqli_fetch_assoc($result)): Loop ini digunakan untuk mengambil setiap baris hasil query sebagai array asosiatif.
    - $data[] = $row: Setiap baris hasil disimpan dalam array $data.


### Menambahkan Method untuk Polymorphism
```
    // Method akan di-override di kelas turunan untuk memenuhi polymorphism
    public function getDataByAcademicYear() {
        // Default behavior: tidak menampilkan apa-apa
        return $data; 
    }
}
```
  - getDataByAcademicYear():
  Method ini merupakan method dasar yang nantinya akan di-override oleh kelas turunan. Pada kelas Database, method ini tidak melakukan apa-apa selain mengembalikan variabel $data yang tidak terdefinisi.
  - Polymorphism:
  Method ini mengimplementasikan polymorphism, di mana kelas turunan dapat memberikan implementasi berbeda dari method ini.

 ### Membuat Kelas Students Subclass dari Database 
```
// Membuat kelas Students subclass dari kelas Database
class Students extends Database {
```
  - Kelas Students merupakan subclass dari kelas Database, yang artinya mewarisi semua atribut dan method dari kelas Database.
```
    // Polimorphism bisa melihat seluruh data gabungan table students dengan table student_classes 
    public function getDataByAcademicYear() {
        $query = "
            SELECT students.*, student_classes.name AS class_name, student_classes.academic_year
            FROM students
            JOIN student_classes ON students.student_class_id = student_classes.id
        ";
        $result = mysqli_query($this->koneksi, $query);
        $data = [];
    
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
    
}
```
  - Override getDataByAcademicYear(): pada kelas Students, method ini di-override untuk mengambil gabungan data dari tabel students dan student_classes.

### Membuat Kelas Student_classes (Subclass dari Database)
```
// Membuat kelas Student_classes subclass dari kelas Database
class Student_classes extends Database {
```
  - Kelas Student_classes merupakan subclass dari kelas Database, yang artinya mewarisi semua atribut dan method dari kelas Database.
```
    // Polimorphism bisa melihat seluruh data gabungan table students dengan table student_classes dengan tahun akademik 2023/2024
    public function getDataByAcademicYear() {
        $query = "
            SELECT students.*, student_classes.name AS class_name, student_classes.academic_year
            FROM students 
            JOIN student_classes ON students.student_class_id = student_classes.id
            WHERE student_classes.academic_year = '2023/2024'
        ";
        $result = mysqli_query($this->koneksi, $query);
        $data = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }
}
```
  - Override getDataByAcademicYear(): Pada kelas Student_classes, method ini di-override untuk menampilkan data dengan filter tahun akademik 2023/2024.
  - Query SQL dengan Filter: $query = "SELECT ... WHERE student_classes.academic_year = '2023/2024'": Data yang diambil difilter hanya untuk tahun akademik 2023/2024 dengan menggunakan klausa WHERE.

  
#### <b>Output index.php<b>
![Screenshot 2024-09-13 214431](https://github.com/user-attachments/assets/36acd9ef-5e8e-4589-ab14-58f61c4bf347)

 #### <b>Output all_students.php<br>
![Screenshot 2024-09-13 214503](https://github.com/user-attachments/assets/0b868944-16cf-4667-8c33-e44340c7e6e3)

#### <b>Output students_2023-2024<b>
![Screenshot 2024-09-13 214526](https://github.com/user-attachments/assets/1add6515-555f-4153-ad5b-51c0ff011eac)
