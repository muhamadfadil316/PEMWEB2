<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// ... kode lainnya
// Konfigurasi Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dbproyek_satu');

// Koneksi ke database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Konfigurasi lain
define('SITE_NAME', 'Puskesmas Sehat Bahagia');