<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    # Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    # Métodos Interface
    public function play() {
        $this->setReproduzindo(true);
    }
    public function pause() {
        $this->setReproduzindo(false);
    }
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }
    # Métodos especiais
    public function __construct($ti) {
        $this->setTitulo($ti);
        $this->setViews(0);
        $this->avaliacao = 0;
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($t) {
        $this->titulo = $t;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($a) {
        $media = ($this->getAvaliacao() + $a) / $this->getViews();
        $this->avaliacao = $media;
    }
    public function getViews() {
        return $this->views;
    }
    public function setViews($v) {
        $this->views = $v;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setCurtidas($c){
        $this->curtidas = $c;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    public function setReproduzindo($r) {
        $this->reproduzindo = $r;
    }
}
