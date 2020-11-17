<?php

//Curso de PHP Orientado a Objetos - Aula 108 - Sobrescrita de Funções - eXcript

class Pessoa
{
    
    private  $nome;
    private $sobrenome;
    
    public function getNome() : string 
    {
        return $this->nome;
    }
    public function setNome(string $nome) 
    {
        $this->nome = $nome;
    }
    public function getSobrenome() : string
    {
        return $this->sobrenome;
    }
    public function setSobrenome(string $sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }        
    public function getNomeCompleto() : string
    {
        return $this->getNome() . " " . $this->getSobrenome();
    }
}

class PFisica extends Pessoa{
    
    public function getNomeCompleto() : string 
    {
        return "PFisica: {$this->getNome() } {$this->getSobrenome()}";
        
    }
}

$pf = new PFisica();
$pf->setNome("eXcript");
$pf->getSobrenome("Brasil");
echo $pf->getNomeCompleto();
