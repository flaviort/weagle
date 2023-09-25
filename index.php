<?php
	$currentPage = 'home';
	$nameSpace = 'home';
	$pageTitle = 'Home';
	include('components/head.php');
?>

<section id='banner' class='bg-black' data-scroll-section>

	<video autoplay playsinline muted loop class='lazy' preload='none' data-scroll data-scroll-speed='-3' data-scroll-position='top'>
		<source data-src='assets/videos/banner.mp4'>
	</video>

	<div class='side blue'>
		<?php echo file_get_contents('assets/svg/curve-bottom-right.svg'); ?>
	</div>

	<div class='container white' data-scroll data-scroll-speed='3' data-scroll-position='top'>

		<h1 class='text-biggest reveal-text'>
			Na Prática <br />
			a teoria <br />
			é outra
		</h1>

		<p class='text-medium desc'>
			Vamos de ajudar a construir, organizar e vender o seu negócio. Frase em construção.
		</p>

		<a href='diagnostico' class='rotating-button white magnetic' data-strength='100'>

			<div class='rotating-text'>
				<div class='inner-text'>
					<?php echo file_get_contents('assets/svg/circle-text-1.svg'); ?>
				</div>
			</div>

			<div class='circle'>
				<?php echo file_get_contents('assets/svg/ux/arrow-right.svg'); ?>
				<?php echo file_get_contents('assets/svg/ux/arrow-right.svg'); ?>
			</div>

		</a>

	</div>

</section>

<section id='problems' class='bg-blue white' data-scroll-section>

	<div class='side'>
		<?php echo file_get_contents('assets/svg/curve-bottom-left.svg'); ?>
	</div>

	<div class='container'>

		<div class='top'>

			<h2 class='text-big reveal-text'>
				Problemas
			</h2>

			<p class='text-medium'>
				Se o seu negócio enfrenta algum destes problemas, nos temos a solução para isso!
			</p>

			<div class='line animated-line'></div>

		</div>

		<div class='problems-slider animated-slider swiper-container'>
			<div class='swiper-wrapper'>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Sem Qualidade de Vida & Perspectiva de Futuro
						</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Sem Planejamento & Profissionalização de Gestão
						</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Falta de Planejamento & Estratégia Financeira
						</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Lorem Ipsum Dolot Sir Amet Consectetur 
						</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Sed do eiusmod tempor incididunt ut labore et
						</h3>

						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>

					</div>
				</div>

			</div>
		</div>

	</div>

</section>

<?php include('components/weagle-cast.php');?>

<?php include('components/bottom-text.php');?>

<?php include('components/footer.php');?>