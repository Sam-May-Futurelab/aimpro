// Enhanced JavaScript for Aimpro Digital
document.addEventListener('DOMContentLoaded', function() {
    
    // Hero Strapline Rotation
    const straplines = document.querySelectorAll('.hero-straplines .strapline');
    let currentStraplineIndex = 0;
    
    if (straplines.length > 1) {
        // Function to show next strapline
        function rotateStraplines() {
            // Hide current strapline
            straplines[currentStraplineIndex].classList.remove('active');
            
            // Move to next strapline
            currentStraplineIndex = (currentStraplineIndex + 1) % straplines.length;
            
            // Show next strapline
            straplines[currentStraplineIndex].classList.add('active');
        }
        
        // Start rotating every 3 seconds
        setInterval(rotateStraplines, 3000);
    }
    
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
    
    // Back to Top functionality
    backToTop.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Service Tags Particle System
    class ParticleSystem {
        constructor() {
            this.particles = [];
            this.colors = ['#007cba', '#ff6b6b', '#4ecdc4', '#45b7d1', '#96ceb4', '#feca57', '#ff9ff3', '#54a0ff'];
        }        createParticle(x, y, color) {
            return {
                x: x,
                y: y,
                vx: (Math.random() - 0.5) * 10,
                vy: (Math.random() - 0.5) * 10,
                life: 1,
                decay: 0.015, // Slower decay for longer visibility
                size: Math.random() * 8 + 3, // Larger particles
                color: color,
                rotation: Math.random() * 360,
                rotationSpeed: (Math.random() - 0.5) * 15 // Faster rotation
            };
        }createExplosion(element) {
            const rect = element.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            // Creating explosion effect
            
            // Create multiple bursts with different colors
            const colors = ['#FFD700', '#FF6B35', '#F59E0B', '#EF4444', '#8B5CF6', '#06B6D4'];
            
            // Create multiple particles for confetti effect
            for (let i = 0; i < 25; i++) {
                const color = colors[Math.floor(Math.random() * colors.length)];
                const particle = this.createParticle(centerX, centerY, color);
                // Add more spread to particles
                particle.vx = (Math.random() - 0.5) * 12;
                particle.vy = (Math.random() - 0.5) * 12 - 5; // More upward motion
                particle.size = Math.random() * 8 + 3; // Larger particles
                this.particles.push(particle);
            }

            // Start animation if not already running
            if (!this.animating) {
                this.animate();
            }
        }

        animate() {
            this.animating = true;
            
            // Create canvas if it doesn't exist
            if (!this.canvas) {
                this.canvas = document.createElement('canvas');
                this.canvas.style.position = 'fixed';
                this.canvas.style.top = '0';
                this.canvas.style.left = '0';
                this.canvas.style.width = '100%';
                this.canvas.style.height = '100%';
                this.canvas.style.pointerEvents = 'none';
                this.canvas.style.zIndex = '9999';
                document.body.appendChild(this.canvas);
                this.ctx = this.canvas.getContext('2d');
                
                // Set canvas size
                this.resizeCanvas();
                window.addEventListener('resize', () => this.resizeCanvas());
            }

            // Clear canvas
            this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

            // Update and draw particles
            for (let i = this.particles.length - 1; i >= 0; i--) {
                const particle = this.particles[i];
                
                // Update particle
                particle.x += particle.vx;
                particle.y += particle.vy;
                particle.vy += 0.3; // gravity
                particle.life -= particle.decay;
                particle.rotation += particle.rotationSpeed;

                // Remove dead particles
                if (particle.life <= 0) {
                    this.particles.splice(i, 1);
                    continue;
                }                // Draw particle
                this.ctx.save();
                this.ctx.translate(particle.x, particle.y);
                this.ctx.rotate(particle.rotation * Math.PI / 180);
                this.ctx.globalAlpha = particle.life;
                this.ctx.fillStyle = particle.color;
                
                // Draw larger confetti shape (rectangle with shadow)
                const size = particle.size * particle.life;
                
                // Add shadow for better visibility
                this.ctx.shadowColor = particle.color;
                this.ctx.shadowBlur = 3;
                this.ctx.shadowOffsetX = 1;
                this.ctx.shadowOffsetY = 1;
                
                // Draw main confetti rectangle
                this.ctx.fillRect(-size/2, -size/3, size, size/1.5);
                
                // Add sparkle effect
                this.ctx.shadowBlur = 0;
                this.ctx.fillStyle = '#FFFFFF';
                this.ctx.globalAlpha = particle.life * 0.8;
                this.ctx.fillRect(-size/4, -size/6, size/2, size/6);
                
                this.ctx.restore();
            }

            // Continue animation if particles exist
            if (this.particles.length > 0) {
                requestAnimationFrame(() => this.animate());
            } else {
                this.animating = false;
            }
        }

        resizeCanvas() {
            this.canvas.width = window.innerWidth;
            this.canvas.height = window.innerHeight;
        }

        destroy() {
            if (this.canvas) {
                document.body.removeChild(this.canvas);
                this.canvas = null;
            }
            this.particles = [];
            this.animating = false;
        }    }

    // Initialize particle system
    const particleSystem = new ParticleSystem();

    // Add hover effects to service tags
    const serviceTags = document.querySelectorAll('.tag');
    
    serviceTags.forEach(tag => {
        tag.addEventListener('mouseenter', function() {
            // Tag hover effect
            particleSystem.createExplosion(this);
        });
    });

    // Clean up on page unload
    window.addEventListener('beforeunload', function() {
        particleSystem.destroy();
    });    // FAQ Toggle Functionality
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        // Check for both structures: .faq-question/.faq-answer and direct h3/p
        const question = item.querySelector('.faq-question') || item.querySelector('h3');
        const answer = item.querySelector('.faq-answer') || item.querySelector('p');
        
        if (question && answer) {
            question.addEventListener('click', function() {
                const isOpen = item.classList.contains('active');
                
                // Close all other FAQs
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer') || otherItem.querySelector('p');
                        if (otherAnswer) {
                            if (otherAnswer.style) {
                                otherAnswer.style.maxHeight = '0';
                            }
                        }
                    }
                });
                
                // Toggle current FAQ
                if (isOpen) {
                    item.classList.remove('active');
                    if (answer.style) {
                        answer.style.maxHeight = '0';
                    }
                } else {
                    item.classList.add('active');
                    if (answer.style) {
                        answer.style.maxHeight = answer.scrollHeight + 'px';
                    }
                }
            });
        }
    });

    // Enhanced Error Handling
    window.addEventListener('error', function(e) {
        // JavaScript error handling
        // Could implement user-friendly error reporting here
    });
    
    // Performance monitoring
    if ('performance' in window) {
        window.addEventListener('load', function() {
            setTimeout(() => {
                const perfData = performance.getEntriesByType('navigation')[0];
                if (perfData && perfData.loadEventEnd - perfData.loadEventStart > 3000) {
                    // Page load time optimization needed
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
        // PWA install prompt available
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
        // Analytics tracking
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

    // ========================================
    // PREMIUM SCROLL-IN ANIMATIONS
    // ========================================
    
    // Performance-optimized intersection observer for scroll animations
    const scrollAnimationObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                
                // Add in-view class to trigger animation
                element.classList.add('in-view');
                
                // Clean up will-change after animation completes
                const animationName = getComputedStyle(element).animationName;
                if (animationName && animationName !== 'none') {
                    element.addEventListener('animationend', function onAnimationEnd() {
                        element.classList.add('animation-complete');
                        element.removeEventListener('animationend', onAnimationEnd);
                    }, { once: true });
                }
                
                // Stop observing this element to save performance
                scrollAnimationObserver.unobserve(element);
            }
        });
    }, {
        threshold: 0.1, // Trigger when 10% visible
        rootMargin: '0px 0px -50px 0px' // Start animation slightly before element comes into view
    });

    // Initialize scroll animations
    function initScrollAnimations() {
        const animatedElements = document.querySelectorAll('[class*="animate-"]');
        
        // Only observe elements that aren't already animated
        animatedElements.forEach(element => {
            if (!element.classList.contains('in-view')) {
                scrollAnimationObserver.observe(element);
            }
        });
    }

    // Start observing elements
    initScrollAnimations();

    // Re-initialize animations for any dynamically added content
    const mutationObserver = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            mutation.addedNodes.forEach((node) => {
                if (node.nodeType === Node.ELEMENT_NODE) {
                    const newAnimatedElements = node.querySelectorAll('[class*="animate-"]');
                    newAnimatedElements.forEach(element => {
                        if (!element.classList.contains('in-view')) {
                            scrollAnimationObserver.observe(element);
                        }
                    });
                }
            });
        });
    });

    // Start observing for dynamic content
    mutationObserver.observe(document.body, {
        childList: true,
        subtree: true
    });    // Simple Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (mobileToggle && mainNav) {        // Create simple mobile dropdowns
        function createMobileDropdowns() {
            // Only create once
            if (mainNav.querySelector('.mobile-dropdown-content')) return;

            // Add back button at the top of the menu
            const mainMenuList = mainNav.querySelector('ul');
            const backButton = document.createElement('div');
            backButton.className = 'mobile-back-button';
            backButton.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
                Back to Main Menu
            `;
            mainMenuList.insertBefore(backButton, mainMenuList.firstChild);            // Services dropdown - insert directly after the Services link
            const servicesItem = mainNav.querySelector('.nav-item-mega');
            if (servicesItem) {
                const servicesLink = servicesItem.querySelector('a');
                const dropdown = document.createElement('div');
                dropdown.className = 'mobile-dropdown-content';
                dropdown.innerHTML = `
                    <a href="/services" class="mobile-submenu-header">Services</a>
                    
                    <div class="mobile-service-category">SEO Services</div>
                    <a href="/seo-services">SEO Services</a>
                    <a href="/local-seo">Local SEO</a>
                    <a href="/seo-audit">SEO Audit</a>
                    <a href="/technical-seo">Technical SEO</a>
                    <a href="/on-page-seo">On-Page SEO</a>
                    <a href="/white-label-seo">White Label SEO</a>
                    
                    <div class="mobile-service-category">Advertising & PPC</div>
                    <a href="/advertising-ppc">Advertising & PPC</a>
                    <a href="/google-ads">Google Ads</a>
                    <a href="/meta-ads">Meta Ads</a>
                    <a href="/microsoft-ads">Microsoft Ads</a>
                    <a href="/retargeting-display">Retargeting</a>
                    <a href="/ppc-audit">PPC Audit</a>
                    
                    <div class="mobile-service-category">Marketing Automation</div>
                    <a href="/marketing-automation">Marketing Automation</a>
                    <a href="/ai-crm-setup">AI CRM Setup</a>
                    <a href="/email-sms-flows">Email & SMS</a>
                    <a href="/email-campaigns">Email Campaigns</a>
                    <a href="/funnel-automation">Funnels</a>
                    <a href="/chatbots">Chatbots</a>
                    
                    <div class="mobile-service-category">Web Development</div>
                    <a href="/website-development">Web Development</a>
                    <a href="/website-design">Website Design</a>
                    <a href="/landing-pages">Landing Pages</a>
                    <a href="/funnel-builds">Funnel Builds</a>
                    <a href="/ux-ui-optimisation">UX/UI Design</a>
                `;
                // Insert immediately after the Services link
                servicesLink.insertAdjacentElement('afterend', dropdown);
            }

            // Other dropdowns - get all dropdown items
            const dropdownItems = mainNav.querySelectorAll('.nav-item-dropdown');
              // Solutions
            if (dropdownItems[0]) {
                const solutionsLink = dropdownItems[0].querySelector('a');
                const dropdown = document.createElement('div');
                dropdown.className = 'mobile-dropdown-content';
                dropdown.innerHTML = `
                    <a href="/solutions" class="mobile-submenu-header">Solutions</a>
                    <a href="/lead-generation">Lead Generation (B2B/B2C)</a>
                    <a href="/automate-marketing">Automate Marketing</a>
                    <a href="/improve-roi-ads">Improve ROI from Ads</a>
                    <a href="/rank-higher-locally">Rank Higher Locally</a>
                    <a href="/high-converting-website">Build a High-Converting Website</a>
                    <a href="/streamline-sales-funnel">Streamline Your Sales Funnel</a>
                `;
                solutionsLink.insertAdjacentElement('afterend', dropdown);
            }            // Industries
            if (dropdownItems[1]) {
                const industriesLink = dropdownItems[1].querySelector('a');
                const dropdown = document.createElement('div');
                dropdown.className = 'mobile-dropdown-content';
                dropdown.innerHTML = `
                    <a href="/industries" class="mobile-submenu-header">Industries</a>
                    <a href="/automotive">Automotive</a>
                    <a href="/home-garden">Home and Garden</a>
                    <a href="/finance">Finance</a>
                    <a href="/professional-services">Professional Services</a>
                    <a href="/estate-agents">Estate Agents</a>
                    <a href="/coaches-consultants">Coaches & Consultants</a>
                    <a href="/ecommerce">E-commerce</a>
                `;
                industriesLink.insertAdjacentElement('afterend', dropdown);
            }            // Resources
            if (dropdownItems[2]) {
                const resourcesLink = dropdownItems[2].querySelector('a');
                const dropdown = document.createElement('div');
                dropdown.className = 'mobile-dropdown-content';
                dropdown.innerHTML = `
                    <a href="/resources" class="mobile-submenu-header">Resources</a>
                    <a href="/blog">Blog & Insights</a>
                    <a href="/case-studies">Case Studies</a>
                    <a href="/templates-tools">Templates & Tools</a>
                    <a href="/events-webinars">Events & Webinars</a>
                    <a href="/training-mentoring">Training & Mentoring</a>
                `;
                resourcesLink.insertAdjacentElement('afterend', dropdown);
            }            // About
            if (dropdownItems[3]) {
                const aboutLink = dropdownItems[3].querySelector('a');
                const dropdown = document.createElement('div');
                dropdown.className = 'mobile-dropdown-content';
                dropdown.innerHTML = `
                    <a href="/about" class="mobile-submenu-header">About</a>
                    <a href="/company">Company</a>
                    <a href="/team">Team</a>
                    <a href="/testimonials">Testimonials</a>
                    <a href="/careers">Careers</a>
                    <a href="/become-a-partner">Become a Partner</a>
                `;
                aboutLink.insertAdjacentElement('afterend', dropdown);
            }
        }        // Toggle mobile menu
        mobileToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            this.classList.toggle('active');
            mainNav.classList.toggle('mobile-active');
            
            if (mainNav.classList.contains('mobile-active')) {
                createMobileDropdowns();
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
                // Clean up submenu state when closing menu
                mainNav.classList.remove('submenu-open');
                mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                    item.classList.remove('mobile-dropdown-active');
                });
            }
        });        // Handle dropdown clicks
        mainNav.addEventListener('click', function(e) {
            if (mainNav.classList.contains('mobile-active')) {
                const link = e.target.closest('a');
                const backButton = e.target.closest('.mobile-back-button');
                
                // Handle back button click
                if (backButton) {
                    e.preventDefault();
                    // Close all dropdowns and return to main menu
                    mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                        item.classList.remove('mobile-dropdown-active');
                    });
                    mainNav.classList.remove('submenu-open');
                    return;
                }
                
                // If it's a dropdown item link (inside mobile-dropdown-content), close menu and allow navigation
                if (link && link.closest('.mobile-dropdown-content')) {
                    setTimeout(() => {
                        mobileToggle.classList.remove('active');
                        mainNav.classList.remove('mobile-active', 'submenu-open');
                        document.body.style.overflow = '';
                        // Clean up dropdown states
                        mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                            item.classList.remove('mobile-dropdown-active');
                        });
                    }, 100);
                    return;
                }
                
                // If it's a main dropdown toggle link (the parent category link)
                if (link && (link.closest('.nav-item-mega') || link.closest('.nav-item-dropdown'))) {
                    const parent = link.closest('.nav-item-mega, .nav-item-dropdown');
                    const isDirectChild = link.parentElement === parent;
                    
                    // Only prevent default and toggle dropdown if it's the direct child link of the dropdown parent
                    if (isDirectChild) {
                        e.preventDefault();
                        
                        // Close all other dropdowns
                        mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                            if (item !== parent) {
                                item.classList.remove('mobile-dropdown-active');
                            }
                        });
                        
                        // Toggle this dropdown
                        const wasActive = parent.classList.contains('mobile-dropdown-active');
                        parent.classList.toggle('mobile-dropdown-active');
                        
                        // Add submenu-open class to main nav when any submenu is active
                        const hasActiveDropdown = mainNav.querySelector('.mobile-dropdown-active');
                        if (hasActiveDropdown && !wasActive) {
                            mainNav.classList.add('submenu-open');
                        } else if (!hasActiveDropdown) {
                            mainNav.classList.remove('submenu-open');
                        }
                    }
                }
            }
        });        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (mainNav.classList.contains('mobile-active') && 
                !mainNav.contains(e.target) && 
                !mobileToggle.contains(e.target)) {
                mobileToggle.classList.remove('active');
                mainNav.classList.remove('mobile-active', 'submenu-open');
                document.body.style.overflow = '';
                // Clean up dropdown states
                mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                    item.classList.remove('mobile-dropdown-active');
                });
            }
        });

        // Close on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mainNav.classList.contains('mobile-active')) {
                mobileToggle.classList.remove('active');
                mainNav.classList.remove('mobile-active', 'submenu-open');
                document.body.style.overflow = '';
                // Clean up dropdown states
                mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                    item.classList.remove('mobile-dropdown-active');
                });
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768 && mainNav.classList.contains('mobile-active')) {
                mobileToggle.classList.remove('active');
                mainNav.classList.remove('mobile-active', 'submenu-open');
                document.body.style.overflow = '';
                // Clean up dropdown states
                mainNav.querySelectorAll('.mobile-dropdown-active').forEach(item => {
                    item.classList.remove('mobile-dropdown-active');
                });
            }
        });
    }

    // Header Scroll Effect
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
    });    // Animated Stats Counter
    function animateStats() {
        const statNumbers = document.querySelectorAll('.stat-number');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    
                    // Get number from data-count attribute or extract from text content
                    let finalNumber, prefix = '', suffix = '';
                    const dataCount = target.getAttribute('data-count');
                    
                    if (dataCount) {
                        // Use data-count if available (homepage stats)
                        finalNumber = parseInt(dataCount);
                        const currentText = target.textContent;
                        suffix = currentText.replace(/[\d,]/g, ''); // Extract non-numeric characters
                    } else {
                        // Extract number from text content (service page stats)
                        const textContent = target.textContent.trim();
                        
                        // Skip animation for special formats that shouldn't be animated
                        const skipPatterns = [
                            /^\d+\/\d+$/,        // "24/7"
                            /^<.*>/,             // "< 3 Sec"
                            /^\d+(\.\d+)?x$/,    // "3.2x", "12x"
                            /^\d+hr?s?$/,        // "24hr", "72hrs"
                            /^\d+(\.\d+)?s$/,    // "2.1s"
                            /^.*days?$/i         // "7 Days"
                        ];
                        
                        const shouldSkip = skipPatterns.some(pattern => pattern.test(textContent));
                        if (shouldSkip) {
                            observer.unobserve(target);
                            return;
                        }
                        
                        // Better parsing for currency and complex formats
                        const match = textContent.match(/^([^\d]*)([\d,]+(?:\.\d+)?)(.*?)$/);
                        if (match) {
                            prefix = match[1]; // e.g., "£"
                            finalNumber = parseFloat(match[2].replace(/,/g, '')); // e.g., "2.5" -> 2.5
                            suffix = match[3]; // e.g., "M+"
                        } else {
                            // Fallback: try to extract just numbers
                            const numberMatch = textContent.match(/[\d,]+/);
                            if (numberMatch) {
                                finalNumber = parseInt(numberMatch[0].replace(/,/g, ''));
                                suffix = textContent.replace(/[\d,]/g, '');
                            } else {
                                observer.unobserve(target);
                                return;
                            }
                        }
                    }
                    
                    // Skip animation if we couldn't get a valid number
                    if (isNaN(finalNumber) || finalNumber <= 0) {
                        observer.unobserve(target);
                        return;
                    }
                    
                    let currentNumber = 0;
                    const increment = finalNumber / 50; // Smoother animation
                    const duration = 2000; // 2 seconds
                    const interval = duration / 50;                    const counter = setInterval(() => {
                        currentNumber += increment;
                        if (currentNumber >= finalNumber) {
                            // Final number with proper decimal handling
                            const displayNumber = finalNumber % 1 === 0 ? 
                                finalNumber.toLocaleString() : 
                                finalNumber.toLocaleString(undefined, { minimumFractionDigits: 1, maximumFractionDigits: 1 });
                            target.textContent = prefix + displayNumber + suffix;
                            clearInterval(counter);
                        } else {
                            // During animation, preserve decimal places if original number has them
                            const displayNumber = finalNumber % 1 === 0 ? 
                                Math.floor(currentNumber).toLocaleString() : 
                                currentNumber.toLocaleString(undefined, { minimumFractionDigits: 1, maximumFractionDigits: 1 });
                            target.textContent = prefix + displayNumber + suffix;
                        }
                    }, interval);

                    observer.unobserve(target);
                }
            });
        }, { threshold: 0.3 });

        statNumbers.forEach(stat => observer.observe(stat));
    }

    // Initialize stats animation
    animateStats();    // Smooth Scroll for Anchor Links (only for same-page anchors)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just "#" or if it's a navigation link that should go to another page
            if (href === '#' || href.length <= 1) {
                return;
            }
            
            // Only proceed if the target element exists on the current page
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
            // If target doesn't exist, let the browser handle it normally (navigate to new page)
        });
    });// Enhanced Service Cards - Performance Optimized
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
        
        // Simple hover effects - no complex mouse tracking
        card.addEventListener('mouseenter', function() {
            this.classList.add('card-hover');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('card-hover');
        });
    });    // Premium Service Cards - Performance Optimized
    const premiumServiceCards = document.querySelectorAll('.premium-service-card');
    
    premiumServiceCards.forEach((card, index) => {
        // Staggered animation delay
        card.style.animationDelay = `${index * 0.15}s`;
        
        // Simple hover effects without complex transforms
        card.addEventListener('mouseenter', function() {
            this.classList.add('premium-card-hover');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('premium-card-hover');
        });
        
        // CTA button enhanced effects
        const ctaButton = card.querySelector('.premium-service-cta');
        if (ctaButton) {
            ctaButton.addEventListener('mouseenter', function() {
                const arrow = this.querySelector('.cta-arrow');
                if (arrow) {
                    arrow.style.transform = 'translateX(8px) scale(1.1)';
                }
            });
            
            ctaButton.addEventListener('mouseleave', function() {
                const arrow = this.querySelector('.cta-arrow');
                if (arrow) {
                    arrow.style.transform = 'translateX(0) scale(1)';
                }
            });
        }
    });

    // Add floating orbs animation control
    const floatingOrbs = document.querySelectorAll('.floating-orb');
    floatingOrbs.forEach((orb, index) => {
        // Add random initial position
        orb.style.animationDelay = `${index * 2}s`;
        
        // Add interaction with mouse movement
        document.addEventListener('mousemove', function(e) {
            const moveX = (e.clientX / window.innerWidth - 0.5) * 20;
            const moveY = (e.clientY / window.innerHeight - 0.5) * 20;
            
            orb.style.transform = `translate(${moveX * (index + 1)}px, ${moveY * (index + 1)}px)`;
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
    });    // Enhanced Tag Animation
    const tags = document.querySelectorAll('.tag');
    tags.forEach((tag, index) => {
        tag.style.animationDelay = `${index * 0.1}s`;
        
        // No hover movement effects - keeping tags static on hover
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
    });    // Footer Social Icons Animation
    const socialIcons = document.querySelectorAll('.social-icon');
    socialIcons.forEach((icon, index) => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) scale(1.1)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
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
    });    // Note: serviceCards already handled above with magnetic effects    // Enhanced CTA button tracking effect - REMOVED yellow/white hover effect
    // The problematic yellow and white hover effect has been removed for better UX
    // Buttons will now use only their CSS-defined hover states

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
    };    const animationObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                
                // Add staggered animation for card grids
                if (entry.target.classList.contains('grid') || 
                    entry.target.classList.contains('team-grid') ||
                    entry.target.classList.contains('testimonials-grid') ||
                    entry.target.classList.contains('blog-grid') ||
                    entry.target.classList.contains('insights-grid')) {
                    
                    const cards = entry.target.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card, .featured-insight, .insight-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('visible');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);    // Observe all animation elements
    const animatedElements = document.querySelectorAll('.fade-in, .slide-up, .service-card, .team-member, .testimonial-card, .blog-card, .stat-item, .featured-insight, .insight-card, .insights-grid');
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
            
            try {                // Load and play the hero animation with cache busting
                const cacheBuster = Date.now(); // Current timestamp to prevent caching
                const animation = lottie.loadAnimation({
                    container: container,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: aimpro_data.theme_url + '/assets/images/hero.json?v=' + cacheBuster
                });
                
                // Handle successful load
                animation.addEventListener('DOMLoaded', function() {
                    container.classList.remove('loading');
                    // Lottie hero animation loaded
                });
                
                // Handle error
                animation.addEventListener('error', function(error) {
                    container.classList.remove('loading');
                    // Lottie animation failed to load
                });
                
            } catch (error) {
                container.classList.remove('loading');
                // Failed to initialize Lottie animation
            }
        } else if (container) {
            // Lottie library not available or container not found
        }
    }
      // Initialize Lottie animation after DOM is ready
    initLottieHeroAnimation();    // Initialize Single Optimized Lottie Stats Animation for Enhanced Performance
    function initLottieStatsAnimation() {
        let animation = null;
        let animationData = null;
        let statsVisible = false;
        let animationCreated = false;
        
        // Intersection Observer for lazy loading animation only when visible
        const statsSection = document.querySelector('.stats-section');
        if (!statsSection) {
            // Stats section not found
            return null;
        }
        
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !animationCreated) {
                    statsVisible = true;
                    animationCreated = true;
                    loadStatsAnimation();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { 
            rootMargin: '100px', // Start loading 100px before section comes into view
            threshold: 0.1 
        });
        
        statsObserver.observe(statsSection);
        
        function loadStatsAnimation() {
            // Performance optimization: Single animation instance
            if (typeof lottie !== 'undefined') {
                // Check for reduced motion preference
                const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                if (prefersReducedMotion) {
                    // Using CSS fallback for reduced motion
                    initCSSWaveAnimation();
                    return;
                }
                
                // Pre-load the animation data with AbortController for cancellation
                const abortController = new AbortController();
                
                // Set a timeout to fallback if loading takes too long
                const loadTimeout = setTimeout(() => {
                    abortController.abort();
                    // Animation loading timeout, using CSS fallback
                    initCSSWaveAnimation();
                }, 3000); // 3 second timeout
                
                // Add cache busting parameter to ensure fresh content
                const cacheBuster = Date.now();
                fetch(aimpro_data.theme_url + '/assets/images/stats.json?v=' + cacheBuster, {
                    signal: abortController.signal,
                    cache: 'no-cache' // Disable cache to ensure fresh content
                })
                    .then(response => {
                        clearTimeout(loadTimeout);
                        if (!response.ok) throw new Error('Failed to fetch animation data');
                        return response.json();
                    })
                    .then(data => {
                        animationData = data;
                        
                        // Reduce animation complexity for better performance
                        if (animationData.layers) {
                            animationData.layers = animationData.layers.slice(0, Math.min(5, animationData.layers.length));
                        }
                        
                        // Create single animation instance
                        const container = document.getElementById('lottie-stats-animation');
                        
                        if (container) {
                            container.classList.add('loading');
                            
                            try {
                                animation = lottie.loadAnimation({
                                    container: container,
                                    renderer: 'canvas', // Use canvas for better performance
                                    loop: true,
                                    autoplay: statsVisible, // Only autoplay if section is visible
                                    animationData: animationData,
                                    rendererSettings: {
                                        progressiveLoad: false, // We already have the data
                                        hideOnTransparent: true,
                                        preserveAspectRatio: 'xMidYMid slice',
                                        context: container.getContext ? container.getContext('2d') : null,
                                        scaleMode: 'noScale',
                                        clearCanvas: true
                                    }
                                });
                                
                                // Performance optimizations
                                animation.setSubframe(false);
                                animation.setSpeed(0.8); // Slightly slower for smoother performance
                                
                                animation.addEventListener('DOMLoaded', function() {
                                    container.classList.remove('loading');
                                    // Stats animation loaded
                                });
                                
                                animation.addEventListener('error', function(error) {
                                    container.classList.remove('loading');
                                    // Stats animation error
                                    initCSSWaveAnimation();
                                });
                                
                                // Pause animation when not visible for performance
                                const containerObserver = new IntersectionObserver((entries) => {
                                    entries.forEach(entry => {
                                        if (entry.isIntersecting) {
                                            animation.play();
                                        } else {
                                            animation.pause();
                                        }
                                    });
                                }, { threshold: 0.1 });
                                
                                containerObserver.observe(container);
                                
                                // Store animation globally for cleanup
                                window.statsAnimation = animation;
                                
                            } catch (error) {
                                container.classList.remove('loading');
                                // Failed to load stats animation
                                initCSSWaveAnimation();
                            }
                        }
                    })
                    .catch(error => {
                        clearTimeout(loadTimeout);
                        if (error.name !== 'AbortError') {
                            // Failed to pre-load animation data
                        }
                        initCSSWaveAnimation();
                    });
            } else {
                // Fallback to CSS animation if Lottie unavailable
                initCSSWaveAnimation();
            }
        }
        
        return animation;
    }    // Fallback CSS Wave Animation
    function initCSSWaveAnimation() {
        const container = document.getElementById('lottie-stats-animation');
        const fallbackDiv = document.querySelector('.css-wave-animation');
        
        if (container) {
            // Remove loading state
            container.classList.remove('loading');
            container.classList.add('css-fallback');
        }
        
        // Show CSS animation
        if (fallbackDiv) {
            fallbackDiv.style.display = 'block';
            // CSS wave animation fallback activated
        }
        
        // Add performance optimization for CSS animation
        if (container) {
            container.style.willChange = 'transform, opacity';
            
            // Clean up after animation settles
            setTimeout(() => {
                if (container) {
                    container.style.willChange = 'auto';
                }
            }, 2000);
        }
    }// Initialize stats animation after DOM is ready with performance awareness
    setTimeout(() => {
        initPerformanceAwareAnimations();
    }, 500); // Add delay to ensure everything is loaded
    
    // Re-initialize if needed (for dynamic content)
    document.addEventListener('lottie-hero-refresh', initLottieHeroAnimation);
    document.addEventListener('lottie-stats-refresh', initLottieStatsAnimation);    // Enhanced Performance monitoring for stats section
    function monitorStatsPerformance() {
        const statsSection = document.querySelector('.stats-section');
        if (!statsSection) return;
        
        let performanceMonitoringActive = false;
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !performanceMonitoringActive) {
                    performanceMonitoringActive = true;
                    
                    const startTime = performance.now();
                    let frameCount = 0;
                    let lastFrameTime = startTime;
                    const frameMetrics = [];
                    
                    // Enhanced frame rate monitoring
                    const frameMonitor = () => {
                        const currentTime = performance.now();
                        const frameDuration = currentTime - lastFrameTime;
                        frameMetrics.push(frameDuration);
                        lastFrameTime = currentTime;
                        frameCount++;
                        
                        if (frameCount < 120) { // Monitor for ~2 seconds at 60fps
                            requestAnimationFrame(frameMonitor);
                        } else {
                            // Calculate performance metrics
                            const avgFrameTime = frameMetrics.reduce((a, b) => a + b, 0) / frameMetrics.length;
                            const maxFrameTime = Math.max(...frameMetrics);
                            const fps = 1000 / avgFrameTime;
                            
                            // Performance thresholds
                            if (avgFrameTime > 20) { // Below 50fps
                                // Performance monitoring
                                
                                // Automatically optimize if performance is poor
                                optimizeAnimationsForPerformance();
                            } else if (avgFrameTime > 16.67) { // Below 60fps
                                // Performance moderate
                            } else {
                                // Performance optimal
                            }
                            
                            // Memory usage monitoring
                            if (performance.memory) {
                                const memoryMB = (performance.memory.usedJSHeapSize / 1024 / 1024).toFixed(1);
                                // Memory usage tracking
                                
                                if (performance.memory.usedJSHeapSize > 50 * 1024 * 1024) { // > 50MB
                                    console.warn('High memory usage detected, consider reducing animation complexity');
                                }
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
      // Auto-optimization function for poor performance
    function optimizeAnimationsForPerformance() {
        const animation = window.statsAnimation;
        const container = document.getElementById('lottie-stats-animation');
        const cssWave = document.querySelector('.css-wave-animation');
        
        // Optimizing animation for better performance
        
        if (animation && container) {
            // Reduce animation quality and complexity
            container.classList.add('performance-optimized');
            
            // Reduce opacity for less visual complexity
            container.style.opacity = '0.6';
            
            // Apply slight blur to reduce detail
            container.style.filter = 'blur(0.5px)';
            
            // Scale down slightly for better performance
            container.style.transform = 'scale(0.95) translateZ(0)';
            
            // Reduce animation speed for smoother performance
            if (animation.setSpeed) {
                animation.setSpeed(0.5);
            }
        }
        
        // Simplify CSS animation if present
        if (cssWave) {
            cssWave.style.animationDuration = '20s'; // Slower animation
            cssWave.style.opacity = '0.3'; // Reduced opacity
        }
        
        // Clean up after optimization
        setTimeout(() => {
            if (window.gc && typeof window.gc === 'function') {
                window.gc(); // Force garbage collection if available
            }
        }, 5000);
    }
    
    // Memory cleanup function
    function cleanupStatsAnimations() {
        const animation = window.statsAnimation;
        
        if (animation && typeof animation.destroy === 'function') {
            animation.destroy();
        }
        
        // Clear reference
        window.statsAnimation = null;
        
        // Force cleanup of any remaining references
        const container = document.getElementById('lottie-stats-animation');
        if (container) {
            container.innerHTML = '';
            container.style.willChange = 'auto';
        }
        
        // Stats animation cleaned up
    }
    
    // Cleanup on page unload
    window.addEventListener('beforeunload', cleanupStatsAnimations);
    
    // Cleanup if user navigates away and comes back
    document.addEventListener('visibilitychange', () => {
        if (document.hidden) {
            // Pause animations when tab is not visible
            const animations = window.statsAnimations || [];
            animations.forEach(animation => {
                if (animation && typeof animation.pause === 'function') {
                    animation.pause();
                }
            });
        } else {
            // Resume animations when tab becomes visible
            const animations = window.statsAnimations || [];
            animations.forEach(animation => {
                if (animation && typeof animation.play === 'function') {
                    animation.play();
                }
            });
        }
    });

    // Initialize performance monitoring
    monitorStatsPerformance();

    // Preload animation data for better performance
    function preloadAnimationData() {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.href = aimpro_data.theme_url + '/assets/images/stats.json';
        link.as = 'fetch';
        link.crossOrigin = 'anonymous';
        document.head.appendChild(link);
    }
    
    // Device performance detection
    function detectDevicePerformance() {
        const navigator = window.navigator;
        let performanceLevel = 'high'; // Default to high performance
        
        // Check for low-end device indicators
        if (navigator.hardwareConcurrency && navigator.hardwareConcurrency <= 2) {
            performanceLevel = 'low';
        }
        
        if (navigator.deviceMemory && navigator.deviceMemory <= 2) {
            performanceLevel = 'low';
        }
        
        // Check connection speed
        if (navigator.connection) {
            const connection = navigator.connection;
            if (connection.effectiveType === 'slow-2g' || 
                connection.effectiveType === '2g' ||
                connection.saveData) {
                performanceLevel = 'low';
            }
        }
        
        // Check for mobile device
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            if (performanceLevel === 'high') {
                performanceLevel = 'medium';
            }
        }
        
        // Device performance level determined
        return performanceLevel;
    }
    
    // Initialize performance-aware animations
    function initPerformanceAwareAnimations() {
        const performanceLevel = detectDevicePerformance();
        
        switch (performanceLevel) {
            case 'low':
                // Low performance device, using CSS animations
                initCSSWaveAnimation();
                break;
            case 'medium':
                // Medium performance device, using optimized animations
                setTimeout(initLottieStatsAnimation, 1000); // Delay for medium devices
                break;
            case 'high':
            default:
                // High performance device, using full animations
                initLottieStatsAnimation();
                break;
        }
    }
      // Preload animation data early
    if (typeof aimpro_data !== 'undefined' && aimpro_data.theme_url) {
        preloadAnimationData();
    }
    
    // Theme Toggle Functionality
    const themeToggle = document.querySelector('.theme-toggle');    const sunIcon = document.querySelector('.sun-icon');
    const moonIcon = document.querySelector('.moon-icon');
    
    if (themeToggle) {
        // Initialize light theme immediately (no flash)
        let isDarkTheme = localStorage.getItem('darkTheme') === 'true';
        
        // Apply saved theme preference immediately
        if (isDarkTheme) {
            document.body.classList.remove('light-theme');
            document.documentElement.classList.remove('light-theme');
            sunIcon.style.opacity = '0';
            moonIcon.style.opacity = '1';
            themeToggle.setAttribute('aria-label', 'Switch to light theme');
        } else {
            document.body.classList.add('light-theme');
            document.documentElement.classList.add('light-theme');
            sunIcon.style.opacity = '1';
            moonIcon.style.opacity = '0';
            themeToggle.setAttribute('aria-label', 'Switch to dark theme');
        }
        
        // Toggle button click handler
        themeToggle.addEventListener('click', function() {
            // Toggle theme state
            isDarkTheme = !isDarkTheme;
            
            // Save preference
            localStorage.setItem('darkTheme', isDarkTheme);
            
            // Apply theme to body element
            if (isDarkTheme) {
                // Remove light theme class (activate dark theme)
                document.body.classList.remove('light-theme');
                document.documentElement.classList.remove('light-theme');
                
                // Show moon icon (dark theme active)
                sunIcon.style.opacity = '0';
                moonIcon.style.opacity = '1';
                themeToggle.setAttribute('aria-label', 'Switch to light theme');
                // Switched to dark theme
            } else {
                // Add light theme class (activate light theme)
                document.body.classList.add('light-theme');
                document.documentElement.classList.add('light-theme');
                
                // Show sun icon (light theme active)
                sunIcon.style.opacity = '1';
                moonIcon.style.opacity = '0';
                themeToggle.setAttribute('aria-label', 'Switch to dark theme');
                // Switched to light theme
            }
            
            // Add feedback animation
            themeToggle.style.transform = 'scale(0.95)';
            setTimeout(() => {
                themeToggle.style.transform = 'scale(1)';
            }, 150);
        });
        
        // Theme toggle initialized
    } else {
        console.warn('Theme toggle button not found');
    }
    
    // Form Handling
    // ==============
    
    // Lead Magnet Form
    const leadMagnetForm = document.getElementById('lead-magnet-form');
    if (leadMagnetForm) {
        leadMagnetForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            
            // Add loading state
            submitBtn.textContent = 'SENDING...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';
            
            // Basic validation
            const name = this.querySelector('[name="lead_name"]').value.trim();
            const email = this.querySelector('[name="lead_email"]').value.trim();
            const phone = this.querySelector('[name="lead_phone"]').value.trim();
            
            if (!name || !email || !phone) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                return;
            }
        });
    }
    
    // Main Contact Form
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.form-submit-btn');
            const originalText = submitBtn.textContent;
            
            // Add loading state
            submitBtn.textContent = 'SENDING...';
            submitBtn.disabled = true;
            submitBtn.style.opacity = '0.7';
            
            // Basic validation
            const name = this.querySelector('[name="name"]').value.trim();
            const email = this.querySelector('[name="email"]').value.trim();
            
            if (!name || !email) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                submitBtn.style.opacity = '1';
                return;
            }
        });
    }
    
    // Auto-hide success/error messages after 5 seconds
    const formMessages = document.querySelectorAll('.form-message');
    formMessages.forEach(message => {
        setTimeout(() => {
            message.style.transition = 'opacity 0.5s ease';
            message.style.opacity = '0';
            setTimeout(() => {
                message.style.display = 'none';
            }, 500);
        }, 5000);
    });
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

// ============================================
// SMART SUBMENU POSITIONING
// Prevents submenus from causing page scrolling
// ============================================

function initSmartSubmenus() {
    const navItems = document.querySelectorAll('.nav-item-dropdown, .nav-item-mega');
    
    navItems.forEach(item => {
        const submenu = item.querySelector('.dropdown-menu, .mega-menu');
        if (!submenu) return;

        // Add hover listeners for positioning
        item.addEventListener('mouseenter', function() {
            setTimeout(() => {
                adjustSubmenuPosition(submenu);
            }, 50); // Small delay to ensure CSS transition starts
        });
    });
}

function adjustSubmenuPosition(submenu) {
    const rect = submenu.getBoundingClientRect();
    const viewportWidth = window.innerWidth;
    const viewportHeight = window.innerHeight;
    
    // Reset any previous adjustments
    submenu.style.left = '';
    submenu.style.right = '';
    submenu.style.transform = '';
    submenu.style.maxHeight = '';
    
    // Check horizontal overflow
    if (rect.right > viewportWidth - 20) {
        // Menu overflows right side
        submenu.style.left = 'auto';
        submenu.style.right = '0';
        submenu.style.transform = 'translateX(0)';
    } else if (rect.left < 20) {
        // Menu overflows left side
        submenu.style.left = '0';
        submenu.style.transform = 'translateX(0)';
    } else {
        // Default centered position
        submenu.style.left = '50%';
        submenu.style.transform = 'translateX(-50%)';
    }
    
    // Check vertical overflow (prevent scrolling)
    const maxAllowedHeight = viewportHeight - rect.top - 40; // 40px buffer
    if (rect.height > maxAllowedHeight) {
        submenu.style.maxHeight = maxAllowedHeight + 'px';
        submenu.style.overflowY = 'hidden'; // Never allow scrolling
        
        // For mega menus, adjust grid layout to fit
        if (submenu.classList.contains('mega-menu')) {
            const grid = submenu.querySelector('.mega-menu-grid');
            if (grid && maxAllowedHeight < 400) {
                grid.style.gridTemplateColumns = 'repeat(2, 1fr)';
                grid.style.gap = '1.5rem';
            }
        }
    }
}

// Initialize smart submenus when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initSmartSubmenus);
} else {
    initSmartSubmenus();
}

// Re-adjust on window resize
let resizeTimeout;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
        // Reset all submenu adjustments on resize
        document.querySelectorAll('.dropdown-menu, .mega-menu').forEach(submenu => {
            submenu.style.left = '';
            submenu.style.right = '';
            submenu.style.transform = '';
            submenu.style.maxHeight = '';
            submenu.style.overflowY = '';
            
            const grid = submenu.querySelector('.mega-menu-grid');
            if (grid) {
                grid.style.gridTemplateColumns = '';
                grid.style.gap = '';
            }
        });
    }, 250);
});

// Testimonials Carousel Functionality
function initTestimonialsCarousel() {
    const carouselWrapper = document.querySelector('.testimonials-carousel-wrapper');
    if (!carouselWrapper) return;
    
    const carouselTrack = carouselWrapper.querySelector('.testimonials-carousel-track');
    const testimonialCards = carouselTrack.querySelectorAll('.testimonial-card');
    const prevButton = document.querySelector('.carousel-prev');
    const nextButton = document.querySelector('.carousel-next');
    const dots = document.querySelectorAll('.carousel-dots .dot');
    
    if (!carouselTrack || testimonialCards.length === 0) return;
    
    let currentIndex = 0;
    const totalSlides = testimonialCards.length;
    const maxVisibleSlides = 3; // Limit to 3 slides even if we have more testimonials
    let isTransitioning = false;
    
    // Calculate card width including gap
    function getCardWidth() {
        const cardStyle = window.getComputedStyle(testimonialCards[0]);
        const cardWidth = testimonialCards[0].offsetWidth;
        const gap = parseInt(window.getComputedStyle(carouselTrack).gap) || 0;
        return cardWidth + gap;
    }
    
    // Update carousel position
    function updateCarousel() {
        if (isTransitioning) return;
        isTransitioning = true;
        
        const cardWidth = getCardWidth();
        const translateX = -currentIndex * cardWidth;
        
        carouselTrack.style.transform = `translateX(${translateX}px)`;
        
        // Update dots (only show first 3 dots as active)
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
        
        // Update button states - limit to maxVisibleSlides
        if (prevButton) prevButton.disabled = currentIndex === 0;
        if (nextButton) nextButton.disabled = currentIndex === maxVisibleSlides - 1;
        
        // Re-enable transitions after animation
        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    }
    
    // Previous slide
    function goToPrevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
            updateCarousel();
        }
    }
    
    // Next slide
    function goToNextSlide() {
        if (currentIndex < maxVisibleSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // Loop back to first
        }
        updateCarousel();
    }
    
    // Go to specific slide (limit to maxVisibleSlides)
    function goToSlide(index) {
        if (index >= 0 && index < maxVisibleSlides && index !== currentIndex) {
            currentIndex = index;
            updateCarousel();
        }
    }
    
    // Event listeners
    if (prevButton) {
        prevButton.addEventListener('click', goToPrevSlide);
    }
    
    if (nextButton) {
        nextButton.addEventListener('click', goToNextSlide);
    }
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToSlide(index));
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (carouselWrapper.contains(document.activeElement) || e.target.closest('.testimonials-carousel-wrapper')) {
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                goToPrevSlide();
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                goToNextSlide();
            }
        }
    });
    
    // Touch/swipe support
    let startX = 0;
    let startY = 0;
    let isDragging = false;
    
    carouselWrapper.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        startY = e.touches[0].clientY;
        isDragging = true;
    }, { passive: true });
    
    carouselWrapper.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        
        const currentX = e.touches[0].clientX;
        const currentY = e.touches[0].clientY;
        const diffX = startX - currentX;
        const diffY = startY - currentY;
        
        // If horizontal swipe is more significant than vertical, prevent scroll
        if (Math.abs(diffX) > Math.abs(diffY)) {
            e.preventDefault();
        }
    }, { passive: false });
    
    carouselWrapper.addEventListener('touchend', (e) => {
        if (!isDragging) return;
        isDragging = false;
        
        const endX = e.changedTouches[0].clientX;
        const diffX = startX - endX;
        const threshold = 50;
        
        if (Math.abs(diffX) > threshold) {
            if (diffX > 0) {
                goToNextSlide();
            } else {
                goToPrevSlide();
            }
        }
    }, { passive: true });
    
    // Initialize carousel
    updateCarousel();
    
    // Handle window resize
    window.addEventListener('resize', () => {
        updateCarousel();
    });
}

// Initialize testimonials carousel when DOM is ready
initTestimonialsCarousel();
