<!DOCTYPE html>
<html lang="pt-br">

<?php $pagina = "home"; include 'head.php'; ?>

<body>

	<div id="home"></div>

	<?php include 'header.php'; ?>

	<!--Apresentação-->
	<div class="apresentacao container">
		<div id="opacidade">
			<div class="apresentacao-box container">
				<div class="apresentacao-box-left">
					<hgroup class="apresentacao sub-container">
						<h1 class="apresentacao">Physis Jr</h1>
						<h2 class="apresentacao">Engenharia e Tecnologia</h2>
						<h3 class="apresentacao">Realizando projetos de baixo custo desde 2006</h3>
					</hgroup>
				</div>

				<div class="apresentacao-box-right">
					<div class="form-contato">
					<h2 class="form-title subtitle">PEÇA NOSSA AJUDA</h2>				
					<form method="POST" action="./contato.php">
						<div class="input-box nome">
							<label for="nome">Nome*</label>
							<input type="text" name="nome" id="nome" placeholder="Nome pessoal ou da empresa" required>
						</div>
						<div class="input-box telefone">
							<label for="telefone">Telefone*</label>
							<input type="tel" name="telefone" id="telefone" placeholder="Ex: (31) 99410-7552" pattern="\d*" required>
						</div>
						<div class="clear"></div>
						<div class="input-box email">
							<label for="email">Email*</label>
							<input type="email" name="email" id="email" placeholder="Ex: contato@physisjr.com" required>
						</div>

						<div class="input-box assunto">
							<label for="assunto">Assunto*</label>
							<select name="assunto" id="assunto" required>
								<option selected disabled value="">Em que podemos ajudar?</option>
								<option value="Controle de Estoque">Controle de Estoque</option>
								<option value="Websites">Websites</option>
								<option value="Soluções em eletrônica">Soluções em eletrônica</option>
								<option value="Aplicativos mobile">Aplicativos mobile</option>
								<option value="Cursos de Excel">Cursos de Planilhas</option>
								<option value="Análise de dados">Análise de dados</option>
								<option value="Outros">Outros (descreva abaixo)</option>
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
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<!--Portfólio-->

	<div id="servicos"></div>

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
					<h2 class="portfolio">Melhore a gestão de seus produtos</h2>
					<h3 id="ca1" class="portfolio">Saiba mais >></h3>				
				</a>
				<a class="portfolio" href="./contato.php?assunto=websites" onmouseover="portfolioOver(2)" onmouseout="portfolioOut(2)">					
					<img class="portfolio" alt="Websites" src="./media/website.svg">
					<h1 class="portfolio">Websites</h1>
					<h2 class="portfolio">Conecte-se ao mundo e atinja um maior público</h2>
					<h3 id="ca2" class="portfolio">Saiba mais >></h3>
				</a>
				<a class="portfolio" href="./contato.php?assunto=eletronica" onmouseover="portfolioOver(3)" onmouseout="portfolioOut(3)">
						<img class="portfolio" alt="Soluções em eletrônica" src="./media/eletronica.svg">
						<h1 class="portfolio">Soluções em eletrônica</h1>
						<h2 class="portfolio">Automatize seus processos com mais eficiência</h2>
						<h3 id="ca3" class="portfolio">Saiba mais >></h3>
				</a>
			</div>

			<div class="portfolio-row">
				<a class="portfolio" href="./contato.php?assunto=mobile" onmouseover="portfolioOver(4)" onmouseout="portfolioOut(4)">
					<img class="portfolio" alt="Aplicativos mobile" src="./media/app.svg">
					<h1 class="portfolio">Aplicativos mobile</h1>
					<h2 class="portfolio">Facilite o acesso aos seus serviços</h2>
					<h3 id="ca4" class="portfolio">Saiba mais >></h3>
				</a>
				<a class="portfolio" href="./contato.php?assunto=planilhas" onmouseover="portfolioOver(5)" onmouseout="portfolioOut(5)">
					<img class="portfolio" alt="Cursos de Planilhas" src="./media/excel.svg">
					<h1 class="portfolio">Cursos de Planilhas</h1>
					<h2 class="portfolio">Aprenda a ferramenta mais requisitada do mercado</h2>
					<h3 id="ca5" class="portfolio">Saiba mais >></h3>
				</a>
				<a class="portfolio" href="./contato.php?assunto=dados" onmouseover="portfolioOver(6)" onmouseout="portfolioOut(6)">
					<img class="portfolio" alt="Análise de dados" src="./media/dados.svg">
					<h1 class="portfolio">Análise de dados</h1>
					<h2 class="portfolio">Tome decisões baseadas em estatísticas internas</h2>
					<h3 id="ca6" class="portfolio">Saiba mais >></h3>
				</a>
			</div>
		</ul>

		<a class="portfolio-contato" href="./contato.php">Realize seu diagnóstico gratuitamente!</a>

	</div>

	<?php include 'footer.php'; ?>

</body>
</html>