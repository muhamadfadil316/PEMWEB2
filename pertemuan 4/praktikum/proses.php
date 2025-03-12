<?php
session_start();
require_once 'nilai_mahasiswa.php';

if (!isset($_SESSION['data_mhs'])) {
    $_SESSION['data_mhs'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama']);
    $matkul = trim($_POST['matkul']);
    $nilai_uts = intval($_POST['nilai_uts']);
    $nilai_uas = intval($_POST['nilai_uas']);
    $nilai_tugas = intval($_POST['nilai_tugas']);

    // Validasi input
    if ($nama !== "" && $matkul !== "" && $nilai_uts >= 0 && $nilai_uas >= 0 && $nilai_tugas >= 0) {
        $mahasiswa = new NilaiMahasiswa($nama, $matkul, $nilai_uts, $nilai_uas, $nilai_tugas);
        $_SESSION['data_mhs'][] = serialize($mahasiswa);
    }
}

// Redirect kembali ke halaman utama
header("Location: index.php");
exit();
?>
