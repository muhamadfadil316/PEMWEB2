<?php
include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM pasien WHERE id = $id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn->query("UPDATE pasien SET nama='$nama', alamat='$alamat', tmp_lahir='$tmp_lahir',
    tgl_lahir='$tgl_lahir', gender='$gender', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Pasien</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-50 to-green-50 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-lg">
    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">✏️ Edit Data Pasien</h2>
    <form method="POST" class="space-y-4">
      <input type="text" name="nama" value="<?= $data['nama'] ?>" required placeholder="Nama" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-indigo-400">
      
      <textarea name="alamat" required placeholder="Alamat" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-indigo-400"><?= $data['alamat'] ?></textarea>
      
      <div class="flex gap-4">
        <input type="text" name="tmp_lahir" value="<?= $data['tmp_lahir'] ?>" required placeholder="Tempat Lahir" class="w-1/2 border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-indigo-400">
        <input type="date" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" required class="w-1/2 border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-indigo-400">
      </div>
      
      <select name="gender" required class="w-full border border-gray-300 p-3 rounded-md bg-white focus:ring-2 focus:ring-indigo-400">
        <option value="">-- Pilih Gender --</option>
        <option value="L" <?= $data['gender'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
        <option value="P" <?= $data['gender'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
      </select>

      <input type="email" name="email" value="<?= $data['email'] ?>" required placeholder="Email" class="w-full border border-gray-300 p-3 rounded-md focus:ring-2 focus:ring-indigo-400">

      <div class="flex justify-between items-center mt-6">
        <a href="index.php" class="text-gray-600 hover:underline">← Kembali</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-all">Update</button>
      </div>
    </form>
  </div>
</body>
</html>
