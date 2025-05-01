<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Puskesmas</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-green-200 via-blue-100 to-purple-200 min-h-screen p-6 flex items-center justify-center">
  <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-8">
    <h1 class="text-3xl font-bold text-center text-green-700 mb-4">Dashboard Sistem Puskesmas</h1>
    <p class="text-center text-gray-600 mb-8">Silakan pilih aksi yang ingin Anda lakukan</p>

    <!-- Grid Menu -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
      
      <!-- Tambah Pasien -->
      <a href="pasien/create.php" class="block bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow p-5 text-center font-semibold text-lg transition">
        ➕ Tambah Pasien
      </a>

      <!-- Tambah Paramedik -->
      <a href="paramedik/create.php" class="block bg-green-500 hover:bg-green-600 text-white rounded-lg shadow p-5 text-center font-semibold text-lg transition">
        ➕ Tambah Paramedik
      </a>

      <!-- Tambah Kelurahan -->
      <a href="kelurahan/create.php" class="block bg-purple-500 hover:bg-purple-600 text-white rounded-lg shadow p-5 text-center font-semibold text-lg transition">
        ➕ Tambah Kelurahan
      </a>

      <a href="periksa/create.php" class="inline-block px-6 py-4 bg-yellow-500 text-white font-semibold rounded-lg shadow-md hover:bg-yellow-600 transition">
    ➕ Tambah Periksa
</a>

      <!-- Lihat Data Pasien -->
      <a href="pasien/index.php" class="block bg-blue-100 hover:bg-blue-200 text-blue-800 rounded-lg shadow p-5 text-center font-semibold text-lg transition">
        📄 Lihat Data Pasien
      </a>

      <!-- Lihat Data Paramedik -->
      <a href="paramedik/index.php" class="block bg-green-100 hover:bg-green-200 text-green-800 rounded-lg shadow p-5 text-center font-semibold text-lg transition">
        📄 Lihat Data Paramedik
      </a>

      <!-- Lihat Data Kelurahan -->
      <a href="kelurahan/index.php" class="block bg-purple-100 hover:bg-purple-200 text-purple-800 rounded-lg shadow p-5 text-center font-semibold text-lg transition">
        📄 Lihat Data Kelurahan
      </a>

      <a href="periksa/index.php" class="inline-block px-6 py-4 bg-yellow-100 text-yellow-800 font-semibold rounded-lg shadow-md hover:bg-yellow-200 transition">
    📄 Lihat Data Periksa
</a>
    </div>

    <p class="text-center text-sm text-gray-400">&copy; <?= date('Y') ?> Sistem Informasi Puskesmas Muhamad Fadil</p>
  </div>
</body>
</html>
