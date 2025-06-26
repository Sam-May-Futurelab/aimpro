/**
 * Premium Custom Cursor - Global Site-wide
 * Clean, modern cursor with orange branding
 */

class PremiumCursor {
    constructor() {
        this.cursor = null;
        this.isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        this.rafId = null;
        this.lastX = 0; // Track last position to avoid unnecessary updates
        this.lastY = 0;
        this.orangeCache = new WeakMap(); // Use WeakMap for better memory management
        
        // Don't initialize on touch devices
        if (this.isTouch) return;
        
        this.init();
    }
    
    init() {
        this.createCursor();
        this.bindEvents();
    }
    
    createCursor() {
        // Create main cursor element only
        this.cursor = document.createElement('div');
        this.cursor.className = 'custom-cursor';
        document.body.appendChild(this.cursor);
    }
    
    bindEvents() {
        // Use requestAnimationFrame for smooth 60fps updates with position caching
        const updateCursor = (e) => {
            // Only update if position changed (micro-optimization)
            if (e.clientX === this.lastX && e.clientY === this.lastY) return;
            
            if (this.rafId) cancelAnimationFrame(this.rafId);
            
            this.rafId = requestAnimationFrame(() => {
                // Move cursor instantly using transform for better performance
                this.cursor.style.transform = `translate(${e.clientX - 10}px, ${e.clientY - 10}px)`;
                this.lastX = e.clientX;
                this.lastY = e.clientY;
            });
        };
        
        // Track mouse movement with passive listener for better performance
        document.addEventListener('mousemove', updateCursor, { passive: true });
        
        // Hide cursor when leaving window
        document.addEventListener('mouseleave', () => {
            this.cursor.style.opacity = '0';
        }, { passive: true });
        
        // Show cursor when entering window
        document.addEventListener('mouseenter', () => {
            this.cursor.style.opacity = '1';
        }, { passive: true });
        
        // Smart color detection and hover effects - Optimized with element caching
        const interactiveSelector = 'a, button, .btn, [role="button"], input[type="submit"], input[type="button"], .clickable';
        const textInputSelector = 'input[type="text"], input[type="email"], input[type="password"], input[type="search"], textarea, [contenteditable="true"]';
        
        document.addEventListener('mouseover', (e) => {
            const element = e.target;
            
            // Clear cache for elements that might change background on hover (like hero-badge)
            if (element.classList.contains('hero-badge')) {
                this.orangeCache.delete(element);
            }
            
            // Check if hovering over interactive element
            if (element.matches(interactiveSelector)) {
                this.cursor.classList.add('hover');
                
                // Check if element has orange background and switch to white cursor
                if (this.isOrangeElement(element)) {
                    this.cursor.classList.add('on-orange');
                }
            }
            
            // Check for orange backgrounds even on non-interactive elements
            else if (this.isOrangeElement(element)) {
                this.cursor.classList.add('on-orange');
            }
        }, { passive: true });
        
        document.addEventListener('mouseout', (e) => {
            const element = e.target;
            
            if (element.matches(interactiveSelector)) {
                this.cursor.classList.remove('hover');
            }
            
            // Always remove orange state on mouseout
            this.cursor.classList.remove('on-orange');
        }, { passive: true });
        
        // Text input detection - Consolidated
        document.addEventListener('mouseover', (e) => {
            if (e.target.matches(textInputSelector)) {
                this.cursor.classList.add('text');
                
                // Check if text input has orange background
                if (this.isOrangeElement(e.target)) {
                    this.cursor.classList.add('on-orange');
                }
            }
        }, { passive: true });
        
        document.addEventListener('mouseout', (e) => {
            if (e.target.matches(textInputSelector)) {
                this.cursor.classList.remove('text');
                this.cursor.classList.remove('on-orange');
            }
        }, { passive: true });
        
        // Click effects with minimal overhead
        document.addEventListener('mousedown', () => {
            this.cursor.classList.add('click');
        }, { passive: true });
        
        document.addEventListener('mouseup', () => {
            this.cursor.classList.remove('click');
        }, { passive: true });
    }
    
    // Check if element has orange background color - Ultra-optimized with WeakMap caching
    isOrangeElement(element) {
        // Use WeakMap cache for better performance and memory management
        if (this.orangeCache.has(element)) {
            return this.orangeCache.get(element);
        }
        
        // Quick parent selector check first (fastest) - More specific selectors
        const orangeSelectors = [
            '.service-hero',
            '.page-hero',
            '.btn-primary', // Primary buttons have orange gradient background
            '.btn-orange',
            '.cta-primary',
            '.locations-cta-section',
            '.btn[style*="background"]',
            '.hero-badge',
            '.section-badge',
            '.resources-services-grid .service-icon' // Resources page service icons
        ];
        
        // Check if element or parent matches orange selectors
        for (const selector of orangeSelectors) {
            try {
                if (element.closest(selector)) {
                    this.orangeCache.set(element, true);
                    return true;
                }
            } catch (e) {
                // Ignore invalid selectors
            }
        }
        
        // Check for specific orange button classes first
        if (element.classList.contains('btn-primary') || // Primary buttons are orange gradient
            element.classList.contains('btn-orange') || 
            element.classList.contains('cta-primary') ||
            element.classList.contains('hero-badge') ||
            element.classList.contains('section-badge')) {
            this.orangeCache.set(element, true);
            return true;
        }
        
        // Only do expensive style computation if selector check fails AND element has solid background
        const computedStyle = window.getComputedStyle(element);
        const bgColor = computedStyle.backgroundColor;
        const bgImage = computedStyle.backgroundImage;
        
        // Check for gradient backgrounds first (more common for buttons)
        if (bgImage && bgImage !== 'none') {
            const gradientPatterns = [
                /linear-gradient.*241.*90.*37/i, // Primary orange gradients
                /linear-gradient.*230.*70.*20/i, // Secondary orange gradients
                /linear-gradient.*210.*50.*10/i, // Hover orange gradients
            ];
            
            if (gradientPatterns.some(pattern => pattern.test(bgImage))) {
                this.orangeCache.set(element, true);
                return true;
            }
        }
        
        // Skip if transparent or no background
        if (!bgColor || bgColor === 'transparent' || bgColor === 'rgba(0, 0, 0, 0)') {
            this.orangeCache.set(element, false);
            return false;
        }
        
        // Check for solid orange backgrounds only
        const orangePatterns = [
            /^rgb\(241,\s*90,\s*37\)$/, // Exact primary orange
            /^rgb\(224,\s*77,\s*26\)$/, // Exact secondary orange
            /^rgba\(241,\s*90,\s*37,\s*1\)$/, // Orange with full alpha
            /^rgba\(224,\s*77,\s*26,\s*1\)$/, // Secondary orange with full alpha
        ];
        
        // Check background color for exact matches only
        if (orangePatterns.some(pattern => pattern.test(bgColor))) {
            this.orangeCache.set(element, true);
            return true;
        }
        
        // Cache negative result
        this.orangeCache.set(element, false);
        return false;
    }
    
    hideTrails() {
        // No trails to hide anymore
    }
    
    showTrails() {
        // No trails to show anymore
    }
}

// Initialize the cursor when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Initialize on all pages
    new PremiumCursor();
});
