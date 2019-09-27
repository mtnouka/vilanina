<?php 
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	@$Id = $_GET['Id'];
        
        $sqlapagasobre = "SELECT imagem_sobre FROM sobre WHERE id_img ='$Id' LIMIT 1";
	$imagemp = mysqli_query($conn, $sqlapagasobre);
	$fotop = mysqli_fetch_assoc($imagemp);
	$delete = $fotop['imagem_sobre'];
	!unlink("../img/sobre/$delete");
	
        $sqlapgsobre = "DELETE FROM sobre WHERE id_img=$Id LIMIT 1";
  	$result = mysqli_query($conn, $sqlapgsobre);
  	$resultado = mysqli_affected_rows($conn);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=18'>
			<script type=\"text/javascript\">
				alert(\"Imagem deletada com Sucesso.\");
			</script>
		";
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=18'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível deletar a imagem.\");
			</script>
		";
	}
?>