/**
 * Enhanced Menu Interaction
 * Ensures menus stay open when hovering over the dropdown area
 */
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        const megaMenuItems = document.querySelectorAll('.nav-item-mega');
        const dropdownItems = document.querySelectorAll('.nav-item-dropdown');
        
        // Function to handle mega menu hover behavior
        function handleMegaMenuHover() {
            megaMenuItems.forEach(item => {
                const megaMenu = item.querySelector('.mega-menu');
                
                if (!megaMenu) return;
                
                // When hovering the parent item
                item.addEventListener('mouseenter', () => {
                    megaMenu.classList.add('active');
                });
                
                // When leaving the parent item
                item.addEventListener('mouseleave', (e) => {
                    // Check if the mouse is moving to the mega menu
                    const rect = megaMenu.getBoundingClientRect();
                    if (
                        e.clientX >= rect.left &&
                        e.clientX <= rect.right &&
                        e.clientY >= rect.top &&
                        e.clientY <= rect.bottom
                    ) {
                        return; // Don't close if moving to the mega menu
                    }
                    
                    // When leaving the mega menu itself
                    const closeMenu = () => {
                        if (!item.matches(':hover') && !megaMenu.matches(':hover')) {
                            megaMenu.classList.remove('active');
                        }
                    };
                    
                    setTimeout(closeMenu, 100); // Small delay to ensure hover states are correct
                });
                
                // When hovering the mega menu
                megaMenu.addEventListener('mouseenter', () => {
                    megaMenu.classList.add('active');
                });
                
                // When leaving the mega menu
                megaMenu.addEventListener('mouseleave', () => {
                    if (!item.matches(':hover')) {
                        megaMenu.classList.remove('active');
                    }
                });
            });
        }
        
        // Function to handle dropdown menu hover behavior
        function handleDropdownHover() {
            dropdownItems.forEach(item => {
                const dropdownMenu = item.querySelector('.dropdown-menu');
                
                if (!dropdownMenu) return;
                
                // When hovering the parent item
                item.addEventListener('mouseenter', () => {
                    dropdownMenu.classList.add('active');
                });
                
                // When leaving the parent item
                item.addEventListener('mouseleave', (e) => {
                    // Check if the mouse is moving to the dropdown
                    const rect = dropdownMenu.getBoundingClientRect();
                    if (
                        e.clientX >= rect.left &&
                        e.clientX <= rect.right &&
                        e.clientY >= rect.top &&
                        e.clientY <= rect.bottom
                    ) {
                        return; // Don't close if moving to the dropdown
                    }
                    
                    // When leaving the dropdown itself
                    const closeMenu = () => {
                        if (!item.matches(':hover') && !dropdownMenu.matches(':hover')) {
                            dropdownMenu.classList.remove('active');
                        }
                    };
                    
                    setTimeout(closeMenu, 100); // Small delay to ensure hover states are correct
                });
                
                // When hovering the dropdown menu
                dropdownMenu.addEventListener('mouseenter', () => {
                    dropdownMenu.classList.add('active');
                });
                
                // When leaving the dropdown menu
                dropdownMenu.addEventListener('mouseleave', () => {
                    if (!item.matches(':hover')) {
                        dropdownMenu.classList.remove('active');
                    }
                });
            });
        }
        
        // Initialize menu hover behaviors
        handleMegaMenuHover();
        handleDropdownHover();
        
        // Add additional CSS class to active menus for styling
        const additionalStyles = `
            .dropdown-menu.active,
            .mega-menu.active {
                opacity: 1 !important;
                visibility: visible !important;
                pointer-events: all !important;
                transform: translateX(-50%) translateY(0) !important;
            }
            
            .main-nav ul li:nth-last-child(1) .dropdown-menu.active,
            .main-nav ul li:nth-last-child(2) .dropdown-menu.active,
            .main-nav ul li:nth-last-child(1) .mega-menu.active,
            .main-nav ul li:nth-last-child(2) .mega-menu.active {
                transform: translateY(0) !important;
            }
        `;
        
        // Add the styles to the page
        const styleElement = document.createElement('style');
        styleElement.textContent = additionalStyles;
        document.head.appendChild(styleElement);
    });
})();
