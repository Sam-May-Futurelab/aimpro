<?php
/**
 * Footer template for Aimpro Digital theme
 */
?>
<footer class="footer-section">
    <div class="footer-background-pattern"></div>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column footer-brand">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-Digital-UK-Final-Logo.png" alt="Aimpro Digital - Digital Marketing Agency" class="footer-logo-img">
                    <p class="brand-tagline">Transforming Businesses Through Digital Excellence</p>
                </div>
                <p class="footer-description">We're a certified digital marketing agency specialising in SEO, PPC, and web development. Let us help you dominate your market with data-driven strategies.</p>
                <div class="footer-certifications">
                    <span class="cert-badge">Google Certified</span>
                </div>
            </div>
              <div class="footer-column footer-services">
                <h3>Our Services</h3>                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/seo-services'); ?>">Search Engine Optimisation</a></li>
                    <li><a href="<?php echo home_url('/advertising-ppc'); ?>">Pay-Per-Click Advertising</a></li>
                    <li><a href="<?php echo home_url('/website-development'); ?>">Web Development</a></li>
                    <li><a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">All Services</a></li>
                    <li><a href="<?php echo home_url('/locations'); ?>">Locations</a></li>
                </ul>
            </div>            <div class="footer-column footer-contact">
                <h3>Get in Touch</h3>
                <span>55 Colmore Row, Birmingham B3 2AA</span>
                <a href="tel:+441212858490">0121 285 8490</a>
                <a href="mailto:hello@aimpro.co.uk">hello@aimpro.co.uk</a>
            </div>
              <div class="footer-column footer-connect">
                <h3>Connect With Us</h3>
                <p class="connect-description">Follow us for the latest digital marketing insights and updates.</p>                <div class="social-icons" style="justify-content: center;">
                    <a href="https://www.linkedin.com/company/105243652/admin/dashboard/" class="social-icon" aria-label="Follow us on LinkedIn" target="_blank" rel="noopener">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.youtube.com/ajaydhunna" class="social-icon" aria-label="Subscribe to our YouTube channel" target="_blank" rel="noopener">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>        <div class="footer-bottom">
            <div class="copyright">
                © <?php echo date('Y'); ?> Aimpro Digital. All Rights Reserved.
            </div>            <div class="designer-credit">
                <span class="credit-text">Designed by</span>
                <a href="<?php echo home_url('/website-development'); ?>" class="aimpro-link">Aimpro</a>
            </div>
            <div class="footer-bottom-links">
                <a href="<?php echo home_url('/contact'); ?>" class="footer-link">Contact Us</a>
                <a href="<?php echo home_url('/privacy-policy'); ?>" class="footer-link">Privacy Policy</a>
                <a href="<?php echo home_url('/terms-of-service'); ?>" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Sitemap</a>
            </div>
        </div></div>
</footer>

<?php wp_footer(); ?>



</body>
</html>
