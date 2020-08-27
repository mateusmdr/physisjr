<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<title>Physis Jr.</title>

	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-M884SX2');</script>
	<!-- End Google Tag Manager -->
	
	<!--Tags para SEO-->
	<meta name="description" content="A Physis Jr. oferece soluções inovadoras e eficazes a baixo custo.">
	<meta name="keywords" content="palavras-chave,separadas,por,virgula">
	<meta name="author" content="Physis Jr.">

	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">

	<!--Estilos-->
	<?php
		if($pagina!="home"){?>
			<link rel="stylesheet" type="text/css" href="../css/minireset.css">
			<link rel="stylesheet" type="text/css" href="../css/style.css">
			<link rel="stylesheet" type="text/css" href="../css/<?php echo $pagina; ?>.css">
	<?php } else { ?>
		<link rel="stylesheet" type="text/css" href="./css/minireset.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<link rel="stylesheet" type="text/css" href="./css/<?php echo $pagina; ?>.css">
	<?php } ?>

	<!--Favicon-->
		<?php if($pagina=="home"){ ?>
			<link rel="shortcut icon" type="image/x-icon" href="./media/favicon.ico">
		<?php }else { ?>
			<link rel="shortcut icon" type="image/x-icon" href="../media/favicon.ico">
		<?php } ?>

	<!--Scripts-->
	<?php 
		if($pagina=="home") { ?>
			<script src='./js/portfolio.js'></script>
			<script src='./js/jquery.js'></script>
			<script src="./js/navbar.js"></script>
		<?php }elseif ($pagina=="contato") { ?>
			<script src='../js/jquery.js'></script>
			<script src="../js/navbar.js"></script>
		<?php }else { ?>
			<script src="../js/navbar.js"></script>
		<?php } ?>

	<style>
		/*fontes*/

		@font-face {
		font-family: 'Open Sans';
		font-style: normal;
		font-weight: 400;
		font-display: swap;
		src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0b.woff2) format('woff2');
		unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
		@font-face {
			font-family: 'Open Sans';
			font-style: normal;
			font-weight: 600;
			font-display: swap;
			src: local('Open Sans SemiBold'), local('OpenSans-SemiBold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UNirkOUuhp.woff2) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	</style>

</head>