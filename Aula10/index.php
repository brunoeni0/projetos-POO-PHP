<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        // Programa Principal
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();
        
        $p1->setNome("Cláudio");
        $p2->setNome("Pedro");
        $p3->setNome("Henrique");
        $p4->setNome("Marilha");
        
        $p1->setSexo('M');
        $p2->setSexo('M');
        $p3->setSexo('M');
        $p4->setSexo('F');
        
        $p2->setCurso("Informática");
        $p3->setSalario(2500.75);
        $p4->setSetor("Estoque");
        
        $p3->receberAum(550.20);
        $p4->mudarTrabalho('algo');
        $p2->cancelarMatri();
        
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
    </pre></body>
</html>
