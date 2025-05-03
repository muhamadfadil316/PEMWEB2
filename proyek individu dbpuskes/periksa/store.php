<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $tanggal = $_POST['tanggal'];
    $berat = $_POST['berat'] ?? null;
    $tinggi = $_POST['tinggi'] ?? null;
    $tensi = $_POST['tensi'] ?? null;
    $keterangan = $_POST['keterangan'] ?? null;
    $pasien_id = $_POST['pasien_id'];
    $dokter_id = $_POST['dokter_id'] ?? null;
    $paramedik_id = $_POST['paramedik_id'] ?? null;

    // Validasi input wajib
    if (empty($tanggal) || empty($pasien_id)) {
        die("Harap isi tanggal dan pasien!");
    }

    try {
        // Query insert yang sesuai dengan struktur tabel
        $query = "INSERT INTO periksa (tanggal, berat, tinggi, tensi, keterangan, pasien_id, dokter_id, paramedik_id) 
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "sddsssii", 
            $tanggal, 
            $berat, 
            $tinggi, 
            $tensi, 
            $keterangan, 
            $pasien_id, 
            $dokter_id, 
            $paramedik_id);
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: index.php?success=1");
            exit();
        } else {
            throw new Exception(mysqli_error($koneksi));
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: create.php");
    exit();
}
?>