<?php
$data_mahasiswa = [
    [
        'nama' => 'Andi Santono',
        'nim' => '0111111',
        'nilai' => 95
    ],
    [
        'nama' => 'Budi Kurniawan',
        'nim' => '0111112',
        'nilai' => 80
    ],
    [
        'nama' => 'Candi Badur',
        'nim' => '0111113',
        'nilai' => 78
    ],
    [
        'nama' => 'Denis Saputra',
        'nim' => '0111114',
        'nilai' => 76
    ],
    [
        'nama' => 'Erik Manahel',
        'nim' => '0111115',
        'nilai' => 86
    ],
    [
        'nama' => 'Fatril Nusonto',
        'nim' => '0111116',
        'nilai' => 50
    ],
    [
        'nama' => 'Gayama Harustia',
        'nim' => '0111117',
        'nilai' => 20
    ],
    [
        'nama' => 'Isma Lotono',
        'nim' => '0111118',
        'nilai' => 30
    ],
    [
        'nama' => 'Jami Sayir',
        'nim' => '0111119',
        'nilai' => 70
    ],
    [
        'nama' => 'Karni Buato',
        'nim' => '0111110',
        'nilai' => 65
    ]
];
$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$list_nilai = array_column($data_mahasiswa, 'nilai');
$nilai_tertinggi = max($list_nilai);
$nilai_terendah = min($list_nilai);
$jumlah_mahasiswa = count($data_mahasiswa);
$jumlah_nilai = array_sum($list_nilai);
$nilai_rata2 = $jumlah_nilai / $jumlah_mahasiswa;
$summary = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-rata' => $nilai_rata2,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $jumlah_nilai
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 Pemrograman PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-10">
                    <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
                    <table class="table table-hover table-bordered text-center">
                        <thead>
                            <tr>
                                <?php for ($x = 0; $x < count($ar_judul); $x++) { ?>
                                    <th class="bg-warning"><?= $ar_judul[$x] ?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_mahasiswa as $mahasiswa) {
                                $keterangan = ($mahasiswa['nilai'] >= 65) ? "Lulus" : "Gagal";
                                if ($mahasiswa['nilai'] >= 86) {
                                    $grade = "A";
                                } elseif ($mahasiswa['nilai'] <= 85 && $mahasiswa['nilai'] >= 76) {
                                    $grade = "B";
                                } elseif ($mahasiswa['nilai'] <= 75 && $mahasiswa['nilai'] >= 60) {
                                    $grade = "C";
                                } elseif ($mahasiswa['nilai'] < 60 && $mahasiswa['nilai'] >= 30) {
                                    $grade = "D";
                                } elseif ($mahasiswa['nilai'] < 30) {
                                    $grade = "E";
                                }
                                switch ($grade) {
                                    case 'A':
                                        $predikat = "Memuaskan";
                                        break;
                                    case 'B':
                                        $predikat = "Bagus";
                                        break;
                                    case 'C':
                                        $predikat = "Cukup";
                                        break;
                                    case 'D':
                                        $predikat = "Kurang";
                                        break;
                                    case 'E':
                                        $predikat = "Buruk";
                                        break;

                                    default:
                                        $predikat = "-";
                                        break;
                                } ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $mahasiswa['nama'] ?></td>
                                    <td><?= $mahasiswa['nim'] ?></td>
                                    <td><?= $mahasiswa['nilai'] ?></td>
                                    <td><?= $keterangan ?></td>
                                    <td><?= $grade ?></td>
                                    <td><?= $predikat ?></td>
                                </tr>
                                <?php $no++ ?>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <?php foreach ($summary as $key => $value) { ?>
                                <tr>
                                    <th class="bg-info" style="text-align: right;" colspan="4"><?= $key ?></th>
                                    <th class="bg-secondary" colspan="3"><?= $value ?></th>
                                </tr>
                            <?php } ?>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>