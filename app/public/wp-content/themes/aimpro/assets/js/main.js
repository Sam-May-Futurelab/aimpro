// Performance-Optimized JavaScript for Aimpro Digital
document.addEventListener('DOMContentLoaded', function() {
    
    // Performance optimizations
    const performanceMode = true; // Enable performance mode
    const reducedAnimations = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    
    // Throttle functions for better performance
    function throttle(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Debounce function for expensive operations
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }    
    // Quick loading screen removal
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
        setTimeout(() => {
            loadingScreen.style.display = 'none';
        }, 300); // Much faster loading screen removal
    }
    
    // Optimized Back to Top Button
    const backToTop = document.createElement('button');
    backToTop.className = 'back-to-top';
    backToTop.innerHTML = '↑';
    backToTop.setAttribute('aria-label', 'Back to top');
    document.body.appendChild(backToTop);
    
    // Throttled scroll handler for better performance
    const handleScroll = throttle(() => {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    }, 100); // Throttle to 10fps max
    
    window.addEventListener('scroll', handleScroll, { passive: true });
    
    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });    
    // Remove heavy error handling and performance monitoring
    // Keep only essential error handling
    window.addEventListener('error', function(e) {
        console.warn('Error:', e.error?.message || 'Unknown error');
    });
    
    // Mobile Menu Toggle (simplified)
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    if (mobileToggle && mainNav) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mainNav.classList.toggle('mobile-active');
        });
    }    // Optimized Header Scroll Effect
    const header = document.querySelector('.sticky-header');
    if (header) {
        const headerScroll = throttle(() => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, 50);
        
        window.addEventListener('scroll', headerScroll, { passive: true });
    }    // Simplified Stats Counter Animation
    function animateStats() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalNumber = parseInt(target.getAttribute('data-count'));
                    const suffix = target.textContent.replace(/[\d]/g, '');
                    
                    // Faster, simpler animation
                    let current = 0;
                    const increment = finalNumber / 30; // Reduced from 50 for faster animation
                    
                    const counter = setInterval(() => {
                        current += increment;
                        if (current >= finalNumber) {
                            target.textContent = finalNumber + suffix;
                            clearInterval(counter);
                        } else {
                            target.textContent = Math.floor(current) + suffix;
                        }
                    }, 50); // Faster interval
                    
                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.5 }); // Higher threshold for better performance
        
        statNumbers.forEach(stat => observer.observe(stat));
    }
    
    animateStats();    
    // Simplified smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
    
    // Lightweight card hover effects (only if performance mode is off)
    if (!performanceMode) {
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)'; // Reduced movement
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    }

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
    });    // Simplified lightweight animations (only if performance mode allows)
    if (!performanceMode) {
        // Basic tag hover effects (CSS-based)
        const tags = document.querySelectorAll('.tag');
        tags.forEach(tag => {
            tag.classList.add('hover-effect');
        });

        // Simple blog card effects
        const blogCards = document.querySelectorAll('.blog-card');
        blogCards.forEach(card => {
            card.classList.add('hover-effect');
        });

        // Minimal social icon effects
        const socialIcons = document.querySelectorAll('.social-icon');
        socialIcons.forEach(icon => {
            icon.classList.add('hover-effect');
        });
    }// Note: serviceCards already handled above with magnetic effects

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
        }    }

    // Simplified form handling
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                setTimeout(() => {
                    submitBtn.disabled = false;
                }, 2000);
            }
        });
    });    // Simple button click feedback (no heavy ripple effects)
    document.querySelectorAll('.btn, .btn-primary, .btn-secondary').forEach(button => {
        button.addEventListener('click', function(e) {
            this.style.transform = 'scale(0.98)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });// Initialize Lottie Hero Animation
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
    initLottieHeroAnimation();    // Initialize Optimized Single Lottie Stats Animation
    function initLottieStatsAnimation() {
        const animationIds = ['lottie-stats-animation-center']; // Single center animation only
        const animations = [];
        let loadedCount = 0;
        let sharedAnimationData = null;
        
        // Performance optimization: Load animation data once and reuse
        if (typeof lottie !== 'undefined') {
            // Pre-load the animation data
            fetch(aimpro_data.theme_url + '/assets/images/stats.json')
                .then(response => response.json())
                .then(animationData => {
                    sharedAnimationData = animationData;
                    
                    // Create animations with staggered initialization for performance
                    animationIds.forEach((id, index) => {
                        const container = document.getElementById(id);
                        
                        if (container) {
                            container.classList.add('loading');
                            
                            // Stagger the animation creation to avoid performance spikes
                            setTimeout(() => {
                                try {
                                    const animation = lottie.loadAnimation({
                                        container: container,
                                        renderer: 'svg',
                                        loop: true,
                                        autoplay: true,
                                        animationData: sharedAnimationData, // Use shared data
                                        rendererSettings: {
                                            progressiveLoad: false, // We already have the data
                                            hideOnTransparent: true,
                                            preserveAspectRatio: 'xMidYMid slice'
                                        }
                                    });
                                    
                                    // Add slight variation to prevent identical sync
                                    if (index > 0) {
                                        animation.addEventListener('DOMLoaded', function() {
                                            // Add small random offset to avoid perfect sync
                                            const randomOffset = (Math.random() * 0.5) + (index * 0.2);
                                            setTimeout(() => {
                                                animation.goToAndPlay(randomOffset * animation.totalFrames, true);
                                            }, index * 100);
                                        });
                                    }
                                    
                                    animation.addEventListener('DOMLoaded', function() {
                                        container.classList.remove('loading');
                                        loadedCount++;
                                        
                                        if (loadedCount === 1) {
                                            console.log('Stats animations loaded successfully');
                                        }
                                    });
                                    
                                    animation.addEventListener('error', function(error) {
                                        container.classList.remove('loading');
                                        console.warn(`Stats animation error for ${id}:`, error);
                                    });
                                    
                                    // Performance optimization
                                    animation.setSubframe(false);
                                    animations.push(animation);
                                    
                                } catch (error) {
                                    container.classList.remove('loading');
                                    console.warn(`Failed to load stats animation ${id}:`, error);
                                }
                            }, index * 150); // Stagger by 150ms
                        }
                    });
                })
                .catch(error => {
                    console.warn('Failed to pre-load animation data:', error);
                    initCSSWaveAnimation();
                });
        } else {
            // Fallback to CSS animation if Lottie unavailable
            initCSSWaveAnimation();
        }
        
        return animations;
    }    // Fallback CSS Wave Animation
    function initCSSWaveAnimation() {
        const containers = document.querySelectorAll('.lottie-stats-instance');
        const fallbackDiv = document.querySelector('.css-wave-animation');
        
        containers.forEach(container => {
            // Remove loading state
            container.classList.remove('loading');
            container.classList.add('css-fallback');
        });
        
        // Show CSS animation
        if (fallbackDiv) {
            fallbackDiv.style.display = 'block';
            console.log('CSS wave animation fallback activated');
        }
        
        // Add performance optimization for CSS animation
        containers.forEach(container => {
            container.style.willChange = 'transform, opacity';
        });
        
        // Clean up after animation settles
        setTimeout(() => {
            containers.forEach(container => {
                if (container) {
                    container.style.willChange = 'auto';
                }
            });
        }, 2000);
    }
      // Initialize stats animation after DOM is ready
    setTimeout(() => {
        initLottieStatsAnimation();
    }, 500); // Add delay to ensure everything is loaded
    
    // Re-initialize if needed (for dynamic content)
    document.addEventListener('lottie-hero-refresh', initLottieHeroAnimation);
    document.addEventListener('lottie-stats-refresh', initLottieStatsAnimation);

    // Performance monitoring for stats section
    function monitorStatsPerformance() {
        const statsSection = document.querySelector('.stats-section');
        if (!statsSection) return;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const startTime = performance.now();
                    
                    // Monitor frame rate when stats section is visible
                    let frameCount = 0;
                    const frameMonitor = () => {
                        frameCount++;
                        if (frameCount < 60) { // Monitor for ~1 second at 60fps
                            requestAnimationFrame(frameMonitor);
                        } else {
                            const endTime = performance.now();
                            const avgFrameTime = (endTime - startTime) / frameCount;
                            
                            if (avgFrameTime > 16.67) { // Below 60fps
                                console.warn('Stats animation performance below 60fps:', avgFrameTime + 'ms per frame');
                            } else {
                                console.log('Stats animation performance optimal:', avgFrameTime + 'ms per frame');
                            }
                        }
                    };
                    
                    requestAnimationFrame(frameMonitor);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        observer.observe(statsSection);
    }

    // Initialize performance monitoring
    monitorStatsPerformance();

});

// Lightweight CSS for better performance
const style = document.createElement('style');
style.textContent = `
    /* Basic button transitions only */
    .btn, .btn-primary, .btn-secondary {
        transition: transform 0.15s ease;
    }
    
    /* Simplified hover effects */
    .hover-effect {
        transition: transform 0.2s ease;
    }
    
    .hover-effect:hover {
        transform: translateY(-2px);
    }
    
    /* Basic card transitions */
    .service-card, .team-member, .blog-card {
        transition: transform 0.2s ease;
    }
    
    /* Back to top button */
    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: #FFD700;
        color: #1a1a1a;
        border: none;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
    }
    
    .back-to-top.visible {
        opacity: 1;
        visibility: visible;
    }
`;
document.head.appendChild(style);
