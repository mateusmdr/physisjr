<!DOCTYPE html>
<html lang="pt-br">

<?php $pagina = "servicos"; include 'dynamic/head.php'; ?>

<body>

	<?php include 'dynamic/header.php'; ?>

	<!--Portfolio-->

	<div class="portfolio container">
		<hgroup class="portfolio sub-container">
			<h1 class="portfolio title">Serviços</h1>
			<h2 class="portfolio subtitle">Somos uma instituição sem fins lucrativos</h2>			
		</hgroup>

		<ul class="portfolio">
			<div class="portfolio-row">
				<a class="portfolio" href="./contato.php?assunto=estoque" onmouseover="portfolioOver(1)" onmouseout="portfolioOut(1)">					
					<img class="portfolio" alt="Controle de Estoque" src="./media/estoque.svg">
					<h1 class="portfolio">Controle de Estoque</h1>
					<h2 class="portfolio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum, tellus quis auctor convallis, orci dui interdum velit, quis mollis erat lectus ut neque. Aliquam aliquet elementum massa, sit amet feugiat sapien. Pellentesque malesuada justo eget imperdiet ullamcorper. Morbi risus dolor, blandit ac nisl quis, posuere consequat neque. Praesent pretium imperdiet odio, sit amet pellentesque ex euismod eget. Aenean posuere ante vitae tortor tincidunt pellentesque.</h2>
					<h3 id="ca1" class="portfolio">Saiba mais >></h3>				
				</a>
				<a class="portfolio" href="./contato.php?assunto=websites" onmouseover="portfolioOver(2)" onmouseout="portfolioOut(2)">					
					<img class="portfolio" alt="Websites" src="./media/website.svg">
					<h1 class="portfolio">Websites</h1>
					<h2 class="portfolio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum, tellus quis auctor convallis, orci dui interdum velit, quis mollis erat lectus ut neque. Aliquam aliquet elementum massa, sit amet feugiat sapien. Pellentesque malesuada justo eget imperdiet ullamcorper. Morbi risus dolor, blandit ac nisl quis, posuere consequat neque. Praesent pretium imperdiet odio, sit amet pellentesque ex euismod eget. Aenean posuere ante vitae tortor tincidunt pellentesque.</h2>
					<h3 id="ca2" class="portfolio">Saiba mais >></h3>
				</a>
				<a class="portfolio" href="./contato.php?assunto=eletronica" onmouseover="portfolioOver(3)" onmouseout="portfolioOut(3)">
					<img class="portfolio" alt="Soluções em eletrônica" src="./media/eletronica.svg">
					<h1 class="portfolio">Soluções em eletrônica</h1>
					<h2 class="portfolio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum, tellus quis auctor convallis, orci dui interdum velit, quis mollis erat lectus ut neque. Aliquam aliquet elementum massa, sit amet feugiat sapien. Pellentesque malesuada justo eget imperdiet ullamcorper. Morbi risus dolor, blandit ac nisl quis, posuere consequat neque. Praesent pretium imperdiet odio, sit amet pellentesque ex euismod eget. Aenean posuere ante vitae tortor tincidunt pellentesque.</h2>
					<h3 id="ca3" class="portfolio">Saiba mais >></h3>
				</a>
			</div>

			<div class="portfolio-row">
				<a class="portfolio" href="./contato.php?assunto=mobile" onmouseover="portfolioOver(4)" onmouseout="portfolioOut(4)">
					<img class="portfolio" alt="Aplicativos mobile" src="./media/app.svg">
					<h1 class="portfolio">Aplicativos mobile</h1>
					<h2 class="portfolio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum, tellus quis auctor convallis, orci dui interdum velit, quis mollis erat lectus ut neque. Aliquam aliquet elementum massa, sit amet feugiat sapien. Pellentesque malesuada justo eget imperdiet ullamcorper. Morbi risus dolor, blandit ac nisl quis, posuere consequat neque. Praesent pretium imperdiet odio, sit amet pellentesque ex euismod eget. Aenean posuere ante vitae tortor tincidunt pellentesque.</h2>
					<h3 id="ca4" class="portfolio">Saiba mais >></h3>
				</a>
				<a class="portfolio" href="./contato.php?assunto=planilhas" onmouseover="portfolioOver(5)" onmouseout="portfolioOut(5)">
					<img class="portfolio" alt="Cursos de Planilhas" src="./media/excel.svg">
					<h1 class="portfolio">Cursos de Planilhas</h1>
					<h2 class="portfolio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum, tellus quis auctor convallis, orci dui interdum velit, quis mollis erat lectus ut neque. Aliquam aliquet elementum massa, sit amet feugiat sapien. Pellentesque malesuada justo eget imperdiet ullamcorper. Morbi risus dolor, blandit ac nisl quis, posuere consequat neque. Praesent pretium imperdiet odio, sit amet pellentesque ex euismod eget. Aenean posuere ante vitae tortor tincidunt pellentesque.</h2>
					<h3 id="ca5" class="portfolio">Saiba mais >></h3>
				</a>
				<a class="portfolio" href="./contato.php?assunto=dados" onmouseover="portfolioOver(6)" onmouseout="portfolioOut(6)">
					<img class="portfolio" alt="Análise de dados" src="./media/dados.svg">
					<h1 class="portfolio">Análise de dados</h1>
					<h2 class="portfolio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed interdum, tellus quis auctor convallis, orci dui interdum velit, quis mollis erat lectus ut neque. Aliquam aliquet elementum massa, sit amet feugiat sapien. Pellentesque malesuada justo eget imperdiet ullamcorper. Morbi risus dolor, blandit ac nisl quis, posuere consequat neque. Praesent pretium imperdiet odio, sit amet pellentesque ex euismod eget. Aenean posuere ante vitae tortor tincidunt pellentesque.</h2>
					<h3 id="ca6" class="portfolio">Saiba mais >></h3>
				</a>
			</div>
		</ul>

		<a class="portfolio-contato" href="./contato.php">Realize seu diagnóstico gratuitamente!</a>

	</div>

	<?php include 'dynamic/footer.php'; ?>


</body>

</html>