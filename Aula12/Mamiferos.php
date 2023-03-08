<?php
require_once 'Animais.php';
class Mamiferos extends Animais{
    # Atributo
    private $corPelo;
    # Método SobrEscrevidos
    public function locomover() {
        echo "<hr>Correndo</hr>";
    }
    public function alimentar() {
        echo "<p>Mamando</p>";
    }
    public function emitirSom() {
        echo "<p>Som de Mamífero</p>";
    }
    # Métodos Especiais
    public function getCorPelo(){
        return $this->corPelo;
    }
    public function setCorPelo($cp1){
        $this->corPelo = $cp1;
    }
}
