<?php

//Curso de PHP Orientado a Objetos - Aula 101 - Encapsulamento - eXcript

class Pessoa{
    
    public  $nome;
    
    function setNome($nome){
        $this -> nome = $nome;
    }
    function getNome(){
        return $this -> nome;
    }
}

$p1 = new Pessoa();
$p1 ->setNome("eXcript");
