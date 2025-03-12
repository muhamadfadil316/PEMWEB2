<?php
class Tabung {
    public $jariJari, $tinggi;
    const PI = 3.14159265359;

    function __construct($jariJari, $tinggi) {
        $this->jariJari = $jariJari;
        $this->tinggi = $tinggi;
    }

    function getVolume() {
        return self::PI * pow($this->jariJari, 2) * $this->tinggi;
    }

    function getLuasPermukaan() {
        return 2 * self::PI * $this->jariJari * ($this->jariJari + $this->tinggi);
    }
}
?>
