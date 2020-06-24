<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<title>Physis Jr.</title>

	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="./css/minireset.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/contato.css">

	<!--Scripts-->
	<script src="./js/navbar.js"></script>
</head>

<body>

	<?php
		date_default_timezone_set("America/Sao_Paulo");

		function assunto($ref) {
			if (isset($_GET["assunto"])){
				if ($ref == $_GET["assunto"]) {
					return "selected";
				}else {
					return "";
				}
			}
		}

		isset($_GET["assunto"])?$assunto=$_GET["assunto"]:"";
		if(isset($_POST["nome"])){

			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$assunto = $_POST["assunto"];
			$observacoes = $_POST["observacoes"];
			$data_envio = date('d/m/Y');
			$hora_envio = date('H:i:s');

			$headers  = 'MIME-Version: 1.0' . "\r\n";
	     	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	      	$headers .= "From: $nome <$email>";

	      	$observacoes = str_replace("\n.","\n..",$observacoes);

	      	$mensagem = "

				<div style='width: 90%;margin: 0 auto;'>	
					<div style='font-family: tahoma,sans-serif;font-size:1.2em;margin:5px 0;text-align: left;padding:5px;'>
						<b>Mensagem recebida em $data_envio às $hora_envio\r\n</b><br>
					</div>
					<div style='font-family: tahoma,sans-serif;font-size:1.2em;margin:5px 0;text-align: left;padding:5px;'>
						<b>Nome:</b> $nome\r\n<br>
					</div>
					<div style='font-family: tahoma,sans-serif;font-size:1.2em;margin:5px 0;text-align: left;padding:5px;'>
						<b>Email:</b> $email\r\n<br>
					</div>
					<div style='font-family: tahoma,sans-serif;font-size:1.2em;margin:5px 0;text-align: left;padding:5px;'>
						<b>Assunto:</b> $assunto\r\n<br>
					</div>
					<div style='font-family: tahoma,sans-serif;font-size:1.2em;margin:5px 0;width:50%;text-align: justify;padding:5px;'>
						<b>Observações:</b> $observacoes\r\n<br>
					</div>
				</div>
			";

	      	$assuntoEmail = "Contato pelo site: $nome";
      	
			$enviaremail = mail("mateusmendoncadr@gmail.com",$assuntoEmail,$mensagem,$headers);
		}

	?>

	<!--Cabeçalho-->

	<header>
		<a href="./index.html">
			<img class="menu" src="./media/logo.png">
		</a>
		<nav class="menu">
			<a class="menu" href="./index.html#home">Home</a>
			<a class="menu" href="./sobre.html">Sobre</a>			
			<a class="menu" href="./contato.php">Contato</a>
			<a class="menu" href="">Blog</a>
			<a class="menu" href="./servicos.html">Serviços</a>
		</nav>
		<img onclick="switchMenu()" class="menuMobile" src="./media/menu.svg">
		<nav id="menuMobile" class="menuMobile">
			<a class="menuMobile" href="./index.html#home">Home</a>
			<a class="menuMobile" href="./sobre.html">Sobre</a>			
			<a class="menuMobile" href="./contato.php">Contato</a>
			<a class="menuMobile" href="">Blog</a>
			<a class="menuMobile" href="./servicos.html">Serviços</a>
		</nav>
	</header>

	<!--Contato-->

	<div class="contato container">	

		<h2 class="contato title">Contato</h2>

		<div class="contato-box container">

			<div class="contato-box-left">
				<div class="contato-item">
					<h3 class="contato subtitle">Email</h3>
					<a href="mailto:contato@physisjr.com">
					<img class="contato" src="./media/gmail.svg">
					<span class="contato">contato@physisjr.com</span>
					</a>
				</div>
				<div class="contato-item">
					<h3 class="contato subtitle">Telefone</h3>
					<a href="tel:+5531994107552">
						<img class="contato" src="./media/phone.svg">
						<span class="contato">(31) 99410-7552</span>
					</a>
				</div>
				<div class="contato-item">
					<h3 class="contato subtitle">WhatsApp</h3>
					<a href="https://wa.me/5531994107552">
						<img class="contato" src="./media/whatsapp.svg">
						<span class="contato">(31) 99410-7552</span>
					</a>
				</div>
			</div>

			<div class="contato-box-right">
				<div class="form-contato">
					<h2 class="form-title subtitle">PEÇA NOSSA AJUDA</h2>				
					<form method="POST">
						<div class="input-box nome">
							<label for="nome">Nome*</label>
							<input type="text" name="nome" id="nome" placeholder="Nome pessoal ou organizacional" required>
						</div>
						<div class="input-box telefone">
							<label for="telefone">Telefone*</label>
							<input type="tel" name="telefone" id="telefone" placeholder="Ex: (31) 99410-7552" pattern="\d*" required>
						</div>
						<div class="clear"></div>
						<div class="input-box">
							<label for="email">Email*</label>
							<input type="email" name="email" id="email" placeholder="Ex: contato@physisjr.com" required>
						</div>
						<div class="input-box">
							<select name="assunto" id="assunto" required>
								<option <?php echo ((!isset($_GET["assunto"]))?"selected":"") ?> disabled value="">Assunto*</option>
								<option <?php echo (assunto("estoque")); ?> value="Controle de Estoque">Controle de Estoque</option>
								<option <?php echo (assunto("websites")); ?> value="Websites">Websites</option>
								<option <?php echo (assunto("eletronica")); ?> value="Soluções em eletrônica">Soluções em eletrônica</option>
								<option <?php echo (assunto("mobile")); ?> value="Aplicativos mobile">Aplicativos mobile</option>
								<option <?php echo (assunto("planilhas")); ?> value="Cursos de Excel">Cursos de Planilhas</option>
								<option <?php echo (assunto("dados")); ?> value="Análise de dados">Análise de dados</option>
								<option  value="Outros">Outros (descreva abaixo)</option>
							</select>
						</div>

						<div class="input-box">
							<label for="observacoes">Em que podemos ajudar? *</label>
							<textarea name="observacoes" id="observacoes" placeholder="Escreva aqui sua mensagem..." required></textarea>
						</div>
						<div class="input-box">
							<input type="submit" value="Pedir meu projeto">
						</div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="contato-mapa">
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1849.8563982098842!2d-47.88440981655645!3d-21.983983239482097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b870e0750b98b3%3A0x836ca2811701c06d!2sPhysis%20Jr!5e0!3m2!1spt-BR!2sbr!4v1591991766483!5m2!1spt-BR!2sbr" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="0" aria-hidden="false" tabindex="0"></iframe>
		</div>		
	</div>

	<div class="clear"></div>

	<!--Rodapé-->

	<div class="apoio-section container">
		<h1 class="apoio title"> Apoio </h1>
		<div class="apoio-container sub-container">
			<div class="apoio-item">				
				<div class="apoio-img" style="background-image: url('./media/nusc.png');"></div>
				<p class="apoio-desc">Contamos com o NUSC para integrar outras EJs [...]</p>
			</div>
			<div class="apoio-item">
				<div class="apoio-img" style="background-image: url('./media/ufscar.svg');"></div>
				<p class="apoio-desc">Contamos a UFSCar que disponibiliza [...]</p>
			</div>
			<div class="apoio-item">
				<div class="apoio-img" style="background-image: url('./media/df.png');"></div>
				<p class="apoio-desc">Contamos com Departamento de Física - UFSCar para trabalhar ao lado de [...]</p>
			</div>
		</div>
	</div>

	<div class="clear"></div>

	<footer class="rodape">
		<span class="rodape"><a href="https://www.flaticon.com">Icons from www.flaticon.com</a></span>
		<h1 class="rodape">Physis Jr. © 2020</h1>
		<div class="social">
			<a href="https://www.facebook.com/physisjr"><img class="social" src="./media/facebook.svg"></a>
			<a href="https://www.instagram.com/physisjr/?hl=pt-br"><img class="social" src="./media/instagram.svg"></a>
			<a href="https://www.linkedin.com/company/physisjr/"><img class="social" src="./media/linkedin.svg"></a>
		</div>		
	</footer>

</body>

</html>