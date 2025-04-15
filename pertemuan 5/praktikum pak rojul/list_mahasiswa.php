<?php
require_once 'dbkoneksi.php';

//definisikan query
$sql = "SELECT * FROM mahasiswa ORDER BY thn_masuk DESC";

//jalankan query
$rs = $dbh->query($sql);

foreach ($rs as $row) {
    echo"<br>".$row->nim .' - '.$row->nama;
}
?>