<?php
	$currentPage = 'diagnosis';
	$nameSpace = 'internal diagnosis';
	$pageTitle = 'Diagnóstico';
	include('components/head.php');
?>

<section id='banner' class='z5 follow-mouse-section' data-scroll-section>

	<a href='<?php echo($form); ?>' target='_blank' rel='noopener' class='follow-mouse-object rotating-button'>

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

	<div class='container transitionUp'>

		<div class='left'>

			<h1 class='text-biggest bold'>
				O Futuro vai <span class='blue'>Acontecer</span>
			</h1>
		
			<p class='text'>
				Por padrão ou por planejamento
			</p>

			<a href='<?php echo($form); ?>' target='_blank' rel='noopener' class='hollow-gray-button magnetic' data-strength='30'>
				Faça já um Diagnóstico
			</a>

		</div>

		<img data-src='assets/img/telescope.png' alt='Telescópio' width='512' height='751' class='lazy' data-scroll data-scroll-position='top' data-scroll-speed='1'>

	</div>
</section>

<section id='levels' class='section-padding-bottom transitionUp' data-scroll-section>
	<div class='container'>

		<h2 class='text-big reveal-text blue'>
			Descubra os níveis de Governança
		</h2>

		<div class='animated-line'></div>

		<div class='row stagger-bottom-top stages'>

			<div class='col-sm-6 col-lg-3'>

				<div class='icon'>
					<?php echo file_get_contents('assets/svg/icon-2.svg'); ?>
				</div>

				<p class='blue bold'>
					Maturidade Baixa
				</p>

				<p>
					A governança da sua empresa precisa de melhorias significativas. Caso sua empresa não aplique nenhuma ação para corrigir isso, você está correndo sérios riscos de gestão e a probabilidade de sua empresa não permanecer aberta nos próximos 10 anos no mercado é muito alta.<br /><br />

					Se atente ao método PRDC e coloque para rodar o mais breve as boas práticas de governança.
				</p>

			</div>

			<div class='col-sm-6 col-lg-3'>

				<div class='icon'>
					<?php echo file_get_contents('assets/svg/icon-2.svg'); ?>
				</div>

				<p class='blue bold'>
					Maturidade Média-Baixa
				</p>

				<p>
					Sua governança tem alguns aspectos positivos, mas ainda há muito espaço para desenvolvimento.<br /><br />

					Lembre que profissionalizar a gestão é um processo contínuo, então não deixe para amanhã o que pode ser feito hoje, siga as boas práticas de governança recomendada no método PRDC.
				</p>

			</div>

			<div class='col-sm-6 col-lg-3'>

				<div class='icon'>
					<?php echo file_get_contents('assets/svg/icon-2.svg'); ?>
				</div>

				<p class='blue bold'>
					Maturidade Média-Alta
				</p>

				<p>
					A governança da sua empresa está com a nota acima do mercado. Em média apenas 20% das empresas tem o nível de governança que sua empresa atingiu na pontuação, porém não se acomode, ainda há oportunidades de aprimoramento.<br /><br />

					Verifique as perguntas e sugestões do método PRDC e como você pode aprimorar ainda mais essa nota.
				</p>

			</div>

			<div class='col-sm-6 col-lg-3'>

				<div class='icon'>
					<?php echo file_get_contents('assets/svg/icon-2.svg'); ?>
				</div>

				<p class='blue bold'>
					Maturidade Alta
				</p>

				<p>
					Parabéns, o nível de governança da sua empresa é exemplar, você está muito acima da média de mercado. Normalmente apenas 1% das empresas do Brasil atingem esse nível.<br /><br />

					Agora lembre, governança e gestão é melhoria contínua, então não esqueça de todo ano refazer seu plano estratégico, cultural e de governança. As perguntas e ferramentas do método PRDC podem te ajudar a sempre que precisar rever aplicar as ferramentas.
				</p>

			</div>

		</div>

	</div>
</section>

