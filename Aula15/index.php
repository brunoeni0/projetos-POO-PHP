<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Video.php';
        $v[0] = new Video("Velozes e Furiosos");
        $v[1] = new Video('300');
        #print_r($v);
        
        require_once 'Gafanhoto.php';
        $g[0] = new Gafanhoto("Pedro", 25, "M", "Pedrão");
        #$g[1] = new Gafanhoto("Renata", 24, "F", "Renatinha");
        #print_r($g);
        
        require_once 'Visualizacao.php';
        $vis[0] = new Visualizacao($g[0], $v[0]); // Pedrão assistiu Velozes e Furiosos
        $vis[1] = new Visualizacao($g[0], $v[1]); // Pedrão assistiu 300
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
        print_r($vis);
        ?>
    </pre></body>
</html>
