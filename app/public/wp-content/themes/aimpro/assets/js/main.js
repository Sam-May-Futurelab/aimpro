// Enhanced JavaScript for Aimpro Digital
document.addEventListener('DOMContentLoaded', function() {
    
    // Loading Screen Management
    const loadingScreen = document.getElementById('loading-screen');
    const loadingText = document.querySelector('.loading-text');
    const loadingMessages = [
        'Crafting your digital success...',
        'Optimizing for performance...',
        'Loading premium experience...',
        'Almost ready...'
    ];
    let messageIndex = 0;
    
    // Rotate loading messages
    const messageInterval = setInterval(() => {
        messageIndex = (messageIndex + 1) % loadingMessages.length;
        if (loadingText) {
            loadingText.textContent = loadingMessages[messageIndex];
        }
    }, 1500);
    
    // Hide loading screen when page is fully loaded
    window.addEventListener('load', function() {
        clearInterval(messageInterval);
        setTimeout(() => {
            if (loadingScreen) {
                loadingScreen.classList.add('fade-out');
                setTimeout(() => {
                    loadingScreen.style.display = 'none';
                }, 500);
            }
        }, 1000); // Show loading screen for at least 1 second
    });
    
    // Back to Top Button
    const backToTop = document.createElement('button');
    backToTop.className = 'back-to-top';
    backToTop.innerHTML = '↑';
    backToTop.setAttribute('aria-label', 'Back to top');
    backToTop.setAttribute('title', 'Back to top');
    document.body.appendChild(backToTop);
    
    // Show/hide back to top button
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });
    
    // Back to top click handler
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Enhanced Error Handling
    window.addEventListener('error', function(e) {
        console.error('JavaScript Error:', e.error);
        // Could implement user-friendly error reporting here
    });
    
    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', function() {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                if (perfData && perfData.loadEventEnd - perfData.loadEventStart > 3000) {
                    console.log('Page load time is high, consider optimizing');
                }
            }, 0);
        });
    }
    
    // Enhanced keyboard navigation
    document.addEventListener('keydown', function(e) {
        // Escape key closes mobile menu
        if (e.key === 'Escape') {
            const mobileToggle = document.querySelector('.mobile-menu-toggle');
            const mainNav = document.querySelector('.main-nav');
            if (mobileToggle && mobileToggle.classList.contains('active')) {
                mobileToggle.classList.remove('active');
                mainNav.classList.remove('mobile-active');
            }
        }
        
        // Space or Enter on CTA buttons
        if ((e.key === ' ' || e.key === 'Enter') && e.target.classList.contains('btn')) {
            e.preventDefault();
            e.target.click();
        }
    });
    
    // Lazy loading for images (if not using native lazy loading)
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Progressive Web App prompt handling
    let deferredPrompt;
    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        
        // Could show custom install button here
        console.log('PWA install prompt available');
    });
    
    // Enhanced analytics tracking (placeholder)
    function trackEvent(category, action, label) {
        // Google Analytics or other analytics integration
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                event_category: category,
                event_label: label
            });
        }
        console.log(`Track: ${category} - ${action} - ${label}`);
    }
    
    // Track CTA clicks
    document.querySelectorAll('.btn, .btn-primary, .btn-secondary').forEach(button => {
        button.addEventListener('click', function() {
            const buttonText = this.textContent.trim();
            trackEvent('CTA', 'click', buttonText);
        });
    });
    
    // Track scroll depth
    let maxScroll = 0;
    window.addEventListener('scroll', function() {
        const scrollPercent = Math.round(
            (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100
        );
        
        if (scrollPercent > maxScroll && scrollPercent % 25 === 0) {
            maxScroll = scrollPercent;
            trackEvent('Scroll', 'depth', `${scrollPercent}%`);
        }
    });

    // Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    const headerCtas = document.querySelector('.header-ctas');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mainNav.classList.toggle('mobile-active');
            headerCtas.classList.toggle('mobile-active');
        });
    }    // Header Scroll Effect
    const header = document.querySelector('.sticky-header');
    let lastScroll = 0;

    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.99)';
            header.style.backdropFilter = 'blur(10px)';
            header.style.boxShadow = '0 4px 24px rgba(0, 0, 0, 0.12)';
            header.classList.add('scrolled');
        } else {
            header.style.background = 'rgba(255, 255, 255, 0.98)';
            header.style.backdropFilter = 'blur(8px)';
            header.style.boxShadow = '0 2px 16px rgba(0, 0, 0, 0.08)';
            header.classList.remove('scrolled');
        }

        // Hide/show header on scroll
        if (currentScroll > lastScroll && currentScroll > 200) {
            header.style.transform = 'translateY(-100%)';
        } else {
            header.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll;
    });// Animated Stats Counter
    function animateStats() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalNumber = parseInt(target.getAttribute('data-count'));
                    const currentText = target.textContent;
                    const suffix = currentText.replace(/[\d]/g, ''); // Extract non-numeric characters
                    let currentNumber = 0;
                    const increment = finalNumber / 50; // Smoother animation
                    const duration = 2000; // 2 seconds
                    const interval = duration / 50;

                    const counter = setInterval(() => {
                        currentNumber += increment;
                        if (currentNumber >= finalNumber) {
                            target.textContent = finalNumber + suffix;
                            clearInterval(counter);
                        } else {
                            target.textContent = Math.floor(currentNumber) + suffix;
                        }
                    }, interval);

                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.3 });

        statNumbers.forEach(stat => observer.observe(stat));
    }

    // Initialize stats animation
    animateStats();

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });    // Enhanced Service Cards with Magnetic Effect
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
        
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.boxShadow = '0 25px 50px rgba(0, 0, 0, 0.15)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
        });
        
        // Add magnetic effect on hover
        card.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const deltaX = (x - centerX) * 0.03;
            const deltaY = (y - centerY) * 0.03;
            
            this.style.transform = `translateY(-10px) scale(1.02) translate(${deltaX}px, ${deltaY}px)`;
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1) translate(0, 0)';
        });
    });

    // Button Ripple Effect
    document.querySelectorAll('.btn, .btn-primary, .btn-secondary').forEach(button => {
        button.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const ripple = document.createElement('span');
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s linear;
                background: rgba(255, 255, 255, 0.3);
                left: ${x}px;
                top: ${y}px;
                width: ${size}px;
                height: ${size}px;
                pointer-events: none;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // Scroll Reveal Animation
    const revealElements = document.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card, .stat-item');
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });

    revealElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        revealObserver.observe(element);
    });

    // Enhanced Tag Animation
    const tags = document.querySelectorAll('.tag');
    tags.forEach((tag, index) => {
        tag.style.animationDelay = `${index * 0.1}s`;
        
        tag.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px) scale(1.05)';
            this.style.boxShadow = '0 10px 20px rgba(255, 184, 0, 0.3)';
        });
        
        tag.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
        });
    });

    // Blog Cards Enhanced Animation
    const blogCards = document.querySelectorAll('.blog-card');
    blogCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const readMore = this.querySelector('.read-more');
            if (readMore) {
                readMore.style.transform = 'translateX(5px)';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const readMore = this.querySelector('.read-more');
            if (readMore) {
                readMore.style.transform = 'translateX(0)';
            }
        });
    });

    // Footer Social Icons Animation
    const socialIcons = document.querySelectorAll('.social-icon');
    socialIcons.forEach((icon, index) => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) rotate(5deg) scale(1.1)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0deg) scale(1)';
        });
    });

    // Add scroll progress indicator
    const scrollIndicator = document.createElement('div');
    scrollIndicator.className = 'scroll-indicator';
    document.body.appendChild(scrollIndicator);

    window.addEventListener('scroll', function() {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        scrollIndicator.style.setProperty('--scroll-width', scrolled + '%');
    });    // Note: serviceCards already handled above with magnetic effects

    // Enhanced CTA button tracking effect
    document.querySelectorAll('.btn-primary, .btn-secondary, .btn-ghost').forEach(button => {
        button.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            
            this.style.background = `radial-gradient(circle at ${x}% ${y}%, rgba(255,255,255,0.2) 0%, transparent 50%), ${this.style.background || 'linear-gradient(135deg, #FFD700 0%, #FFA500 100%)'}`;
        });
        
        button.addEventListener('mouseleave', function() {
            this.style.background = '';
        });
    });

    // Premium loading effect for page
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
        
        // Trigger stagger animations for all cards
        const animatedElements = document.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card');
        animatedElements.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });

    // Enhanced mobile menu with slide effect
    if (window.innerWidth <= 768) {
        const nav = document.querySelector('.main-nav');
        if (nav) {
            nav.style.transform = 'translateX(-100%)';
            nav.style.transition = 'transform 0.3s ease';
        }
        
        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                const nav = document.querySelector('.main-nav');
                if (nav.classList.contains('mobile-active')) {
                    nav.style.transform = 'translateX(0)';
                } else {
                    nav.style.transform = 'translateX(-100%)';
                }
            });
        }
    }

    // Enhanced Intersection Observer for Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const animationObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Add staggered animation for card grids
                if (entry.target.classList.contains('grid') || 
                    entry.target.classList.contains('team-grid') ||
                    entry.target.classList.contains('testimonials-grid') ||
                    entry.target.classList.contains('blog-grid')) {
                    
                    const cards = entry.target.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('visible');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe all animation elements
    const animatedElements = document.querySelectorAll('.fade-in, .slide-up, .service-card, .team-member, .testimonial-card, .blog-card, .stat-item');
    animatedElements.forEach(el => {
        animationObserver.observe(el);
    });

    // Enhanced Form Handling (if forms exist)
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
            if (submitBtn) {
                submitBtn.style.pointerEvents = 'none';
                submitBtn.style.opacity = '0.7';
                
                // Re-enable after 3 seconds to prevent spam
                setTimeout(() => {
                    submitBtn.style.pointerEvents = 'auto';
                    submitBtn.style.opacity = '1';
                }, 3000);
            }
        });
    });

    // Enhanced Button Click Effects
    document.querySelectorAll('.btn, .btn-primary, .btn-secondary, .btn-outline').forEach(button => {
        button.addEventListener('click', function(e) {
            // Create ripple effect
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                width: ${size}px;
                height: ${size}px;
                left: ${x}px;
                top: ${y}px;
                background: rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                transform: scale(0);
                animation: ripple 0.6s ease-out;
                pointer-events: none;
                z-index: 1;
            `;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    // CSS for ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        .btn, .btn-primary, .btn-secondary, .btn-outline {
            position: relative;
            overflow: hidden;
        }
    `;
    document.head.appendChild(style);    // Initialize Lottie Hero Animation
    function initLottieHeroAnimation() {
        const container = document.getElementById('lottie-hero-animation');
        if (container && typeof lottie !== 'undefined') {
            // Add loading class
            container.classList.add('loading');
            
            try {
                // Load and play the hero animation
                const animation = lottie.loadAnimation({
                    container: container,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: aimpro_data.theme_url + '/assets/images/hero.json'
                });
                
                // Handle successful load
                animation.addEventListener('DOMLoaded', function() {
                    container.classList.remove('loading');
                    console.log('Lottie hero animation loaded successfully');
                });
                
                // Handle error
                animation.addEventListener('error', function(error) {
                    container.classList.remove('loading');
                    console.warn('Lottie animation failed to load:', error);
                });
                
            } catch (error) {
                container.classList.remove('loading');
                console.warn('Failed to initialize Lottie animation:', error);
            }
        } else if (container) {
            console.warn('Lottie library not available or container not found');
        }
    }
      // Initialize Lottie animation after DOM is ready
    initLottieHeroAnimation();    // Initialize Lottie Stats Animation
    function initLottieStatsAnimation() {
        const animationIds = ['lottie-stats-animation-left', 'lottie-stats-animation-center', 'lottie-stats-animation-right'];
        const animations = [];
        
        animationIds.forEach((id) => {
            const container = document.getElementById(id);
            
            if (container && typeof lottie !== 'undefined') {
                container.classList.add('loading');
                
                try {
                    const animation = lottie.loadAnimation({
                        container: container,
                        renderer: 'svg',
                        loop: true,
                        autoplay: true,
                        path: aimpro_data.theme_url + '/assets/images/stats.json'
                    });
                    
                    animation.addEventListener('DOMLoaded', function() {
                        container.classList.remove('loading');
                    });
                    
                    animations.push(animation);
                    
                } catch (error) {
                    container.classList.remove('loading');
                    console.warn(`Failed to load animation ${id}:`, error);
                }
            }
        });
        
        return animations;
    }
      // Initialize stats animation after DOM is ready
    setTimeout(() => {
        initLottieStatsAnimation();
    }, 500); // Add delay to ensure everything is loaded
    
    // Re-initialize if needed (for dynamic content)
    document.addEventListener('lottie-hero-refresh', initLottieHeroAnimation);
    document.addEventListener('lottie-stats-refresh', initLottieStatsAnimation);

});

// CSS Animations for Ripple Effect
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    .btn, .btn-primary, .btn-secondary {
        position: relative;
        overflow: hidden;
    }
    
    /* Enhanced Hover Animations */
    .service-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .team-member {
        transition: all 0.3s ease;
    }
    
    .blog-card {
        transition: all 0.3s ease;
    }
    
    /* Stagger Animation for Grid Items */
    .service-card:nth-child(1) { animation-delay: 0s; }
    .service-card:nth-child(2) { animation-delay: 0.1s; }
    .service-card:nth-child(3) { animation-delay: 0.2s; }
    .service-card:nth-child(4) { animation-delay: 0.3s; }
    .service-card:nth-child(5) { animation-delay: 0.4s; }
    .service-card:nth-child(6) { animation-delay: 0.5s; }
    
    .team-member:nth-child(1) { animation-delay: 0s; }
    .team-member:nth-child(2) { animation-delay: 0.2s; }
    .team-member:nth-child(3) { animation-delay: 0.4s; }
    
    /* Enhanced Button Glow Effect */
    .btn-primary:hover {
        box-shadow: 0 0 30px rgba(255, 184, 0, 0.6), 0 8px 25px rgba(255, 184, 0, 0.4);
    }
    
    .btn-secondary:hover {
        box-shadow: 0 0 20px rgba(255, 184, 0, 0.4), 0 8px 25px rgba(255, 184, 0, 0.3);
    }
    
    /* Scroll Indicator Style */
    .scroll-indicator {
        position: fixed;
        top: 0;
        left: 0;
        height: 4px;
        background: rgba(255, 184, 0, 0.8);
        z-index: 1000;
        width: var(--scroll-width, 0%);
        transition: width 0.2s ease;
    }
`;
document.head.appendChild(style);
