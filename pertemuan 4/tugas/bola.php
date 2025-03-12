<?php
class Bola {
    public $jariJari;
    const PI = 3.14159265359;

    function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    function getVolume() {
        return (4 / 3) * self::PI * pow($this->jariJari, 3);
    }

    function getLuasPermukaan() {
        return 4 * self::PI * pow($this->jariJari, 2);
    }
}
?>
