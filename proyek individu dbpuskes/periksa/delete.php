<?php
include 'db.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM periksa WHERE id=$id");
header("Location: index.php");
?>
