<?php include 'db.php'; ?>
<form method="POST" action="">
    <label>Tanggal Periksa:</label>
    <input type="date" name="tanggal" required><br>
    <label>Keluhan:</label>
    <input type="text" name="keluhan" required><br>
    <label>Pasien ID:</label>
    <input type="number" name="pasien_id" required><br>
    <label>Paramedik ID:</label>
    <input type="number" name="paramedik_id" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    $pasien_id = $_POST['pasien_id'];
    $paramedik_id = $_POST['paramedik_id'];

    $query = "INSERT INTO periksa (tanggal, keluhan, pasien_id, paramedik_id)
              VALUES ('$tanggal', '$keluhan', '$pasien_id', '$paramedik_id')";
    mysqli_query($koneksi, $query);
    header("Location: index.php");
}
?>
