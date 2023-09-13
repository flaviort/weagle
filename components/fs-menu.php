<section id='fs-menu' style='opacity: 0;'>

    <button class='close-fs'>
        <?php echo file_get_contents('assets/svg/ux/close.svg'); ?>
    </button>

    <div class='scroll-wrapper'>

        <ul class='menu'>

            <li>
                <a href='about-us'>
                    About Us
                </a>
            </li>

            <li class='has-sub'>
                
                <div class='wrapper'>

                    <p>
                        Services
                    </p>

                    <div class='arrow'>
                        <?php echo file_get_contents('assets/svg/ux/angle-down.svg'); ?>
                    </div>

                </div>

                <ul class='sub'>
                    
                    <li>
                        <a href='ppc-management'>
                            PPC Management
                        </a>
                    </li>

                    <li>
                        <a href='seo-management'>
                            SEO Management
                        </a>
                    </li>

                    <li>
                        <a href='social-media-marketing'>
                            Social Media Marketing
                        </a>
                    </li>

                    <li>
                        <a href='shopify-experts'>
                            Shopify Experts
                        </a>
                    </li>

                    <li>
                        <a href='email-marketing'>
                            Email Marketing
                        </a>
                    </li>

                    <li>
                        <a href='website-design-and-development'>
                            Website Design & Development
                        </a>
                    </li>

                </ul>
            </li>

            <li>
                <a href='contact'>
                    Contact
                </a>
            </li>

        </ul>

        <ul class='social'>

            <li>
                <a href='<?php echo($twitter); ?>' target='_blank'>
                    Twitter
                </a>
            </li>

            <li>
                <a href='<?php echo($facebook); ?>' target='_blank'>
                    Facebook
                </a>
            </li>

            <li>
                <a href='<?php echo($instagram); ?>' target='_blank'>
                    Instagram
                </a>
            </li>

        </ul>

        <p class='contact'>
            Let's Work Together:<br />
            <a href='mailto:<?php echo($email); ?>' class='hover-underline'>
                <?php echo($email); ?>
            </a>
        </p>

    </div>

</section>

<div class='blur'></div>