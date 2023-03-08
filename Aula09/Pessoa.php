<?php
class Pessoa {
    # Atributos
    private $nome;
    private $idade;
    private $sexo;
    # Métodos
    function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }
    # Métodos Especiais
    function __construct($no, $id, $se) {
        $this->setNome($no);
        $this->setIdade($id);
        $this->setSexo($se);
    }
    public function getNome() {
        return $this->nome;
    }
    private function setNome($n) {
        $this->nome = $n;
    }
    public function getIdade(){
        return $this->idade;
    }
    private function setIdade($i) {
        $this->idade = $i;
    }
    function getSexo() {
        return $this->sexo;
    }
    private function setSexo($s) {
        $this->sexo = $s;
    }
}
