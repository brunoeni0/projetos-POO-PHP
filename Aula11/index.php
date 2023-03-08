<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php  
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            require_once 'Bolsista.php';
            # Visitante
            /*$v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setIdade(26);
            $v1->setSexo('M'); 
            print_r($v1);*/
            # Aluno
            /*$a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setSexo("M");
            $a1->setCurso("Informática");
            print_r($a1);
            $a1->pagarMensalidade(); */
            # Bolsista
            $b1 = new Bolsista();
            $b1->setMatricula(1112);
            $b1->setNome("Guanabara");
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(25);
            $b1->setSexo("M");
            $b1->pagarMensalidade();
            print_r($b1);          
        ?>
    </pre></body>
</html>