<!--section id='benefits' class='section-padding-top-big' data-scroll-section>

	<div class='top-side'>
		<?php echo file_get_contents('assets/svg/curve-top-right.svg'); ?>
	</div>

	<div class='container'>

		<p class='red'>
			Aguardando Informações
		</p>

		<div class='row stagger-bottom-top icons'>
			
			<div class='col-6 col-md-3'>

				<div class='icon'>
					<img data-src='assets/img/hourglass.png' width='200' height='256' alt='Ampulheta' class='lazy'>
				</div>

				<p>
					Benefício 1
				</p>

			</div>

			<div class='col-6 col-md-3'>

				<div class='icon'>
					<img data-src='assets/img/hourglass.png' width='200' height='256' alt='Ampulheta' class='lazy'>
				</div>

				<p>
					Benefício 2
				</p>

			</div>

			<div class='col-6 col-md-3'>

				<div class='icon'>
					<img data-src='assets/img/hourglass.png' width='200' height='256' alt='Ampulheta' class='lazy'>
				</div>

				<p>
					Benefício 3
				</p>

			</div>

			<div class='col-6 col-md-3'>

				<div class='icon'>
					<img data-src='assets/img/hourglass.png' width='200' height='256' alt='Ampulheta' class='lazy'>
				</div>

				<p>
					Benefício 4
				</p>

			</div>

		</div>

	</div>
</section-->

<section id='blur' class='section-padding-bottom-big' data-scroll-section>

	<div class='top-side'>
		<?php echo file_get_contents('assets/svg/curve-top-right.svg'); ?>
	</div>

	<div class='wrapper section-margin-top-big'>

		<div class='section-blurred'></div>

		<div class='container'>

			<h2 class='text-biggest bold pure-white'>
				<span class='blue'>See the</span> Future
			</h2>

			<p>
				Faça o Diagnóstico e torne visível aquilo que está invisível na sua empresa.
			</p>

		</div>

	</div>

	<div class='container z5'>
		<a href='<?php echo($form); ?>' target='_blank' rel='noopener' class='gray-button magnetic' data-strength='30'>
			Diagnóstico do Futuro
		</a>
	</div>

</section>

<section id='why' data-scroll-section>
	<div class='container'>

		<h2 class='text-big reveal-text blue'>
			Por que realizar o Diagnóstico?
		</h2>

		<div class='row'>

			<div class='col-md-6 col-lg-4'>

				<p>
					Todas as empresas enfrentam desafios durante a sua atuação. Aplicar as melhores práticas de Governança facilitará o seu processo de crescimento e ajudará a enfrentar momentos de crise.<br /><br />

					Saber o nível de Governança do seu negócio indicará quais as ações necessárias para facilitar o dia-a-dia e solucionar problemas corriqueiros.
				</p>

			</div>

			<div class='col-md-6 col-lg-4'>

				<p>
					Após a realização do diagnóstico você poderá agendar uma reunião de 30 minutos com um de nossos especialistas. Nesta reunião você poderá tirar dúvidas e receber direcionamentos para avançar no crescimento do seu negócio.<br /><br />

					<strong>Esta reunião é opcional e gratuita.</strong>
				</p>

			</div>

			<div class='col-lg-4'>

				<img data-src='assets/img/microscope.png' alt='Microscópio' width='452' height='576' class='lazy' data-scroll data-scroll-speed='2'>

			</div>

		</div>
	</div>
</section>

<?php include('components/animated-blocks.php'); ?>

<?php include('components/testimonials.php'); ?>

<?php include('components/also-like.php'); ?>

<section id='bottom-text' data-scroll-section>
    <div class='container'>
        <div class='flex'>

            <h2 class='text-bigger'>
                <span class='blue'>Eleve sua empresa: <br />
                da média</span> à excelência <br />
                com o Diagnóstico Weagle®
            </h2>

            <a href='<?php echo($form); ?>' class='rotating-button magnetic' target='_blank' rel='noopener' data-strength='100'>
                
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
    </div>
</section>

<?php include('components/footer.php'); ?>