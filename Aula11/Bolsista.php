<?php
require_once 'Aluno.php';
class Bolsista extends Aluno {
    # Atributo
    private $bolsa;
    # Métodos
    public function renovarBolsa(){
        echo "<p>Bolsa renovada</p>";
    }
    public function pagarMensalidade(){
        echo "<p>{$this->getNome()} é bolsista! Então paga com desconto!</p>";
    }
    # Métodos Especiais
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($b){
        $this->bolsa = $b;
    }
}
