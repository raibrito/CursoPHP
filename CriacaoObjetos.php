<?php

//Aula 93 - Criação de Objetos - eXcript

class Classe{
    public $a = 1;
    public $b = 2;
    public $c = 3;
}

$objetoA = new Classe();
$objetoB = new Classe();
$objetoC = new Classe();

var_dump($objetoA);
//var_dump($objetoB);
//var_dump($objetoC);

unserialize($objetoA);


