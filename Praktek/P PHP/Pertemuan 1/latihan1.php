<?php
$nama = "Dono Warkop";
$alamat = "Bogor Raya";
$umur = 22;

echo '<h1>Belajar PHP</h1>';
echo '<hr>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 Pemrograman PHP</title>
</head>

<body>
    <h2>Nama saya : <?= $nama; ?></h2>
    <h2>Saya berumur : <?= $umur; ?> tahun</h2>
    <hr>
</body>

</html>

<?php
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";


define('PELAJARAN', 'PHP Dasar');
echo "ini mata kuliah " . PELAJARAN;
echo "<hr>";

$a = "100";
$b = "80";

echo $a + $b;
echo "<br>";
echo "$a$b";
echo "<br>";
echo "<hr>";

$jari2 = 15;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
$keliling = 2 * PHI * $jari2;

echo "Luas Lingkaran : " . $luas;
echo "<br>";
echo "Keliling Lingkaran : " . $keliling;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <hr>
    <p>Jari-jarinya adalah <?= $jari2 ?></p>
    <p>Luas Lingkaran adalah <?= $luas ?></p>
    <p>Keliling Lingkaran adalah <?= $keliling ?></p>
    <hr>
</body>

</html>

<?php
// tipe data string
$itungstring = "Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo "<br>";

// mengetahui tipe variabel
$huruf = "Dono";
$hasil = gettype($huruf);
echo $hasil;
echo "<br>";

$bil = 100;
$hasil2 = gettype($bil);
echo $hasil2;
echo "<br>";

$bil2 = 7.50;
$hasil3 = gettype($bil2);
echo $hasil3;
echo "<br>";
?>