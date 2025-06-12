/**
 * Strapline Rotator
 * Handles rotating text straplines in the hero section
 */
document.addEventListener('DOMContentLoaded', function() {
    // Get strapline elements and settings
    const straplines = document.querySelectorAll('.hero-straplines .strapline');
    const indicators = document.querySelectorAll('.strapline-indicator');
    
    // Exit if no straplines found
    if (!straplines.length) return;
    
    // Get rotation speed from WordPress customizer (default: 5000ms)
    let rotationSpeed = 5000; // Default 5 seconds
    
    // If aimpro_data is available with strapline settings
    if (typeof aimpro_data !== 'undefined' && aimpro_data.strapline_rotation_speed) {
        rotationSpeed = parseInt(aimpro_data.strapline_rotation_speed) * 1000;
    }
    
    // Also check for data attribute
    const straplineContainer = document.querySelector('.hero-straplines');
    if (straplineContainer && straplineContainer.dataset.rotationSpeed) {
        rotationSpeed = parseInt(straplineContainer.dataset.rotationSpeed) * 1000;
    }
    
    let currentIndex = 0;
    let rotationInterval;
    
    // Function to show a specific strapline
    function showStrapline(index) {
        // Remove active class from all straplines and indicators
        straplines.forEach(strapline => {
            strapline.classList.remove('active');
            strapline.classList.remove('strapline-enter');
            strapline.classList.remove('strapline-exit');
        });
        
        indicators.forEach(indicator => {
            indicator.classList.remove('active');
        });
        
        // Add exit animation to current strapline
        if (straplines[currentIndex]) {
            straplines[currentIndex].classList.add('strapline-exit');
        }
        
        // Add enter animation to new strapline
        straplines[index].classList.add('active');
        straplines[index].classList.add('strapline-enter');
        
        // Add active class to current indicator
        if (indicators[index]) {
            indicators[index].classList.add('active');
        }
        
        // Update current index
        currentIndex = index;
    }
    
    // Function to rotate straplines
    function rotateStraplines() {
        // Calculate next index
        const nextIndex = (currentIndex + 1) % straplines.length;
        showStrapline(nextIndex);
    }
    
    // Start rotation if more than one strapline exists
    if (straplines.length > 1) {
        // Setup indicator click handlers
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                showStrapline(index);
                // Reset interval
                clearInterval(rotationInterval);
                rotationInterval = setInterval(rotateStraplines, rotationSpeed);
            });
        });
        
        // Set interval for rotation
        rotationInterval = setInterval(rotateStraplines, rotationSpeed);
        
        // Add pause on hover functionality
        if (straplineContainer) {
            straplineContainer.addEventListener('mouseenter', function() {
                clearInterval(rotationInterval);
            });
            
            straplineContainer.addEventListener('mouseleave', function() {
                rotationInterval = setInterval(rotateStraplines, rotationSpeed);
            });
        }
    }
});
