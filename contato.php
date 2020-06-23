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

	<!--Cabeçalho-->

	<header>
		<a href="./index.html">
			<img class="menu" src="./media/logo.png">
		</a>
		<nav class="menu">
			<a class="menu" href="./index.html#home">Home</a>
			<a class="menu" href="./sobre.html">Sobre</a>			
			<a class="menu" href="./contato.html">Contato</a>
			<a class="menu" href="">Blog</a>
			<a class="menu" href="./servicos.html">Serviços</a>
		</nav>
		<img onclick="switchMenu()" class="menuMobile" src="./media/menu.svg">
		<nav id="menuMobile" class="menuMobile">
			<a class="menuMobile" href="./index.html#home">Home</a>
			<a class="menuMobile" href="./sobre.html">Sobre</a>			
			<a class="menuMobile" href="./contato.html">Contato</a>
			<a class="menuMobile" href="">Blog</a>
			<a class="menuMobile" href="./servicos.html">Serviços</a>
		</nav>
	</header>

	<!--Contato-->

	<div class="contato container">	

		<h2 class="contato title">Contato</h2>

		<div class="contato-box container">

			<div class="contato-box-left">
				<div class="contato-info">
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
							<span class="contato">(31) 9 9410-7552</span>
						</a>
					</div>
					<div class="contato-item">
						<h3 class="contato subtitle">WhatsApp</h3>
						<a href="https://wa.me/5531994107552">
							<img class="contato" src="./media/whatsapp.svg">
							<span class="contato">(31) 9 9410-7552</span>
						</a>
					</div>
						
				</div>
			</div>

			<div class="contato-box-right">
				<div class="form-contato">
					<form method="POST">
						<div class="input-box">
							<label for="nome">Nome*</label>
							<input type="text" name="nome" id="nome" required>
						</div>
						<div class="clear"></div>
						<div class="input-box">
							<label for="email">Email*</label>
							<input type="email" name="email" id="email" required>
						</div>
						<div class="input-box">
							<label for="observacoes">Observações*</label>
							<textarea name="observacoes" id="observacoes" required></textarea>
						</div>
						<div class="input-box">
							<span class="form-desc"> Campos obrigatórios *</span>
						</div>
						<div class="input-box">
							<input type="submit" value="Mande seu problema!">
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