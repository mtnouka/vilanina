<?php
ob_start();

if (($_SESSION['usuarioEmail'] == "") || ($_SESSION['usuarioSenha'] == "")) {
	unset($_SESSION['usuarioId'],
          $_SESSION['usuarioNome'],
          $_SESSION['usuarioEmail'],
          $_SESSION['usuarioSenha']);  
	$_SESSION['loginErro'] = "Você não está logado!";
	header("Location: ../admin/tela-login.php");
}
?>