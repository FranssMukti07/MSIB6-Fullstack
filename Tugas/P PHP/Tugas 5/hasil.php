<?php
error_reporting(0);
require_once 'Mahasiswa.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-1">
        <div class="container-fluid">
            <div class="row">
                <h1 class="text-center my-3">Daftar Nilai Ujian Mahasiswa</h1>
                <div class="col-10 m-auto">
                    <a href="./index.php" class="btn btn-outline-dark mb-2">
                        <- Kembali </a>
                            <table class="table table-bordered">
                                <thead class="table-danger">
                                    <tr class="text-center">
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Kampus Asal</th>
                                        <th>Mata Kuliah</th>
                                        <th>Nilai</th>
                                        <th>Grade</th>
                                        <th>Predikat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-secondary text-center">
                                        <?php
                                        $nim = $_POST['nim'];
                                        $nama = $_POST['nama'];
                                        $kampus = $_POST['kampus'];
                                        $matkul = $_POST['matkul'];
                                        $nilai = $_POST['nilai'];

                                        $mahasiswa = new Mahasiswa($nim, $nama, $kampus, $matkul, $nilai);
                                        ?>
                                        <td><?= $mahasiswa->nim ?></td>
                                        <td><?= $mahasiswa->nama ?></td>
                                        <td><?= $mahasiswa->kampus ?></td>
                                        <td><?= $mahasiswa->matkul ?></td>
                                        <td><?= $mahasiswa->nilai ?></td>
                                        <td><?= $mahasiswa->cariGrade() ?></td>
                                        <td><?= $mahasiswa->cariPredikat() ?></td>
                                        <td><?= $mahasiswa->cariStatus() ?></td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>