<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Pasien</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
  <div class="container mx-auto">
    <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Daftar Pasien</h1>
    <a href="create.php" class="bg-blue-600 text-white px-6 py-2 rounded-lg mb-6 inline-block hover:bg-blue-700 transition duration-300">
      <i class="fas fa-plus-circle"></i> Tambah Pasien
    </a>
    <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
      <table class="w-full table-auto text-sm">
        <thead class="bg-blue-500 text-white">
          <tr>
            <th class="p-4 text-left">No</th>
            <th class="p-4 text-left">Nama</th>
            <th class="p-4 text-left">Alamat</th>
            <th class="p-4 text-left">Tempat Lahir</th>
            <th class="p-4 text-left">Tanggal Lahir</th>
            <th class="p-4 text-left">Gender</th>
            <th class="p-4 text-left">Email</th>
            <th class="p-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">
          <?php
          $result = $conn->query("SELECT * FROM pasien");
          $no = 1;
          while($row = $result->fetch_assoc()):
          ?>
          <tr class="border-b hover:bg-gray-50 transition duration-300">
            <td class="p-4"><?= $no++ ?></td>
            <td class="p-4"><?= $row['nama'] ?></td>
            <td class="p-4"><?= $row['alamat'] ?></td>
            <td class="p-4"><?= $row['tmp_lahir'] ?></td>
            <td class="p-4"><?= $row['tgl_lahir'] ?></td>
            <td class="p-4"><?= $row['gender'] ?></td>
            <td class="p-4"><?= $row['email'] ?></td>
            <td class="p-4 text-center">
              <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-500 hover:text-blue-700 transition duration-300">
                <i class="fas fa-edit"></i> <!-- Icon Edit -->
              </a> |
              <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-500 hover:text-red-700 transition duration-300" onclick="return confirm('Yakin ingin hapus?')">
                <i class="fas fa-trash-alt"></i> <!-- Icon Delete -->
              </a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
