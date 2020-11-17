<?php

//PHP Orientado a Objetos - Aula 96 - Pseudo-variável $this - eXcript

class Pessoa{
    
    public $idade = 0;
    
    public function get_idade(){
        
        return $this -> idade;

}
}

$p1 = new Pessoa();
echo $p1 ->get_idade();