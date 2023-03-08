<?php
require_once 'Publicacao.php';
#require_once 'Pessoa.php';
class Livro implements Publicacao {
    # Atributos
    private $titulo; private $autor;
    private $totPag; private $pagAtual;
    private $aberto; private $leitor;
    # Métodos
    function detalhes() {
        echo "<hr>Titulo: {$this->getTitulo()}, Auto: {$this->getAutor()}, ";
        echo "Total de páginas: {$this->getTotPag()}, Página Atual: {$this->getPagAtual()}, ";
        echo "Leitor: {$this->getLeitor()->getNome()}</hr>";
    }
    # Métodos Duplicados
    function abrir(){
        $this->setAberto(true);
    }
    function fechar(){
        $this->setAberto(false);
    }
    function folhear($p) {
        if ($this->getAberto()){
            if ($this->getPagAtual() <= $this->getTotPag()){
                $this->setPagAtual($p);
            } else {
                $this->setPagAtual(0);
            }
        } else {
            echo "<br>Abra o livro primeiro para escolher a página!</br>";
        }
    }
    function avançarPag(){
        if ($this->getAberto()) {
            if ($this->getPagAtual() > $this->getTotPag()){
                $this->setPagAtual(0);
            } elseif ($this->getPagAtual() < 0){
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($this->getPagAtual() + 1);
            }
        } else {
            echo "<br>Abra o livro primeiro para avançar a página!</br>";
        }
    }
    function voltarPag(){
        if ($this->getAberto()) {
            if ($this->getPagAtual() > $this->getTotPag()){
                $this->setPagAtual(0);
            } elseif ($this->getPagAtual() > 0) {
                $this->setPagAtual(0);
            } else {
                $this->setPagAtual($this->getPagAtual() - 1);
            }
        } else {
            echo "<br>Abra o livro primeiro para voltar a página!</br>";
        }
    }
    # Métodos Especias
    public function __construct($ti, $au, $tp, $lt) {
        $this->setTitulo($ti);
        $this->setAutor($au);
        $this->setTotPag($tp);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($lt);
    }
    private function getTitulo(){
        return $this->titulo;
    }
    private function setTitulo($t){
        $this->titulo = $t;
    }
    private function getAutor(){
        return $this->autor;
    }
    private function setAutor($a){
        $this->autor = $a;
    }
    private function getTotPag(){
        return $this->totPag;
    }
    private function setTotPag($tp){
        $this->totPag = $tp;
    }
    private function getPagAtual(){
        return $this->pagAtual;
    }
    private function setPagAtual($pa){
        $this->pagAtual = $pa;
    }
    private function getAberto(){
        return $this->aberto;
    }
    private function setAberto($ab){
        $this->aberto = $ab;
    }
    private function getLeitor(){
        return $this->leitor;
    }
    private function setLeitor($l){
        $this->leitor = $l;
    }
}
