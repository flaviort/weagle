<?php
	$currentPage = 'home reverse-menu';
	$nameSpace = 'home';
	$pageTitle = 'Home';
	include('components/head.php');
?>

<section id='banner' class='bg-black' data-scroll-section>

	<video autoplay playsinline muted loop class='lazy' preload='none' data-scroll data-scroll-speed='-3' data-scroll-position='top'>
		<source data-src='assets/videos/professor.mp4'>
	</video>

	<div class='side blue transitionUp'>
		<?php echo file_get_contents('assets/svg/curve-bottom-right.svg'); ?>
	</div>

	<div class='container white transitionUp' data-scroll data-scroll-speed='3' data-scroll-position='top'>

		<h1 class='text-biggest'>
			Na Prática <br />
			a teoria <br />
			é outra
		</h1>

		<p class='text-medium desc'>
			Preparamos sua empresa para venda ou sucessão através de governança ágil.
		</p>

		<a href='<?php echo($diagnostico); ?>' class='rotating-button white magnetic' data-strength='100'>

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

<section id='problems' class='bg-blue white section-padding-top section-padding-bottom-big' data-scroll-section>

	<div class='side'>
		<?php echo file_get_contents('assets/svg/curve-bottom-left.svg'); ?>
	</div>

	<div class='container'>

		<div class='top'>

			<h2 class='text-big reveal-text'>
				Problemas
			</h2>

			<p class='text-medium'>
				Se o seu negócio enfrenta algum destes problemas, nós temos a solução para isso!
			</p>

			<div class='line animated-line'></div>

		</div>

		<div class='problems-slider animated-slider swiper-container'>
			<div class='swiper-wrapper'>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Sobrecarga de trabalho sobre o proprietário
						</h3>

						<p>
							Não consegue confiar e delegar as responsabilidades com a equipe. <b>Tudo depende do empresário.</b> Tem uma empresa para ter mais liberdade de tempo, mas no fim trabalha numa prisão de porta aberta.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Incerteza do amanhã
						</h3>

						<p>
							<b>Não sabe dizer qual o melhor caminho</b> para perpetuidade e lucratividade da empresa, realizar a sucessão e capacitar líderes ou fazer um processo de M&A e vender o negócio.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Incerteza nas finanças desorganizadas
						</h3>

						<p>
							Não sabe para onde o dinheiro vai, <b>não tem clareza dos indicadores.</b> Insegurança sobre o caminho para onde a empresa está indo. Sem projeção futura e estabilidade financeira em geral, decide no escuro.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Equipe desengajada e desmotivada
						</h3>

						<p>
							As pessoas não tem clareza do que precisa ser feito, trabalham duro mas <b>sem direção estratégica</b> e sem reconhecimento do trabalho. Não tem voz ativa na gestão do negócio e acabam só vivendo no operacional.
						</p>

					</div>
				</div>

				<div class='swiper-slide'>
					<div class='inner'>

						<h3 class='text-medium-big'>
							Falta de execução consistente das metas
						</h3>

						<p>
							Não tem uma rotina organizada para execução das estratégias e metas, não fazem reuniões mensais de prestação de contas e não tem uma plataforma fácil para gestão da execução do trabalho e tarefas.
						</p>

					</div>
				</div>

			</div>
		</div>

	</div>

</section>

<section id='solutions' class='section-padding-top' data-scroll-section>
	<div class='container'>

		<h2 class='text-big blue reveal-text'>
			Soluções
		</h2>

		<div class='line animated-line'></div>

		<p class='text-medium'>
			Todo negócio tem apenas 3 destinos, sucessão venda ou falência, e a Weagle® oferece soluções para empresas que estão em busca de realizar o planejamento sucessório ou a venda do negócio.<br /><br />

			Fazemos isso através de nossa solução contendo método de consultoria validado, conselheiros especializados e plataforma educacional.<br /><br />

			Conte com a Weagle® para moldar um futuro empresarial sólido e estratégico rumo ao melhor destino.
		</p>

	</div>
</section>

