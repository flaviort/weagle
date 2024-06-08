<?php include('components/globals.php') ?>

<!DOCTYPE html>
	<html lang='pt-BR'>

		<head>

			<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
			<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
			<meta name='format-detection' content='telephone=no'>
			<link rel='shortcut icon' href='favicon.png'>

			<meta name='author' content='<?php echo($siteTitle); ?>'>

			<title><?php echo $siteTitle . ' ' . (isset($postTitle) ? htmlspecialchars($postTitle) : htmlspecialchars($page)); ?></title>

			<!-- google -->
			<meta name='description' content='<?php echo($siteDesc); ?>' />
			<link rel='canonical' href='<?php echo($siteUrl); ?>' />
				
			<!-- facebook -->
			<meta property='og:locale' content='pt_BR' />
			<meta property='og:type' content='website' />
			<meta property='og:title' content='<?php echo($siteTitle); ?>' />
			<meta property='og:description' content='<?php echo($siteDesc); ?>' />
			<meta property='og:url' content='<?php echo($siteUrl); ?>/' />
			<meta property='og:site_name' content='<?php echo($siteTitle); ?>' />
			<meta property='og:image' content='<?php echo($siteUrl); ?>/assets/img/og-image.jpg' />
			<meta property='og:image:secure_url' content='<?php echo($siteUrl); ?>/assets/img/og-image.jpg' />
			<meta property='og:image:width' content='1200' />
			<meta property='og:image:height' content='630' />

			<!-- css -->
			<link rel='stylesheet' type='text/css' href='https://www.weagle.com.br/assets/css/vendor/normalize.min.css' />
			<link rel='stylesheet' type='text/css' href='https://www.weagle.com.br/assets/css/vendor/fancybox.css' />
			<link rel='stylesheet' type='text/css' href='https://www.weagle.com.br/assets/css/vendor/locomotive-scroll.min.css' />
			<link rel='stylesheet' type='text/css' href='https://www.weagle.com.br/assets/css/vendor/swiper-bundle.min.css' />
			<link rel='stylesheet' type='text/css' href='https://www.weagle.com.br/assets/css/vendor/bootstrap-grid.css' />
			<link rel='stylesheet' type='text/css' href='https://www.weagle.com.br/assets/css/main.min.css' />
			
		</head>

		<body data-barba='wrapper'>

			<header>
				<base href='/'>
				<?php include('components/opening.php');?>
				<?php include('components/page-transition.php');?>
				<?php include('components/floating-menu.php');?>
				<?php include('components/fs-menu.php');?>
				<div id='mouse'></div>
			</header>

			<main id='main-content' data-barba='container' data-barba-namespace='<?php echo($nameSpace); ?>' class='<?php echo($currentPage); ?>' data-page-title='<?php echo($pageTitle); ?>'>
				<div class='main-wrap' data-scroll-container>

					<?php include('components/top-menu.php');?>