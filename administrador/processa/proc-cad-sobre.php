<?php 
	session_start();
	include_once("../class/seguranca.php");
	include_once("../class/conexao.php");

	$imagem = $_FILES['imagem']['name'];

	$_UP['pasta'] = '../img/sobre/'; //local
	$_UP['tamanho'] = 1024*1024*100; //5mb
	$_UP['extensoes'] = array('png','jpg','jpeg','gif'); //extensões
	$_UP['renomeia'] = false; //renomear/converter

	//erros
	$_UP['erros'][0] = 'Não houve erro!';
	$_UP['erros'][1] = 'O arquivo ultrapassa o limite de tamanho especificado no PHP!';
	$_UP['erros'][2] = 'O ariquivo ultrapassa o limite de tamanho especificado no HTML!';
	$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente!';
	$_UP['erros'][4] = 'Arquivo não carregado!';

	//verificação de erros
	if ($_FILES['imagem']['error'] != 0) {
		die("Não foi possível carregar o arquivo! Erro: <br />" . $_UP['erros'] . $_FILES['imagem']['error']);
		exit;
	}

	//verifica extensão
	$nomeimg = $_FILES['imagem']['name'];
	$arr = explode('.',$nomeimg);
	$extensao = strtolower(end($arr));

	if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=18'>
			<script type=\"text/javascript\">
				alert(\"Produto não cadastrado! Por favor, envie arquivos apenas com as seguintes extensões: PNG, JPEG, JPG e GIF!\");
			</script>
			";
	} else if ($_UP['tamanho'] < $_FILES['imagem']['size']) {
		echo "O arquivo enviado excede o limite de tamanho! Envie arquivos de até 2mb.";
	} else{
		if ($_UP['renomeia'] == true) {
			$nome_final = time().'.jpg';
		}else{
			$nome_final = $_FILES['imagem']['name'];
		}
		if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'].$nome_final)) {

                        $sqlsobre = "INSERT INTO sobre (imagem_sobre) VALUES ('$nome_final')";
			$query = mysqli_query($conn, $sqlsobre);
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Imagem cadastrada com Sucesso.\");
				</script>
			";
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Não foi possível cadastrar a imagem.\");
				</script>
			";
		}
	}
?>