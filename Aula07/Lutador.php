<?php
class Lutador {
    // Atributos
    private $nome, $nacionalidade, $categoria;
    private $idade,  $altura, $peso;
    private $vitorias, $derrotas, $empates;
    // Métodos
    public function apresentar(): void {
        echo "<p></p>";
        echo "<p>CHEGOU A HORA! o lutador {$this->getNome()}";
        echo " veio diretamente de {$this->getNacionalidade()}";
        echo " tem {$this->getIdade()} anos";
        echo " tem {$this->getAltura()} m de altura";
        echo " e pesa {$this->getPeso()} Kg";
        echo "<br>ele tem {$this->getVitorias()} vitórias";
        echo ", {$this->getDerrotas()} derrotas";
        echo ", {$this->getEmpates()} empates";
    }
    public function status(): void {
        echo "<br>{$this->getNome()}";
        echo " é um peso {$this->getCategoria()}";
        echo " e já ganhou {$this->getVitorias()} vezes";
        echo ", perdeu {$this->getDerrotas()} vezes";
        echo " e empatou {$this->getEmpates()} vezes";
    }
    public function ganharLuta(): void {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta(): void {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(): void {
        $this->setEmpates($this->getEmpates() + 1);
    }
    // Métodos Especiais
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em): void {
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($id);
        $this->setAltura($al);
        $this->setPeso($pe);
        $this->setVitorias($vi);
        $this->setDerrotas($de);
        $this->setEmpates ($em);
    }
    private function getNome() {
        return $this->nome;
    }
    private function setNome($n): void {
        $this->nome = $n;
    }
    private function getNacionalidade() {
        return $this->nacionalidade;
    }
    private function setNacionalidade($n): void {
        $this->nacionalidade = $n;
    }
    private function getIdade() {
        return $this->idade;
    }
    private function setIdade($i): void {
        $this->idade = $i;
    }
    private function getAltura() {
        return $this->altura;
    }
    private function setAltura($a): void {
        $this->altura = $a;
    }
    private function getPeso() {
        return $this->peso;
    }
    private function setPeso($p): void {
        $this->peso = $p;
        $this->setCategoria();
    }
    private function getCategoria(){
        return $this->categoria;
    }
    private function setCategoria(): void {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    private function getVitorias() {
        return $this->vitorias;
    }
    private function setVitorias($v): void {
        $this->vitorias = $v;
    }
    private function getDerrotas() {
        return $this->derrotas;
    }
    private function setDerrotas($d): void {
        $this->derrotas = $d;
    }
    private function getEmpates(){
        return $this->empates;
    }
    private function setEmpates($e): void {
        $this->empates = $e;
    }
}
