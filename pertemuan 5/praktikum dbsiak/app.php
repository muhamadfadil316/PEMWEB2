<?php
require_once "config.php";

// Inisialisasi variabel
$notification = '';
$errorMessage = '';
$isEdit = false;
$formData = ['id' => '', 'kode' => '', 'nama' => '', 'kaprodi' => ''];

// Fungsi simpan data baru
function createProdi($dbh, $data) {
    $stmt = $dbh->prepare("INSERT INTO prodi (kode, nama, kaprodi) VALUES (?, ?, ?)");
    $stmt->execute([$data['kode'], $data['nama'], $data['kaprodi']]);
}

// Fungsi update data
function updateProdi($dbh, $data) {
    $stmt = $dbh->prepare("UPDATE prodi SET kode = ?, nama = ?, kaprodi = ? WHERE id = ?");
    $stmt->execute([$data['kode'], $data['nama'], $data['kaprodi'], $data['id']]);
}

// Fungsi hapus data
function deleteProdi($dbh, $id) {
    $stmt = $dbh->prepare("DELETE FROM prodi WHERE id = ?");
    $stmt->execute([$id]);
}

// Fungsi ambil satu data untuk edit
function getProdiById($dbh, $id) {
    $stmt = $dbh->prepare("SELECT * FROM prodi WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Handle POST request (simpan/update)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $formData = $_POST;

        if (!empty($formData['id'])) {
            updateProdi($dbh, $formData);
            $notification = "Data berhasil diperbarui.";
            $isEdit = false;
        } else {
            createProdi($dbh, $formData);
            $notification = "Data baru berhasil disimpan.";
        }
    } catch (PDOException $e) {
        $errorMessage = "Terjadi kesalahan: " . $e->getMessage();
    }
}

// Handle GET actions
if (isset($_GET['action'], $_GET['id'])) {
    $id = $_GET['id'];

    try {
        if ($_GET['action'] === 'delete') {
            deleteProdi($dbh, $id);
            $notification = "Data berhasil dihapus.";
        } elseif ($_GET['action'] === 'edit') {
            $formData = getProdiById($dbh, $id);
            $isEdit = true;
            if (!$formData) {
                $errorMessage = "Data tidak ditemukan.";
                $isEdit = false;
            }
        }
    } catch (PDOException $e) {
        $errorMessage = "Terjadi kesalahan: " . $e->getMessage();
    }
}

$allProdi = $dbh->query("SELECT * FROM prodi")->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Program Studi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 p-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-6">Manajemen Program Studi</h1>

        <?php if ($notification): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 p-4 rounded mb-4">
                <?= $notification ?>
            </div>
        <?php endif; ?>

        <?php if ($errorMessage): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-4">
                <?= $errorMessage ?>
            </div>
        <?php endif; ?>

        <!-- Form -->
        <div class="bg-white p-6 rounded shadow mb-8">
            <h2 class="text-xl font-semibold mb-4"><?= $isEdit ? 'Edit Prodi' : 'Tambah Prodi Baru' ?></h2>
            <form method="POST">
                <?php if ($isEdit): ?>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($formData['id']) ?>">
                <?php endif; ?>

                <div class="grid md:grid-cols-3 gap-4">
                    <div>
                        <label for="kode" class="block text-sm font-medium text-gray-700 mb-1">Kode</label>
                        <input type="text" name="kode" id="kode" required
                               value="<?= htmlspecialchars($formData['kode']) ?>"
                               class="w-full border px-3 py-2 rounded focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                        <input type="text" name="nama" id="nama" required
                               value="<?= htmlspecialchars($formData['nama']) ?>"
                               class="w-full border px-3 py-2 rounded focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="kaprodi" class="block text-sm font-medium text-gray-700 mb-1">Kaprodi</label>
                        <input type="text" name="kaprodi" id="kaprodi" required
                               value="<?= htmlspecialchars($formData['kaprodi']) ?>"
                               class="w-full border px-3 py-2 rounded focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="mt-4 flex space-x-3">
                    <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
                        <?= $isEdit ? 'Update' : 'Simpan' ?>
                    </button>
                    <?php if ($isEdit): ?>
                        <a href="app.php"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded">
                            Batal
                        </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>

        <!-- Tabel -->
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold mb-4">Daftar Program Studi</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 text-left border-b">Kode</th>
                            <th class="py-2 px-4 text-left border-b">Nama</th>
                            <th class="py-2 px-4 text-left border-b">Kaprodi</th>
                            <th class="py-2 px-4 text-left border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allProdi as $prodi): ?>
                            <tr class="hover:bg-gray-50">
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($prodi['kode']) ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($prodi['nama']) ?></td>
                                <td class="py-2 px-4 border-b"><?= htmlspecialchars($prodi['kaprodi']) ?></td>
                                <td class="py-2 px-4 border-b">
                                    <div class="flex space-x-2">
                                        <a href="?action=edit&id=<?= $prodi['id'] ?>"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white py-1 px-3 rounded text-xs">
                                            Edit
                                        </a>
                                        <a href="?action=delete&id=<?= $prodi['id'] ?>"
                                           onclick="return confirm('Yakin ingin menghapus data ini?')"
                                           class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded text-xs">
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php if (empty($allProdi)): ?>
                            <tr>
                                <td colspan="4" class="text-center text-gray-500 py-4">Belum ada data program studi.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
