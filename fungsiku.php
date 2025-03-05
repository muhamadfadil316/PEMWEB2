<?php
function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS","0.25");
    define("NILAI_UAS","0.25");
    define("NILAI_TUGAS","0.25");
    $nilai_akhir = $nilai_uts * NILAI_UTS + $nilai_uas * NILAI_UAS + $nilai_tugas * NILAI_TUGAS;
    return $nilai_akhir;
}

function kelulusan($nilai){
    define("NILAI_MINIMAL",60);
    if($nilai >= NILAI_MINIMAL){
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}
?>