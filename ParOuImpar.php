<!DOCRYPE html> 


    <head> 
        <meta charset="UTF-8">
        <title>Números Pares e ímpares - Curso PHP - eXprint</title>
    </head>
    
    <body> 
        <?php
          if (isset($_POST["num"])){
              echo $_POST["num"];
              echo "<br>";
              
              $num = $_POST ["num"];
              
              if($num % 2 == 0){
                  echo "O número informado é par.";
              } else {
                  echo "O número informado é ímpar.";
              }
          }   
           
        ?>
    
        <form method="POST">
            <input type="text" name="num">
            <input type="submit">
        </form>
        
        
        
        
        
        
        
        
        
    
    </body>
</html>

