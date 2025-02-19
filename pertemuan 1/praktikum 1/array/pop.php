<?php
$siswa = ["Asep","Joko","Nurhayati","Riko"];

// Menampilkan array awal
echo "Array awal :\n";
print_r($siswa);

// Menghapus elemen terakhir dari awal
$orang_terakhir = array_pop($siswa);

// Menampilkan elemen yang dihapus
echo "Elemen yang akan dihapus" .$orang_terakhir. "";

// Menampilkan array setelah penghapusan

echo "<br> Array setelah penghapusan : <br>";
print_r($siswa);
?>