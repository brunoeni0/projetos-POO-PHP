<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    # Atributos
    private $matricula;
    private $curso;
    # Método
    public function pagarMensalidade(){
        echo "<p>Pagado mensalidade do aluno <strong>{$this->getNome()}</p>";
    }
    # Métodos Especiais
    public function getMatricula(){
        return $this->matricula;
    }
    public function setMatricula($m){
        $this->matricula = $m;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setCurso($c){
        $this->curso = $c;
    }
}
