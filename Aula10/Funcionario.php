<?php
class Funcionario extends Pessoa {
    # Atributos
    private $setor;
    private $trabalho;
    # Método
    public function mudarTrabalho($trab){
        $this->setTrabalho($trab);
    }
    # Métodos especiais
    public function getSetor(){
        return $this->setor;
    }
    public function setSetor($s){
        $this->setor = $s;
    }
    public function getTrabalho(){
        return $this->trabalho;
    }
    public function setTrabalho($t) {
        $this->trabalho =  $t;
    }
}
