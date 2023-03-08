<?php
class Sabonete {
    var $cheiro;
    var $peso;
    var $embalado;
    var $tipo;
    var $usado;
    
    function abrir() {
        if ($this->embalado == true) {
            $this -> embalado = false;
            echo "Abrindo a embalagem! <br/>";
        } else {
            echo "ERRO!, Já está aberto. <br/>";
        }
    }
    
    function tirar($esc){
        if ($esc == 1) {
            echo "Tirando da embalagem! <br/>";
        } else {
            echo "Tirando da soboneteira! <br/>";
        }
    }
     
    function limpar() {
        if ($this->embalado == false) {
            $this -> usado += 5;
            if ($this->usado > 100) {
                echo "Sabonete 100% usado. Pegando um novo para usar! <br/>";
                $this -> usado = 0;
                $this -> embalado = true;
            } else if($this->usado < 0) {
                echo "ERRO!, O valor de usado informado é inválido. <br/>";
            } else {
                echo "Tomando o banho. total gasto do sabonete é ". $this -> usado. "% <br/>";
            }
        } else {
            echo "ERRO!, Primeiro você precisa tirar o sabonete da embalagem. <br/>";
        }
    }
    
    function lavar() {
        if ($this->embalado == false) {
            $this -> usado += 2;
            if ($this->usado > 100) {
                echo "Sabonete 100% usado. Pegando um novo para usar! <br/>";
                $this -> embalado = true;
                $this -> usado = 0;
            } else if ($this->usado < 0) {
                echo "ERRO!, O valor de usado informado é inválido. <br/>";
            } else {
                echo "Lavando as mãos. total gasto do sabonete é ". $this -> usado. "% <br/>";
            }
        } else {
            echo "ERRO!, Primeiro você precisa abir a caixa do sabonete. <br/>";
        }
    }
    
    function cheirar() {
        echo "O cheiro do sabonete é ". $this -> cheiro . "<br/>";
    }
}
