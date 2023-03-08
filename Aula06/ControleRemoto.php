<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;
    // Sobrescrevendo Métodos
    public function ligar(): void {
        $this->setLigado(true);
    }
    public function deligar(): void {
        $this->setLigado(false);
    }
    public function abrirMenu(): void {
        echo "<br>----- MENU -----</br>";
        echo "<br>Está ligado?: " . ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando?: " . ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: {$this->getVolume()} ";
        for ($i=0; $i < $this->getVolume(); $i += 5) {
            echo "|";
        }
        echo "<br>{$this->getVolume()}</br>";
    }
    public function fecharMenu(): void {
        echo "Fechando Menu..."; 
    }
    public function maisVolume(): void {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }else{
            echo "<p>ERRO! Não posso aumentar o volume</p>";
        }
    }
    public function menosVolume(): void {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        } else{
            echo"<p>ERRO! Não posso diminuir o volume</p>";
        }
    }
    public function ligarMudo(): void {
        if ($this->getLigado() and $this->getVolume() > 0) {
            $this->setVolume(0); 
        }
    }
    public function deligarMudo(): void {
        if ($this->getLigado() and $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play(): void {
        if ($this->getLigado() and !$this->getTocando()) {
            $this->setTocando(true);
        }
    }
    public function pause(): void {
        if ($this->getLigado() and $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    // Métodos Especiais
    public function __construct(): void {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    private function setVolume($v): void {
        $this->volume = $v;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function setLigado($l): void {
        $this->ligado = $l;
    }
    private function getLigado() {
        return $this->ligado;
    }
    private function setTocando($t): void {
        $this->tocando = $t;
    }
    private function getTocando() {
        return $this->tocando;
    }
}
