<?php
require_once 'Mamiferos.php';
class Canguru extends Mamiferos {
    # Método
    public function usarBolsa(){
        echo "<p>Usando a bolsa</p>";
    }
    # Método SobrEscrevido
    public function locomover() {
        echo "<hr>Saltando</hr>";
    }
}
