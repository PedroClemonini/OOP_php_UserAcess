<?php
session_start();
if(!isset($_SESSION['LoginTryQty'])){
  $_SESSION['LoginTryQty'] = 0;
};
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tela de login</title>
</head>

<body>

  <header>
    <nav>
      <h3>Login</h1>
        <a href="./register.php">Cadastre-se</a>
    </nav>

    <?php
    if($_SESSION['LoginTryQty'] < 3){
    ?>

    <section class="container">
      <form class="loginform" action="../router/router.php" method="post">
        <label for="cxmail">Email</label>
        <input type="email" name="cxmail" class="cxmail" id="cxmail" placeholder="johndoe@gmail.com">

        <label for="cxmail">Senha</label>
        <input type="password" name="cxpassword" class="cxpassword" id="cxpassword" placeholder="P#ad12">
        <input type="submit" value="entrar" name="entrar" class="send-button">
        
      </form>
    </section>
<?php
} else{ ?>

<section class="container">
     <h1>Você atingiu o limite de tentativas</h1>
     <form action="../router/router.php" method="post">
      <input class="send-button" type="submit" name="reset" value="Reiniciar"> </button>
      </form>
    </section>

  <?php
  }?>
</body>

</html>
