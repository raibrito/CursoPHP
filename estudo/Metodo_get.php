<?php

//var_dump($GET);

//if(count($_GET))){
   
echo 'Nome: ' . ($_GET['nome'] ?? '') . "<br>";
echo 'E-mail: ' . ($_GET['email'] ?? '') . "<br>";


//}