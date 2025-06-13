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
                <p class="footer-description">We're a certified digital marketing agency specializing in SEO, PPC, and web development. Let us help you dominate your market with data-driven strategies.</p>
                <div class="footer-certifications">
                    <span class="cert-badge">Google Certified</span>
                    <span class="cert-badge">Meta Partner</span>
                </div>
            </div>
            
            <div class="footer-column footer-services">
                <h3>Our Services</h3>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url(); ?>#services">Search Engine Optimization</a></li>
                    <li><a href="<?php echo home_url(); ?>#services">Pay-Per-Click Advertising</a></li>
                    <li><a href="<?php echo home_url(); ?>#services">Web Development</a></li>
                    <li><a href="<?php echo home_url(); ?>#services">Social Media Marketing</a></li>
                    <li><a href="<?php echo home_url(); ?>#services">Digital Strategy</a></li>
                </ul>
            </div>
            
            <div class="footer-column footer-contact">
                <h3>Get in Touch</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="contact-icon">📍</i>
                        <span>55 Colmore Row, Birmingham B3 2AA</span>
                    </div>
                    <div class="contact-item">
                        <i class="contact-icon">📞</i>
                        <a href="tel:+441212858490">+44 121 285 8490</a>
                    </div>
                    <div class="contact-item">
                        <i class="contact-icon">✉️</i>
                        <a href="mailto:hello@aimpro.co.uk">hello@aimpro.co.uk</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-column footer-connect">
                <h3>Connect With Us</h3>
                <p class="connect-description">Follow us for the latest digital marketing insights and updates.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon" aria-label="Follow us on LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                            <rect x="2" y="9" width="4" height="12"></rect>
                            <circle cx="4" cy="4" r="2"></circle>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="Follow us on Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="Follow us on Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="#" class="social-icon" aria-label="Follow us on Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>        <div class="footer-bottom">
            <div class="copyright">
                © <?php echo date('Y'); ?> Aimpro Digital. All Rights Reserved.
            </div>
            <div class="footer-bottom-center">
                <!-- Theme Toggle Button -->
                <div class="footer-theme-toggle">
                    <span class="toggle-label">Theme</span>
                    <button class="theme-toggle" aria-label="Switch to dark theme" title="Toggle Theme">
                        <span class="theme-icon sun-icon">☀️</span>
                        <span class="theme-icon moon-icon">🌙</span>
                    </button>
                </div>
            </div>
            <div class="footer-bottom-links">
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
