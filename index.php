<?php
    session_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" /> 
        <title> Tela de Login </title> 
        <link rel="stylesheet" href="Css/style.css" />
        <link rel="stylesheet" href="Css/responsivo.css" />
    </head>
    <body>
   

    <div class="menu">
        

        <a href="empresa.php">Empresa &nbsp; </a>
        <a href="index.php">Login &nbsp;| </a>

        <img src="Image/logo1.jpeg" alt="">
            
    </div>

    <div class="conteiner">

    <form name="" method="POST" action="php/valida.php">
        <fieldset>
        <img src="Image/logo.jpeg" alt="">
                <div class="usuario"> 
                     <input type="text" name="usuario" placeholder="Usuário" required>                     
                </div>

                <div class="senha"> 
                <input type="password" name="senha" placeholder="Senha" required>
                </div>
                <a href="">Esqueceu a senha?</a>
                <br>
                <input type="submit" value="Logar">
                </div>
        </fieldset>
     </form>

     <div>
    
    <footer>
        <h1>DREAM BOX</h1>
    </footer>

    </body>
</html> 