<?php
// array_push
$komponen = ["Mobo", "processor", "RAM", "SSD", "GPU"];

// Menambah elemen di akhir array
array_push($komponen, "PSU", "Cassing");

echo "Setelah Push<br>";
foreach ($komponen as $k){
    echo $k.'<br>';
}
print_r($komponen);
?>