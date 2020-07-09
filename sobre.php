<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<title>Physis Jr.</title>

	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="./css/minireset.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/sobre.css">

	<link rel="shortcut icon" type="image/x-icon" href="./media/favicon.ico">

	<!--Scripts-->
	<script src="./js/navbar.js"></script>

	<?php $pagina = "sobre"; ?>
</head>

<body>

	<?php include 'header.php'; ?>

	<!--Sobre nós-->

	<div class="sobre sub-container">
		<h2 class="sobre title">Quem somos</h2>
		<p class="sobre">A Physis Jr. é a empresa júnior do curso de Engenharia Física da UFSCar - São Carlos.
		</p>
		<p class="sobre">
			Nós fornecemos soluções inovadoras e eficazes a baixo custo. Para isso, empregamos a multidisciplinaridade dos conhecimentos adquiridos durante a graduação, juntamente com a bagagem trazida pelos membros dos diversos cursos da UFSCar para a realização de projetos.
		</p>
		<h3 class="sobre">Missão</h3>
		<p class="sobre">
			Formar e transformar, do Estudante ao Profissional, do Teórico ao Prático, Impactando a Sociedade
		</p>
		<h3 class="sobre">Visão</h3>
		<p class="sobre">
			Ser uma Empresa Júnior de Alto Desempenho
		</p>
	</div>

	<!--Galeria-->
	<div class="galeria container">
		<img class="galeria" alt="Galeria 1" src="./media/galeria1.jpg">
		<img class="galeria" alt="Galeria 2" src="./media/galeria2.jpg">
		<img class="galeria" alt="Galeria 3" src="./media/galeria3.jpg">
		<img class="galeria" alt="Galeria 4" src="./media/galeria4.jpg">
	</div>

	<div class="clear"></div>


	<?php include 'footer.php'; ?>
	
</body>

</html>