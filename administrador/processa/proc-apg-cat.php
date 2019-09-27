<?php 
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	@$Id = $_GET['Id'];
        $sqlapgcat = "DELETE FROM categoria WHERE Id_categoria=$Id LIMIT 1";
  	$result = mysqli_query($conn, $sqlapgcat);
  	$resultado = mysqli_affected_rows($conn);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=5'>
			<script type=\"text/javascript\">
				alert(\"Categoria deletada com Sucesso.\");
			</script>
		";
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=5'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível deletar a categoria.\");
			</script>
		";
	}
?>