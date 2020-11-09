<!DOCRYPE html> 
<html lang="pt-br">


    <head> 
        <meta charset="UTF-8">
        <title>Tela de Login e Senha -Cruso PHP -eXcript</title>
    </head>
    
    <body> 
    
      <?php
          $login = "eXcript";
          $senha = "123";
        
          if(isset($_POST["login"])){
    //          echo $_POST["login"] . "<br>";
    //          echo $_POST["senha"];
              if($_POST["login"] == $login and $_POST["senha"] == $senha){
                  echo "Login efetuado com sucesso";
              } else {
                  echo "Login ou senha inválidos";
              }
          }  
        ?>
        
        <form method="post">
            <input type="text" name="login"><br>
            <input type="password" name="senha"><br>
            <input type="submit">
        </form>

        
    </body>
</html>



