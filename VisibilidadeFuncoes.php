<?php

//Curso de PHP Orientado a Objetos - Aula 106 - Visibilidade das Funções - eXcript

class superClasse{
    
    public function funcPublica() { echo "funcPublica\n"; }
    protected  function funcProtegida() { echo "funcProtegida\n"; }
    private function funcPrivada() { echo "funcPrivada\n"; }

    function super (){
        $this->funcPublica();
        $this->funcProtegida();
        $this->funcPrivada();
    }
 
 }

 //$super = new superClasse();
 //$super->super();
 //$super->funcPublica();
 //$super->funcProtegida();
 //$super->funcPrivada();
 
 
 
 class subClasse extends superClasse{
     
     function __construct() {
         
         $this->funcPublica();
         $this->funcProtegida();
         //$this->funcPrivada();
     }
     
 }
 
 $sub = new subClasse();
 $sub->funcPublica();
 