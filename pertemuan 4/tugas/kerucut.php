<?php
class Kerucut {
    public $jariJari, $tinggi;
    const PI = 3.14159265359;

    function __construct($jariJari, $tinggi) {
        $this->jariJari = $jariJari;
        $this->tinggi = $tinggi;
    }

    function getVolume() {
        return (1 / 3) * self::PI * pow($this->jariJari, 2) * $this->tinggi;
    }

    function getLuasPermukaan() {
        $s = sqrt(pow($this->jariJari, 2) + pow($this->tinggi, 2)); // Sisi miring
        return self::PI * $this->jariJari * ($this->jariJari + $s);
    }
}
?>
