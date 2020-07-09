<!DOCTYPE html>
<html lang="pt-br">

<?php $pagina = "contato"; include '/dynamic/head.php'; ?>

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

	<?php include '/dynamic/header.php'; ?>

	<!--Contato-->

	<div class="contato container">	

		<div class="contato-box container">

			<div class="contato-box-left">
				<div class="contato-item">
					<h3 class="contato subtitle">Email</h3>
					<a title="Email" href="mailto:contato@physisjr.com">
					<img class="contato" title="Email" alt="Email" src="./media/gmail.svg">
					<span class="contato">contato@physisjr.com</span>
					</a>
				</div>
				<div class="contato-item">
					<h3 class="contato subtitle">Telefone</h3>
					<a title="Telefone" href="tel:+5531994107552">
						<img class="contato" title="Telefone" alt="Telefone" src="./media/phone.svg">
						<span class="contato">(31) 99410-7552</span>
					</a>
				</div>
				<div class="contato-item">
					<h3 class="contato subtitle">WhatsApp</h3>
					<a title="WhatsApp" href="https://wa.me/5531994107552">
						<img class="contato" title="WhatsApp" alt="WhatsApp" src="./media/whatsapp.svg">
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
							<input type="text" name="nome" id="nome" placeholder="Nome pessoal ou da empresa" required>
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
			<iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1849.8563982098842!2d-47.88440981655645!3d-21.983983239482097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b870e0750b98b3%3A0x836ca2811701c06d!2sPhysis%20Jr!5e0!3m2!1spt-BR!2sbr!4v1591991766483!5m2!1spt-BR!2sbr" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="0" aria-hidden="false" tabindex="0"></iframe>
		</div>
		<div class="clear"></div>
	</div>

	<div class="clear"></div>

	<?php include '/dynamic/footer.php'; ?>

</body>

</html>