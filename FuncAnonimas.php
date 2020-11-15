<?php

//INTRODUÇÃO ÀS FUNÇÕES ANÔNIMAS

$func = function ($nome){
    echo "O nome enviado como parâmetro é: $nome";
};

function teste($f){
    $f("Rai");
}

teste($func);
//$func("eXcript");


