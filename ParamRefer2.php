<?php

//PARÂMETROS POR REFERÊNCIA II - eXcript

function &func(){
    $a = [1,2,3];
    print_r($a);
}

$valor = &func();
print_r($valor);

