<?php

$varvar = "Teste";
$$varvar = 10;
echo $Teste . "\n";

$num = 10;
$$num = 1000;
echo $num . "\n";
echo $$num . "\n";

$arr = [1,2,3];
$$arr = 9;
echo $$arr;



 