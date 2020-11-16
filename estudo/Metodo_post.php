<?php

//var_dump($_POST);
//var_dump($_GET);

echo 'Nome: ' . ($_REQUEST['nome'] ?? '') . "<br>";
echo 'E-mail: ' . ($_REQUEST['email'] ?? '') . "<br>";


