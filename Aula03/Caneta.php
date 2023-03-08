<?php
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
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
