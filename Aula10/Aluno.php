<?php
class Aluno extends Pessoa {
    # Atributos
    private $matri;
    private $curso;
    # Método
    public function cancelarMatri() {
        echo "Matrícula será encerrada</p>";
        $this->setMatri(false);
    }
    # Métodos Especiais
    public function getMatri() {
        return $this->matri;
    }
    public function setMatri($m) {
        $this->matri = $m;
    }
    public function getCurso() {
        return $this->curso;
    }
    public function setCurso($c) {
        $this->curso = $c;
    }
}
