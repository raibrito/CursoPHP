<?php

# Funções para Manipulação de Strings - eXcript

#FUNÇÃO - QUANTIDADE DE CARACTERES
$len = strlen('1,23456abc');
echo "Quantidade de caracteres: $len \n";

#FUNÇÃO -substituir (<str>), <indice>, <len>) - RETORNA UM PEDAÇO DA STRING
# aaabbbccc substr(str, 3, 3)

$str = 'aaabbbccc';
$sub = substr ($str, 3, 3,);
echo "A parte retornada é: $sub.\n";
$sub = substr($str,3);
echo "A parte retornada sem <len> é: $sub.\n";

#FUNÇÃO -strtoupper (<str>) - CONVERTE PARA LETRAS MAIÚSCULAS

$str = 'eXcript';
$up = stroupper($str);
echo "Maiúsculo: $up.\n";

$low = strtolower($str);
echo "Minúsculo: $low.\n";

#FUNÇÃO - str_replace(<novastr>, <chars>, <str> - SUBSTITUI PARTE DA STRING

str = 'aaabbbccc';
$nova = str_replace('bbb', '---', $str);
echo "Original: $str - Mod: $nova \n";