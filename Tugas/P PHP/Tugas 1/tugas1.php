<?php
$nama = "Gigih Zhafrans Mukti Luhur";
$kampus = "Sekolah Tinggi Terpadu Nurul Fikri";
$prodi = "Teknik Informatika";
$cita_cita = "Programmer Handal";
$tempat_lahir = "Klaten";
$tanggal_lahir = "30 Mei 2001";
$alamat = "Depok, Jawa Barat";
$email = "franssmukti@gmail.com";
$no_hp = "0895619623881";
$link_foto = "https://i.ibb.co/fYgSNHC/photo-2024-02-20-17-41-23.jpg";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas 1 Pemrograman PHP</title>
    <style>
        body {
            background-color: #FFE3CA;
        }

        img {
            width: 20%;
            border-radius: 100%;
            object-fit: cover;
            margin-top: 3%;
        }

        div {
            text-align: center;
        }

        h1 {
            color: darkblue;
            font-size: 30pt;
        }

        p {
            font-size: 13pt;
        }

        legend {
            font-size: 20pt;
            color: #2D9596;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            color: red;
        }

        ol {
            line-height: 150%;
        }
    </style>
</head>

<body>
    <div>
        <img src=<?= $link_foto ?> alt="Foto Gigih" />
    </div>
    <div>
        <h1>
            <?= $nama ?>
        </h1>
    </div>
    <div>
        <p>
            Seorang mahasiswa di <?= $kampus ?> Program Studi <?= $prodi ?> yang sedang belajar
            <em>Ngoding</em> dan bercita-cita untuk menjadi seorang
            <strong><?= $cita_cita ?></strong>
        </p>
    </div>
    <fieldset>
        <legend>
            Informasi Pribadi
        </legend>
        <ol type="1">
            <li><b>Tempat Lahir : </b><?= $tempat_lahir ?></li>
            <li><b>Tanggal Lahir : </b><?= $tanggal_lahir ?></li>
            <li><b>Alamat : </b><?= $alamat ?></li>
            <li>
                <b>Pendidikan :
                </b>
                <ul type="disc">
                    <li>SDIT Hidayah Klaten</li>
                    <li>SMPIT Hidayah Klaten</li>
                    <li>SMA N 1 Klaten</li>
                    <li>STT Terpadu Nurul Fikri</li>
                </ul>
            </li>
            <li>
                <b>Hobi :
                </b>
                <ul type="circle">
                    <li>Coding</li>
                    <li>Gaming</li>
                    <li>Watching Movie</li>
                    <li>Travelling</li>
                </ul>
            </li>
            <li>
                <b>Makanan Favorit :
                </b>
                <ul type="square">
                    <li>Nasi Goreng</li>
                    <li>Chicken Steak</li>
                    <li>Sate Ayam</li>
                </ul>
            </li>
            <li>
                <b>Social Media :
                </b>
                <ul type="disc">
                    <li>
                        Instagram :
                        <a href="https://www.instagram.com/gigihzhafrans_/" target="_blank">@gigihzhafrans_</a>
                    </li>
                    <li>
                        Facebook :
                        <a href="https://web.facebook.com/gigih.n.rezpector" target="_blank">Gigih Zhafrans</a>
                    </li>
                </ul>
            </li>
            <li><b>Nomor HP : </b><?= $no_hp ?></li>
            <li><b>Email : </b><?= $email ?></li>
        </ol>
    </fieldset>
</body>

</html>