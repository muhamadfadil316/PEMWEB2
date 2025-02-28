<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST['nama'] ?? '');
    $matkul = trim($_POST['matkul'] ?? '');
    $nilai_uts = isset($_POST['nilai_uts']) ? (float) $_POST['nilai_uts'] : 0;
    $nilai_uas = isset($_POST['nilai_uas']) ? (float) $_POST['nilai_uas'] : 0;
    $nilai_tugas = isset($_POST['nilai_tugas']) ? (float) $_POST['nilai_tugas'] : 0;

    $nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
    $status = $nilai_akhir >= 60 ? "Selamat! Anda Lulus" : "Maaf, Anda Tidak Lulus";
    
    $predikat = match (true) {
        $nilai_akhir >= 85 => "A (Sangat Baik)",
        $nilai_akhir >= 70 => "B (Baik)",
        $nilai_akhir >= 56 => "C (Cukup)",
        $nilai_akhir >= 36 => "D (Kurang)",
        default => "E (Sangat Kurang)"
    };

    $_SESSION["hasil"] = compact("nama", "matkul", "nilai_uts", "nilai_uas", "nilai_tugas", "nilai_akhir", "status", "predikat");
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}

$hasil = $_SESSION["hasil"] ?? null;
unset($_SESSION["hasil"]);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-br from-blue-200 to-indigo-500">
    <div class="bg-white p-6 rounded-xl shadow-lg w-96">
        <h2 class="text-2xl font-semibold text-center text-gray-800">Form Penilaian</h2>
        <form method="POST" class="space-y-4 mt-4">

            <label class="block font-medium text-black-500">Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Masukan Nama Mahasiswa" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

            <label class="block text-sm font-medium text-gray-700">Mata Kuliah</label>
            <input type="text" name="matkul" placeholder="Masukan Mata Kuliah" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

            <label class="block text-sm font-medium text-gray-700">Nilai UTS</label>
            <input type="number" name="nilai_uts" step="0.1" placeholder="Bobot UTS 30%" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

            <label class="block text-sm font-medium text-gray-700">Nilai UAS</label>
            <input type="number" name="nilai_uas" step="0.1" placeholder="Bobot UAS 35%" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

            <label class="block text-sm font-medium text-gray-700">Nilai Tugas</label>
            <input type="number" name="nilai_tugas" step="0.1" placeholder="Bobot Tugas 35%" required class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

            <button type="submit" class="w-full p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Hitung</button>
        </form>
        
        <?php if ($hasil): ?>
            <div class="mt-4 p-4 bg-gray-100 rounded-lg">
                <h3 class="text-lg font-semibold">Hasil:</h3>
                <p><strong>Nama:</strong> <?= htmlspecialchars($hasil['nama']) ?></p>
                <p><strong>Mata Kuliah:</strong> <?= htmlspecialchars($hasil['matkul']) ?></p>
                <p><strong>Nilai UTS:</strong> <?= $hasil['nilai_uts'] ?></p>
                <p><strong>Nilai UAS:</strong> <?= $hasil['nilai_uas'] ?></p>
                <p><strong>Nilai Tugas:</strong> <?= $hasil['nilai_tugas'] ?></p>
                <p><strong>Nilai Akhir:</strong> <?= number_format($hasil['nilai_akhir'], 2) ?></p>
                <p><strong>Status:</strong> <?= $hasil['status'] ?></p>
                <p><strong>Predikat:</strong> <?= $hasil['predikat'] ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
