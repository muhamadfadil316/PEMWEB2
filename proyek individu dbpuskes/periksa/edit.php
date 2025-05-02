<?php
include 'db.php';

$id = $_GET['id'];
$query = "SELECT * FROM periksa WHERE id = $id";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Pemeriksaan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 p-6">
  <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-yellow-600 text-center">Edit Pemeriksaan</h2>
    <form action="update.php" method="post" class="space-y-4">
      <input type="hidden" name="id" value="<?= $data['id']; ?>">

      <div>
        <label class="block font-semibold text-gray-700 mb-1">Tanggal Periksa:</label>
        <input type="date" name="tanggal" value="<?= $data['tanggal']; ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Keluhan:</label>
        <input type="text" name="keluhan" value="<?= $data['keluhan']; ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Pasien ID:</label>
        <input type="number" name="pasien_id" value="<?= $data['pasien_id']; ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Paramedik ID:</label>
        <input type="number" name="paramedik_id" value="<?= $data['paramedik_id']; ?>" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>

      <div class="text-center">
        <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
          Update
        </button>
      </div>
    </form>
  </div>
</body>
</html>
