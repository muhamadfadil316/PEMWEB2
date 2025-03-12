<?php
class Kubus {
    public $sisi;

    function __construct($sisi) {
        $this->sisi = $sisi;
    }

    function getVolume() {
        return pow($this->sisi, 3);
    }

    function getLuasPermukaan() {
        return 6 * pow($this->sisi, 2);
    }
}
?>
