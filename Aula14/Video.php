<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    # Atributos
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $repoduzindo;
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
    # Métodos Especiais
    public function __construct($ti) {
        $this->setTitulo($ti);
        $this->setAvaliacao(0);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($t) {
        $this->titulo = $t;
    }
    public function getVideo() {
        return $this->video;
    }
    public function setVideo($v) {
        $this->video = $v;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($a) {
        $this->avaliacao = $a;
    }
    public function getViews() {
        return $this->views;
    }
    public function setViews($v) {
        $this->views = $v;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function setCurtidas($c) {
        $this->curtidas = $c;
    }
    public function getReproduzido() {
        return $this->repoduzindo;
    }
    public function setReproduzido($r) {
        $this->repoduzindo = $r;
    }
}
