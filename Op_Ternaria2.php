<?php

//operação ternária II

//$txt = isset($_GET["texto1"]) ? $_GET["texto2"] : "A chave não existe";
if (isset($_GET["texto1"])){
    $txt = $_GET["texto1"];
} else {
    $txt = "A chave não existe";
}

echo $txt; 