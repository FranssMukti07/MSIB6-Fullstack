<?php
$ar_buah = ['pepaya', 'mangga', 'pisang', 'anggur', 'jeruk'];

echo $ar_buah[4];
echo "<hr>";

$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

foreach ($ar_buah as $x) {
    echo "$x<br>";
}

echo "<hr>";

$ar_hewan = [10 => 'Babi Ngepet', 20 => 'Bebek', 'Kucing', 30 => 'Putri Duyung', 'Anjing Galak'];
echo $ar_hewan[20];
echo "<hr>";

$data_staff = [
    "nama" => "Budi",
    "alamat" => "Depok",
    "telp" => "012345",
    "status" => "jomblo"
];
echo $data_staff['nama'];
