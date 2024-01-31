<base href='/clients/weagle/'>

<?php
    // set local time / language to brasil
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

    // graphql query
    $query = <<<'GRAPHQL'
        query Post($slug: ID!) {
            post(id: $slug, idType: SLUG) {
                date
                title
                slug
                id
                content
                featuredImage {
                    node {
                        mediaItemUrl
                    }
                }
            }
        }
    GRAPHQL;

    // graphql endpoint url
    $graphql_endpoint = 'https://weagle.com.br/lp/graphql';

    // get the post slug from the URL parameter
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    $slug = end($uri_segments);

    // curl request
    $curl = curl_init($graphql_endpoint);
    curl_setopt_array($curl, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode(['query' => $query, 'variables' => ['slug' => $slug]]),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json']
    ]);

    // execute curl request and decode json response
    $response = curl_exec($curl);
    $data = json_decode($response, true);

    // check for errors and data presence
    if (curl_errno($curl)) {
        echo 'Error: ' . curl_error($curl);
    } elseif (!isset($data['data']['post'])) {
        echo 'Nenhum post encontrado.';
    } else {
        $post = $data['data']['post'];
        // now $post contains the post data fetched from the GraphQL endpoint
        // proceed to render the content as before

        $date = new DateTime($post['date']);
        // Format the date as desired
        $formattedDate = strftime('%d de %B de %Y', $date->getTimestamp());
    }

    // close curl session
    curl_close($curl);

    $currentPage = 'blog-inner full-white-menu';
    $nameSpace = 'internal blog-inner';
    $postTitle = $post['title'];
    $pageTitle = 'Leia Mais';
    include('components/head.php');
?>

<section id='banner' data-scroll-section>

	<div class='cover' data-scroll data-scroll-speed='-3' data-scroll-position='top'>
		<img data-src='<?= $post['featuredImage']['node']['mediaItemUrl'] ?>' alt='<?= $post['title'] ?>' width='1200' height='700' class='lazy cover'>
	</div>

	<div class='container white z5 transitionUp'>

		<h1 class='text-big'>
			<?= $post['title'] ?>
		</h1>

		<p class='date'>
			<?= $formattedDate ?>
		</p>

	</div>

	<div class='bottom'>
		<div class='bg-white'></div>
		<div class='corner'></div>
	</div>

</section>

<section id='middle' class='section-padding-top z5 bg-transparent' data-scroll-section>
	<div class='container'>

		<?= $post['content'] ?>

	</div>
</section>

<?php include('components/also-like.php'); ?>

<?php include('components/bottom-text.php'); ?>

<?php include('components/footer.php'); ?>