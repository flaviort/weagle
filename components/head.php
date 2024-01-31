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
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' />
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css' />
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css' />
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' />
			
			<link rel='stylesheet' href='assets/css/bootstrap-grid.css' type='text/css'>
			<link rel='stylesheet' href='assets/css/main.css' type='text/css'>
			
		</head>

		<body data-barba='wrapper'>

			<header>
				<?php include('components/opening.php');?>
				<?php include('components/page-transition.php');?>
				<?php include('components/floating-menu.php');?>
				<?php include('components/fs-menu.php');?>
				<div id='mouse'></div>
			</header>

			<main id='main-content' data-barba='container' data-barba-namespace='<?php echo($nameSpace); ?>' class='<?php echo($currentPage); ?>' data-page-title='<?php echo($pageTitle); ?>'>
				<div class='main-wrap' data-scroll-container>

					<?php include('components/top-menu.php');?>