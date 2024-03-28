<?php
$a1 = ['kode' => '1111', 'buah' => 'apel', 'harga' => 20000, 'jumlah' => 4];
$a2 = ['kode' => '2222', 'buah' => 'mangga', 'harga' => 25000, 'jumlah' => 5];
$a3 = ['kode' => '3333', 'buah' => 'pepaya', 'harga' => 30000, 'jumlah' => 6];
$a4 = ['kode' => '4444', 'buah' => 'semangka', 'harga' => 35000, 'jumlah' => 7];
$a5 = ['kode' => '5555', 'buah' => 'durian', 'harga' => 40000, 'jumlah' => 8];

$ar_buah = [$a1, $a2, $a3, $a4, $a5];
$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];

$jumlah_harga = array_column($ar_buah, 'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$jumlah_transaksi = count($ar_buah);
$harga_rata2 = $harga_total / $jumlah_transaksi;

$keterangan = [
    'Harga Total' => $harga_total,
    'Harga Tertinggi' => $harga_tertinggi,
    'Harga Terendah' => $harga_terendah,
    'Jumlah Transaksi' => $jumlah_transaksi,
    'Rata-rata Harga' => $harga_rata2
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah</title>
</head>

<body>
    <h3 align="center">Daftar Buah-buahan</h3>
    <table border="1" cellspacing="1" cellpadding="10" align="center">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $x) { ?>
                    <th><?= $x ?></th>
                <?php }; ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($ar_buah as $buah) {
                $bruto = $buah['harga'] * $buah['jumlah'];
                $diskon = ($buah['buah'] == "durian" && $buah['jumlah'] >= 5) ? 0.2 : 0.1;
                $diskonHarga = $bruto * $diskon;
                $hargaTotal = $bruto - $diskonHarga;
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $buah['kode'] ?></td>
                    <td><?= $buah['buah'] ?></td>
                    <td><?= $buah['harga'] ?></td>
                    <td><?= $buah['jumlah'] ?></td>
                    <td><?= $bruto ?></td>
                    <td><?= $diskonHarga ?></td>
                    <td><?= $hargaTotal ?></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php foreach ($keterangan as $key => $value) { ?>
                <tr>
                    <td colspan="4" align="center"><?= $key  ?></td>
                    <td colspan="4" align="center"><?= $value  ?></td>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>

</html>