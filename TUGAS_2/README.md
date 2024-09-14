}# Tugas 2
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

## file (koneksi.php)
### Membuat kelas Database
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
[klik untuk melihat full code](https://github.com/shelalaa20/praktikum-web2/blob/main/TUGAS_2/koneksi.php)

  - Override getDataByAcademicYear(): Pada kelas Student_classes, method ini di-override untuk menampilkan data dengan filter tahun akademik 2023/2024.
  - Query SQL dengan Filter: $query = "SELECT ... WHERE student_classes.academic_year = '2023/2024'": Data yang diambil difilter hanya untuk tahun akademik 2023/2024 dengan menggunakan klausa WHERE.
    
## file (index.php)
```
<?php
include 'koneksi.php'; // File yang berisi class Database
// instansiasi objek database 
$database = new Database();
$allStudents = $database->getAllStudents();
$allClasses = $database->getAllClasses();
?>
```
Instansiasi Objek: Di sini, objek diinstansiasi, dan method getAllStudents() serta getAllClasses() dipanggil untuk mendapatkan data dari tabel students dan student_classes. Data yang diperoleh disimpan dalam variabel $allStudents dan $allClasses.
```
<!--Membuat output table students-->
    <h2 class="text-center mt-4">Data Students</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Signature</th>
                <th>No. Telepon</th>
                <th>User ID</th>
                <th>Student Class ID</th>
                <th>Deleted At</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allStudents as $student): ?>
                <tr>
                    <td><?= $student['id'] ?></td>
                    <td><?= $student['nim'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['address'] ?></td>
                    <td><?= $student['signature'] ?></td>
                    <td><?= $student['number_phone'] ?></td>
                    <td><?= $student['user_id'] ?></td>
                    <td><?= $student['student_class_id'] ?></td>
                    <td><?= $student['deleted_at'] ?></td>
                    <td><?= $student['created_at'] ?></td>
                    <td><?= $student['updated_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
```
Tampilan Data Students: Data dari tabel students ditampilkan dalam tabel HTML dengan menggunakan Bootstrap untuk membuat tampilan tabel lebih rapi dan responsif.
```
<!--Membuat output table student_classes-->
    <h2 class="text-center mt-5">Data Student Classes</h2>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Tahun Akademik</th>
                <th>Program Studi ID</th>
                <th>Deleted At</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allClasses as $class): ?>
                <tr>
                    <td><?= $class['id'] ?></td>
                    <td><?= $class['name'] ?></td>
                    <td><?= $class['academic_year'] ?></td>
                    <td><?= $class['study_program_id'] ?></td>
                    <td><?= $class['deleted_at'] ?></td>
                    <td><?= $class['created_at'] ?></td>
                    <td><?= $class['updated_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```
Tampilan Data Student Classes: Data dari tabel student_classes juga ditampilkan dalam tabel yang terpisah. Penggunaan tabel striped dari Bootstrap membuat tampilan lebih jelas dan mudah dibaca.
```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
```
[klik untuk melihat full code](https://github.com/shelalaa20/praktikum-web2/blob/main/TUGAS_2/index.php)

Bootstrap: Di bagian <head>, Bootstrap diintegrasikan untuk memberikan style responsif pada aplikasi. Navbar, tabel, dan komponen lainnya menggunakan kelas Bootstrap agar tampil lebih baik di berbagai perangkat.
#### <b>Output index.php<b>
![Screenshot 2024-09-13 214431](https://github.com/user-attachments/assets/36acd9ef-5e8e-4589-ab14-58f61c4bf347)


## file (all_students.php)
```
<?php
include 'koneksi.php';
// instansiasi objek student dengan polymorphism
$student1 = new Students();
$studentsAndClasses = $student1->getDataByAcademicYear(); // Pastikan fungsi ini mengembalikan data yang benar
?>
```
Instansiasi Objek: Pada bagian ini, objek student1 diinstansiasi dari kelas Students. Method getDataByAcademicYear() kemudian dipanggil untuk mendapatkan data dari tabel students dan student_classes berdasarkan tahun akademik. Data yang diperoleh dari metode ini disimpan dalam variabel $studentsAndClasses.
```
        <h2>Data All Students</h2>
        <a href="index.php" class="btn btn-warning">Kembali</a>
    </div>

    <?php if (!empty($studentsAndClasses)): ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID Student</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Signature</th>
                    <th>No. Telepon</th>
                    <th>Nama Kelas</th>
                    <th>Tahun Akademik</th>
                    <th>Deleted At</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
```
Tabel Header (<thead>): Header tabel berisi kolom-kolom yang akan menampilkan informasi students
```
            <tbody>
                <?php foreach ($studentsAndClasses as $student): ?>
                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= $student['nim'] ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['address'] ?></td>
                        <td><?= $student['signature'] ?></td>
                        <td><?= $student['number_phone'] ?></td>
                        <td><?= $student['class_name'] ?></td>
                        <td><?= $student['academic_year'] ?></td>
                        <td><?= $student['deleted_at'] ?></td>
                        <td><?= $student['created_at'] ?></td>
                        <td><?= $student['updated_at'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

```
[klik untuk melihat full code](TUGAS_2/all_students.php)

Looping Data: Pada bagian ini, digunakan foreach untuk melakukan iterasi terhadap data $studentsAndClasses yang diperoleh dari database. Untuk setiap mahasiswa ($student), nilai-nilai dari kolom seperti id, nim, name, address, dll., akan dimasukkan ke dalam kolom tabel.

 #### <b>Output all_students.php<br>
![Screenshot 2024-09-13 214503](https://github.com/user-attachments/assets/0b868944-16cf-4667-8c33-e44340c7e6e3)

##  file (students_2023-2024.php)

[klik untuk melihat full code](TUGAS_2/students_2023-2024.php)

#### <b>Output students_2023-2024<b>
![Screenshot 2024-09-13 214526](https://github.com/user-attachments/assets/1add6515-555f-4153-ad5b-51c0ff011eac)
