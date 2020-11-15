<?php

//ESTRUTURA FOREACH

$lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

for ($x=0; $x<count($lista); $x++) {
    echo "$x: $lista[$x]\n";
   
}

foreach ($lista as $item) {
    echo "$item\n";
    
}
    


