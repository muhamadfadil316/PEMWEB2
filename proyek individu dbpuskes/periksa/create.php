<?php 
include 'db.php';

// Ambil data pasien dan paramedik
$query_pasien = mysqli_query($koneksi, "SELECT id, nama FROM pasien ORDER BY nama");
$query_dokter = mysqli_query($koneksi, "SELECT id, nama FROM paramedik WHERE kategori = 'Dokter' ORDER BY nama");
$query_paramedik = mysqli_query($koneksi, "SELECT id, nama FROM paramedik WHERE kategori != 'Dokter' ORDER BY nama");

$tanggal_sekarang = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pemeriksaan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 p-6">
  <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <div class="flex items-center justify-between mb-6">
      <a href="index.php" class="text-blue-500 hover:text-blue-700">
        <i class="fas fa-arrow-left mr-1"></i> Kembali
      </a>
      <h2 class="text-2xl font-bold text-center text-blue-600">
        <i class="fas fa-file-medical mr-2"></i>Tambah Pemeriksaan
      </h2>
      <div class="w-8"></div>
    </div>
    
    <form action="store.php" method="post" class="space-y-5">
      <!-- Input tanggal, berat, tinggi, tensi, keterangan -->
      <div>
        <label class="block font-medium text-gray-700 mb-1">Tanggal Periksa <span class="text-red-500">*</span></label>
        <input type="date" name="tanggal" value="<?= $tanggal_sekarang ?>" 
               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
          <label class="block font-medium text-gray-700 mb-1">Berat Badan (kg)</label>
          <input type="number" step="0.1" name="berat" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="block font-medium text-gray-700 mb-1">Tinggi Badan (cm)</label>
          <input type="number" step="0.1" name="tinggi" 
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="block font-medium text-gray-700 mb-1">Tensi</label>
          <input type="text" name="tensi" placeholder="120/80"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
      </div>
      
      <div>
        <label class="block font-medium text-gray-700 mb-1">Keterangan</label>
        <textarea name="keterangan" rows="3" 
                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                  placeholder="Catatan tambahan"></textarea>
      </div>
      
      <!-- Data Pasien dan Tenaga Medis -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
          <label class="block font-medium text-gray-700 mb-1">Pasien <span class="text-red-500">*</span></label>
          <select name="pasien_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            <option value="">-- Pilih Pasien --</option>
            <?php while($pasien = mysqli_fetch_array($query_pasien)): ?>
              <option value="<?= $pasien['id'] ?>"><?= htmlspecialchars($pasien['nama']) ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        
        <div>
          <label class="block font-medium text-gray-700 mb-1">Dokter</label>
          <select name="dokter_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">-- Pilih Dokter --</option>
            <?php while($dokter = mysqli_fetch_array($query_dokter)): ?>
              <option value="<?= $dokter['id'] ?>">Dr. <?= htmlspecialchars($dokter['nama']) ?></option>
            <?php endwhile; ?>
          </select>
        </div>
        
        <div>
          <label class="block font-medium text-gray-700 mb-1">Paramedik</label>
          <select name="paramedik_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="">-- Pilih Paramedik --</option>
            <?php while($paramedik = mysqli_fetch_array($query_paramedik)): ?>
              <option value="<?= $paramedik['id'] ?>"><?= htmlspecialchars($paramedik['nama']) ?></option>
            <?php endwhile; ?>
          </select>
        </div>
      </div>
      
      <div class="pt-4">
        <button type="submit" class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300 font-medium">
          <i class="fas fa-save mr-2"></i> Simpan Pemeriksaan
        </button>
      </div>
    </form>
  </div>
</body>
</html>