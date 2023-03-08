<?php
require_once 'Animais.php';
class Peixes extends Animais {
    # Atributo
    private $corEscama;
    # Método
    public function fazerBolha(){
        echo "<p>Soltou uma bolha</p>";
    }
    # Métodos SobrEscrevidos
    public function locomover() {
        echo "<hr>Nadando</hr>";
    }
    public function alimentar() {
        echo "<p>Comendo substâncias</p>";
    }
    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }
    # Métodos Especiais
    public function getCorEscama(){
        return $this->corEscama;
    }
    public function setCorEscama($ce2){
        $this->corEscama = $ce2;
    }
}
