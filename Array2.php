<?php

#Definindo o Array
$arr = ["zero", "um", "dois", "três", "quatro", "cinco,"];

#Adicionando o Array
$arr[] = "cinco";

#Alterando elementos
$arr[1] = "ummm";
$arr[4] = "quatrro";

#Excluindo elementos
unset($arr[3]);

print_r($arr);




