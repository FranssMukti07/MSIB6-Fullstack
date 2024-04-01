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
    <link rel="stylesheet" href="css/style.css">
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