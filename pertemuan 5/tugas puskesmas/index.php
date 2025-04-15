<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Pasien</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Daftar Pasien</h1>
    <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Pasien</a>
    <table class="w-full bg-white rounded shadow">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-2">No</th>
          <th class="p-2">Nama</th>
          <th class="p-2">Alamat</th>
          <th class="p-2">Tempat Lahir</th>
          <th class="p-2">Tanggal Lahir</th>
          <th class="p-2">Gender</th>
          <th class="p-2">Email</th>
          <th class="p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM pasien");
        $no = 1;
        while($row = $result->fetch_assoc()):
        ?>
        <tr class="border-b">
          <td class="p-2"><?= $no++ ?></td>
          <td class="p-2"><?= $row['nama'] ?></td>
          <td class="p-2"><?= $row['alamat'] ?></td>
          <td class="p-2"><?= $row['tmp_lahir'] ?></td>
          <td class="p-2"><?= $row['tgl_lahir'] ?></td>
          <td class="p-2"><?= $row['gender'] ?></td>
          <td class="p-2"><?= $row['email'] ?></td>
          <td class="p-2">
            <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-600">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-600" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
