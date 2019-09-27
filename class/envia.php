<?php

include_once 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$cidade = $_POST['cidade'];
$uf = $_POST['estado'];
$mensagem = $_POST['mensagem'];

require '../vendor/autoload.php';

$querycid = "SELECT * FROM cidade WHERE id='$cidade'";
$queryest = "SELECT * FROM estado WHERE id='$uf'";

$concid = mysqli_query($conn, $querycid);
$conest = mysqli_query($conn, $queryest);

$city = mysqli_fetch_assoc($concid);
$esta = mysqli_fetch_assoc($conest);

$from = new SendGrid\Email(null, "nouke.x8@gmail.com");
$subject = "Contato feito por " . $nome . " a partir do site";
$to = new SendGrid\Email(null, "mtheus.csouza@gmail.com");
$content = new SendGrid\Content("text/html", "Contato pelo Cliente " . $nome . ", <br><br>" . $mensagem . "<br><br>Email: " . $email . "<br>Telefone: " . $telefone . "<br>" . $city['nome'] . " - " . $esta['uf']);
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//Necessário inserir a chave
$apiKey = 'your api key here';
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);

echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/vilaninatcc/site/index.php?link=6'>
			<script type=\"text/javascript\">
				alert(\"Formulário enviado!\");
			</script>
		";
?>
