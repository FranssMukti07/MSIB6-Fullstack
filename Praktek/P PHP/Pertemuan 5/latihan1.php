<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form - Kalkulator</title>
</head>

<body>
    <form action="#" method="get">
        <table align="center" border="0" cellpadding="10" cellspacing="0" width="30%">
            <thead>
                <tr bgcolor="khaki">
                    <th colspan="2">Kalkulator Kerenzz</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="beige">
                    <td width="30%">Angka 1</td>
                    <td><input type="text" name="a1"></td>
                </tr>
                <tr bgcolor="beige">
                    <td width="30%">Angka 2</td>
                    <td><input type="text" name="a2"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="khaki">
                    <th colspan="2">
                        <button type="submit" name="proses" value="tambah">+</button>
                        <button type="submit" name="proses" value="kurang">-</button>
                        <button type="submit" name="proses" value="kali">x</button>
                        <button type="submit" name="proses" value="bagi">/</button>
                        <button type="submit" name="proses" value="pangkat">^</button>
                    </th>
                </tr>
                <tr>
                    <?php
                    error_reporting(0);
                    function hitung($a1, $a2, $tombol)
                    {
                        if ($tombol == "tambah") {
                            $hasil = $a1 + $a2;
                        } elseif ($tombol == "kurang") {
                            $hasil = $a1 - $a2;
                        } elseif ($tombol == "kali") {
                            $hasil = $a1 * $a2;
                        } elseif ($tombol == "bagi") {
                            $hasil = $a1 / $a2;
                        } elseif ($tombol == "pangkat") {
                            $hasil = $a1 ** $a2;
                        } else {
                            $hasil = 0;
                        }

                        return $hasil;
                    }

                    $a1 = $_GET['a1'];
                    $a2 = $_GET['a2'];
                    $tombol = $_GET['proses'];

                    // hitung($a1, $a2, $tombol);
                    // echo hitung($a1, $a2, $tombol);
                    ?>
                    <th colspan="3" bgcolor="aquamarine">
                        <h1><?= hitung($a1, $a2, $tombol) ?></h1>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>