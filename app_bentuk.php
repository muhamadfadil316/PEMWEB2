<?php
require_once 'lingkarang.php';

$lingkaran1 = new Lingkaran(8.4);
$lingkaran2 = new Lingkaran(14);

echo 'NILAI PHI adalah '. Lingkaran::PHI;
echo '<br> Jari-jari lingkaran 1 = '. $lingkaran1->jari;
echo '<br> Luas lingkaran 1 = '. $lingkaran1->getLuas();
echo '<br> Keliling lingkaran 1 = '. $lingkaran1->getkeliling();
echo '<br>';
$lingkaran1->cetak();
echo '<br>';
?>