<?php
/**
 * Header template for Aimpro Digital theme
 */
?>
<!-- Sticky Header -->
<header class="sticky-header glassmorphism-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo home_url(); ?>" class="logo-link" aria-label="Aimpro Digital - Home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-Digital-UK-Final-Logo.png" alt="Aimpro Digital - Award-Winning Digital Marketing Agency" class="logo-image" width="200" height="45">
                </a>
            </div>
            <nav class="main-nav">                <ul>
                    <li><a href="<?php echo home_url(); ?>" class="nav-link">Home</a></li>
                    <li><a href="<?php echo home_url(); ?>#services" class="nav-link">Services</a></li>
                    <li><a href="<?php echo home_url('/about'); ?>" class="nav-link">About</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('insight'); ?>" class="nav-link">Insights</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>" class="nav-link">Blog</a></li>
                    <li><a href="<?php echo home_url(); ?>#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="header-ctas">
                <a href="<?php echo home_url(); ?>#contact" class="btn-outline premium-hover">Get a Free Audit</a>
                <a href="tel:+441212858490" class="btn-primary shine-effect">Book a Call</a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle Mobile Menu">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>
    </div>
</header>
