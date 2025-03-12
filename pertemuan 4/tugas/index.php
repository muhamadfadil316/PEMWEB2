<?php
require_once 'Kubus.php';
require_once 'Balok.php';
require_once 'Tabung.php';
require_once 'Bola.php';
require_once 'Kerucut.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Bangun Ruang 3D</title>
</head>
<body>
    <div class="section">
        <h2>Hasil Perhitungan Bangun Ruang 3D</h2>

        <?php
        // Kubus
        $kubus = new Kubus(5);
        echo "<h3>Kubus</h3>";
        echo "Sisi: " . $kubus->sisi . "<br>";
        echo "Volume: " . $kubus->getVolume() . "<br>";
        echo "Luas Permukaan: " . $kubus->getLuasPermukaan() . "<br><hr>";

        // Balok
        $balok = new Balok(10, 5, 8);
        echo "<h3>Balok</h3>";
        echo "Panjang: " . $balok->panjang . ", Lebar: " . $balok->lebar . ", Tinggi: " . $balok->tinggi . "<br>";
        echo "Volume: " . $balok->getVolume() . "<br>";
        echo "Luas Permukaan: " . $balok->getLuasPermukaan() . "<br><hr>";

        // Tabung
        $tabung = new Tabung(7, 14);
        echo "<h3>Tabung</h3>";
        echo "Jari-jari: " . $tabung->jariJari . ", Tinggi: " . $tabung->tinggi . "<br>";
        echo "Volume: " . number_format($tabung->getVolume(), 2) . "<br>";
        echo "Luas Permukaan: " . number_format($tabung->getLuasPermukaan(), 2) . "<br><hr>";

        // Bola
        $bola = new Bola(6);
        echo "<h3>Bola</h3>";
        echo "Jari-jari: " . $bola->jariJari . "<br>";
        echo "Volume: " . number_format($bola->getVolume(), 2) . "<br>";
        echo "Luas Permukaan: " . number_format($bola->getLuasPermukaan(), 2) . "<br><hr>";

        // Kerucut
        $kerucut = new Kerucut(5, 12);
        echo "<h3>Kerucut</h3>";
        echo "Jari-jari: " . $kerucut->jariJari . ", Tinggi: " . $kerucut->tinggi . "<br>";
        echo "Volume: " . number_format($kerucut->getVolume(), 2) . "<br>";
        echo "Luas Permukaan: " . number_format($kerucut->getLuasPermukaan(), 2) . "<br>";
        ?>
    </div>
</body>
</html>
