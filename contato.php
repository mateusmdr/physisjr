<!DOCTYPE html>
<html lang="pt-br">

<?php $pagina = "contato"; include 'dynamic/head.php';?>

<script>
	window.onload = function() {
		function initMap() {
			var mapProp = {
				center: new google.maps.LatLng(-21.98431875,-47.88344175),
				scrollwheel: false,
				zoom: 14,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById("map"),mapProp);
			var marker = new google.maps.Marker({position: mapProp.center,map: map});
			var windowContent = 
				'<div style="font-weight:bold;">Physis Jr.</div>'+
				'<div>Departamento de Física - UFSCar</div>';
			var infoWindow = new google.maps.InfoWindow({content: windowContent});
			infoWindow.open(map,marker);
		}
		initMap();
	}
</script>

<body>

	<?php
		date_default_timezone_set("America/Sao_Paulo");

		if(isset($_POST["nome"])){

			$nome = $_POST["nome"];
			$email = $_POST["email"];
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
					<div style='font-family: tahoma,sans-serif;font-size:1.2em;margin:5px 0;width:50%;text-align: justify;padding:5px;'>
						<b>Observações:</b> $observacoes\r\n<br>
					</div>
				</div>
			";

	      	$assuntoEmail = "Contato pelo site: ".$nome;
      	
			$enviaremail = mail("mateusmendoncadr@gmail.com",$assuntoEmail,$mensagem,$headers);
			?>
				<pre>
					<?php
						var_dump($enviaremail);
					?>
				</pre>
			<?php
		}

	?>

	<?php include 'dynamic/header.php'; ?>

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
							<label for="observacoes">Em que podemos ajudar? *</label>
							<textarea name="observacoes" id="observacoes" placeholder="Escreva aqui sua mensagem..." required></textarea>
						</div>
						<div class="input-box">
							<input type="submit" value="Peça seu orçamento">
						</div>
					</form>
				</div>
			</div>
			<div class="clear"></div>
		</div>		
		<div id="map">
		</div>
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDluECcdw2fMeaNy-FL-e9e4R8ARL5r1PU">
		</script>
		<div class="clear"></div>
	</div>

	<div class="clear"></div>

	<?php include 'dynamic/footer.php'; ?>

</body>

</html>