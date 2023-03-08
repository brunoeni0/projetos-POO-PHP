<?php
require_once 'Animais.php';
class Mamiferio extends Animais {
    private $corPelo;
    public function emitirSom() {
        echo "Som de mamífero";
    }
    public function getCorPelo() {
        return $this->corPelo;
    }
    public function setCorPelo($cp) {
        $this->corPelo = $cp;
    }
}
