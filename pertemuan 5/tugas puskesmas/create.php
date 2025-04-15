<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO pasien (nama, alamat, tmp_lahir, tgl_lahir, gender, email, kelurahan_id,) 
    VALUES ('$nama', '$alamat', '$tmp_lahir', '$tgl_lahir', '$gender', '$email')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pasien</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Tambah Pasien</h2>
    <form method="POST">
      <input type="text" name="nama" placeholder="Nama" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="alamat" placeholder="Alamat" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="gender" placeholder="Gender" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="email" placeholder="Email" required class="w-full border p-2 mb-4 rounded">
      <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
  </div>
</body>
</html>
