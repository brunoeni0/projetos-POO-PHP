<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
      /*require_once 'Mamiferos.php';
        require_once 'Repteis.php';
        require_once 'Peixes.php';
        require_once 'Aves.php';
        
        $m = new Mamiferos();
        $r = new Repteis();
        $p = new Peixes();
        $a = new Aves();
        
        $m->setPeso(85.3);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->locomover(); // Correndo
        $m->alimentar(); // Mamando
        $m->emitirSom(); // Som do Mamífero
        
        $p->setPeso(0.35);
        $p->setIdade(1);
        $p->setMembros(0);
        $p->locomover(); // Nadando
        $p->alimentar(); // Comendo substância
        $p->emitirSom(); // Peixe não faz som
        $p->fazerBolha();
        
        $a->setPeso(0.89);
        $a->setIdade(2);
        $a->setMembros(2);
        $a->locomover(); // Voando
        $a->alimentar(); // Comendo frutas
        $a->emitirSom(); // Som de Ave
        $a->fazerNinho(); */
        
      require_once 'Mamiferos.php';
      require_once 'Canguru.php';
      require_once 'Cachorro.php';
      
      $m = new Mamiferos();
      $c1 = new Canguru();
      $c2 = new Cachorro();
      
      $m->setPeso(5.70);
      $m->setIdade(8);
      $m->setMembros(4);
      $m->emitirSom();
      print_r($m);
      
      $c1->setPeso(55.30);
      $c1->setIdade(3);
      $c1->setMembros(4);
      $c1->locomover();
      $c1->alimentar();
      $c1->emitirSom();
      $c1->usarBolsa();
      
      $c2->setPeso(3.94);
      $c2->setIdade(5);
      $c2->setMembros(4);
      $c2->locomover();
      $c2->alimentar();
      $c2->emitirSom();
      $c2->abanarRabo();
        ?>
    </pre></body>
</html>
