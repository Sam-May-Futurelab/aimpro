/**
 * Premium Custom Cursor - Global Site-wide
 * Clean, modern cursor with orange branding
 */

class PremiumCursor {
    constructor() {
        this.cursor = null;
        this.trails = [];
        this.maxTrails = 4; // Reduced from 8 for better performance
        this.isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        
        // Don't initialize on touch devices
        if (this.isTouch) return;
        
        this.init();
    }
    
    init() {
        this.createCursor();
        this.bindEvents();
    }
    
    createCursor() {
        // Create main cursor element
        this.cursor = document.createElement('div');
        this.cursor.className = 'custom-cursor';
        document.body.appendChild(this.cursor);
        
        // Create trail elements
        for (let i = 0; i < this.maxTrails; i++) {
            const trail = document.createElement('div');
            trail.className = 'cursor-trail';
            trail.style.opacity = (1 - (i / this.maxTrails)) * 0.6;
            trail.style.transform = 'scale(' + (1 - (i / this.maxTrails) * 0.5) + ')';
            document.body.appendChild(trail);
            this.trails.push({
                element: trail,
                x: 0,
                y: 0
            });
        }
    }
    
    bindEvents() {
        // Direct cursor following - no lag!
        document.addEventListener('mousemove', (e) => {
            // Move cursor instantly
            this.cursor.style.left = e.clientX + 'px';
            this.cursor.style.top = e.clientY + 'px';
            
            // Update trails with minimal delay for smooth effect
            this.trails.forEach((trail, index) => {
                const delay = (index + 1) * 50; // Small delay in ms
                setTimeout(() => {
                    trail.element.style.left = e.clientX + 'px';
                    trail.element.style.top = e.clientY + 'px';
                }, delay);
            });
        });
        
        // Hide cursor when leaving window
        document.addEventListener('mouseleave', () => {
            this.cursor.style.opacity = '0';
            this.trails.forEach(trail => {
                trail.element.style.opacity = '0';
            });
        });
        
        // Show cursor when entering window
        document.addEventListener('mouseenter', () => {
            this.cursor.style.opacity = '1';
            this.trails.forEach((trail, index) => {
                trail.element.style.opacity = (1 - (index / this.maxTrails)) * 0.6;
            });
        });
        
        // Interactive elements hover effects
        const interactiveElements = document.querySelectorAll('a, button, .btn, [role="button"], input[type="submit"]');
        
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                this.cursor.classList.add('hover');
                this.hideTrails();
            });
            
            element.addEventListener('mouseleave', () => {
                this.cursor.classList.remove('hover');
                this.showTrails();
            });
            
            element.addEventListener('mousedown', () => {
                this.cursor.classList.add('click');
            });
            
            element.addEventListener('mouseup', () => {
                this.cursor.classList.remove('click');
            });
        });
        
        // Text input elements
        const textElements = document.querySelectorAll('input[type="text"], input[type="email"], textarea');
        
        textElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                this.cursor.classList.add('text');
                this.hideTrails();
            });
            
            element.addEventListener('mouseleave', () => {
                this.cursor.classList.remove('text');
                this.showTrails();
            });
        });
        
        // Loading state for form submissions
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            form.addEventListener('submit', () => {
                this.cursor.classList.add('loading');
                this.hideTrails();
                
                // Remove loading state after 3 seconds (fallback)
                setTimeout(() => {
                    this.cursor.classList.remove('loading');
                    this.showTrails();
                }, 3000);
            });
        });
        
        // Click effects
        document.addEventListener('mousedown', () => {
            if (!this.cursor.classList.contains('hover')) {
                this.cursor.classList.add('click');
            }
        });
        
        document.addEventListener('mouseup', () => {
            this.cursor.classList.remove('click');
        });
    }
    
    hideTrails() {
        this.trails.forEach(trail => {
            trail.element.style.opacity = '0';
        });
    }
    
    showTrails() {
        this.trails.forEach((trail, index) => {
            trail.element.style.opacity = (1 - (index / this.maxTrails)) * 0.6;
        });
    }
}

// Initialize the cursor when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Initialize on all pages
    new PremiumCursor();
});

// Handle dynamic content loading
document.addEventListener('DOMContentLoaded', () => {
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.type === 'childList') {
                const newInteractiveElements = mutation.target.querySelectorAll('a, button, .btn, [role="button"], input[type="submit"]');
                
                newInteractiveElements.forEach(element => {
                    if (!element.hasAttribute('data-cursor-bound')) {
                        element.setAttribute('data-cursor-bound', 'true');
                        
                        element.addEventListener('mouseenter', () => {
                            const cursor = document.querySelector('.custom-cursor');
                            if (cursor) cursor.classList.add('hover');
                        });
                        
                        element.addEventListener('mouseleave', () => {
                            const cursor = document.querySelector('.custom-cursor');
                            if (cursor) cursor.classList.remove('hover');
                        });
                    }
                });
            }
        });
    });
    
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
});
