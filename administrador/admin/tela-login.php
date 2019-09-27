<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Matheus Cunha de Souza">
    <link rel="icon" href="../img/logo-vilanina.png">

    <title>Administrativo - Vila Nina</title>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">
  </head>

  <body>
    <?php
      unset($_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioSenha']);    
    ?>

    <div class="container">

      <form class="form-signin" method="POST" action="../class/valida_login.php">
        <h2 class="form-signin-heading text-center">Área administrativa Vila Nina</h2>
        <label for="inputEmail" class="sr-only">Endereço de E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Endereço de E-mail" required autofocus> <br />
        <label for="inputPassword" class="sr-only">Insira a Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Insira a Senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar</button>
      </form>

      <p class="text-center text-danger">
        <?php
          if (isset($_SESSION['loginErro'])) {
            echo $_SESSION['loginErro'];
            unset($_SESSION['loginErro']);
          }
        ?>
      </p>

    </div>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>