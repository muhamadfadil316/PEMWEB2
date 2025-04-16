<?php
include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM kelurahan WHERE id = $id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $conn->query("UPDATE kelurahan SET id='$id', nama='$nama' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Kelurahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Edit Kelurahan</h2>
    <form method="POST">
      <input type="text" name="id" value="<?= $data['id'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Nomor">
      <input type="text" name="nama" value="<?= $data['nama'] ?>" required class="w-full border p-2 mb-4 rounded" placeholder="Nama">
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
  </div>
</body>
</html>
