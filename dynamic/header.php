<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M884SX2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<!--Cabeçalho-->

<header>
	<a href="index.php#home">
		<?php if($pagina!="home"){ ?>
			<img class="menu" alt="Logo" src="../media/logo.jpg">
		<?php }else { ?>
			<img class="menu" alt="Logo" src="./media/logo.jpg">
		<?php } ?>
	</a>
	<nav class="menu">
		<a class="menu" title="Home" href="https://www.physisjr.com/#home" <?php echo($pagina=="home"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Home</a>
		<a class="menu" title="Sobre" href="https://sobre.physisjr.com" <?php echo($pagina=="sobre"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Sobre</a>
		<a class="menu" title="Blog" href="https://medium.com/@physisjr" target="_blank">Blog</a>	
		<a class="menu" id = "contato-header" title="Contato" href="https://contato.physisjr.com" <?php echo($pagina=="contato"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Contato</a>
		
	</nav>
		<?php if($pagina=="home"){ ?>
			<img onclick="switchMenu()" class="menuMobile" alt="Menu" src="./media/menu.svg">
		<?php }else { ?>
			<img onclick="switchMenu()" class="menuMobile" alt="Menu" src="../media/menu.svg">
		<?php } ?>
	<nav id="menuMobile" class="menuMobile">
		<a class="menuMobile" title="Home" href="https://www.physisjr.com/#home" <?php echo($pagina=="home"?"style='color: black; font-weight: bold;'":""); ?> >Home</a>
		<a class="menuMobile" title="Sobre" href="https://sobre.physisjr.com" <?php echo($pagina=="sobre"?"style='color: black; font-weight: bold;'":""); ?> >Sobre</a>			
		<a class="menuMobile" title="Contato" href="https://contato.physisjr.com" <?php echo($pagina=="contato"?"style='color: black; font-weight: bold;'":""); ?> >Contato</a>
		<a class="menuMobile" title="Blog" href="https://medium.com/@physisjr" target="_blank">Blog</a>
	</nav>
</header>