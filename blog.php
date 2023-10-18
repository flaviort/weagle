<?php
	$currentPage = 'blog full-white-menu';
	$nameSpace = 'internal blog';
	$pageTitle = 'Blog';
	include('components/head.php');
?>

<section id='banner' class='z5' data-scroll-section>
	<div class='container transitionUp white'>

		<h1 class='text-biggest bold'>
			Weagle Blog
		</h1>

		<div class='texts'>
			
			<p>
				Vamos te ajudar a construir, organizar e vender o seu negócio.
			</p>

			<p>
				Todo negócio terá apenas 3 destinos: Sucessão, venda ou falência.
			</p>

		</div>

		<img data-src='assets/img/books.png' alt='Livros' class='lazy'>

	</div>
</section>

<section id='middle' class='section-padding-top-big transitionUp' data-scroll-section>

	<div class='bg'>
		<?php echo file_get_contents('assets/svg/curve-top-right.svg'); ?>
	</div>

	<div class='container z5'>
		<div class='row'>
			
			<div class='col-md-6'>
				<div class='blog-item'>
					
					<a href='blog-inner' class='image'>
						<img data-src='assets/img/blog/06.jpg' alt='Decifrando os Estágios Empresariais: O Guia para Reconhecer e Navegar pelos Momentos de Declínio, Estagnação e Crescimento' class='lazy'>
					</a>

					<div class='infos'>

						<a href='blog-inner' class='text-medium-big hover-underline'>
							Decifrando os Estágios Empresariais: O Guia para Reconhecer e Navegar pelos Momentos de Declínio, Estagnação e Crescimento
						</a>

						<p class='date'>
							24 de agosto de 2023
						</p>

						<a href='blog-inner' class='blue-button-small magnetic' data-strength='30'>
							Leia mais
						</a>

					</div>

				</div>
			</div>

			<div class='col-md-6'>
				<div class='blog-item'>
					
					<a href='blog-inner' class='image'>
						<img data-src='assets/img/blog/05.jpg' alt='Empresário é tudo mentiroso. Eu fui enganado e estou morrendo.' class='lazy'>
					</a>

					<div class='infos'>

						<a href='blog-inner' class='text-medium-big hover-underline'>
							Empresário é tudo mentiroso. Eu fui enganado e estou morrendo.
						</a>

						<p class='date'>
							24 de agosto de 2023
						</p>

						<a href='blog-inner' class='blue-button-small magnetic' data-strength='30'>
							Leia mais
						</a>

					</div>

				</div>
			</div>

			<div class='col-md-6'>
				<div class='blog-item'>
					
					<a href='blog-inner' class='image'>
						<img data-src='assets/img/blog/04.jpg' alt='Como evitar os erros que impedem pequenas empresas de crescer? Questões Práticas!' class='lazy'>
					</a>

					<div class='infos'>

						<a href='blog-inner' class='text-medium-big hover-underline'>
							Como evitar os erros que impedem pequenas empresas de crescer? Questões Práticas!
						</a>

						<p class='date'>
							24 de agosto de 2023
						</p>

						<a href='blog-inner' class='blue-button-small magnetic' data-strength='30'>
							Leia mais
						</a>

					</div>

				</div>
			</div>

			<div class='col-md-6'>
				<div class='blog-item'>
					
					<a href='blog-inner' class='image'>
						<img data-src='assets/img/blog/03.jpg' alt='Guia Completo de Utilização do Scrum para Obter Resultados de Sucesso' class='lazy'>
					</a>

					<div class='infos'>

						<a href='blog-inner' class='text-medium-big hover-underline'>
							Guia Completo de Utilização do Scrum para Obter Resultados de Sucesso
						</a>

						<p class='date'>
							24 de agosto de 2023
						</p>

						<a href='blog-inner' class='blue-button-small magnetic' data-strength='30'>
							Leia mais
						</a>

					</div>

				</div>
			</div>

			<div class='col-md-6'>
				<div class='blog-item'>
					
					<a href='blog-inner' class='image'>
						<img data-src='assets/img/blog/02.jpg' alt='Pequenas e médias empresas precisam de Conselho?' class='lazy'>
					</a>

					<div class='infos'>

						<a href='blog-inner' class='text-medium-big hover-underline'>
							Pequenas e médias empresas precisam de Conselho?
						</a>

						<p class='date'>
							24 de agosto de 2023
						</p>

						<a href='blog-inner' class='blue-button-small magnetic' data-strength='30'>
							Leia mais
						</a>

					</div>

				</div>
			</div>

			<div class='col-md-6'>
				<div class='blog-item'>
					
					<a href='blog-inner' class='image'>
						<img data-src='assets/img/blog/01.jpg' alt='4 Segredos para Liderar Equipes e ter Sucesso no Negócio' class='lazy'>
					</a>

					<div class='infos'>

						<a href='blog-inner' class='text-medium-big hover-underline'>
							4 Segredos para Liderar Equipes e ter Sucesso no Negócio
						</a>

						<p class='date'>
							24 de agosto de 2023
						</p>

						<a href='blog-inner' class='blue-button-small magnetic' data-strength='30'>
							Leia mais
						</a>

					</div>

				</div>
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