<?php
	$currentPage = 'podcast';
	$nameSpace = 'internal podcast';
	$pageTitle = 'Podcast';
	include('components/head.php');

	$posts = [
		[
			'link' => 'https://www.youtube.com/watch?v=sQ0NEcgRyLo',
			'image' => '12.jpg',
			'title' => 'Planejamento estratégico como você nunca viu antes! Passo a passo completo',
			'desc' => 'Nesse episódio do WeagleCast falaremos sobre Planejamento Estratégico com Pedro Muschitz, CEO da Weagle e Conselheiro Empresarial que implementa Projetos Estratégicos há mais de 12 anos, e o Conselheiro, COO e sócio da Weagle, Renan Karas, formado em Direito, professor de pós-graduação da Conquer.'
		], [
			'link' => 'https://www.youtube.com/watch?v=RsZYCwp6oYs',
			'image' => '11.jpg',
			'title' => 'A luta do século. Empresa vs. Família. Como empreender sem perder a família.',
			'desc' => 'Neste episódio do WeagleCast falaremos sobre algo que tem atormentado a cabeça dos empresários: Família ou Empresa, qual deve ser a minha prioridade?'
		], [
			'link' => 'https://www.youtube.com/watch?v=QcxnFd6qFZk',
			'image' => '10.jpg',
			'title' => 'Quer paz? A guerra dentro de empresas familiares com Franklin Shun, CEO do Grupo JACTO',
			'desc' => 'Neste episódio do WeagleCast falaremos com Franklin Shun, CEO do Grupo Jacto, formado em Administração, presidente do conselho de Administração do Centro de Inovação do Agronegócio e Conselheiro do Conselho curador do vale do genoma do PR.'
		], [
			'link' => 'https://www.youtube.com/watch?v=KbSocZ_1t2Y',
			'image' => '09.jpg',
			'title' => 'De Office Boy... A Conselheiro - Saiba exatamente como eu fiz para vencer',
			'desc' => 'Neste episódio o nosso CEO Pedro Muschitz, que além de CEO da Weagle Governance é Presidente do Conselho de outras empresas, fala sobre a sua trajetória profissional e como passou de Office Boy a Conselheiro na mesma empresa.'
		], [
			'link' => 'https://www.youtube.com/watch?v=BQ8ynnwQxCE',
			'image' => '08.jpg',
			'title' => 'Como eu posso implantar um Conselho em uma pequena e média empresa?',
			'desc' => 'Será que uma empresa de pequeno e médio porte pode ter reunião de conselho? Assista este vídeo e compartilhe com todos os seus amigos que tem uma pequena e média empresa. Este vídeo pode ser um divisor de águas para o negócio dele.'
		], [
			'link' => 'https://www.youtube.com/watch?v=wEQjYCnqBDo',
			'image' => '07.jpg',
			'title' => 'Perdi um IPO - Por falta de Governança',
			'desc' => 'Neste episódio convidamos Marco Abilhoa, conselheiro em várias empresas, para compartilhar sua experiência profissional e contar a história de como perdeu um IPO por falta de governança.'
		], [
			'link' => 'https://www.youtube.com/watch?v=95JND29ceio',
			'image' => '06.jpg',
			'title' => 'Como aumentar o valuation da minha empresa?',
			'desc' => 'O primeiro episódio do Papo de Governança, uma série onde responderemos as mais temidas perguntas feitas por empresários sobre o tema: Governança e Gestão.'
		], [
			'link' => 'https://www.youtube.com/watch?v=LRvhnCGAOhE',
			'image' => '05.jpg',
			'title' => 'Startup precisa de governança?',
			'desc' => 'Neste episódio falaremos sobre uma pergunta muito discutida nas rodas de Startups: Startup precisa de Governança? Batemos um papo com a Camila Dutra, CEO da X-Plan Consultoria Legal, com a Camila Telles, Head da Angels Wallet e com o Rodrigo Luchtenberg, Sócio da Grafin Partners, onde trouxemos alguns assuntos'
		], [
			'link' => 'https://www.youtube.com/watch?v=PWMpqN81L3A',
			'image' => '04.jpg',
			'title' => 'Como a realizar um processo sucessório através de governança?',
			'desc' => 'Neste episódio do WeagleCast falaremos como o escritório do Dr Humberto Marcia está realizando o processo de sucessão geracional através de ferramentas práticas de governança ágil.'
		], [
			'link' => 'https://www.youtube.com/watch?v=7h4yyQ0ItGY',
			'image' => '03.jpg',
			'title' => 'Como vender a minha empresa? Através de Governança e M&A',
			'desc' => 'Nesse episódio do Weagle Cast falamos sobre como a Governança anda junto com processos de M&A. Com o convidado Rodrigo Luchtenberg, especialista em fusão e aquisição de empresas, sócio da Grafin Boutique de M&A que mais realizou transações no sul do país.'
		], [
			'link' => 'https://www.youtube.com/watch?v=stGaM0GB1Xo',
			'image' => '02.jpg',
			'title' => 'Empresas inovadoras têm melhorado a gestão e a governança',
			'desc' => 'Como as empresas inovadoras estão profissionalizando a Gestão e Governança de forma ágil e disruptiva, independente do tamanho e segmento do negócio.'
		], [
			'link' => 'https://www.youtube.com/watch?v=QC_klADbAJs',
			'image' => '01.jpg',
			'title' => 'Tomada de decisão em empresas familiares',
			'desc' => 'Nesse Podcast você vai ouvir tudo sobre Governança Corporativa na nova economia e como você também pode ter boas práticas, ferramentas e conselheiros que ajudarão sua empresa a crescer, ter mais resultados ou ser vendida por um bom valor.'
		]
	];
?>

<section id='banner' class='z5' data-scroll-section>
	<div class='container transitionUp'>

		<div class='left'>

			<h1 class='text-biggest bold white'>
				Weagle Cast
			</h1>
		
			<p class='text'>
				Estratégias, insights e dicas em um bom bate papo sobre governança, inovação e planejamento empresarial!
			</p>

		</div>

		<img data-src='assets/img/microphone.png' alt='Microfone' width='387' height='800' class='lazy'>

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
			<?php foreach ($posts as $item): ?>
				<div class="col-md-6">
					<a href="<?= $item['link'] ?>" target="_blank" rel="noopener" class="weagle-cast-item">

						<div class="image">
							
							<div class="youtube-icon">
								<?= file_get_contents('assets/svg/social/youtube.svg') ?>
							</div>

							<img data-src="assets/img/cast/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" width="1280" height="720" class="lazy">

						</div>

						<div class="infos">
							
							<h3 class="text-medium-big">
								<?= $item['title'] ?>
							</h3>

							<p>
								<?= substr($item['desc'], 0, 150) ?>
                    			<?= strlen($item['desc']) > 150 ? '...' : '' ?>
							</p>

						</div>

					</a>
				</div>
			<?php endforeach; ?>
		</div>

		<!--div class='bottom-section'>
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
		</div-->

	</div>
</section>

<?php include('components/bottom-text.php'); ?>

<?php include('components/footer.php'); ?>