                <section id='truck' data-scroll-section>

                    <div class='side'>
                        <?php echo file_get_contents('assets/svg/curve-bottom-right.svg'); ?>
                    </div>

                    <div class='shape'>
                        <?php echo file_get_contents('assets/svg/shape.svg'); ?>
                    </div>

                    <div class='animated-truck'>
                        <?php echo file_get_contents('assets/svg/truck.svg'); ?>
                    </div>

                </section>
                
                <section id='footer' data-scroll-section>
                    <div class='footer-wrapper' data-scroll data-scroll-speed='-4' data-scroll-position='bottom'>
                        <div class='container'>

                            <a href='./' class='logo magnetic' data-strength='30'>
                                <?php echo file_get_contents('assets/svg/icon.svg'); ?>
                            </a>

                            <div class='right'>

                                <div class='line'></div>

                                <ul>
                                    
                                    <li>
                                        <a href='<?php echo($sobre); ?>' class='hover-underline'>
                                            Sobre Nós
                                        </a>
                                    </li>

                                    <li>
                                        <a href='<?php echo($diagnostico); ?>' class='hover-underline'>
                                            Diagnóstico
                                        </a>
                                    </li>

                                    <li>
                                        <a href='<?php echo($podcast); ?>' class='hover-underline'>
                                            Podcast
                                        </a>
                                    </li>

                                </ul>

                                <ul>

                                    <li>
                                        <a href='tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>' class='hover-underline'>
                                            <?php echo file_get_contents('assets/svg/ux/phone.svg'); ?>
                                            <?php echo($phone); ?>
                                        </a>
                                    </li>

                                    <li>
                                        <a href='tel:<?php echo preg_replace('/[^0-9]/', '', $phone2); ?>' class='hover-underline'>
                                        <?php echo file_get_contents('assets/svg/ux/whatsapp.svg'); ?>
                                            <?php echo($phone2); ?>
                                        </a>
                                    </li>

                                    <li>
                                        <a href='https://maps.app.goo.gl/NvDe7NpdLNwGBYY56' target='_blank' rel='noopener' class='hover-underline'>
                                            <?php echo file_get_contents('assets/svg/ux/pin.svg'); ?>
                                            <?php echo($address); ?>
                                        </a>
                                    </li>

                                </ul>

                                <ul>

                                    <li>
                                        <a href='<?php echo($linkedin); ?>' target='_blank' rel='noopener' class='hover-underline'>
                                            Linkedin
                                        </a>
                                    </li>

                                    <li>
                                        <a href='<?php echo($youtube); ?>' target='_blank' rel='noopener' class='hover-underline'>
                                            Youtube
                                        </a>
                                    </li>

                                    <li>
                                        <a href='<?php echo($instagram); ?>' target='_blank' rel='noopener' class='hover-underline'>
                                            Instagram
                                        </a>
                                    </li>

                                </ul>

                                <ul class='last'>

                                    <li>
                                        <a href='<?php echo($email); ?>' class='hover-underline'>
                                            comercial@<br />
                                            weagle.com.br
                                        </a>
                                    </li>

                                    <li>
                                        <p>
                                            Todos os direitos<br />
                                            reservados © <?php echo date('Y'); ?>
                                        </p>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </section>

            </div><!-- end data-scroll-container -->
        </main>

        <footer>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/@barba/core'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.6.1/dist/lazyload.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js'></script>
            <script src='assets/js/framework.js'></script>
            <script src='assets/js/functions.js' defer></script>
        </footer>

	</body>
</html>