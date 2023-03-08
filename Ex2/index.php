<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 2</title>
    </head>
    <body>
        <pre>
            <?php
                include "Youtube.php";
                $yt = new Youtube();
                $yt -> volume = 30;
                $yt -> play = true;
                $yt -> like = false;
                $yt -> video = "Paulo Guedes";
                $yt -> tempo = 1.50;
                $yt -> legendado = false;
            
                var_export($yt);
                echo "<br/><br/>";
                
                $yt -> aumentar();
                $yt -> diminuir();
                $yt -> trocar("Monark talks");
                $yt -> curtir();
                $yt -> pause();
                
                echo "";
                
                include_once "Valorant.php";
                $val = new Valorant();
                $val -> jogar = false;
                $val -> partidas = 500;
                $val -> skins = "dragon";
                $val -> agente = "omen";
                $val -> loja = 7.300;
                
                echo"<br/>";
                var_export($val);
                echo"<br/><br/>";
                
                $val -> iniciar();
                $val -> historico();
                $val -> trocar("fenix");
                $val -> comprar(8.000, "elétrica");                  
            ?>
        </pre>
    </body>
</html>