<section id='methodology' class='section-padding-top section-padding-bottom-big' data-scroll-section>
	
	<div class='container'>

		<div class='top'>

			<h2 class='text-big blue reveal-text'>
				Metodologia
			</h2>

		</div>

		<div class='content'>

			<p class='text-medium'>
				Fundamentado no manifesto ágil, nossa metodologia tem como principal objetivo a entrega de resultados durante o projeto. Sucessão é um processo não apenas um evento. A venda ou fusão de sua empresa é uma etapa da execução estratégica de futuro. Nada acontece por acaso e do dia para noite. Por isso em cada etapa realizamos entregas de valor e envolvemos os times de nível estratégico, tático e operacional na entrega de resultados voltados a meta e direção que os donos do negócio desejam.<br /><br />
				
				Assim, ajudamos a empresa chegar no melhor destino e durante a jornada desfrutamos dos resultados de uma equipe engajada elevando o valor da empresa.
			</p>

			<img data-src='assets/img/triangle.png' alt='Metodologia' class='lazy' width='1820' height='928'>

		</div>

	</div>

	<div class='big-text section-margin-top section-margin-bottom'>
		<div class='container'>
			<a href='<?php echo($diagnostico); ?>'>

				<div class='parallax' data-scroll data-scroll-speed='-1'>
					<div class='rotating-button blue'>
						
						<div class='rotating-text'>
							<div class='inner-text'>
								<?php echo file_get_contents('assets/svg/circle-text-1.svg'); ?>
							</div>
						</div>

						<div class='circle'>
							<?php echo file_get_contents('assets/svg/ux/arrow-right.svg'); ?>
							<?php echo file_get_contents('assets/svg/ux/arrow-right.svg'); ?>
						</div>

					</div>
				</div>

				<p class='text-biggest bold'>
					First Day
					<span class='fill-title'>Everyday</span>
				</p>

			</a>
		</div>
		
	</div>

	<div class='container'>
		<?php include('components/accordion-blocks.php'); ?>
	</div>

</section>

<section id='ship' data-scroll-section>

	<video autoplay playsinline muted loop class='lazy' preload='none' data-scroll data-scroll-speed='-3'>
		<source data-src='assets/videos/icebreaker.mp4'>
	</video>

	<div class='container section-padding-top section-padding-bottom-big white'>

		<p class='text-medium'>
			Weagle governance. <br />
			de onde viemos & <br />
			para onde vamos.
		</p>

		<a href='<?php echo($sobre); ?>' class='text-medium bold hover-underline white'>
			Conheça a <br />
			história <br />
			Weagle®
		</a>
		
	</div>

</section>

<section id='barriers' data-scroll-section>

	<div class='top'>
		<div class='bg-white'></div>
		<div class='rounded-border-top-right'></div>
	</div>

	<div class='container'>
		<div class='row'>

			<div class='col-md-5 left'>

				<img data-src='assets/img/tank-trap.png' alt='Tank Trap' width='1000' height='1000' class='lazy' data-scroll data-scroll-speed='1'>

				<h2 class='text-big'>
					Quais as barreiras que empresas <span class='blue'>sem Governança Corporativa</span> enfrentam?
				</h2>
				
			</div>

			<div class='col-md-1'></div>

			<div class='col-md-6 col-xl-5 text-medium'>
				<ul class='stagger-right-left'>

					<li>
						<b>01.</b>
						<span>Problemas entre sócios</span>
					</li>

					<li>
						<b>02.</b>
						<span>Reuniões improdutivas </span>
					</li>

					<li>
						<b>03.</b>
						<span>Dificuldade de inovar</span>
					</li>

					<li>
						<b>04.</b>
						<span>Falta de engajamento da equipe</span>
					</li>

					<li>
						<b>05.</b>
						<span>Lentidão no processo decisório</span>
					</li>

					<li>
						<b>06.</b>
						<span>Falta planejamento e execução estratégica</span>
					</li>

					<li>
						<b>07.</b>
						<span>Falta de foco e entrega de resultados</span>
					</li>

					<li>
						<b>08.</b>
						<span>Incerteza do amanhã</span>
					</li>

					<li>
						<b>09.</b>
						<span>Fundador da empresa sobrecarregado</span>
					</li>

					<li>
						<b>10.</b>
						<span>Valuation duvidoso e falta de credibilidade</span>
					</li>

				</ul>
			</div>

		</div>
	</div>

</section>

<?php include('components/animated-blocks.php'); ?>

<?php include('components/logos-grid.php'); ?>

<?php include('components/team.php'); ?>

<?php include('components/weagle-cast.php'); ?>

<?php include('components/bottom-text.php'); ?>

<?php include('components/footer.php'); ?>