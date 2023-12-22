<?php
    $podcast = [
		[
			'link' => 'https://www.youtube.com/watch?v=sQ0NEcgRyLo',
			'image' => '12.jpg',
			'title' => 'Planejamento estratégico como você nunca viu antes! Passo a passo completo'
		], [
			'link' => 'https://www.youtube.com/watch?v=RsZYCwp6oYs',
			'image' => '11.jpg',
			'title' => 'A luta do século. Empresa vs. Família. Como empreender sem perder a família.'
		], [
			'link' => 'https://www.youtube.com/watch?v=QcxnFd6qFZk',
			'image' => '10.jpg',
			'title' => 'Quer paz? A guerra dentro de empresas familiares com Franklin Shun, CEO do Grupo JACTO'
		], [
			'link' => 'https://www.youtube.com/watch?v=KbSocZ_1t2Y',
			'image' => '09.jpg',
			'title' => 'De Office Boy... A Conselheiro - Saiba exatamente como eu fiz para vencer'
		]
	];
?>

<section id='weagle-cast' class='section-padding-top' data-scroll-section>
    <div class='container'>
        
        <div class='flex'>

            <h3 class='text-big reveal-text'>
                Weagle Cast
            </h3>

            <a href='<?php echo($podcast); ?>' class='hover-underline'>
                Ver todos
            </a>

        </div>

        <div class='weagle-cast-slider animated-slider swiper-container'>
            <div class='swiper-wrapper'>

                <?php foreach ($podcast as $item): ?>
                    <div class='swiper-slide'>
                        <a href='<?= $item['link'] ?>' target='_blank' rel='noopener' class='weagle-cast-item'>
                            <div class='image'>
                            
                                <div class='youtube-icon'>
                                    <?php echo file_get_contents('assets/svg/social/youtube.svg'); ?>
                                </div>

                                <img src="assets/img/cast/<?= $item['image'] ?>" alt="<?= $item['title'] ?>" width='1280' height='720' loading='lazy'>

                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>