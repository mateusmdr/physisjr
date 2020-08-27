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
            if($enviaremail) {
				if($pagina=="home"){
					echo "<script src='js/success.js'></script>";
				}else {
					echo "<script src='../js/success.js'></script>";
				}
            }
		}

	?>