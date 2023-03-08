<?php
abstract class Animais {
    # Atributos
    private $peso;
    private $idade;
    private $membros;
    # Métodos 
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
    # Métodos Especiais
    public function getPeso(){
        return $this->peso;
    }
    public function setPeso($p){
        $this->peso = $p;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function getMembros(){
        return $this->membros;
    }
    public function setMembros($m){
        $this->membros = $m;
    }
}
