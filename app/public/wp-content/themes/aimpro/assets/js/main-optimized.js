// Performance-Optimized JavaScript for Aimpro Digital
// This file addresses multiple performance bottlenecks identified in the original code

(function() {
    'use strict';
    
    // Performance Optimization Utilities
    const PerformanceManager = {
        rafId: null,
        throttledCallbacks: new Map(),
        isIdle: true,
        animationFrameQueue: [],
        
        // Centralized throttling using requestAnimationFrame
        throttle: function(fn, key, delay = 16) {
            if (this.throttledCallbacks.has(key)) {
                return this.throttledCallbacks.get(key);
            }
            
            let lastTime = 0;
            const throttled = (...args) => {
                const now = performance.now();
                if (now - lastTime >= delay) {
                    lastTime = now;
                    return fn.apply(this, args);
                }
            };
            
            this.throttledCallbacks.set(key, throttled);
            return throttled;
        },
        
        // Batch DOM operations
        batchDOMUpdate: function(callback) {
            this.animationFrameQueue.push(callback);
            if (!this.rafId) {
                this.rafId = requestAnimationFrame(() => {
                    this.processBatch();
                });
            }
        },
        
        processBatch: function() {
            const queue = [...this.animationFrameQueue];
            this.animationFrameQueue.length = 0;
            this.rafId = null;
            
            queue.forEach(callback => {
                try {
                    callback();
                } catch (error) {
                    console.error('Batch DOM update error:', error);
                }
            });
        },
        
        // Idle callback for non-critical operations
        scheduleIdleTask: function(callback) {
            if ('requestIdleCallback' in window) {
                requestIdleCallback(callback);
            } else {
                setTimeout(callback, 1);
            }
        }
    };
    
    // Consolidated Intersection Observer Manager
    const ObserverManager = {
        observers: new Map(),
        
        createObserver: function(key, callback, options = {}) {
            if (this.observers.has(key)) {
                return this.observers.get(key);
            }
            
            const defaultOptions = {
                threshold: 0.1,
                rootMargin: '50px 0px'
            };
            
            const observer = new IntersectionObserver(callback, {
                ...defaultOptions,
                ...options
            });
            
            this.observers.set(key, observer);
            return observer;
        },
        
        observe: function(key, element) {
            const observer = this.observers.get(key);
            if (observer && element) {
                observer.observe(element);
            }
        },
        
        unobserve: function(key, element) {
            const observer = this.observers.get(key);
            if (observer && element) {
                observer.unobserve(element);
            }
        }
    };
    
    // Animation Manager for controlling performance
    const AnimationManager = {
        activeAnimations: new Set(),
        maxConcurrentAnimations: 8,
        animationQueue: [],
        
        canAnimate: function() {
            return this.activeAnimations.size < this.maxConcurrentAnimations && 
                   !document.hidden && 
                   window.requestAnimationFrame;
        },
        
        startAnimation: function(animationFn, priority = 'normal') {
            if (this.canAnimate()) {
                const animation = {
                    fn: animationFn,
                    id: Date.now() + Math.random(),
                    priority
                };
                
                this.activeAnimations.add(animation.id);
                
                const cleanup = () => {
                    this.activeAnimations.delete(animation.id);
                    this.processQueue();
                };
                
                try {
                    const result = animationFn();
                    if (result && typeof result.then === 'function') {
                        result.finally(cleanup);
                    } else {
                        cleanup();
                    }
                } catch (error) {
                    console.error('Animation error:', error);
                    cleanup();
                }
            } else {
                this.animationQueue.push({ fn: animationFn, priority });
            }
        },
        
        processQueue: function() {
            if (this.animationQueue.length > 0 && this.canAnimate()) {
                // Sort by priority (high > normal > low)
                this.animationQueue.sort((a, b) => {
                    const priorities = { high: 3, normal: 2, low: 1 };
                    return priorities[b.priority] - priorities[a.priority];
                });
                
                const next = this.animationQueue.shift();
                this.startAnimation(next.fn, next.priority);
            }
        },
        
        pauseOnHidden: function() {
            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    // Pause heavy animations when tab is hidden
                    this.activeAnimations.clear();
                } else {
                    // Resume processing
                    this.processQueue();
                }
            });
        }
    };
    
    // Initialize performance managers
    AnimationManager.pauseOnHidden();
    
    document.addEventListener('DOMContentLoaded', function() {
        
        // 1. OPTIMIZED LOADING SCREEN
        const loadingScreen = document.getElementById('loading-screen');
        const loadingText = document.querySelector('.loading-text');
        let messageInterval;
        
        if (loadingScreen && loadingText) {
            const loadingMessages = [
                'Crafting your digital success...',
                'Optimizing for performance...',
                'Loading premium experience...',
                'Almost ready...'
            ];
            let messageIndex = 0;
            
            messageInterval = setInterval(() => {
                messageIndex = (messageIndex + 1) % loadingMessages.length;
                loadingText.textContent = loadingMessages[messageIndex];
            }, 1500);
        }
        
        window.addEventListener('load', function() {
            if (messageInterval) clearInterval(messageInterval);
            
            PerformanceManager.scheduleIdleTask(() => {
                if (loadingScreen) {
                    loadingScreen.classList.add('fade-out');
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                    }, 500);
                }
            });
        });
        
        // 2. OPTIMIZED BACK TO TOP BUTTON
        const backToTop = document.createElement('button');
        backToTop.className = 'back-to-top';
        backToTop.innerHTML = '↑';
        backToTop.setAttribute('aria-label', 'Back to top');
        backToTop.setAttribute('title', 'Back to top');
        document.body.appendChild(backToTop);
        
        const throttledScrollHandler = PerformanceManager.throttle(() => {
            PerformanceManager.batchDOMUpdate(() => {
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });
        }, 'backToTop', 100);
        
        window.addEventListener('scroll', throttledScrollHandler, { passive: true });
        
        backToTop.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
        
        // 3. OPTIMIZED HEADER SCROLL EFFECTS
        const header = document.querySelector('.sticky-header');
        if (header) {
            let lastScroll = 0;
            let isScrolling = false;
            
            const throttledHeaderScroll = PerformanceManager.throttle(() => {
                if (isScrolling) return;
                isScrolling = true;
                
                PerformanceManager.batchDOMUpdate(() => {
                    const currentScroll = window.pageYOffset;
                    
                    if (currentScroll > 100) {
                        header.style.cssText = `
                            background: rgba(255, 255, 255, 0.99);
                            backdrop-filter: blur(10px);
                            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.12);
                        `;
                        header.classList.add('scrolled');
                    } else {
                        header.style.cssText = `
                            background: rgba(255, 255, 255, 0.98);
                            backdrop-filter: blur(8px);
                            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08);
                        `;
                        header.classList.remove('scrolled');
                    }
                    
                    // Hide/show header optimization
                    if (Math.abs(currentScroll - lastScroll) > 10) {
                        if (currentScroll > lastScroll && currentScroll > 200) {
                            header.style.transform = 'translateY(-100%)';
                        } else {
                            header.style.transform = 'translateY(0)';
                        }
                        lastScroll = currentScroll;
                    }
                    
                    isScrolling = false;
                });
            }, 'headerScroll', 16);
            
            window.addEventListener('scroll', throttledHeaderScroll, { passive: true });
        }
        
        // 4. OPTIMIZED MOBILE MENU
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        const mainNav = document.querySelector('.main-nav');
        const headerCtas = document.querySelector('.header-ctas');
        
        if (mobileToggle && mainNav) {
            mobileToggle.addEventListener('click', function() {
                PerformanceManager.batchDOMUpdate(() => {
                    this.classList.toggle('active');
                    mainNav.classList.toggle('mobile-active');
                    if (headerCtas) headerCtas.classList.toggle('mobile-active');
                });
            });
        }
        
        // 5. CONSOLIDATED INTERSECTION OBSERVERS
        
        // Animation observer for reveal effects
        const animationObserver = ObserverManager.createObserver('animation', (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    AnimationManager.startAnimation(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, 'normal');
                    
                    ObserverManager.unobserve('animation', entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        // Stats counter observer (optimized)
        const statsObserver = ObserverManager.createObserver('stats', (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    AnimationManager.startAnimation(() => {
                        animateStatsCounter(entry.target);
                    }, 'high');
                    
                    ObserverManager.unobserve('stats', entry.target);
                }
            });
        }, { threshold: 0.3 });
        
        // Lazy loading observer
        const lazyObserver = ObserverManager.createObserver('lazy', (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                    }
                    ObserverManager.unobserve('lazy', entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        // Apply observers to elements
        document.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            ObserverManager.observe('animation', el);
        });
        
        document.querySelectorAll('.stat-number').forEach(stat => {
            ObserverManager.observe('stats', stat);
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            ObserverManager.observe('lazy', img);
        });
        
        // 6. OPTIMIZED STATS COUNTER
        function animateStatsCounter(target) {
            const finalNumber = parseInt(target.getAttribute('data-count'));
            const currentText = target.textContent;
            const suffix = currentText.replace(/[\d]/g, '');
            let currentNumber = 0;
            const increment = finalNumber / 30; // Reduced iterations for performance
            const duration = 1500; // Reduced duration
            
            const updateCounter = () => {
                currentNumber += increment;
                if (currentNumber >= finalNumber) {
                    target.textContent = finalNumber + suffix;
                    return;
                }
                
                target.textContent = Math.floor(currentNumber) + suffix;
                requestAnimationFrame(updateCounter);
            };
            
            requestAnimationFrame(updateCounter);
        }
        
        // 7. OPTIMIZED HOVER EFFECTS
        const cardElements = document.querySelectorAll('.service-card');
        let isHoverActive = false;
        
        cardElements.forEach((card, index) => {
            // Stagger initial animation
            card.style.animationDelay = `${index * 0.1}s`;
            
            // Throttled hover effects
            const throttledMouseMove = PerformanceManager.throttle((e) => {
                if (!isHoverActive) return;
                
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const deltaX = (x - centerX) * 0.02; // Reduced intensity
                const deltaY = (y - centerY) * 0.02;
                
                PerformanceManager.batchDOMUpdate(() => {
                    card.style.transform = `translateY(-8px) scale(1.01) translate(${deltaX}px, ${deltaY}px)`;
                });
            }, `mouseMove-${index}`, 16);
            
            card.addEventListener('mouseenter', function() {
                isHoverActive = true;
                PerformanceManager.batchDOMUpdate(() => {
                    this.style.transform = 'translateY(-8px) scale(1.01)';
                    this.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.12)';
                });
            });
            
            card.addEventListener('mousemove', throttledMouseMove);
            
            card.addEventListener('mouseleave', function() {
                isHoverActive = false;
                PerformanceManager.batchDOMUpdate(() => {
                    this.style.transform = 'translateY(0) scale(1) translate(0, 0)';
                    this.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.05)';
                });
            });
        });
        
        // 8. OPTIMIZED BUTTON EFFECTS
        const buttons = document.querySelectorAll('.btn, .btn-primary, .btn-secondary');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                // Simplified ripple effect
                if (this.querySelector('.ripple')) return; // Prevent multiple ripples
                
                const rect = this.getBoundingClientRect();
                const ripple = document.createElement('span');
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.className = 'ripple';
                ripple.style.cssText = `
                    position: absolute;
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.5s ease-out;
                    background: rgba(255, 255, 255, 0.3);
                    left: ${x}px;
                    top: ${y}px;
                    width: ${size}px;
                    height: ${size}px;
                    pointer-events: none;
                `;
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    if (ripple.parentNode) {
                        ripple.remove();
                    }
                }, 500);
            });
        });
        
        // 9. OPTIMIZED LOTTIE ANIMATIONS
        let lottieLoadPromise = null;
        
        function initOptimizedLottieAnimations() {
            if (typeof lottie === 'undefined') {
                console.warn('Lottie library not loaded');
                return;
            }
            
            // Load hero animation with lazy loading
            const heroContainer = document.getElementById('lottie-hero-animation');
            if (heroContainer) {
                const heroObserver = ObserverManager.createObserver('lottie-hero', (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            loadLottieAnimation(heroContainer, '/assets/images/hero.json');
                            ObserverManager.unobserve('lottie-hero', entry.target);
                        }
                    });
                }, { threshold: 0.1 });
                
                ObserverManager.observe('lottie-hero', heroContainer);
            }
            
            // Load stats animations only when needed
            const statsContainers = ['lottie-stats-animation-left', 'lottie-stats-animation-center', 'lottie-stats-animation-right'];
            const statsSection = document.querySelector('.stats-section');
            
            if (statsSection) {
                const statsObserver = ObserverManager.createObserver('lottie-stats', (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            loadStatsAnimations(statsContainers);
                            ObserverManager.unobserve('lottie-stats', entry.target);
                        }
                    });
                }, { threshold: 0.2 });
                
                ObserverManager.observe('lottie-stats', statsSection);
            }
        }
        
        function loadLottieAnimation(container, path) {
            if (!container || !lottie) return;
            
            container.classList.add('loading');
            
            try {
                const animation = lottie.loadAnimation({
                    container: container,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: (aimpro_data?.theme_url || '') + path,
                    rendererSettings: {
                        preserveAspectRatio: 'xMidYMid slice',
                        hideOnTransparent: true
                    }
                });
                
                animation.setSubframe(false); // Performance optimization
                
                animation.addEventListener('DOMLoaded', function() {
                    container.classList.remove('loading');
                });
                
                animation.addEventListener('error', function() {
                    container.classList.remove('loading');
                    console.warn('Lottie animation failed to load');
                });
                
            } catch (error) {
                container.classList.remove('loading');
                console.warn('Lottie initialization error:', error);
            }
        }
        
        function loadStatsAnimations(containerIds) {
            if (!lottieLoadPromise) {
                lottieLoadPromise = fetch((aimpro_data?.theme_url || '') + '/assets/images/stats.json')
                    .then(response => response.json())
                    .catch(() => null);
            }
            
            lottieLoadPromise.then(animationData => {
                if (!animationData) return;
                
                containerIds.forEach((id, index) => {
                    const container = document.getElementById(id);
                    if (!container) return;
                    
                    // Stagger loading to prevent performance spikes
                    setTimeout(() => {
                        try {
                            const animation = lottie.loadAnimation({
                                container: container,
                                renderer: 'svg',
                                loop: true,
                                autoplay: true,
                                animationData: animationData,
                                rendererSettings: {
                                    preserveAspectRatio: 'xMidYMid slice',
                                    hideOnTransparent: true
                                }
                            });
                            
                            animation.setSubframe(false);
                            
                            // Add variation to prevent sync
                            if (index > 0) {
                                animation.addEventListener('DOMLoaded', function() {
                                    const offset = (Math.random() * 0.3) + (index * 0.1);
                                    setTimeout(() => {
                                        animation.goToAndPlay(offset * animation.totalFrames, true);
                                    }, index * 50);
                                });
                            }
                            
                        } catch (error) {
                            console.warn(`Stats animation error for ${id}:`, error);
                        }
                    }, index * 100);
                });
            });
        }
        
        // Initialize Lottie animations
        PerformanceManager.scheduleIdleTask(initOptimizedLottieAnimations);
        
        // 10. SCROLL PROGRESS INDICATOR (Optimized)
        const scrollIndicator = document.createElement('div');
        scrollIndicator.className = 'scroll-indicator';
        document.body.appendChild(scrollIndicator);
        
        const throttledScrollProgress = PerformanceManager.throttle(() => {
            const winScroll = document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = Math.min((winScroll / height) * 100, 100);
            
            PerformanceManager.batchDOMUpdate(() => {
                scrollIndicator.style.width = scrolled + '%';
            });
        }, 'scrollProgress', 100);
        
        window.addEventListener('scroll', throttledScrollProgress, { passive: true });
        
        // 11. SMOOTH SCROLL OPTIMIZATION
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
        });
        
        // 12. PERFORMANCE MONITORING
        function initPerformanceMonitoring() {
            if (!('performance' in window)) return;
            
            window.addEventListener('load', function() {
                PerformanceManager.scheduleIdleTask(() => {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    if (perfData) {
                        const loadTime = perfData.loadEventEnd - perfData.loadEventStart;
                        if (loadTime > 3000) {
                            console.warn('Page load time is high:', loadTime + 'ms');
                        }
                        
                        // Monitor memory usage if available
                        if ('memory' in performance) {
                            const memory = performance.memory;
                            if (memory.usedJSHeapSize > 50000000) { // 50MB
                                console.warn('High memory usage detected:', memory.usedJSHeapSize);
                            }
                        }
                    }
                });
            });
        }
        
        initPerformanceMonitoring();
        
        // 13. ERROR HANDLING
        window.addEventListener('error', function(e) {
            console.error('JavaScript Error:', e.error);
        });
        
        // 14. CLEANUP ON PAGE UNLOAD
        window.addEventListener('beforeunload', function() {
            // Cancel any pending animation frames
            if (PerformanceManager.rafId) {
                cancelAnimationFrame(PerformanceManager.rafId);
            }
            
            // Clear throttled callbacks
            PerformanceManager.throttledCallbacks.clear();
            
            // Disconnect observers
            ObserverManager.observers.forEach(observer => {
                observer.disconnect();
            });
        });
        
    });
    
    // 15. CSS OPTIMIZATIONS
    const optimizedStyles = document.createElement('style');
    optimizedStyles.textContent = `
        /* Performance optimized styles */
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
        
        .btn, .btn-primary, .btn-secondary {
            position: relative;
            overflow: hidden;
            will-change: transform;
        }
        
        .service-card {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), 
                       box-shadow 0.3s ease;
            will-change: transform, box-shadow;
        }
        
        .scroll-indicator {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #FFD700, #FFA500);
            z-index: 1000;
            transition: width 0.1s ease;
        }
        
        /* Reduce motion for users who prefer it */
        @media (prefers-reduced-motion: reduce) {
            *, ::before, ::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
        
        /* Hardware acceleration for frequently animated elements */
        .service-card, .btn, .sticky-header, .back-to-top {
            transform: translateZ(0);
            backface-visibility: hidden;
        }
    `;
    document.head.appendChild(optimizedStyles);
    
})();
