<?php

//Escopo de nomes das funções anônimas - eXcript

$num = 100;
$num2 = 100;

$func = function() use(&$num){
    //echo "Anônima: " . $num;
    $num = 1500;
};

$func();

echo $num;


