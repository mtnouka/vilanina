<?php

session_start();
include_once("../class/seguranca.php");
include_once("../class/conexao.php");

@$nome = $_POST["nome"];
@$categoria = $_POST["categoria"];
$imagem = $_FILES['imagem']['name'];
@$ativo = $_POST["ativo"];
@$promo = $_POST["promo"];

$_UP['pasta'] = '../img/produto/'; //local
$_UP['tamanho'] = 1024 * 1024 * 100; //5mb
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif'); //extensões
$_UP['renomeia'] = false; //renomear/converter
//erros
$_UP['erros'][0] = 'Não houve erro!';
$_UP['erros'][1] = 'O arquivo ultrapassa o limite de tamanho especificado no PHP!';
$_UP['erros'][2] = 'O ariquivo ultrapassa o limite de tamanho especificado no HTML!';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente!';
$_UP['erros'][4] = 'Arquivo não carregado!';

//verificação de erros
if ($_FILES['imagem']['error'] != 0) {
    die("Não foi possível carregar o arquivo!<br />Erro: " . $_UP['erros'] . $_FILES['imagem']['error']);
    exit;
}

//verifica extensão
$nomeimg = $_FILES['imagem']['name'];
$arr = explode('.', $nomeimg);
$extensao = strtolower(end($arr));

if (array_search($extensao, $_UP['extensoes']) === false) {
    echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=8'>
			<script type=\"text/javascript\">
				alert(\"Produto não cadastrado! Por favor, envie arquivos apenas com as seguintes extensões: PNG, JPEG, JPG e GIF!\");
			</script>
			";
} else if ($_UP['tamanho'] < $_FILES['imagem']['size']) {
    echo "O arquivo enviado excede o limite de tamanho! Envie arquivos de até 2mb.";
} else {
    if ($_UP['renomeia'] == true) {
        $nome_final = time() . '.jpg';
    } else {
        $nome_final = $_FILES['imagem']['name'];
    }
    if (move_uploaded_file($_FILES['imagem']['tmp_name'], $_UP['pasta'] . $nome_final)) {

        $sqlinsert = "INSERT INTO produto (nome,id_categoria,imagem_prod,ativo,promocional) VALUES "
                . "('$nome','$categoria','$nome_final','$ativo','$promo')";
        $querycadprod = mysqli_query($conn, $sqlinsert);
        echo "
                        <META HTTP-EQUIV = REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=4'>
                        <script type = \"text/javascript\">
			alert(\"Produto cadastrado com Sucesso.\");
                        </script>
			";
        } else {
            echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://vilanina.com.br/administrador/admin/tela-inicial.php?link=8'>
				<script type=\"text/javascript\">
					alert(\"Não foi possível cadastrar o produto.\");
				</script>
			";
        }
    }
?>