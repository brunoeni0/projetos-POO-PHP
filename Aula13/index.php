<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Cachorro.php';
        
        $c = new Cachorro();
        $c->reagirFrase("Olá"); // Abanar e Latir
        $c->reagirFrase("Vai apanhar"); // Rosnar
        $c->reagirHora(11, 45); // Abanar
        $c->reagirHora(21, 00); // Ignorar
        $c->reagirDono(true); // Abanar
        $c->reagirDono(false); // Rosnar e Latir
        $c->reagirIdadePeso(2, 12.5); // Latir
        $c->reagirIdadePeso(17, 4.5); // Rosnar
        ?>
    </body>
</html>
