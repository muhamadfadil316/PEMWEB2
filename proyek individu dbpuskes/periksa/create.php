<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pemeriksaan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-yellow-50 p-6">
  <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-yellow-600 text-center">Tambah Pemeriksaan</h2>
    <form action="store.php" method="post" class="space-y-4">
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Tanggal Periksa:</label>
        <input type="date" name="tanggal" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Keluhan:</label>
        <input type="text" name="keluhan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Pasien ID:</label>
        <input type="number" name="pasien_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div>
        <label class="block font-semibold text-gray-700 mb-1">Paramedik ID:</label>
        <input type="number" name="paramedik_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
      </div>
      <div class="text-center">
        <button type="submit" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
          Simpan
        </button>
      </div>
    </form>
  </div>
</body>
</html>
