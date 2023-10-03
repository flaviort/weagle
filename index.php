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

<section id='solutions' class='section-padding-top section-padding-bottom-big' data-scroll-section>
	<div class='container'>

		<h2 class='text-big blue reveal-text'>
			Soluções
		</h2>

		<div class='line animated-line'></div>

		<p class='text-medium'>
			A Weagle® oferece soluções abrangentes para os desafios corporativos. Nossa consultoria personalizada fortalece a governança, promovendo responsabilidade e transparência. Com o planejamento estratégico adaptável da Weagle®, você alcança metas com análises detalhadas e planos realistas.<br /><br />

			Além disso, nossas soluções integradas de gerenciamento de riscos garantem conformidade regulatória e operações seguras. Conte com a Weagle® para moldar um futuro empresarial sólido e estratégico.
		</p>

	</div>
</section>

<section id='methodology' class='section-padding-top section-padding-bottom-big bg-white' data-scroll-section>
	
	<div class='container'>
		<div class='top'>

			<h2 class='text-big blue reveal-text'>
				Metodologia
			</h2>

			<div class='line animated-line'></div>

			<p class='text-medium'>
				Nossa abordagem combina análise profunda, planejamento personalizado e ação ágil. Do diagnóstico ao desenvolvimento de equipes, criamos uma jornada transformadora. Adaptáveis e focados no resultado, somos o guia rumo a um futuro empolgante.
			</p>

		</div>
	</div>

	<div class='big-text section-margin-top section-margin-bottom follow-mouse-section'>

		<div class='follow-mouse-object'>
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

		<div class='container'>
			<a href='#' class='text-biggest bold'>
				First Day
				<span class='fill-title'>Everyday</span>
			</a>
		</div>
		
	</div>

	<div class='accordion'>
		<div class='container'>
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

<section id='ship' data-scroll-section>

	<img data-src='assets/img/ship.jpg' alt='Navio' width='1920' height='1080' class='lazy cover' data-scroll data-scroll-speed='-4'>

	<div class='container section-padding-top section-padding-bottom-big'>

		<p class='white text-medium'>
			Weagle governance. <br />
			de onde viemos & <br />
			para onde vamos.
		</p>

		<p class='blue text-medium bold'>
			Conheça a <br />
			história <br />
			Weagle®
		</p>
		
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
						<span>Reuniões que não levam a lugar nenhum</span>
					</li>

					<li>
						<b>03.</b>
						<span>Dificuldade de inovar e reter talentos</span>
					</li>

					<li>
						<b>04.</b>
						<span>Falta de engajamento dos colaboradores</span>
					</li>

					<li>
						<b>05.</b>
						<span>Demora para reagir em momentos de crises</span>
					</li>

					<li>
						<b>06.</b>
						<span>Falta de um planejamento estratégico claro e objetivo</span>
					</li>

					<li>
						<b>07.</b>
						<span>Quando tem um planejamento, mas não consegue alcançá-lo</span>
					</li>

					<li>
						<b>08.</b>
						<span>Sem clareza dos reais problemas que estão enfrentando</span>
					</li>

					<li>
						<b>09.</b>
						<span>Fundador da empresa está sempre sobrecarregado (conhecido “faz tudo”)</span>
					</li>

				</ul>
			</div>

		</div>
	</div>

</section>

<?php include('components/animated-blocks.php');?>

<?php include('components/logos-grid.php');?>

<?php include('components/team.php');?>

<?php include('components/weagle-cast.php');?>

<?php include('components/bottom-text.php');?>

<?php include('components/footer.php');?>