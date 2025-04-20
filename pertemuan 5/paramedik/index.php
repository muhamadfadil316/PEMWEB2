<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Data Paramedik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gradient-to-br from-green-50 to-blue-50 min-h-screen p-6">
  <div class="container mx-auto">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-3xl font-extrabold text-gray-700 tracking-wide">🧑‍⚕️ Data Paramedik</h1>
      <a href="create.php" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow transition-all duration-300">
        + Tambah Paramedik
      </a>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto rounded-xl shadow-lg border border-gray-200 bg-white">
      <table class="min-w-full text-sm text-gray-700">
        <thead class="bg-green-100 text-gray-800 text-xs sticky top-0 z-10 shadow-sm">
          <tr>
            <th class="p-4 text-left">No</th>
            <th class="p-4 text-left">Kode</th>
            <th class="p-4 text-left">Nama</th>
            <th class="p-4 text-left">Gender</th>
            <th class="p-4 text-left">Tempat Lahir</th>
            <th class="p-4 text-left">Tanggal Lahir</th>
            <th class="p-4 text-left">Kategori</th>
            <th class="p-4 text-left">Telepon</th>
            <th class="p-4 text-left">Alamat</th>
            <th class="p-4 text-left">Unit Kerja</th>
            <th class="p-4 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT p.*, u.nama as nama_unit FROM paramedik p LEFT JOIN unit_kerja u ON p.unit_kerja_id = u.id";
          $result = $conn->query($sql);
          $no = 1;
          while($row = $result->fetch_assoc()):
          ?>
          <tr class="<?= $no % 2 == 0 ? 'bg-gray-50' : 'bg-white' ?> hover:bg-blue-50 transition">
            <td class="p-4"><?= $no++ ?></td>
            <td class="p-4"><?= $row['kode'] ?></td>
            <td class="p-4 font-semibold"><?= $row['nama'] ?></td>
            <td class="p-4"><?= $row['gender'] ?></td>
            <td class="p-4"><?= $row['tmp_lahir'] ?></td>
            <td class="p-4"><?= $row['tgl_lahir'] ?></td>
            <td class="p-4"><?= $row['kategori'] ?></td>
            <td class="p-4"><?= $row['telpon'] ?></td>
            <td class="p-4"><?= $row['alamat'] ?></td>
            <td class="p-4"><?= $row['nama_unit'] ?? '-' ?></td>
            <td class="p-4 flex justify-center gap-3">
              <a href="edit.php?id=<?= $row['id'] ?>" title="Edit" class="text-blue-600 hover:text-blue-800 transition">
                <i data-lucide="pencil" class="w-5 h-5"></i>
              </a>
              <a href="delete.php?id=<?= $row['id'] ?>" title="Hapus" onclick="return confirm('Yakin ingin menghapus data ini?')" class="text-red-600 hover:text-red-800 transition">
                <i data-lucide="trash-2" class="w-5 h-5"></i>
              </a>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
