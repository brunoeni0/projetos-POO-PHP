<?php
require_once 'Mamiferos.php';
class Cachorro extends Mamiferos {
    # Métodos
    public function enterrarOsso() {
        echo "<p>Enterrado Osso</p>";
    }
    public function abanarRabo() {
        echo "<p>Abanando o Rabo</p>";
    }
    # Método SobrEscrevido
    public function emitirSom() {
        echo "<p>Au! Au! Au!</p>";
    }
}
