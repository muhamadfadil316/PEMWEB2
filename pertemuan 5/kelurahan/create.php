<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $conn->query("INSERT INTO kelurahan (id, nama) 
    VALUES ('$id', '$nama')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Kelurahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Tambah Kelurahan</h2>
    <form method="POST">
      <input type="text" name="id" placeholder="Nomor" required class="w-full border p-2 mb-4 rounded">
      <input type="text" name="nama" placeholder="Nama Kelurahan" required class="w-full border p-2 mb-4 rounded">
      <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
  </div>
</body>
</html>
