<?php
class Professor extends Pessoa {
    # Atributos
    private $especialidades;
    private $salario;
    # Método
    public function receberAum($v) {
        $this->setSalario($this->getSalario() + $v);
    }
    # Métodos Especias
    public function getEspecialidades() {
        return $this->especialidades;
    }
    public function setEspecialidades($es) {
        $this->especialidades = $es;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($s) {
        $this->salario = $s;
    }
}
