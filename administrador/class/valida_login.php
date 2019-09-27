<?php
	session_start();

	$emailt = $_POST['email'];
	$senhat = $_POST['senha'];

	include_once("conexao.php");

        $sqlconecta = "SELECT * FROM admin WHERE Email='$emailt' AND Senha='$senhat' LIMIT 1";
	$result = mysqli_query($conn, $sqlconecta);
	$resultado = mysqli_fetch_assoc($result);

	if(empty($resultado)){
		$_SESSION['loginErro'] = "Usuário ou Senha inválidos!";
		header("Location: ../admin/tela-login.php");
	}else{
		$_SESSION['usuarioId'] = $resultado['Id'];
		$_SESSION['usuarioNome'] = $resultado['Nome'];
		$_SESSION['usuarioEmail'] = $resultado['Email'];
		$_SESSION['usuarioSenha'] = $resultado['Senha'];
		header("Location: ../admin/tela-inicial.php");
	}
?>