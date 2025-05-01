<?php
include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM periksa WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<form method="POST" action="">
    <label>Tanggal Periksa:</label>
    <input type="date" name="tanggal" value="<?= $data['tanggal'] ?>" required><br>

    <label>Keluhan:</label>
    <input type="text" name="keluhan" value="<?= $data['keluhan'] ?>" required><br>

    <label>Pasien:</label>
    <select name="pasien_id" required>
        <?php
        $pasien = mysqli_query($koneksi, "SELECT id, nama FROM pasien");
        while ($p = mysqli_fetch_assoc($pasien)) {
            $selected = $p['id'] == $data['pasien_id'] ? "selected" : "";
            echo "<option value='{$p['id']}' $selected>{$p['nama']}</option>";
        }
        ?>
    </select><br>

    <label>Paramedik:</label>
    <select name="paramedik_id" required>
        <?php
        $paramedik = mysqli_query($koneksi, "SELECT id, nama FROM paramedik");
        while ($pm = mysqli_fetch_assoc($paramedik)) {
            $selected = $pm['id'] == $data['paramedik_id'] ? "selected" : "";
            echo "<option value='{$pm['id']}' $selected>{$pm['nama']}</option>";
        }
        ?>
    </select><br>

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];
    $pasien_id = $_POST['pasien_id'];
    $paramedik_id = $_POST['paramedik_id'];

    $query = "UPDATE periksa SET tanggal='$tanggal', keluhan='$keluhan',
              pasien_id='$pasien_id', paramedik_id='$paramedik_id' WHERE id=$id";
    mysqli_query($koneksi, $query);
    header("Location: index.php");
}
?>
