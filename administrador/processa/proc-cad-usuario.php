<?php

session_start();
include_once("../class/seguranca.php");
include_once("../class/conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$select = "SELECT * FROM admin ORDER BY Id";
$validacao = mysqli_query($conn, $select);
$final = mysqli_fetch_assoc($validacao);

if ($email == $final['Email']) {
    echo "
                        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=2'>
			<script type=\"text/javascript\">
				alert(\"Email já cadastrado.\");
			</script>
		";
} else {

    $sqlcad = "INSERT INTO admin (Nome,Email,Senha) VALUES ('$nome','$email','$senha')";
    $query = mysqli_query($conn, $sqlcad);
    if (mysqli_affected_rows($conn) != 0) {
        echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=2'>
			<script type=\"text/javascript\">
				alert(\"Usuário cadastrado com Sucesso.\");
			</script>
		";
    } else {
        echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=6'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível cadastrar o usuário.\");
			</script>
		";
    }
}