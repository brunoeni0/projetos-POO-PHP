<?php
require_once 'Animais.php';
class Aves extends Animais {
    # Atributo
    private $corPena;
    # Método
    public function fazerNinho(){
        echo "<p>Constrindo um ninho</p>";
    }
    # Método SobrEscrevidos
    public function locomover(){
        echo "<p>Voando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo frutas</p>";
    }
    public function emitirSom(){
        echo "<p>Som de ave</p>";
    }
    # Métodos Especiais
    public function getCorPena(){
        return $this->corPena;
    }
    public function setCorPena($cp2){
        $this->corPena = $cp2;
    }
}
