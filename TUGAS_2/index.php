<?php
include 'koneksi.php'; // File yang berisi class Database
// instansiasi objek database 
$database = new Database();
$allStudents = $database->getAllStudents();
$allClasses = $database->getAllClasses();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Role & Tabel Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar styling for better contrast */
        .navbar-custom {
            background-color: #343a40; /* Dark background for navbar */
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #ffffff; /* White text for better readability */
        }
        .navbar-custom .nav-link:hover {
            color: #f8f9fa; /* Slightly lighter on hover */
        }
        
        /* Table heading for clearer contrast */
        .table thead th {
            background-color: #007bff; /* Blue background for table headers */
            color: #ffffff; /* White text for table headers */
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f2f2f2; /* Light gray background for striped rows */
        }
    </style>
</head>
<body class="container mt-5">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Data Students</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="all_students.php">All Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="students_2023-2034.php">Students 2023/2024</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->
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