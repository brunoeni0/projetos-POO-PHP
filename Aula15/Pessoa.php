<?php
abstract class Pessoa {
    # Atributos
    private $nome;
    private $idade;
    private $sexo;
    private $experiencia;
    # Método
    abstract protected function ganharExp();
    # Métodos Especiais
    public function __construct($no, $id, $se) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
        $this->setExperiencia(0);
    }
    protected function getNome() {
        return $this->nome;
    }
    protected function setNome($n) {
        $this->nome = $n;
    }
    protected function getIdade() {
        return $this->idade;
    }
    protected function setIdade($i) {
        $this->idade = $i;
    }
    protected function getSexo() {
        return $this->sexo;
    }
    protected function setSexo($s) {
        $this->sexo = $s;
    }
    protected function getExperiencia() {
        return $this->experiencia;
    }
    protected function setExperiencia($exp) {
        $this->experiencia = $exp;
    }
}
