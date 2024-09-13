<?php
include 'koneksi.php';
// instansiasi objek student dengan polymorphism
$student2 = new Student_classes();
$studentsAndClasses = $student2->getDataByAcademicYear(); // Pastikan metode ini mengembalikan data yang sesuai
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lecturer - Students and Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table th {
            background-color: #007bff; /* Biru terang untuk header tabel */
            color: #fff;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #000;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        h2 {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Data Students Tahun Akademik 2023/2024</h2>
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
    <?php else: ?>
        <p class="text-center">Data tidak ditemukan untuk tahun akademik 2023/2024.</p>
    <?php endif; ?>
</body>
</html>
