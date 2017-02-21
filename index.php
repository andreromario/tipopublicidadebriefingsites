<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#242424">
	<title>Formulário de Briefing para Site</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="imgs/tipo.png">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<p><img src="imgs/logo.png" alt="Tipo Publicidade"></p>
					<h1>Formulário de Briefing para Site</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<form action="briefing.php" method="post" enctype="multipart/form-data" id="briefing">
			<div class="row">
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nomedaempresa" placeholder="Nome da sua empresa:" required>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="nome" placeholder="Seu nome:" required>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="site" placeholder="Seu site:" required>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="ramodeatividade" placeholder="Qual o seu ramo de atividade?" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="negocio" placeholder="Conte-me sobre o negócio de sua empresa, seu objetivo e o mercado onde atua:" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" class="form-control" name="cores" placeholder="Quais cores deseja você quer que predominem em seu site?" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h3>Quais páginas o site deverá ter?</h3>
				</div>
			</div>
			<div class="row checkboxes"">
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Home (Página Inicial)" id="home"><label for="home">Home (Página Inicial)</label>
				</div>
				<div class="col-sm-4">
					<input type="checkbox" name="paginas[]" value="Institucional (Quem Somos/Missão/Visão/Valores)" id="institucional"><label for="institucional">Institucional (Quem Somos/Missão/Visão/Valores)</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Produtos" id="produtos"><label for="produtos">Produtos</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Serviços" id="servicos"><label for="servicos">Serviços</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Notícias" id="noticias"><label for="noticias">Notícias</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Portifólio" id="portifolio"><label for="portifolio">Portifólio</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Parceiros" id="parceiros"><label for="parceiros">Parceiros</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Representantes" id="representantes"><label for="representantes">Representantes</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Clientes" id="clientes"><label for="clientes">Clientes</label>					
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Galeria de Fotos" id="fotos"><label for="fotos">Galeria de Fotos</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Galeria de Vídeos" id="videos"><label for="videos">Galeria de Vídeos</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="paginas[]" value="Trabalhe Conosco" id="trabalhe-conosco"><label for="trabalhe-conosco">Trabalhe Conosco</label>
				</div>
				<div class="col-sm-3">
					<input type="checkbox" name="paginas[]" value="Contato (Fale Conosco)" id="fale-conosco"><label for="fale-conosco">Contato (Fale Conosco)</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h3>Quais as informações que deverão ter na sua página home?</h3>
				</div>
			</div>
			<div class="row checkboxes">
				<div class="col-sm-2">
					<input type="checkbox" name="home[]" value="Sobre a Empresa" id="sobre"><label for="sobre">Sobre a Empresa</label>
				</div>
				<div class="col-sm-3">
					<input type="checkbox" name="home[]" value="Produtos/Serviços" id="produtos-servicos"><label for="produtos-servicos">Produtos/Serviços</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="home[]" value="Galeria" id="galeria"><label for="galeria">Galeria</label>
				</div>
				<div class="col-sm-3">
					<input type="checkbox" name="home[]" value="Parceiros/Clientes" id="parceiros-clientes"><label for="parceiros-clientes">Parceiros/Clientes</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="home[]" value="Depoimentos" id="depoimentos"><label for="depoimentos">Depoimentos</label>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" name="tipoprodutosservicos" placeholder="Que tipo de produtos/serviços sua empresa oferece?" required>
				</div>

				<div class="col-sm-4">
					<input type="text" class="form-control" name="diferencial" placeholder="O que diferencia você de seus concorrentes (preço, qualidade, serviços, etc.)?" required>
				</div>

				<div class="col-sm-4">
					<input type="text" class="form-control" name="ferramentas" placeholder="Descreva as ferramentas de marketing utilizadas atualmente (revistas, internet, folders, tv, etc)" required>
				</div>

				<div class="col-sm-6">
					<input type="text" class="form-control" name="objetivo" placeholder="Qual o principal objetivo do seu website?" required>
				</div>

				<div class="col-sm-6">
					<input type="text" class="form-control" name="trescoisas" placeholder="Cite 3 coisas que você, se pudesse, mudaria/ adicionaria hoje mesmo em seu website:" required>
				</div>

				<div class="col-sm-12">
					<textarea class="form-control" name="sitesagradaveis" placeholder="Liste até 3 websites que você considere interessantes, informando o que especificamente lhe agrada neles:" required></textarea>
				</div>

				<div class="col-sm-12">
					<textarea class="form-control" name="sitesdesagradaveis" placeholder="Liste até 3 websites que você considere desagradáveis, informando o que especificamente lhe desagrada neles:" required></textarea>
				</div>

				<div class="col-sm-12">
					<input type="text" class="form-control" name="ideia" placeholder="Descreva sua ideia para seu site:" required>
				</div>

				<div class="col-sm-12">
					<p>Nos mande por favor todo o material disponível que vocês tiverem sobre a empresa (logotipo, imagens, catálogos, tabelas, especificações, etc) <br>
						* Adicionar em um arquivo .zip ou .rar | Tamanho máximo: 15MB</p>
					<input type="file" name="material" required accept=".zip,.rar">
				</div>

				<div class="col-sm-12">
					Segue abaixo o link dos modelos de sites que trabalhamos atualmente, por favor escolha um para fazermos o da sua empresa.
					<input type="text" class="form-control" name="template" placeholder="" required>
				</div>

				<div class="col-sm-12 text-center">
					<input type="submit" value="Enviar" class="btn btn-success">
				</div>
			</div>
		</form>
	</div>
	<footer>
		<div class="container">
			<div class="col-sm-12 text-center">
				<br>
				<p><a href="http://www.tipopublicidade.com.br/" class="tipo"><img src="imgs/tipo.png" alt="Desenvolvido por Tipo Publicidade"></a></p>
				<br>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>