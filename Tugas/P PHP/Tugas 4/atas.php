<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 Pemrograman PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h1 {
            color: #2d9596;
            font-size: 50pt;
        }

        .navigasi {
            color: darkblue;
        }

        .navigasi:hover {
            color: whitesmoke;
        }

        .profile {
            background-color: #ffe3ca;
        }

        img {
            border-radius: 100%;
            width: 250px;
        }

        .profile-title {
            color: green;
        }

        legend {
            color: #2d9596;
            font-size: 20pt;
        }

        .home {
            min-height: 350px;
            width: 50%;
            margin: 2% auto;
        }

        footer>a:hover {
            color: white;
        }

        .contact {
            min-height: 375px;
            border: 5px solid;
            border-color: #CF3F74 #13C921 #106BFF #420897;
        }

        .sosmed {
            border: 1px solid;
        }

        .ig {
            color: #8A2387;
        }

        .ig:hover {
            color: whitesmoke;
            background: #8A2387;
            background: -webkit-linear-gradient(to right, #F27121, #E94057, #8A2387);
            background: linear-gradient(to right, #F27121, #E94057, #8A2387);
        }

        .fb {
            color: #00c6ff;
        }

        .fb:hover {
            color: whitesmoke;
            background: #00c6ff;
            background: -webkit-linear-gradient(to right, #0072ff, #00c6ff);
            background: linear-gradient(to right, #0072ff, #00c6ff);
        }

        .wa {
            color: #11998e;
        }

        .wa:hover {
            color: whitesmoke;
            background: #11998e;
            background: -webkit-linear-gradient(to right, #38ef7d, #11998e);
            background: linear-gradient(to right, #38ef7d, #11998e);
        }

        .gh {
            color: #0F2027;
        }

        .gh:hover {
            color: whitesmoke;
            background: #0F2027;
            background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
        }

        .lk {
            color: #3a7bd5;
        }

        .lk:hover {
            color: whitesmoke;
            background: #3a7bd5;
            background: -webkit-linear-gradient(to right, #3a6073, #3a7bd5);
            background: linear-gradient(to right, #3a6073, #3a7bd5);
        }
    </style>
</head>

<body>
    <div class="row">
        <h1 class="text-center">Webku</h1>
        <div class="text-center p-2 bg-warning" style="color: red;">
            <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
            <?php
            //looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a class='text-decoration-none fw-bolder fs-5 navigasi' href='index.php?hal=$key'>$value</a> | ";
            }
            ?>
        </div>