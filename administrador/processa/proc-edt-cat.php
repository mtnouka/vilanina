<?php 
session_start();
include_once("../class/seguranca.php");
include_once("../class/conexao.php");

$id 			= $_POST["id_cat"];
$nome 			= $_POST["nome_cat"];
$descricao 		= $_POST["descricao"];

$sqledtcat = "UPDATE categoria set nome_cat ='$nome',descricao ='$descricao' WHERE Id_categoria='$id'";
$query = mysqli_query($conn, $sqledtcat);

if(mysqli_affected_rows($conn) != 0){
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=5'>
	<script type=\"text/javascript\">
	alert(\"Alterações realizadas com Sucesso.\");
	</script>
	";
} else {
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=5'>
	<script type=\"text/javascript\">
	alert(\"As alterações não foram salvas.\");
	</script>
	";
}
?>