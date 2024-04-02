<?php
require_once 'siswa.php';

$ns1 = new Siswa('Jamal', 55, 'PHP');
$ns2 = new Siswa('Dono', 80, 'JavaScript');
$ns3 = new Siswa('Komeng', 90, 'HTML');

$ar_judul = ['No', 'Nama', 'Nilai', 'Pelajaran', 'Status'];
$ar_siswa = [$ns1, $ns2, $ns3];

$no = 1;
// foreach ($ar_siswa as $x) {
//     echo "$no. ";
//     echo $x->nama . ", ";
//     echo $x->nilai . ", ";
//     echo $x->pelajaran . ", ";
//     echo "<br>";
//     $no++;
// }
?>
<h1 align="center">Tabel Siswa</h1>
<table border="1" cellpadding="15" cellspacing="0" width="50%" align="center">
    <thead>
        <tr>
            <?php
            foreach ($ar_judul as $judul) { ?>
                <th><?= $judul ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ar_siswa as $siswa) { ?>
            <tr align="center">
                <td><?= $no++ ?></td>
                <td><?= $siswa->nama ?></td>
                <td><?= $siswa->nilai ?></td>
                <td><?= $siswa->pelajaran ?></td>
                <td><?= $siswa->getHasil() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- // echo $ns1->nama;
// echo "<br>";
// echo $ns1->pelajaran;
// echo "<br>";
// echo $ns1->nilai;
// echo "<br>";
// echo $ns1->getHasil();

// $ns1->nama = "Jamal";
// $ns1->nilai = 90;
// $ns1->pelajaran = "PHP"; -->