<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício 1</title>
    </head>
    <body>
        <pre>
            <?php
                require "Sabonete.php";
                $sabo = new Sabonete();
                $sabo-> cheiro = "bom";
                $sabo-> peso = 0.70;
                $sabo-> embalado = false;
                $sabo-> tipo = "glicerina";
                $sabo-> usado = 1;
                
                print_r($sabo);
                echo "<br/>";
                
                $sabo-> abrir();
                $sabo-> tirar(2);
                $sabo-> limpar();
                $sabo-> lavar();
                $sabo-> cheirar();
                
                echo "<br/>";
                
                require_once "Controle.php";
                $contro = new Controle();
                $contro-> botoes = "ligar";
                $contro-> pilhas = 2;
                $contro-> ligado = false;
                $contro-> tamanho = 0.20;
                $contro-> tampado = true;
                
                print_r($contro);
                echo "<br/>";
                
                $contro-> abrir();
                $contro-> fechar();
                $contro-> tirar();
                $contro-> colocar();
                $contro-> apertar("ligar");
            ?>
        </pre>
    </body>
</html>
