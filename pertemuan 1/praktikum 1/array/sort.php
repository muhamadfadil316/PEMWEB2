<?php
$ar_buah = ["s"=>"Semangka", "k"=>"Khuldi", "m"=>"Mangga", "n"=>"Nanas"];

echo '<ol>';
sort($ar_buah);
echo '<hr/>';
echo '</ol>';
foreach ($ar_buah as $key => $value) {
    echo '<li>'.$key.' - '.$value.'</li>';
}

echo '<ol>';
?>