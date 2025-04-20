<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Kelurahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="min-h-screen bg-gradient-to-r from-purple-100 to-blue-100 p-6">
  <div class="container mx-auto max-w-4xl">
    <div class="bg-white rounded-2xl shadow-lg p-6">
      <h1 class="text-3xl font-bold text-gray-700 mb-6 text-center">Daftar Kelurahan</h1>
      
      <div class="flex justify-end mb-4">
        <a href="create.php"
          class="bg-purple-500 hover:bg-purple-700 text-white px-5 py-2 rounded-lg font-semibold shadow transition duration-200">
          + Tambah Kelurahan
        </a>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse rounded overflow-hidden shadow">
          <thead class="bg-gray-200 text-gray-700">
            <tr>
              <th class="p-3 text-left">No</th>
              <th class="p-3 text-left">Kode</th>
              <th class="p-3 text-left">Nama Kelurahan</th>
              <th class="p-3 text-left">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <?php
            $result = $conn->query("SELECT * FROM kelurahan");
            $no = 1;
            while($row = $result->fetch_assoc()):
            ?>
            <tr class="hover:bg-gray-100 border-b border-gray-200">
              <td class="p-3"><?= $no++ ?></td>
              <td class="p-3"><?= $row['id'] ?></td>
              <td class="p-3"><?= $row['nama'] ?></td>
              <td class="p-3 space-x-2">
                <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-600 hover:text-blue-800 inline-block" title="Edit">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-600 hover:text-red-800 inline-block" title="Hapus"
                   onclick="return confirm('Yakin ingin hapus?')">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
