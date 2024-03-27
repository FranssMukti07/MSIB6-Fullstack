<?php
$umur = 18;
if ($umur > 20) {
    echo "Selamat kamu dapat mengendarai Mobil";
} elseif ($umur > 17) {
    echo "Selamat kamu dapat mengendarai Motor";
} elseif ($umur > 10) {
    echo "Selamat kamu dapat mengendarai Sepeda";
} else {
    echo "Kamu dilarang menggunakan kendaraan";
}

echo "<hr>";

$keterangan;
if ($umur >= 17 && $umur < 40) {
    $keterangan = "Dewasa";
} elseif ($umur >= 9 && $umur < 17) {
    $keterangan = "Remaja";
} elseif ($umur < 9 && $umur > 5) {
    $keterangan = "Anak-anak";
} elseif ($umur <= 5 && $umur > 0) {
    $keterangan = "Balita";
} else {
    $keterangan = "Tua";
}
echo $keterangan;
echo "<hr>";

$nilai = 7;
$ket;

// if ($nilai > 6) {
//     $ket = "Baik";
// } else {
//     $ket = "Buruk";
// }

($nilai > 6) ? $ket = "Baik" : $ket = "Buruk";
echo $ket;
echo "<br><hr>";

$baju = "l";
$kode = strtolower($baju);
switch ($kode) {
    case 'l':
        echo "Large";
        break;
    case 'm':
        echo "Medium";
        break;
    default:
        echo "Small";
        break;
}

echo "<br><hr>";

$grade = 60;
switch ($grade) {
    case $grade <= 40:
        echo "$grade: Nilai Kurang";
        break;
    case $grade <= 70:
        echo "$grade: Nilai Cukup";
        break;
    default:
        echo "NULL";
        break;
}
