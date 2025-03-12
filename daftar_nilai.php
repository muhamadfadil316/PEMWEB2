<?php
require_once 'nilai_mahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Fadid";
$mhs1->matakuliah = "PWEB2";
$mhs1->nilai_uts = "80";
$mhs1->nilai_uas = "85";
$mhs1->nilai_tugas = "90";

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Okta";
$mhs2->matakuliah = "PWEB2";
$mhs2->nilai_uts = "88";
$mhs2->nilai_uas = "85";
$mhs2->nilai_tugas = "97";

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Ujay";
$mhs3->matakuliah = "PWEB2";
$mhs3->nilai_uts = "44";
$mhs3->nilai_uas = "20";
$mhs3->nilai_tugas = "50";

$data_mhs = [$mhs1, $mhs2, $mhs3];
?>
<h3>Daftar Nilai Mahasiswa</h3>
<table border="1" width="100%">
    <thead>
        <tr><th>No</th><th>Nama Lengkap</th>
    <th>Mata Kuliah</th><th>Nilai UTS</th><th>Nilai UAS</th>
    <th>Mata Tugas</th><th>Nilai Akhir</th><th>Kelulusan</th>

    </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach ($data_mhs as $obj) { ?>
        <tr>
            <td><?= $obj->nama ?></td>
        <td><?= $obj->matakuliah ?></td><td><?=$obj->nilai_uts?></td>
            <td><?= $obj->nilai_uas ?></td><td><?=$obj->nilai_tugas?></td>
            <td><?= $obj->getNilaiAkhir() ?></td><td><?=$obj->kelulusan()?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>