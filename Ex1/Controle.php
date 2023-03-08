<?php
class Controle {
    var $botoes;
    var $pilhas;
    var $ligado;
    var $tamanho;
    var $tampado;

    function abrir() {
        if ($this->tampado == true) {
            echo "Abrindo o controle! <br/>";
            $this -> tampado = false;
        } else {
            echo "ERRO! O controle já está aberto! <br/>";
        }
    }

    function fechar() {
        if ($this->tampado == false) {
            echo "Fechando o controle! <br/>";
            $this->tampado = true;
        } else {
            echo "ERRO!, O controle já está lacrado. <br/>";
        }
    }

    function tirar() {
        if ($this->tampado == false) {
            echo "Tirando todas as pilhas do controle! <br/>";
            $this-> pilhas = 0;
        } else {
            echo "ERRO!, Não da para tirar as pilhas com o controle lacrado. <br/>";
        }
    }

    function colocar() {
        if ($this->tampado == false) {
            echo "Trocando as pilhas por pilhas novas! <br/>";
            $this -> pilhas = 2;
        } else {
            echo "ERRO!, Não da para colocar as pilhas com o controle fechado. <br/>";
        }
    }

    function apertar($op) {
        if ($this->pilhas < 2) {
            echo "ERRO!, Está faltando pilhas <br/>";
        } else if ($this->pilhas == 2) {
            if ($op == "ligar" && $this->ligado == false) {
                echo "Ligando a tv! <br/>";
                $this-> ligado = true;
            } else if ($op == "desligar" && $this->ligado == true) {
                echo "Desligando a tv! <br/>";
                $this-> ligado = false;
            } else if ($op == "aumentar" && $this->ligado == true) {
                echo "Aumentando o volume da tv! <br/>";
            } else if ($op == "diminuir" && $this->ligado == true) {
                echo "Diminuindo o volume da tv! <br/>";
            } else {
                echo "ERRO!, Opção inválida. <br/>";
            }
        } else {
            echo "ERRO!, Tem pilhas demais. <br/>";
        }
    }
}
