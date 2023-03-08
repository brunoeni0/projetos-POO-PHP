<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    # Atributos
    private $espectador;
    private $filme;
    # métodos
    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($avn) {
        $this->filme->setAvaliacao($avn);
    }
    public function avaliarPorc($avc) {
        $nova = 0;
        if ($avc < 20) {
            $nova = 3;
        } elseif ($avc < 50) {
            $nova = 5;
        } elseif ($avc < 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    # Métodos Especiais
    public function __construct($espc, $filme) {
        $this->setFilme($filme);
        $this->setEspectador($espc);
        $this->espectador->viuMaisUm();
        $this->filme->setViews($this->filme->getViews() + 1);
    }
    public function getEspectador() {
        return $this->espectador;
    }
    public function setEspectador($esp) {
        $this->espectador = $esp;
    }
    public function getFilme() {
        return $this->filme;
    }
    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
