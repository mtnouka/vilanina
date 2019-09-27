<?php 
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	$Id = $_GET['Id'];
        
        $sqldel = "DELETE FROM admin WHERE Id=$Id LIMIT 1";
  	$result = mysqli_query($conn, $sqldel);
  	$resultado = mysqli_affected_rows($conn);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=2'>
			<script type=\"text/javascript\">
				alert(\"Usuário deletado com Sucesso.\");
			</script>
		";
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=2'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível deletar o usuário.\");
			</script>
		";
	}
?>