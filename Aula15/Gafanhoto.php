<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    # Atributos
    private $login;
    private $totAssistido;
    # Método
    public function viuMaisUm() {
        $this->setTotAssistido($this->getTotAssistido() + 1);
    }
    # Método SobrEscrevido
    public function ganharExp() {
        $this->setExperiencia($this->getExperiencia() + 1);
    }
    # Métodos Especiais
    public function __construct($no, $id, $se, $login) {
        parent::__construct($no, $id, $se);
        $this->setLogin($login);
        $this->setTotAssistido(0);
    }
    public function getLogin() {
        return $this->login;
    }
    public function setLogin($l) {
        $this->login = $l;
    }
    public function getTotAssistido() {
        return $this->totAssistido;
    }
    public function setTotAssistido($ta) {
        $this->totAssistido = $ta;
    }
}
