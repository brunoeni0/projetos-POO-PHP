<?php
require_once 'Animais.php';
class Repteis extends Animais {
    # Atributo
    private $corEscama;
    # Método SobrEscrevidos
    public function locomover() {
        echo "<hr>Rastejando</hr>";
    }
    public function alimentar() {
        echo "<p>Comendo Vegetais</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Réptil</p>";
    }
    # Métodos Especiais
    public function getCorEscama(){
        return $this->corEscama;
    }
    function setCorEscama($ce1){
        $this->corEscama = $ce1;
    }
}
