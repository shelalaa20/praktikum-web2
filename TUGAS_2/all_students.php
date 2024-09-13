<?php
include 'koneksi.php';
// instansiasi objek student dengan polymorphism
$student1 = new Students();
$studentsAndClasses = $student1->getDataByAcademicYear(); // Pastikan fungsi ini mengembalikan data yang benar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Admin - Students and Classes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table th {
            background-color: #007bff; /* Biru untuk header tabel */
            color: #fff;
        }
        .btn-warning {
            background-color: #ffcc00;
            color: #000;
        }
        .btn-warning:hover {
            background-color: #ffbb33;
        }
    </style>
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
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
        <p class="text-center">Data tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
