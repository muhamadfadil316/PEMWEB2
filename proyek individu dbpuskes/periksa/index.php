<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Pemeriksaan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-yellow-50 p-6">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6 text-center text-yellow-600">Data Pemeriksaan</h1>
    
    <div class="mb-6 flex flex-wrap gap-4 justify-center">
      <a href="index.php" class="bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500 transition duration-300 shadow-md">
        <i class="fas fa-arrow-left"></i> Kembali
      </a>
      <a href="create.php" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition duration-300 shadow-md">
        <i class="fas fa-plus-circle"></i> Tambah Data Periksa
      </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-lg shadow-xl">
      <table class="w-full table-auto text-sm">
        <thead class="bg-yellow-500 text-white">
          <tr>
            <th class="p-4 text-left">ID</th>
            <th class="p-4 text-left">Tanggal</th>
            <th class="p-4 text-left">Keluhan</th>
            <th class="p-4 text-left">Pasien</th>
            <th class="p-4 text-left">Paramedik</th>
            <th class="p-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <?php
          $query = "SELECT periksa.*, pasien.nama AS nama_pasien, paramedik.nama AS nama_paramedik
                    FROM periksa
                    JOIN pasien ON periksa.pasien_id = pasien.id
                    JOIN paramedik ON periksa.paramedik_id = paramedik.id";
          $result = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr class='border-b hover:bg-yellow-100 transition duration-300'>
                    <td class='p-4'>{$row['id']}</td>
                    <td class='p-4'>{$row['tanggal']}</td>
                    <td class='p-4'>{$row['keluhan']}</td>
                    <td class='p-4'>{$row['nama_pasien']}</td>
                    <td class='p-4'>{$row['nama_paramedik']}</td>
                    <td class='p-4 text-center'>
                      <a href='edit.php?id={$row['id']}' class='text-blue-500 hover:text-blue-700 transition duration-300'>
                        <i class='fas fa-edit'></i>
                      </a> |
                      <a href='delete.php?id={$row['id']}' class='text-red-500 hover:text-red-700 transition duration-300' onclick='return confirm(\"Yakin ingin hapus?\")'>
                        <i class='fas fa-trash-alt'></i>
                      </a>
                    </td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
