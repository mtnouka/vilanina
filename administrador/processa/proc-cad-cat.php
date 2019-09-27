<?php 
	session_start();
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	$nome 			= $_POST["nome_cat"];
	$descricao 		= $_POST["descricao"];
        $sqlcadcat = "INSERT INTO categoria (nome_cat, descricao) VALUES ('$nome','$descricao')";
	$query = mysqli_query($conn, $sqlcadcat);
	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=5'>
			<script type=\"text/javascript\">
				alert(\"Categoria cadastrada com Sucesso.\");
			</script>
		";
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=9'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível cadastrar a categoria.\");
			</script>
		";
	}
?>