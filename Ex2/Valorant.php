<?php
class Valorant {
    var $jogar;
    var $partidas;
    var $skins;
    var $agente;
    var $loja;
    
    function iniciar() {
        $this-> jogar = true;
        $this-> partidas ++;
        echo "Procurando partida! <br/>";
    }
    
    function historico () {
        echo "Você tem no historico ". $this-> partidas. " partidas! <br/>";
        echo "E na última partida você jogou de ". $this-> agente. "<br/>";
        $this-> jogar = false;
    }
    
    function trocar($esc) {
        if ($this-> jogar) {
            $this-> agente = $esc;
            echo "Escolhendo o agente ". $this-> agente. "<br/>";
        } else {
             echo "ERRO!, Primeiro você tem que iniciar a partida para escolher o novo agente. <br/>";
         }
    }
    
    function comprar ($vp, $skin) {
        $this-> jogar = false;
        if ($this->loja <= $vp) {
            $this-> skins = $skin;
            echo "Você comprou a skin ". $this-> skins. "<br/>";
        } else {
            echo "ERRO!, Não tem valorant point suficiente está faltando ". $this-> loja - $vp. " para fechar a compra<br/>";
        }
    }
}
