<?php

//Null Coalescing Operator - Null Coalesce - eXcript

$ddd = $_GET['ddd'] ?? "00";
$telefone = $_GET['telefone'] ?? $_GET['celular'] ?? "00000-0000";

echo "Tel: ($ddd) $telefone";

//n