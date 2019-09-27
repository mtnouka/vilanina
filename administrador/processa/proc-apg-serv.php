<?php 
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	$Id = $_GET['Id'];
        
        $sqldeletaserv = "SELECT Imagem_serv FROM servico WHERE Id_servico='$Id' LIMIT 1";
	$imagemp = mysqli_query($conn, $sqldeletaserv);
	$fotop = mysqli_fetch_assoc($imagemp);
	$delete = $fotop['Imagem_serv'];
	!unlink("../img/servico/$delete");

        $sqldelserv = "DELETE FROM servico WHERE Id_servico='$Id' LIMIT 1";
  	$result = mysqli_query($conn, $sqldelserv);
  	$resultado = mysqli_affected_rows($conn);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=3'>
			<script type=\"text/javascript\">
				alert(\"Serviço deletado com Sucesso.\");
			</script>
		";
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=3'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível deletar o serviço.\");
			</script>
		";
	}
?>