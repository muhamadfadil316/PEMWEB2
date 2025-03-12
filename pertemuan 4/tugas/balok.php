<?php
class Balok {
    public $panjang, $lebar, $tinggi;

    function __construct($panjang, $lebar, $tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    function getVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    function getLuasPermukaan() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
}
?>
