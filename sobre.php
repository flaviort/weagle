<?php
	$currentPage = 'about';
	$nameSpace = 'internal about';
	$pageTitle = 'Sobre Nós';
	include('components/head.php');
?>

<section id='banner' class='z5' data-scroll-section>

	<div class='side'>
		<?php echo file_get_contents('assets/svg/curve-bottom-left.svg'); ?>
	</div>

	<div class='container z5 transitionUp'>

		<div class='left'>

			<h1 class='text-biggest bold white'>
				Conselheiros <br />
				Inovativos
			</h1>
		
			<p class='text'>
				Mentoria Visionária, Resultados Revolucionários: O Poder do Nosso Time de Conselheiros Weagle. Texto em Construção
			</p>

		</div>

		<img data-src='assets/img/chess.png' alt='Peça de xadrez' width='599' height='767' class='lazy'>

	</div>
</section>

<section class='texts-block section-padding-top-big' data-scroll-section>
	<div class='container'>

		<p class='text-medium'>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</p>

		<div class='line animated-line'></div>

		<p class='text-medium'>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</p>

	</div>
</section>

<section id='earth' class='section-padding-top section-padding-bottom' data-scroll-section>
	<div class='container'>

		<div class='texts'>
			<p class='bold fill-title'>
				<span class='line'>Weagle®</span>
				<span class='line'>For <span>The</span></span>
				<span class='line'>Nations</span>
			</p>
		</div>

		<div class='video' data-scroll data-scroll-speed='-2'>
			<video autoplay playsinline muted loop class='lazy cover' preload='none'>
				<source data-src='assets/videos/earth-spinning.mp4'>
			</video>
		</div>

	</div>
</section>

<section class='texts-block section-padding-bottom-big' data-scroll-section>
	<div class='container'>

		<p class='text-medium'>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</p>

		<div class='line animated-line'></div>

		<p class='text-medium'>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</p>

	</div>
</section>

<section id='next' class='section-padding-top-big section-padding-bottom-big' data-scroll-section>

	<div class='mountains-parallax' data-scroll data-scroll-speed='-2'>

		<div class='mountain mountain-back'>
			<img data-src='assets/img/mountains.png' alt='Montanhas de gelo' width='1819' height='585' class='lazy'>
		</div>

		<div class='mountain mountain-front'>
			<img data-src='assets/img/mountains.png' alt='Montanhas de gelo' width='1819' height='585' class='lazy'>
		</div>

	</div>

	<div class='container z5'>

		<a href='consultoria' class='text magnetic hover-underline' data-strength='30'>
			Conheça a nossa consultoria NEXT
		</a>

		<a href='consultoria' class='logo magnetic' data-strength='30'>

			<?php echo file_get_contents('assets/svg/next.svg'); ?>

		</a>

	</div>

</section>

<section id='manifest' class='section-padding-top' data-scroll-section>

	<div class='texts pure-white'>

		<div data-scroll data-scroll-direction='horizontal' data-scroll-speed='2'>
			<p class='roll-text'>
				Manifesto Manifesto Manifesto&nbsp;
			</p>
		</div>

		<div data-scroll data-scroll-direction='horizontal' data-scroll-speed='-2'>
			<p class='roll-text-reverse blue'>
				Manifesto Manifesto Manifesto&nbsp;
			</p>
		</div>

		<div data-scroll data-scroll-direction='horizontal' data-scroll-speed='2'>
			<p class='roll-text'>
				Manifesto Manifesto Manifesto&nbsp;
			</p>
		</div>

	</div>

	<div class='container z5'>
		<a href='https://www.youtube.com/watch?v=lTyUoaYV3-Q&ab_channel=WeagleGovernance' data-fancybox class='video'>

			<div class='youtube-icon'>
				<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
			</div>

			<video autoplay playsinline muted loop class='lazy cover' preload='none' data-scroll data-scroll-speed='-2'>
				<source data-src='assets/videos/manifest.mp4'>
			</video>

		</a>
	</div>

</section>

<section id='methodology' class='section-padding-top' data-scroll-section>
	<div class='container'>
		<div class='accordion'>	
			<div class='row'>

				<div class='col-md-6'>
					<div class='accordion-block'>

						<div class='question'>
							
							<span>
								01. Consultoria
							</span>

							<?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

						</div>

						<div class='answer'>
							<p>
								Metodologia desenvolvida com conhecimento prático no atendimento de diversas empresas de vários setores do mercado através de um material completo e estruturado em aulas, livros, mentorias, inteligencia artificial, playbooks e ferramentas para entregar o resultado prometido e alcançar o crescimento e perpetuidade do seu negócio.
							</p>
						</div>

					</div>
				</div>

				<div class='col-md-6'>
					<div class='accordion-block'>

						<div class='question'>
							
							<span>
								02. Mentoria Individual e Grupo
							</span>

							<?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

						</div>

						<div class='answer'>
							<p>
								Todos os meses você terá mentorias em grupo e individuais para tirar as dúvidas específicas com um conselheiro especialista na fase do sprint que você estiver.
							</p>
						</div>

					</div>
				</div>

				<div class='col-md-6'>
					<div class='accordion-block'>

						<div class='question'>
							
							<span>
								03. Clube Seleto de Empresários
							</span>

							<?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

						</div>

						<div class='answer'>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis neque quaerat nisi maiores? Corporis ullam commodi, aperiam dolorem dolorum voluptate laboriosam ab ad dolore eius perferendis quasi voluptates veritatis obcaecati.
							</p>
						</div>

					</div>
				</div>

				<div class='col-md-6'>
					<div class='accordion-block'>

						<div class='question'>
							
							<span>
								04. Formação em Conselheiro Ágil
							</span>

							<?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>

						</div>

						<div class='answer'>
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis neque quaerat nisi maiores? Corporis ullam commodi, aperiam dolorem dolorum voluptate laboriosam ab ad dolore eius perferendis quasi voluptates veritatis obcaecati.
							</p>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<?php include('components/team.php'); ?>

<?php include('components/logos-grid.php'); ?>

<?php include('components/testimonials.php'); ?>

<?php include('components/weagle-cast.php'); ?>

<?php include('components/bottom-text.php'); ?>

<?php include('components/footer.php'); ?>