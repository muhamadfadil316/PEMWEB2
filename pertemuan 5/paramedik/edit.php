<?php
include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM paramedik WHERE id = $id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $tmp_lahir = $_POST['tmp_lahir'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $kategori = $_POST['kategori'];
  $telpon = $_POST['telpon'];
  $alamat = $_POST['alamat'];

    $conn->query("UPDATE paramedik SET kode='$kode', nama='$nama', gender='$gender', tmp_lahir='$tmp_lahir',
    tgl_lahir='$tgl_lahir', kategori='$kategori', telpon='$telpon', alamat='$alamat' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Paramedik</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Edit Paramedik</h2>
    <form method="POST">
      <input type="text" name="kode" value="<?= $data['kode'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Nomor">
      <input type="text" name="nama" value="<?= $data['nama'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Nama">
      <input type="text" name="gender" value="<?= $data['gender'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Gender">
      <input type="text" name="tmp_lahir" value="<?= $data['tmp_lahir'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Tempat Lahir">
      <input type="text" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Tanggal Lahir">
      <input type="text" name="kategori" value="<?= $data['kategori'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Kategori">
      <input type="text" name="telpon" value="<?= $data['telpon'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Telepon">
      <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Alamat">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
  </div>
</body>
</html>
