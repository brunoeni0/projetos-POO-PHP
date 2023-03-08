<?php
class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    public function rabiscar(): void {
        if ($this->tampada == true) {
            echo "<p>ERRO! Não posso Rabiscar!";
        } else {
            echo "<p>Estou Rabiscando...</p>";
        }
        
    }
    public function tampar(): void {
        $this->tampada = true;
    }
    public function destampar(): void {
        $this->tampada = false;
    }
}
