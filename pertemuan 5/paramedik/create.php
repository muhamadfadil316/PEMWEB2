<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kategori = $_POST['kategori'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];

    $conn->query("INSERT INTO paramedik (kode, nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat) 
    VALUES ('$kode', '$nama', '$gender', '$tmp_lahir', '$tgl_lahir', '$kategori', '$telpon', '$alamat')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Paramedik/head></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Tambah Paramedik</h2>
    <form method="POST">
      <input type="number" name="kode" placeholder="Kode" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="nama" placeholder="Nama" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="gender" placeholder="Gender" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" required class="w-full border p-2 mb-4 rounded">
      <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="kategori" placeholder="Kategori" required class="w-full border p-2 mb-4 rounded">
      <input type="number" name="telpon" placeholder="Telepon" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="alamat" placeholder="Alamat" required class="w-full border p-2 mb-4 rounded">
      <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
  </div>
</body>
</html>
