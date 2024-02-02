<?php
	$currentPage = 'podcast';
	$nameSpace = 'podcast';
	$pageTitle = 'Podcast';
	include('components/head.php');

	// graphql query
	$query = <<<'GRAPHQL'
		query Podcasts {
			podcasts {
				nodes {
					title
					featuredImage {
						node {
							mediaItemUrl
						}
					}
					weaglecast {
						descricao
						youtubeLink
					}
				}
			}
		}
	GRAPHQL;

	// graphql endpoint url
	$graphql_endpoint = 'https://weagle.com.br/lp/graphql';

	// curl request
	$curl = curl_init($graphql_endpoint);
	curl_setopt_array($curl, [
		CURLOPT_POST           => true,
		CURLOPT_POSTFIELDS     => json_encode(['query' => $query]),
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_HTTPHEADER     => ['Content-Type: application/json']
	]);

	// execute curl request and decode json response
	$response = curl_exec($curl);
	$data = json_decode($response, true);

	// check for errors and data presence
	if (curl_errno($curl)) {
		echo 'Error: ' . curl_error($curl);
	} elseif (!isset($data['data']['podcasts']['nodes'])) {
		echo 'Nenhum podcast encontrado.';
	} else {
		$posts = $data['data']['podcasts']['nodes'];
		// now $posts contains the podcast data fetched from wp
		// proceed to render the content as before
	}

	// close curl session
	curl_close($curl);

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
					<a href="<?= $item['weaglecast']['youtubeLink'] ?>" target="_blank" rel="noopener" class="weagle-cast-item">

						<div class="image">
							
							<div class="youtube-icon">
								<?= file_get_contents('assets/svg/social/youtube.svg') ?>
							</div>

							<img data-src="<?= $item['featuredImage']['node']['mediaItemUrl'] ?>" alt="<?= $item['title'] ?>" width="1280" height="720" class="lazy">

						</div>

						<div class="infos">
							
							<h3 class="text-medium-big">
								<?= $item['title'] ?>
							</h3>

							<p>
								<?= substr($item['weaglecast']['descricao'], 0, 150) ?>
                    			<?= strlen($item['weaglecast']['descricao']) > 150 ? '...' : '' ?>
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