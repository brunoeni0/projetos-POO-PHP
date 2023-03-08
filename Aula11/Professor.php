<?php
require_once 'Pessoa.php';
class Professor extends Pessoa {
    # Atributos
    private $especialidade;
    private $salario;
    # Método
    function receberAum($v){
        $this->setSalario($this->getSalario() + $v);
    }
    # Métodos Especiais
    function getEspecialidade(){
        return $this->especialidade;
    }
    protected function setEspecialidade($es){
        $this->especialidade = $es;
    }
    function getSalario(){
        return $this->salario;
    }
    protected function setSalario($s){
        $this->salario = $s;
    }
}
