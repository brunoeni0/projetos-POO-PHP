<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    # Atributo
   private $registroProfissional;
   # Método
   function Pratica(){
       echo "{$this->getNome()} Está praticando!";
   }
   # Método Especial
   function getRegistroProficional(){
       return $this->registroProfissional;
   }
   protected function setRegistroProficional($rp){
       $this->registroProfissional = $rp;
   }
}
