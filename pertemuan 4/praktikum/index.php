<?php
session_start();
require_once 'nilai_mahasiswa.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
</head>
<body>
    <h3>Daftar Nilai Mahasiswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Mata Kuliah</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Tugas</th>
                <th>Nilai Akhir</th>
                <th>Kelulusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['data_mhs']) && count($_SESSION['data_mhs']) > 0) {
                $nomor = 1;
                foreach ($_SESSION['data_mhs'] as $data) {
                    $obj = unserialize($data);
                    if ($obj instanceof NilaiMahasiswa):
            ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= htmlspecialchars($obj->nama); ?></td>
                <td><?= htmlspecialchars($obj->matakuliah); ?></td>
                <td><?= htmlspecialchars($obj->nilai_uts); ?></td>
                <td><?= htmlspecialchars($obj->nilai_uas); ?></td>
                <td><?= htmlspecialchars($obj->nilai_tugas); ?></td>
                <td><?= number_format($obj->getNilaiAkhir(), 2); ?></td>
                <td><?= $obj->kelulusan(); ?></td>
            </tr>
            <?php
                    endif;
                }
            } else {
                echo "<tr><td colspan='8' align='center'>Belum ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Input Data Mahasiswa</h3>
    <form method="POST" action="proses.php">
        <label>Nama</label>
        <input type="text" name="nama" required><br><br>
        <label>Mata Kuliah</label>
        <input type="text" name="matkul" required><br><br>
        <label>UTS</label>
        <input type="number" name="nilai_uts" min="0" required><br><br>
        <label>UAS</label>
        <input type="number" name="nilai_uas" min="0" required><br><br>
        <label>Tugas</label>
        <input type="number" name="nilai_tugas" min="0" required><br><br>
        <input type="submit" value="Simpan">
    </form>

    <br>
    <form method="POST" action="reset.php">
        <button type="submit">Reset Data</button>
    </form>
</body>
</html>
