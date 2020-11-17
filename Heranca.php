<?php

//Curso de PHP Orientado a Objetos - Aula 103 - Herança - eXcript

class SuperClasse{
    
    public $a = 'variável $a';
    
    public function ini(){
        echo "SuperClasse->ini()";
    }
}

class subClasse extends SuperClasse{
    
}

$sub = new subClasse();
$sub->a;

