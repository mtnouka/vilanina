<?php
session_start();
include_once ("../class/seguranca.php");
include_once ("../class/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Matheus Cunha de Souza">
  <link rel="icon" href="../img/logo-vilanina.png">

  <title>Administrativo - Vila Nina</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <link href="../css/theme.css" rel="stylesheet">

  <script src="../js/ie-emulation-modes-warning.js"></script>

</head>

<body>
  <?php
  include_once("../class/nav.php");

  @$link = $_GET["link"];

  $pag[1] = "../class/index.php";
  $pag[2] = "../consulta/consult-usuario.php";
  $pag[3] = "../consulta/consult-serv.php";
  $pag[4] = "../consulta/consult-prod.php";
  $pag[5] = "../consulta/consult-cat.php";
  $pag[6] = "../cadastro/cad-usuario.php";
  $pag[7] = "../cadastro/cad-serv.php";
  $pag[8] = "../cadastro/cad-prod.php";
  $pag[9] = "../cadastro/cad-cat.php";
  $pag[10] = "../edita/edita-usuario.php";
  $pag[11] = "../edita/edita-serv.php";
  $pag[12] = "../edita/edita-prod.php";
  $pag[13] = "../edita/edita-cat.php";
  $pag[14] = "../processa/proc-apg-usuario.php";
  $pag[15] = "../processa/proc-apg-serv.php";
  $pag[16] = "../processa/proc-apg-prod.php";
  $pag[17] = "../processa/proc-apg-cat.php";
  $pag[18] = "../consulta/consult-sobre.php";
  $pag[19] = "../processa/proc-cad-sobre.php";
  $pag[20] = "../processa/proc-apg-sobre.php";


  if (!empty($link)) {
    if(file_exists($pag[$link])){
      include $pag[$link];
    } else{
      include "../class/index.php";
    }        
  } else {
    include "../class/index.php";
  }
  ?>

  <div class="container theme-showcase" role="main">

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/docs.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
  </html>
