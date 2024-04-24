<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Registro - Usuário</title>
</head>

<body>

  <header>
    <nav>
      <h3>Registro</h1>
        <a href="./login.php">Já possui conta?</a>
    </nav>

  </header>

  <section class="container">
    <form class="loginform" action="../router/router.php" method="post">
      <label for="cxname">Nome</label>
      <input type="text" name="cxname" class="cxname" id="cxname" placeholder="John Dee">

      <label for="cxmail">Email</label>
      <input type="email" name="cxmail" class="cxmail" id="cxmail" placeholder="johndoe@gmail.com">

      <label for="cxmail">Senha</label>
      <input type="password" name="cxpassword" class="cxpassword" id="cxpassword" placeholder="P#ad12">

      <input type="submit" value="cadastrar" name="cadastrar" class="send-button">
    </form>

  </section>

</body>

</html>
