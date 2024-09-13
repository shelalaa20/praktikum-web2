<?php
// Membuat class Database
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "tugas2_pweb2";
    protected $koneksi;

// Contruct untuk koneksi ke mysql
    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal: " . mysqli_connect_error();
        }
    }

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


    // Method akan di-override di kelas turunan untuk memenuhi polymorphism
    public function getDataByAcademicYear() {
        // Default behavior: tidak menampilkan apa-apa
        return $data; 
    }
}
// Membuat kelas Students subclass dari kelas Database
class Students extends Database {

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
// Membuat kelas Student_classes subclass dari kelas Database
class Student_classes extends Database {

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
?>