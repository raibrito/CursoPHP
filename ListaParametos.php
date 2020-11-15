<?php

#LISTA DE PARÂMETROS I

function soma (){
    $total = func_get_arg(0) + func_get_arg(1);
    
    echo "$total";
}

soma (2,10);
