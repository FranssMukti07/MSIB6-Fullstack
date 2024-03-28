<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>

<body>
    <table border="1" cellspacing="1" cellpadding="10" align="center">
        <thead>
            <tr bgcolor="yellow">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($no = 1; $no <= 100; $no++) {
                $warna = ($no % 2 == 0) ? "red" : "blue";
            ?>
                <tr bgcolor="<?= $warna ?>">
                    <td align="center"><?= $no ?></td>
                    <td>Siswa <?= $no ?></td>
                    <td>Jl. Bogor Raya No. <?= $no ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>