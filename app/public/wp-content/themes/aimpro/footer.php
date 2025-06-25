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
                    <span class="cert-badge">Meta Partner</span>
                </div>
            </div>
              <div class="footer-column footer-services">
                <h3>Our Services</h3>                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/seo-services'); ?>">Search Engine Optimisation</a></li>
                    <li><a href="<?php echo home_url('/advertising-ppc'); ?>">Pay-Per-Click Advertising</a></li>
                    <li><a href="<?php echo home_url('/website-development'); ?>">Web Development</a></li>
                    <li><a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">All Services</a></li>
                </ul>
            </div>            <div class="footer-column footer-contact">
                <h3>Get in Touch</h3>
                <span>55 Colmore Row, Birmingham B3 2AA</span>
                <a href="tel:+441212858490">0121 285 8490</a>
                <a href="mailto:hello@aimpro.co.uk">hello@aimpro.co.uk</a>
            </div>
              <div class="footer-column footer-connect">
                <h3>Connect With Us</h3>
                <p class="connect-description">Follow us for the latest digital marketing insights and updates.</p>                <div class="social-icons">
                    <a href="#" class="social-icon" aria-label="Follow us on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Follow us on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon" aria-label="Follow us on Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@AimproDigital/videos" class="social-icon" aria-label="Subscribe to our YouTube channel" target="_blank" rel="noopener">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div><!-- Theme Toggle Button -->
                <div class="footer-theme-toggle">
                    <span class="toggle-label">Theme</span>
                    <button class="theme-toggle" aria-label="Switch to dark theme" title="Toggle Theme">
                        <span class="theme-icon sun-icon">
                            <i class="fas fa-sun"></i>
                        </span>
                        <span class="theme-icon moon-icon">
                            <i class="fas fa-moon"></i>
                        </span>
                    </button>
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
                <a href="#" class="footer-link">Privacy Policy</a>
                <a href="#" class="footer-link">Terms of Service</a>
                <a href="#" class="footer-link">Sitemap</a>
            </div>
        </div></div>
</footer>

<?php wp_footer(); ?>

<!-- Enhanced Testimonials Carousel Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('testimonials-track');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dotsContainer = document.getElementById('dots-container');
    const dots = dotsContainer.querySelectorAll('.dot');
    
    if (!track || !prevBtn || !nextBtn) return;
    
    let currentSlide = 0;
    const totalSlides = track.children.length;
    let isAutoPlay = true;
    let autoPlayInterval;
    
    // Calculate slide width based on container
    function getSlideWidth() {
        const container = track.parentElement;
        return container.offsetWidth;
    }
    
    // Update carousel position
    function updateCarousel() {
        const slideWidth = getSlideWidth();
        const translateX = -currentSlide * (slideWidth + 40); // 40px gap
        track.style.transform = `translateX(${translateX}px)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
        
        // Update button states
        prevBtn.style.opacity = currentSlide === 0 ? '0.5' : '1';
        nextBtn.style.opacity = currentSlide === totalSlides - 1 ? '0.5' : '1';
    }
    
    // Go to specific slide
    function goToSlide(slideIndex) {
        currentSlide = Math.max(0, Math.min(slideIndex, totalSlides - 1));
        updateCarousel();
    }
    
    // Next slide
    function nextSlide() {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
        } else {
            currentSlide = 0; // Loop back to first
        }
        updateCarousel();
    }
    
    // Previous slide
    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
        } else {
            currentSlide = totalSlides - 1; // Loop to last
        }
        updateCarousel();
    }
    
    // Auto play functionality
    function startAutoPlay() {
        if (isAutoPlay) {
            autoPlayInterval = setInterval(nextSlide, 5000); // 5 seconds
        }
    }
    
    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
        nextSlide();
        stopAutoPlay();
        setTimeout(startAutoPlay, 10000); // Restart after 10 seconds
    });
    
    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopAutoPlay();
        setTimeout(startAutoPlay, 10000); // Restart after 10 seconds
    });
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            stopAutoPlay();
            setTimeout(startAutoPlay, 10000); // Restart after 10 seconds
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            prevSlide();
            stopAutoPlay();
            setTimeout(startAutoPlay, 10000);
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopAutoPlay();
            setTimeout(startAutoPlay, 10000);
        }
    });
    
    // Touch/swipe support
    let startX = 0;
    let endX = 0;
    
    track.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        stopAutoPlay();
    });
    
    track.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        const difference = startX - endX;
        
        if (Math.abs(difference) > 50) { // Minimum swipe distance
            if (difference > 0) {
                nextSlide();
            } else {
                prevSlide();
            }
        }
        
        setTimeout(startAutoPlay, 10000);
    });
    
    // Pause on hover
    track.addEventListener('mouseenter', stopAutoPlay);
    track.addEventListener('mouseleave', startAutoPlay);
    
    // Handle resize
    window.addEventListener('resize', () => {
        updateCarousel();
    });
    
    // Initialize
    updateCarousel();
    startAutoPlay();
    
    // Intersection Observer for performance
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startAutoPlay();
            } else {
                stopAutoPlay();
            }
        });
    });
    
    observer.observe(track);
});
</script>

</body>
</html>
