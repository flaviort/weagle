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
                                        <a href='maito:<?php echo($email); ?>' class='hover-underline' style='display: inline'>
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

                        <div class='container'>
                            <div class='bottom'>

                                <h3 class='text-big'>
                                    <span>
                                        Consultoria <br />
                                        Inovativa
                                    </span>
                                </h3>

                                <div class='bottom-wrapper'>
                                    
                                    <ul>

                                        <li>
                                            <p>
                                                <b>
                                                    São Paulo
                                                </b>
                                            </p>
                                        </li>

                                        <li>
                                            <a href='#' class='hover-underline'>
                                                Alameda Rio Negro, nº 1477 <br />
                                                Alphaville - SP, 06454-040
                                            </a>
                                        </li>

                                    </ul>

                                    <ul>

                                        <li>
                                            <p>
                                                <b>
                                                    Curitiba
                                                </b>
                                            </p>
                                        </li>

                                        <li>
                                            <a href='#' class='hover-underline'>
                                                Alameda Pres. Taunay, nº 130 <br />
                                                Batel, Curitiba - PR, 80420-180
                                            </a>
                                        </li>

                                    </ul>

                                    <ul>

                                        <li>
                                            <p>
                                                <b>
                                                    Orlando
                                                </b>
                                            </p>
                                        </li>

                                        <li>
                                            <a href='#' class='hover-underline'>
                                                255 S Orange Av. Suite 104 #1279 <br />
                                                Orlando, Florida 32801 US
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            
                            </div>

                        </div>

                    </div>
                </section>

            </div><!-- end data-scroll-container -->
        </main>

        <footer>
            <script src='assets/js/vendor/jquery.min.js'></script>
            <script src='assets/js/vendor/barba.min.js'></script>
            <script src='assets/js/vendor/gsap.min.js'></script>
            <script src='assets/js/vendor/scroll-trigger.min.js'></script>
            <script src='assets/js/vendor/motion-path-plugin.min.js'></script>
            <script src='assets/js/vendor/fancybox.min.js'></script>
            <script src='assets/js/vendor/jquery.validate.min.js'></script>
            <script src='assets/js/vendor/lazyload.min.js'></script>
            <script src='assets/js/vendor/locomotive-scroll.min.js'></script>
            <script src='assets/js/vendor/swiper-bundle.min.js'></script>
            <script src='assets/js/vendor/draw-svg.js'></script>
            <script src='assets/js/vendor/split-text.js'></script>
            <script src='assets/js/functions.min.js' defer></script>
        </footer>

	</body>
</html>