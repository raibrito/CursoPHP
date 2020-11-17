<?php

//PHP Orientado a Objetos - Aula 100 - Destrutores - eXcript

class Pessoa{
    
    function __construct() {
        echo "Função construtora invocada";
    }


    function __destruct(){
    echo "Função destrutora invocada";
    }
    
}

$p1 = new Pessoa;
unset($p1);