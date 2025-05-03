<?php 
include 'db.php'; // Pastikan path ke db.php benar

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pemeriksaan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-50 p-6">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-center text-yellow-600">Data Pemeriksaan</h1>
    
    <div class="mb-6 flex flex-wrap gap-4 justify-center">
      <a href="../index.php" class="bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500 transition duration-300 shadow-md">
        <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
      </a>
      <a href="create.php" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition duration-300 shadow-md">
        <i class="fas fa-plus-circle"></i> Tambah Data Periksa
      </a>
    </div>

    <?php
    // Query data dengan LEFT JOIN dan kolom yang sesuai
    $query = "SELECT p.id, p.tanggal, p.keterangan, 
              p.berat, p.tinggi, p.tensi,
              ps.nama AS nama_pasien, 
              pm.nama AS nama_paramedik,
              d.nama AS nama_dokter
              FROM periksa p
              LEFT JOIN pasien ps ON p.pasien_id = ps.id
              LEFT JOIN paramedik pm ON p.paramedik_id = pm.id
              LEFT JOIN paramedik d ON p.dokter_id = d.id
              ORDER BY p.tanggal DESC";
    
    $result = mysqli_query($koneksi, $query);
    
    if(!$result) {
      echo "<div class='bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4'>
              Error: ".mysqli_error($koneksi)."
            </div>";
    } else {
    ?>
    <div class="overflow-x-auto bg-white rounded-lg shadow-xl">
      <table class="w-full table-auto text-sm">
        <thead class="bg-yellow-500 text-white">
          <tr>
            <th class="p-4 text-left">ID</th>
            <th class="p-4 text-left">Tanggal</th>
            <th class="p-4 text-left">Berat</th>
            <th class="p-4 text-left">Tinggi</th>
            <th class="p-4 text-left">Tensi</th>
            <th class="p-4 text-left">Keterangan</th>
            <th class="p-4 text-left">Pasien</th>
            <th class="p-4 text-left">Dokter</th>
            <th class="p-4 text-left">Paramedik</th>
            <th class="p-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <?php
          if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr class='border-b hover:bg-yellow-100 transition duration-300'>
                      <td class='p-4'>{$row['id']}</td>
                      <td class='p-4'>".date('d-m-Y', strtotime($row['tanggal']))."</td>
                      <td class='p-4'>{$row['berat']} kg</td>
                      <td class='p-4'>{$row['tinggi']} cm</td>
                      <td class='p-4'>{$row['tensi']}</td>
                      <td class='p-4'>{$row['keterangan']}</td>
                      <td class='p-4'>{$row['nama_pasien']}</td>
                      <td class='p-4'>".($row['nama_dokter'] ? 'Dr. '.$row['nama_dokter'] : '-')."</td>
                      <td class='p-4'>{$row['nama_paramedik']}</td>
                      <td class='p-4 text-center space-x-2'>
                        <a href='edit.php?id={$row['id']}' 
                           class='inline-block bg-blue-500 text-white p-2 rounded hover:bg-blue-600 transition duration-300'
                           title='Edit'>
                          <i class='fas fa-edit'></i>
                        </a>
                        <a href='delete.php?id={$row['id']}' 
                           class='inline-block bg-red-500 text-white p-2 rounded hover:bg-red-600 transition duration-300'
                           title='Hapus'
                           onclick='return confirm(\"Yakin ingin hapus data ini?\")'>
                          <i class='fas fa-trash-alt'></i>
                        </a>
                      </td>
                    </tr>";
            }
          } else {
            echo "<tr><td colspan='10' class='p-4 text-center'>Tidak ada data pemeriksaan</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <?php } ?>
  </div>
</body>
</html>