<?php
$ar_univ = ['Sekolah Tinggi Teknologi Terpadu Nurul Fikri', 'Universitas Gunadarma', 'Universitas Indonesia', 'Universitas Pancasila', 'Politeknik Negeri Jakarta', 'Institut Teknologi Bandung', 'Universitas Gajah Mada', 'Universitas Sebelas Maret'];

$ar_matkul = ['HTML', 'CSS3', 'JavaScript', 'UI/UX', 'PHP', 'Laravel', 'MySQL'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP - OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1 class="text-center mt-2">Form Nilai Ujian</h1>
                <div class="col-md-5 my-1">
                    <form action="./hasil.php" method="post">
                        <div class="mb-2">
                            <label for="inputNIM" class="form-label fw-bold">NIM</label>
                            <input type="text" class="form-control" name="nim" required id="inputNIM">
                        </div>
                        <div class="mb-2">
                            <label for="inputNama" class="form-label fw-bold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" required id="inputNama">
                        </div>
                        <div class="mb-2">
                            <label for="inputKuliah" class="form-label fw-bold">Kampus Asal</label>
                            <select class="form-select" required name="kampus">
                                <!-- <option selected disabled class="text-center"> =====>Choose One<===== </option> -->
                                        <?php foreach ($ar_univ as $x) { ?>
                                <option value="<?= $x ?>"><?= $x ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="inputMatkul" class="form-label fw-bold">Mata Kuliah</label>
                            <select class="form-select" required name="matkul">
                                <!-- <option selected disabled class="text-center"> =====>Choose One<===== </option> -->
                                        <?php foreach ($ar_matkul as $y) { ?>
                                <option value="<?= $y ?>"><?= $y ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="inputNilai" class="form-label fw-bold">Nilai</label>
                            <input type="number" class="form-control" name="nilai" required id="inputNilai" min="0" max="100">
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-outline-primary w-50">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>