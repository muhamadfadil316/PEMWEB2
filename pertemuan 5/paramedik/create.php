<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("INSERT INTO paramedik (kode, nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unit_kerja_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssi", $_POST['kode'], $_POST['nama'], $_POST['gender'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['kategori'], $_POST['telpon'], $_POST['alamat'], $_POST['unit_kerja_id']);
    $stmt->execute();
    header("Location: index.php");
    exit;
}

$unitKerja = $conn->query("SELECT * FROM unit_kerja");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Paramedik</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-100 to-green-100 min-h-screen flex items-center justify-center px-4">
  <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-2xl">
    <h2 class="text-3xl font-bold text-center text-gray-700 mb-8">🩺 Tambah Data Paramedik</h2>
    
    <form method="POST" class="space-y-5">
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Kode</label>
        <input name="kode" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Nama</label>
        <input name="nama" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Gender</label>
        <select name="gender" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
          <option value="">Pilih Gender</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      <div class="flex gap-4">
        <div class="w-1/2">
          <label class="block font-semibold text-gray-700 mb-1">Tempat Lahir</label>
          <input name="tmp_lahir" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>
        <div class="w-1/2">
          <label class="block font-semibold text-gray-700 mb-1">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
        </div>
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Kategori</label>
        <input name="kategori" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Telepon</label>
        <input name="telpon" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Alamat</label>
        <textarea name="alamat" rows="3" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required></textarea>
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Unit Kerja</label>
        <select name="unit_kerja_id" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" required>
          <option value="">Pilih Unit Kerja</option>
          <?php while ($uk = $unitKerja->fetch_assoc()): ?>
            <option value="<?= $uk['id'] ?>"><?= $uk['nama'] ?></option>
          <?php endwhile; ?>
        </select>
      </div>
      <div class="flex justify-between items-center mt-6">
        <a href="index.php" class="text-blue-600 hover:underline font-medium">
          ← Kembali
        </a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold shadow-md transition duration-200">
          Simpan
        </button>
      </div>
    </form>
  </div>
</body>
</html>
