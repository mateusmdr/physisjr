<!--Cabeçalho-->

<header>
	<a href="#home">
		<img class="menu" alt="Logo" src="./media/logo.jpg">
	</a>
	<nav class="menu">
		<a class="menu" title="Home" href="./index.php#home" <?php echo($pagina=="home"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Home</a>
		<a class="menu" title="Sobre" href="./sobre.php" <?php echo($pagina=="sobre"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Sobre</a>			
		<a class="menu" title="Contato" href="./contato.php" <?php echo($pagina=="contato"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Contato</a>
		<a class="menu" title="Blog" href="">Blog</a>
		<a class="menu" title="Serviços" href="./servicos.php" <?php echo($pagina=="servicos"?"style='color: black; font-weight: bold; background-color: white;'":""); ?> >Serviços</a>
	</nav>
	<img onclick="switchMenu()" class="menuMobile" alt="Menu" src="./media/menu.svg">
	<nav id="menuMobile" class="menuMobile">
		<a class="menuMobile" title="Home" href="./index.php#home" <?php echo($pagina=="home"?"style='color: black; font-weight: bold;'":""); ?> >Home</a>
		<a class="menuMobile" title="Sobre" href="./sobre.php" <?php echo($pagina=="sobre"?"style='color: black; font-weight: bold;'":""); ?> >Sobre</a>			
		<a class="menuMobile" title="Contato" href="./contato.php" <?php echo($pagina=="contato"?"style='color: black; font-weight: bold;'":""); ?> >Contato</a>
		<a class="menuMobile" title="Blog" href="">Blog</a>
		<a class="menuMobile" title="Serviços" href="./servicos.php" <?php echo($pagina=="servicos"?"style='color: black; font-weight: bold;'":""); ?> >Serviços</a>
	</nav>
</header>