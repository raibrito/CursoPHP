<?php

//Curso de PHP Orientado a Objetos - Aula 104 - Herança II - eXcript

class SuperClasse{
    public $a =0;
    
    public function super (){
        echo $this->a;
    }
}

class SubClasse extends SuperClasse{
    
    public $a;
    
    public function sub(int $x){
        $this->a = $x;
    }
}

$sub = new SubClasse();
$sub->sub(5);
$sub->super();