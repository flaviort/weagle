<?php
	$currentPage = 'podcast';
	$nameSpace = 'internal podcast';
	$pageTitle = 'Podcast';
	include('components/head.php');
?>

<section id='banner' class='z5' data-scroll-section>
	<div class='container transitionUp'>

		<h1 class='text-biggest white bold'>
			Weagle Cast
		</h1>

		<div class='texts'>

			<p>
				Estratégias, insights e dicas em um bom bate papo sobre
			</p>

			<p>
				governança, inovação e planejamento empresarial!
			</p>

		</div>

		<img data-src='assets/img/microphone.png' alt='Microfone' class='lazy'>

	</div>
</section>

<section id='middle' class='section-padding-top transitionUp' data-scroll-section>

	<div class='bg'>
		<?php echo file_get_contents('assets/svg/curve-top-right.svg'); ?>
	</div>

	<div class='container z5'>

		<h2 class='title-top text-big blue'>
			Episódios
		</h2>

		<div class='row'>
			
			<div class='col-md-6'>
				<a href='https://www.youtube.com/watch?v=RsZYCwp6oYs&ab_channel=WeagleGovernance' target='_blank' rel='noopener' class='weagle-cast-item'>
					
					<div class='image'>

						<div class='youtube-icon'>
							<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
						</div>

						<img data-src='assets/img/cast/09.jpg' alt='Weagle Cast #09' class='lazy'>

					</div>

					<div class='infos'>

						<h3 class='text-medium-big'>
							A luta do século: Empresa X Família.
						</h3>

						<p>
							Com Aline Dalmarco & Pedro Muschitz
						</p>

					</div>

				</a>
			</div>

			<div class='col-md-6'>
				<a href='https://www.youtube.com/watch?v=QcxnFd6qFZk&ab_channel=WeagleGovernance' target='_blank' rel='noopener' class='weagle-cast-item'>
					
					<div class='image'>

						<div class='youtube-icon'>
							<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
						</div>

						<img data-src='assets/img/cast/08.jpg' alt='Weagle Cast #08' class='lazy'>

					</div>

					<div class='infos'>

						<h3 class='text-medium-big'>
							Quer paz? Prepare-se Para a guerra!
						</h3>

						<p>
							Com Franklim Shun do Grupo
						</p>

					</div>

				</a>
			</div>

			<div class='col-md-6'>
				<a href='https://www.youtube.com/watch?v=KbSocZ_1t2Y&ab_channel=WeagleGovernance' target='_blank' rel='noopener' class='weagle-cast-item'>
					
					<div class='image'>

						<div class='youtube-icon'>
							<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
						</div>

						<img data-src='assets/img/cast/07.jpg' alt='Weagle Cast #07' class='lazy'>

					</div>

					<div class='infos'>

						<h3 class='text-medium-big'>
							De Office Boy, A Conselheiro
						</h3>

						<p>
							Com Renan Karas, Pedro Muschitz & Matheus Linhares
						</p>

					</div>

				</a>
			</div>

			<div class='col-md-6'>
				<a href='https://www.youtube.com/watch?v=wEQjYCnqBDo&t=2s&ab_channel=WeagleGovernance' target='_blank' rel='noopener' class='weagle-cast-item'>
					
					<div class='image'>

						<div class='youtube-icon'>
							<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
						</div>

						<img data-src='assets/img/cast/06.jpg' alt='Weagle Cast #06' class='lazy'>

					</div>

					<div class='infos'>

						<h3 class='text-medium-big'>
							Tomada de Decisão em Empresas Familiares
						</h3>

						<p>
							FT. Roberto Camanho, Nelson Oliveira, Renan Karas & Pedro Muschitz
						</p>

					</div>

				</a>
			</div>

			<div class='col-md-6'>
				<a href='https://www.youtube.com/watch?v=LRvhnCGAOhE&ab_channel=WeagleGovernance' target='_blank' rel='noopener' class='weagle-cast-item'>
					
					<div class='image'>

						<div class='youtube-icon'>
							<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
						</div>

						<img data-src='assets/img/cast/05.jpg' alt='Weagle Cast #05' class='lazy'>

					</div>

					<div class='infos'>

						<h3 class='text-medium-big'>
							Como Empresas Inovadores tem Melhorado a Gestão
						</h3>

						<p>
							FT Anderson Godz. Com Pedro Muschitz e Renan Karas
						</p>

					</div>

				</a>
			</div>

			<div class='col-md-6'>
				<a href='https://www.youtube.com/watch?v=PWMpqN81L3A&ab_channel=WeagleGovernance' target='_blank' rel='noopener' class='weagle-cast-item'>
					
					<div class='image'>

						<div class='youtube-icon'>
							<?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
						</div>

						<img data-src='assets/img/cast/04.jpg' alt='Weagle Cast #04' class='lazy'>

					</div>

					<div class='infos'>

						<h3 class='text-medium-big'>
							Planejamento Sucessório
						</h3>

						<p>
							FT Humberto Marcial. Com Pedro Muschitz e Renan Karas
						</p>

					</div>

				</a>
			</div>

		</div>

		<div class='bottom-section'>
			<ul class='pagination text-small'>

				<li>
					<a href='#' class='active'>
						1
					</a>
				</li>

				<li>
					<a href='#'>
						2
					</a>
				</li>

				<li>
					<a href='#'>
						3
					</a>
				</li>

				<li>
					<a href='#'>
						4
					</a>
				</li>

				<li>
					<a href='#'>
						5
					</a>
				</li>

			</ul>
		</div>

	</div>
</section>

<?php include('components/bottom-text.php'); ?>

<?php include('components/footer.php'); ?>