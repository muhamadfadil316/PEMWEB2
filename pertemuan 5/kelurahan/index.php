<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Kelurahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Daftar Kelurahan</h1>
    <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Kelurahan</a>
    <table class="w-full bg-white rounded shadow">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-2">Nomor</th>
          <th class="p-2">Nama Kelurahan</th>
          <th class="p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM kelurahan");
        $no = 1;
        while($row = $result->fetch_assoc()):
        ?>
        <tr class="border-b">
          <td class="p-2"><?= $no++ ?></td>
          <td class="p-2"><?= $row['id'] ?></td>
          <td class="p-2"><?= $row['nama'] ?></td>
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
