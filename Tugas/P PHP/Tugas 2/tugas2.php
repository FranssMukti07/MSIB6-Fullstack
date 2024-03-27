<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Pemrograman PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container p-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-5">
                    <table class="table table-bordered table-hover">
                        <form action="tugas2.php" method="POST">
                            <thead>
                                <tr>
                                    <th class="text-center bg-info" colspan="3">Form Belanja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <label for="nama">Nama Pelanggan</label>
                                    </td>
                                    <td>
                                        <input type="text" name="nama" class="w-100">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="produk">Produk Pilihan</label>
                                    </td>
                                    <td>
                                        <select name="produk" id="produk" class="w-100">
                                            <option value="" disabled selected>======> Pilih Produk <====== </option>
                                            <option value="TV">TV</option>
                                            <option value="Kulkas">Kulkas</option>
                                            <option value="Mesin Cuci">Mesin Cuci</option>
                                            <option value="AC">AC</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <label for="jumlah">Jumlah Beli</label>
                                    </td>
                                    <td>
                                        <input type="number" name="jumlah" min="1" class="w-100">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <input type="submit" class="btn btn-outline-success" name="beli" style="width: 60%;" value="Beli">
                                        <input type="reset" class="btn btn-outline-danger" value="Cancel" style="width: 25%;">
                                    </td>
                                </tr>
                            </tfoot>
                        </form>
                    </table>
                </div>
                <?php
                error_reporting(0);
                $nama = $_POST['nama'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];

                switch ($produk) {
                    case 'TV':
                        $hargaSatuan = 1250000;
                        break;
                    case 'Kulkas':
                        $hargaSatuan = 1750000;
                        break;
                    case 'Mesin Cuci':
                        $hargaSatuan = 1500000;
                        break;
                    case 'AC':
                        $hargaSatuan = 2500000;
                        break;
                    default:
                        $hargaSatuan = 0;
                        break;
                }

                $totalBelanja = $jumlah * $hargaSatuan;
                $diskon = 0.2 * $totalBelanja;
                $ppn = 0.1 * ($totalBelanja - $diskon);
                $hargaBersih = ($totalBelanja - $diskon) + $ppn;

                if (isset($_POST['beli'])) { ?>
                    <div class="col-5">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center bg-success">Rekap Belanja</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Nama Pelanggan
                                    </td>
                                    <td>
                                        <?= $nama; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Produk Pilihan
                                    </td>
                                    <td>
                                        <?= $produk; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Jumlah Beli
                                    </td>
                                    <td>
                                        <?= $jumlah; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Harga Satuan
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($hargaSatuan, 2, ',', '.'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Total Belanja
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($totalBelanja, 2, ',', '.'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Potongan Diskon
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($diskon, 2, ',', '.'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        PPN
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($ppn, 2, ',', '.'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Harga Bersih
                                    </td>
                                    <td>
                                        <?= "Rp " . number_format($hargaBersih, 2, ',', '.'); ?>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2" class="bg-warning text-center">Terima Kasih Kak <?= $nama; ?> sudah berbelanja!!</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>