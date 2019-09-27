<?php 
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	$Id = $_GET['Id'];
        
        $sqlimg = "SELECT imagem_prod FROM produto WHERE id_produto ='$Id' LIMIT 1";
	$imagemp = mysqli_query($conn, $sqlimg);
	$fotop = mysqli_fetch_assoc($imagemp);
	$delete = $fotop['imagem_prod'];
	!unlink("../img/produto/$delete");
	
        $sqlresu = "DELETE FROM produto WHERE id_produto=$Id LIMIT 1";
  	$result = mysqli_query($conn, $sqlresu);
  	$resultado = mysqli_affected_rows($conn);

	if(mysqli_affected_rows($conn) != 0){
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=4'>
			<script type=\"text/javascript\">
				alert(\"Produto deletado com Sucesso.\");
			</script>
		";
	} else {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=4'>
			<script type=\"text/javascript\">
				alert(\"Não foi possível deletar o produto.\");
			</script>
		";
	}
?>