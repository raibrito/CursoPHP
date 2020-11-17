<?php

//PHP Orientado a Objetos - Aula 94 - Acessando Membros de Classe - eXcript

class Pessoa{
    public $idade = 0;
}

$p1 = new Pessoa();
$p2 = new Pessoa();

$p1 -> idade = 22;
$p2 -> idade = 15;

echo $p1 -> idade;
echo $p2 -> idade;
