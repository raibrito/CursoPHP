<?php

//Parâmetros Tipados - eXcript

function getArea(int $x, int $y){
    return $x * $y;
}

function getSum(int ...$valores){
    return array_sum ($valores);
}

echo getArea (10,5) . "\n";
echo getSum(1,2,3,4,5,6,"100");



