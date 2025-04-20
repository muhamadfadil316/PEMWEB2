<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM paramedik WHERE id = $id");
$data = $result->fetch_assoc();

$unitKerja = $conn->query("SELECT * FROM unit_kerja");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $conn->prepare("UPDATE paramedik SET kode=?, nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, kategori=?, telpon=?, alamat=?, unit_kerja_id=? WHERE id=?");
    $stmt->bind_param("ssssssssii", $_POST['kode'], $_POST['nama'], $_POST['gender'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['kategori'], $_POST['telpon'], $_POST['alamat'], $_POST['unit_kerja_id'], $id);
    $stmt->execute();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Paramedik</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
    <h2 class="text-2xl font-bold mb-6 text-center">Edit Data Paramedik</h2>
    <form method="POST" class="space-y-4">
      <input name="kode" class="w-full border p-2 rounded" value="<?= $data['kode'] ?>" required>
      <input name="nama" class="w-full border p-2 rounded" value="<?= $data['nama'] ?>" required>
      <select name="gender" class="w-full border p-2 rounded" required>
        <option value="L" <?= $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
        <option value="P" <?= $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
      </select>
      <div class="flex gap-4">
        <input name="tmp_lahir" class="w-1/2 border p-2 rounded" value="<?= $data['tmp_lahir'] ?>" required>
        <input type="date" name="tgl_lahir" class="w-1/2 border p-2 rounded" value="<?= $data['tgl_lahir'] ?>" required>
      </div>
      <input name="kategori" class="w-full border p-2 rounded" value="<?= $data['kategori'] ?>" required>
      <input name="telpon" class="w-full border p-2 rounded" value="<?= $data['telpon'] ?>" required>
      <textarea name="alamat" class="w-full border p-2 rounded" required><?= $data['alamat'] ?></textarea>
      <select name="unit_kerja_id" class="w-full border p-2 rounded" required>
        <?php while ($uk = $unitKerja->fetch_assoc()): ?>
          <option value="<?= $uk['id'] ?>" <?= $uk['id'] == $data['unit_kerja_id'] ? 'selected' : '' ?>>
            <?= $uk['nama'] ?>
          </option>
        <?php endwhile; ?>
      </select>
      <div class="flex justify-between">
        <a href="index.php" class="text-gray-600 hover:underline">← Kembali</a>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
