<?php

//String heredoc e nowdoc - eXcript

//heredoc == " "


$heredoc = 
        <<<TESTE
       
        <div>O valor da variável x é: $x</div>
       
TESTE;

echo $heredoc;

//nowdoc == ''

$nowdoc = <<<'EOT'
    class NowDoc{
        
        function __construct(){}
        
    }
        
EOT;

echo $nowdoc;

