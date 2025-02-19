<?php
$rokok = ["Samsu", "Esse", "Kretek", "Marlong", "Garpit"];

//Menghapus elemen pertama
$awal = array_shift($rokok);

//Hasil
echo "Rokok yang dihapus : $awal";
echo "Array setelah shift <br>";
foreach ($rokok as $r){
    echo "$r <br>";
}
?>