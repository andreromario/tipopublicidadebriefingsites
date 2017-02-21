<?php 
if(isset($_POST)) {
	//INCLUDE PARA ENVIO DE E-MAIL COM AUTENTICAÇÃO PADRÃO PHPMAILLER
	require_once 'lib/defaultsend.php';

	$nomedaempresa = $_POST['nomedaempresa'];
	$nome = $_POST['nome'];
	$site = $_POST['site'];
	$ramodeatividade = $_POST['ramodeatividade'];
	$negocio = $_POST['negocio'];
	$cores = $_POST['cores'];
	$paginas = '';
	foreach ($_POST['paginas'] as $pagina) {
		$paginas .= $pagina . ', ';
	}
	$home = '';
	foreach ($_POST['home'] as $home) {
		$home .= $home . ', ';
	}
	$tipoprodutosservicos = $_POST['tipoprodutosservicos'];
	$diferencial = $_POST['diferencial'];
	$ferramentas = $_POST['ferramentas'];
	$objetivo = $_POST['objetivo'];
	$trescoisas = $_POST['trescoisas'];
	$sitesagradaveis = $_POST['sitesagradaveis'];
	$sitesdesagradaveis = $_POST['sitesdesagradaveis'];
	$ideia = $_POST['ideia'];
	$material = $_FILES;
	$template = $_POST['template'];

	$remetente = "andre.tipopublicidade@gmail.com";
	$nomeremetente = "Tipo Publicidade";
	$destinatario = "andre.tipopublicidade@gmail.com";
	$assunto = "Briefing de Site";
	$mensagemHTML  = "
		<html>
		<head>
			<style type=" . '"' . "text/css" . '"' . ">
				body {
					margin: 0px;
					font-family: Verdana;
					font-size: 16px;
					color: #000;
				}

				ul.container-email {
					padding: 0;
				}

				ul.container-email > li {
					margin: 0.2em 0;
					color: #000;
					list-style: none;
				}

	                #wrapper-email {
				max-width: 60%;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>  
		<div id=" . '"' . "wrapper-email" . '"' . ">
			<ul class=" . '"' . "container-email" . '"' . ">
				<li>Nome da Empresa:<strong>$nomedaempresa</strong></li>
				<li>Nome:<strong>$nome</strong></li>
				<li>Site:<strong>$site</strong></li>
				<li>Ramo de Atividade:<strong>$ramodeatividade</strong></li>
				<li>Negócio:<strong>$negocio</strong></li>
				<li>Cores:<strong>$cores</strong></li>
				<li>Páginas:<strong>$paginas</strong></li>
				<li>Página Home:<strong>$home</strong></li>
				<li>Tipo de Produtos/Serviços:<strong>$tipoprodutosservicos</strong></li>
				<li>Diferencial:<strong>$diferencial</strong></li>
				<li>Ferramentas:<strong>$ferramentas</strong></li>
				<li>Objetivo:<strong>$objetivo</strong></li>
				<li>Três Coisas:<strong>$trescoisas</strong></li>
				<li>Sites Agradáveis:<strong>$sitesagradaveis</strong></li>
				<li>Sites Desagradáveis:<strong>$sitesdesagradaveis</strong></li>
				<li>Ideia para o Site:<strong>$ideia</strong></li>
				<li>Template que mais agrada:<strong>$template</strong></li>
			</ul>
		</div>
	</body>
	</html>
	";

	if(defaultsend($remetente, $nomeremetente, $assunto, $mensagemHTML, $material)) {
		$msg = 'Briefing de site enviado com sucesso!';
	} else {
		$msg = 'Ocorreu um erro.';
	}

}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#242424">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p><img src="imgs/logo.png" alt="Tipo Publicidade"></p>
					<h1><?php echo $msg; ?></h1>
				</div>
			</div>
		</div>
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>