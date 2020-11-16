<?php

#String Aspas Duplas - eXcript

#STRING DOUBLE-QUOTED

#contatenar (juntar duas strings) a + b
#interpolar (colocar uma string no meio de outra)

$num = 50;

echo "O valor da variável num é: " . $num . "\n";
echo "O valor da variável num é: $num \n";

$arr = ["Preto", "Roxo", "Amarelo"];
echo "A cor da bola é $arr[1] \n";

$a = 10;
$$a = 50;
echo "O valor de a é: $a eo valor de aa é: {$a} \n";
echo "O valor de a é: $a eo valor de aa é: ${$a} \n";

${$arr[2]} = 'Marrom';

echo "Var: $arr[2] , ${$arr[2]}";

