<?php

#    |  ID  |   Nome    |   Pontos  |
#    |  1   |   Zé      |   11      |
#    |  2   |   José    |   4       |
#    |  3   |   Zéca    |   22      |

//$jogo = array(
//    array("ID"=>1, "NOME"=>"Zé", "PONTOS"=>11),
//    array("ID"=>2, "NOME"=>"José", "PONTOS"=>4),
//    array("ID"=>1, "NOME"=>"ZéCA", "PONTOS"=>22)
//);

$jogo = [
            ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
            ["ID"=>2, "NOME"=>"José", "PONTOS"=>4],
            ["ID"=>1, "NOME"=>"ZéCA", "PONTOS"=>22]
        ];
print_r($jogo);

echo $jogo[1][NOME];



