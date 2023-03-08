<?php
class Youtube {
    var $volume;
    var $legendado;
    var $like;
    var $play;
    var $video;
    var $tempo;
    
    function aumentar() {
        if ($this->volume > 100) {
            echo "ERRO! volume ". $this-> volume .", não tem como aumentar o volume acima do limite. <br/>";
            $this-> volume = 100;
        } else if ($this->volume < 0) {
            echo "ERRO! volume ". $this-> volume .", não tem como aumentar o volume abaixo de zero. <br/>";
            $this-> volume = 0;
        } else {
            if ($this -> volume > 95) {
                $this -> volume = 100;
            } else {
                $this-> volume += 5;
            }
            echo "Aumentando o volume para ". $this-> volume. "<br/>";
        }
    }
    
    function diminuir() {
        if ($this->volume > 100) {
            echo "ERRO! volume ". $this-> volume. ", não tem como diminuir com o volume acima do limite. <br/>";
            $this-> volume = 100;
        } else if ($this->volume < 0) {
            echo "ERRO! volume ". $this-> volume. ", não tem como diminuir o volume para abaixo de zero. <br/>";
            $this-> volume = 0;
        } else {
            if ($this->volume < 5) {
                $this->volume = 0;
            } else {  
                $this-> volume -= 5;
            }
            echo "Diminuindo o volume para ". $this-> volume. "<br/>";
        }
    }
    
    function trocar($nome) {
        echo "Trocando o vídeo de ". $this-> video. " para o vídeo ". $nome ." <br/>";
        $this-> video = $nome;
    }
    
    function curtir() {
        if (!$this-> like) {
            echo "Você curtiu o vídeo ". $this-> video. "<br/>";
        } else {       
            echo "Você tirou a curtida do vídeo ". $this-> video. "<br/>";
        }
    }
    
    function pause () {
        if ($this->play) {
            echo "O vídeo foi pausado! <br/>";
            $this-> play = false;
        } else {
            echo "Você deu play no video! <br/>";
            $this-> play = true;
        }
    }
}
