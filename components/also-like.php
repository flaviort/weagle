<?php

	// set local time / language to brasil
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

	// graphql query
	$query = <<<'GRAPHQL'
		query Posts {
			posts(first: 5) {
				nodes {
					date
					title
					link
					slug
					id
					featuredImage {
						node {
							mediaItemUrl
						}
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
	} elseif (!isset($data['data']['posts']['nodes'])) {
		echo 'Nenhum post encontrado.';
	} else {
		$posts = $data['data']['posts']['nodes'];
		// now $posts contains the podcast data fetched from wp
		// proceed to render the content as before
	}

	// close curl session
	curl_close($curl);
?>

<section id='also-like' data-scroll-section>
    <div class='container'>

        <div class='animated-line'></div>
        
        <div class='flex'>

            <h3 class='text-big reveal-text'>
                Últimas postagens
            </h3>

            <a href='<?php echo($blog); ?>' class='hover-underline'>
                Ver todas
            </a>

        </div>

        <div class='also-like-slider animated-slider swiper-container'>
            <div class='swiper-wrapper'>

                <?php
                    foreach ($posts as $index => $item):
                        if ($index >= 4) break;
                        $date = new DateTime($item['date']);
				        $formattedDate = strftime('%d de %B de %Y', $date->getTimestamp());
                ?>
                    <div class='swiper-slide'>
                        <a href='post?slug=<?= $item['slug'] ?>' class='blog-item'>
                            
                            <div class='image'>
                                <img src='<?= $item['featuredImage']['node']['mediaItemUrl'] ?>' alt='<?= $item['title'] ?>' width='1200' height='700' loading='lazy'>
                            </div>

                            <div class='infos'>

                                <p class='text-medium-big hover-underline'>
                                    <?= $item['title'] ?>
                                </p>

                                <p class='date'>
                                    <?= $formattedDate ?>
                                </p>

                            </div>

                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>