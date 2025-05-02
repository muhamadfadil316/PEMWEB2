<?php
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root";        // Ganti dengan username database Anda
$password = "";            // Ganti dengan password database Anda
$dbname = "dbproyek_individu"; // Nama database yang digunakan

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
