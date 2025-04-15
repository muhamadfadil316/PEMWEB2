<?php
/**
 * File konfigurasi koneksi database
 */

$host = 'localhost';
$dbname = 'dbsiak';
$charset = 'utf8mb4';
$user = 'root';
$pass = '';

// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Opsi koneksi
$dbOptions = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,   // Tampilkan exception saat error
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,         // Hasil fetch berupa array asosiatif
    PDO::ATTR_EMULATE_PREPARES   => false,                    // Gunakan prepared statement asli dari MySQL
];

try {
    $dbh = new PDO($dsn, $user, $pass, $dbOptions);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
