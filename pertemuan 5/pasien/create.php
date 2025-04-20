<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $conn->query("INSERT INTO pasien (nama, alamat, tmp_lahir, tgl_lahir, gender, email) 
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
<body class="bg-gradient-to-r from-blue-50 to-green-50 min-h-screen flex items-center justify-center">
  <div class="bg-white shadow-xl rounded-xl p-8 w-full max-w-lg">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">🩺 Tambah Data Pasien</h2>
    <form method="POST" class="space-y-4">
      <input type="text" name="nama" placeholder="Nama" required class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
      
      <textarea name="alamat" placeholder="Alamat" required class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
      
      <div class="flex gap-4">
        <input type="text" name="tmp_lahir" placeholder="Tempat Lahir" required class="w-1/2 border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
        <input type="date" name="tgl_lahir" required class="w-1/2 border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      
      <select name="gender" required class="w-full border border-gray-300 p-3 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-400">
        <option value="">-- Pilih Gender --</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>

      <input type="email" name="email" placeholder="Email" required class="w-full border border-gray-300 p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">

      <div class="flex justify-between items-center mt-6">
        <a href="index.php" class="text-gray-600 hover:underline">← Kembali</a>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md shadow transition-all">Simpan</button>
      </div>
    </form>
  </div>
</body>
</html>
