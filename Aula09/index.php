<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        $p[0] = new Pessoa("Breno", 26, 'M');
        $l[0] = new Livro("Re zero", "Fumito eda", 500, $p[0]);
        $l[1] = new Livro("Fate", "Subaru natsuki", 400, $p[0]);
        $l[0]->detalhes();
        $l[1]->abrir();
        $l[1]->folhear(50);
        $l[1]->detalhes();
        ?>
        </pre>
    </body>
</html>
