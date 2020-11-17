<?php

//PHP Orientado a Objetos - Aula 98 - Construtores - eXcript

class Pessoa{
    public $idade;
    public $nome;
}

function __construct(){
    echo "teste\n";
    var_dump($this);
}

$p1 = new Pessoa();
$p2 = new Pessoa();

