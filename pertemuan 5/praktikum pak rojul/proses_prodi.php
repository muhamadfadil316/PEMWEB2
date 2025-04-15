<?php
// Koneksi ke database
$host = 'localhost';
$db = 'dbsiak'; // Sesuaikan dengan database Anda
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $dbh = new PDO($dsn, $user, $pass, $opt);

    if (isset($_POST['simpan'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $kaprodi = $_POST['kaprodi'];

        $sql = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$kode, $nama, $kaprodi]);

        // Redirect kembali ke form
        header("Location: list_prodi.php");
        exit;
    }

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
