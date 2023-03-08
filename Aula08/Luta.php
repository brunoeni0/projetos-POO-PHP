<?php
class Luta {
    // Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    // Métodos
    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() === $l2->getCategoria()) {
             if ($l1 <> $l2) {
                 $this->setDesafiado($l1);
                 $this->setDesafiante($l2);
                 $this->setAprovada(true);
             } else {
                 echo "<br>O lutador não pode lutar contra sí mesmo.</br>";
             }
        } else {
            echo "<br>O lutador é de uma categoria diferente.</br>";
        }
    }
    public function lutar() {
        if ($this->getAprovada()) {
            $this->getDesafiado()->apresentar();
            $this->getDesafiante()->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //Empatou
                    echo "<p>Empatou</p>";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1: //Desafiado Ganhou
                    echo "<p>{$this->getDesafiado()->getNome()} venceu.</p>";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2: // Desafiante Ganhou
                    echo "<p>{$this->getDesafiante()->getNome()} venceu.</p>";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    break;
            }
        } else {
            echo "<p>A luta não pode acontecer</p>";
        }
    }
    // Métodos Especiais
    private function setDesafiado($dd) {
        $this->desafiado = $dd;
    }
    private function getDesafiado() {
        return $this->desafiado;
    }
    private function setDesafiante($dt) {
        $this->desafiante = $dt;
    }
    private function getDesafiante() {
        return $this->desafiante;
    }
    private function setRounds($r) {
        $this->rounds = $r;
    }
    private function getRounds() {
        return $this->rounds;
    }
    private function setAprovada($a) {
        $this->aprovada = $a;
    }
    private function getAprovada() {
        return $this->aprovada;
    }
} 
