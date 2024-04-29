<?php
session_start();

if(!isset($_SESSION['loginSucess'])){
  header("Location: ../view/login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de usuário</title>
  </head>
  <body>
  
      <header>
          <nav>Login realizado</nav>
      </header>
  
      <section class="container">
          <h1>Parabens, você entrou</h1>
          <form action="../Router/router.php" method="post">
      <input class="send-button" type="submit" name="reset" value="Reiniciar"> </button>
      </form>
      </section>
     
      
      
  </body>
  </html>
  