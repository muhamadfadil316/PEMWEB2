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
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">Tambah Data Paramedik</h2>
    <form method="POST" class="space-y-4">
      <div>
        <label class="block font-medium">Kode</label>
        <input name="kode" class="w-full border border-gray-300 p-2 rounded" required>
      </div>
      <div>
        <label class="block font-medium">Nama</label>
        <input name="nama" class="w-full border border-gray-300 p-2 rounded" required>
      </div>
      <div>
        <label class="block font-medium">Gender</label>
        <select name="gender" class="w-full border border-gray-300 p-2 rounded" required>
          <option value="">Pilih Gender</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
      </div>
      <div class="flex gap-4">
        <div class="w-1/2">
          <label class="block font-medium">Tempat Lahir</label>
          <input name="tmp_lahir" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
        <div class="w-1/2">
          <label class="block font-medium">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="w-full border border-gray-300 p-2 rounded" required>
        </div>
      </div>
      <div>
        <label class="block font-medium">Kategori</label>
        <input name="kategori" class="w-full border border-gray-300 p-2 rounded" required>
      </div>
      <div>
        <label class="block font-medium">Telepon</label>
        <input name="telpon" class="w-full border border-gray-300 p-2 rounded" required>
      </div>
      <div>
        <label class="block font-medium">Alamat</label>
        <textarea name="alamat" class="w-full border border-gray-300 p-2 rounded" required></textarea>
      </div>
      <div>
        <label class="block font-medium">Unit Kerja</label>
        <select name="unit_kerja_id" class="w-full border border-gray-300 p-2 rounded" required>
          <option value="">Pilih Unit Kerja</option>
          <?php while ($uk = $unitKerja->fetch_assoc()): ?>
            <option value="<?= $uk['id'] ?>"><?= $uk['nama'] ?></option>
          <?php endwhile; ?>
        </select>
      </div>
      <div class="flex justify-between">
        <a href="index.php" class="text-gray-600 hover:underline">← Kembali</a>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
      </div>
    </form>
  </div>
</body>
</html>
