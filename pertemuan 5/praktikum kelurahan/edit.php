<?php
include 'koneksi.php';

$row = null;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Menggunakan prepared statement
    $stmt = $conn->prepare("SELECT * FROM data WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location.href='index.php';</script>";
        exit;
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'], $_POST['name'], $_POST['category'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $category = $_POST['category'];

        // Prepared statement untuk update data
        $stmt = $conn->prepare("UPDATE data SET name = ?, category = ? WHERE id = ?");
        $stmt->bind_param("ssi", $name, $category, $id);

        if ($stmt->execute()) {
            echo "<script>alert('Data berhasil diperbarui!'); window.location.href='index.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "<script>alert('Mohon isi semua kolom!');</script>";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <?php if ($row): ?>
    <form method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
        <label>Nama:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required><br>
        <label>Kategori:</label>
        <select name="category">
            <option value="kategori1" <?php if ($row['category'] == 'kategori1') echo 'selected'; ?>>Kategori 1</option>
            <option value="kategori2" <?php if ($row['category'] == 'kategori2') echo 'selected'; ?>>Kategori 2</option>
        </select><br>
        <button type="submit">Update</button>
    </form>
    <?php else: ?>
        <p>Data tidak ditemukan atau sudah dihapus.</p>
    <?php endif; ?>
</body>
</html>
