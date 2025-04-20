<?php
include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM kelurahan WHERE id = $id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $conn->query("UPDATE kelurahan SET id='$id', nama='$nama' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Kelurahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-purple-100 to-green-100 flex items-center justify-center p-6">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8 transition-all duration-300 hover:shadow-xl">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Edit Data Kelurahan</h2>
    <form method="POST" class="space-y-5">
      <div>
        <label for="id" class="block text-sm font-medium text-gray-600 mb-1">Nomor ID</label>
        <input type="text" id="id" name="id" value="<?= $data['id'] ?>" required
          class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nomor ID">
      </div>
      <div>
        <label for="nama" class="block text-sm font-medium text-gray-600 mb-1">Nama Kelurahan</label>
        <input type="text" id="nama" name="nama" value="<?= $data['nama'] ?>" required
          class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Nama Kelurahan">
      </div>
      <button type="submit"
        class="w-full bg-purple-500 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition duration-200">Update</button>
    </form>
  </div>
</body>
</html>
