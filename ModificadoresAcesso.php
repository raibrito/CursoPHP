<?php

//Curso de PHP Orientado a Objetos - Aula 105 - Modificadores de Acesso - eXcript

//MODIFICADORES DE ACESSO I - public e private

class SuperClasse{
    public $publico = 0;
    private $privada = 0;
    protected $protegido = 0;
    public function super(){
        echo $this->publico;
        echo $this->privada;
        echo $this->protegido;
    }
}

class SubClasse extends SuperClasse{
    public $publico;
    private $privada;
    protected $protegido;
    public function sub(int $x) { 
        $this->publico = $x; 
        $this->privada = $x;
        $this->protegido = $x;
    }
}

$sub = new SubClasse();
$sub->sub(1);
$sub->super();