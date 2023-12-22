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
				Consultoria visionária com Resultados Ágeis: Conselheiros especialistas e prontos para atender sua empresa de qualquer lugar do mundo.
			</p>

		</div>

		<img data-src='assets/img/chess.png' alt='Peça de xadrez' width='599' height='767' class='lazy'>

	</div>
</section>

<section class='texts-block section-padding-top-big' data-scroll-section>
	<div class='container'>

		<p class='text-medium'>
			Iniciamos a Weagle em 2012 para resolver uma dor, permitir que empresários pudessem gerenciar suas empresas de qualquer lugar do mundo, trazendo liberdade de tempo, financeira e geográfica. Por isso acreditamos que todo negócio não deveria escravizar os donos, mas proporcionar qualidade de vida.
		</p>

		<div class='line animated-line'></div>

		<p class='text-medium'>
			Passamos a atender empresas no Brasil todo e começamos a receber propostas para realizar projetos em outros países. Foi então que pensamos: "vamos viver nosso método na prática!". Implantamos um escritório em Lisboa e passamos a atender clientes na Europa e Estados Unidos, gerenciando a Weagle, equipe, clientes e projetos.
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
			Após termos atendido mais de 250 negócios e ajudado mais de 1.000 empresários, percebemos que toda empresa terá apenas 3 destinos: ela vai ser sucedida, vendida ou pode falir. Foi então que nos especializamos e focamos 100% de nossos esforços em implantação de boas práticas de governança nas empresas através de nosso método ágil.
		</p>

		<div class='line animated-line'></div>

		<p class='text-medium'>
			Hoje em dia focamos em ajudar empresários a terem o melhor destino do negócio. Através de nosso método de governança e gestão ágil de resultados preparamos a empresa e equipe para o processo sucessório de negócios e realizamos projetos de venda e fusão através de estratégias de M&A, gerando mais qualidade de vida para os donos de negócio.
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

		<a href='<?php echo($consultoria); ?>' class='text magnetic hover-underline' data-strength='30' target='_blank'>
			Conheça a nossa consultoria NEXT
		</a>

		<a href='<?php echo($consultoria); ?>' class='logo magnetic' data-strength='30' target='_blank'>

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
		<a href='https://www.youtube.com/watch?v=TBGyynQFDX0-Q?controls=0&showinfo=0&rel=0' data-fancybox class='video'>

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
		<?php include('components/accordion-blocks.php'); ?>
	</div>
</section>

<?php include('components/team.php'); ?>

<?php include('components/logos-grid.php'); ?>

<?php include('components/testimonials.php'); ?>

<?php include('components/weagle-cast.php'); ?>

<?php include('components/bottom-text.php'); ?>

<?php include('components/footer.php'); ?>