/**
 * Premium Scroll Animations
 * Lightweight animation system using Intersection Observer API
 * Performance-optimized for smooth, subtle animations
 */

class PremiumScrollAnimations {
    constructor() {
        this.observer = null;
        this.animatedElements = new Set();
        this.init();
    }

    init() {
        // Check if browser supports Intersection Observer
        if (!('IntersectionObserver' in window)) {
            this.fallback();
            return;
        }

        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setupObserver());
        } else {
            this.setupObserver();
        }
    }

    setupObserver() {
        // Create intersection observer with optimized settings
        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -50px 0px', // Trigger when 50px visible
            threshold: 0.1 // 10% visible
        };

        this.observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => this.handleIntersection(entry));
        }, observerOptions);

        // Find and observe all animation elements
        this.observeElements();
    }

    observeElements() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach((element, index) => {
            // Add stagger delay for grid items
            if (element.classList.contains('animate-stagger')) {
                const delay = index * 100; // 100ms between each
                element.style.setProperty('--stagger-delay', `${delay}ms`);
            }

            this.observer.observe(element);
        });
    }

    handleIntersection(entry) {
        const element = entry.target;

        if (entry.isIntersecting && !this.animatedElements.has(element)) {
            // Element is visible, animate it
            this.animateElement(element);
            this.animatedElements.add(element);
            
            // Stop observing after animation (one-time animation)
            this.observer.unobserve(element);
        }
    }

    animateElement(element) {
        // Use requestAnimationFrame for smooth animation
        requestAnimationFrame(() => {
            element.classList.add('animate-visible');
        });
    }

    // Fallback for older browsers
    fallback() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        elements.forEach(element => {
            element.classList.add('animate-visible');
            element.style.opacity = '1';
            element.style.transform = 'none';
        });
    }

    // Public method to manually trigger animation
    triggerAnimation(selector) {
        const elements = document.querySelectorAll(selector);
        elements.forEach(element => {
            if (!this.animatedElements.has(element)) {
                this.animateElement(element);
                this.animatedElements.add(element);
            }
        });
    }

    // Clean up observer
    destroy() {
        if (this.observer) {
            this.observer.disconnect();
        }
    }
}

// Initialize animations when script loads
document.addEventListener('DOMContentLoaded', function() {
    // Initialize the animation system
    window.premiumAnimations = new PremiumScrollAnimations();
    
    // Debug mode (remove in production)
    if (window.location.search.includes('debug-animations')) {
        console.log('Premium Scroll Animations initialized');
    }
});

// Clean up on page unload
window.addEventListener('beforeunload', function() {
    if (window.premiumAnimations) {
        window.premiumAnimations.destroy();
    }
});
