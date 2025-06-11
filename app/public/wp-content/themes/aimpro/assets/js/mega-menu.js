/**
 * Mega Menu Mobile Interactions
 * Enables proper toggling of mega menus on mobile devices
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get all mega menu and dropdown menu items
    const megaMenuItems = document.querySelectorAll('.nav-item-mega');
    const dropdownMenuItems = document.querySelectorAll('.nav-item-dropdown');
    
    // Function to toggle active state for mobile
    function setupMobileMenuToggle(items) {
        items.forEach(item => {
            // Get the link that should toggle the submenu
            const link = item.querySelector(':scope > a');
            
            if (link) {
                link.addEventListener('click', function(e) {
                    // Only handle as toggle on mobile views
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        
                        // Check if this item is already active
                        const isActive = item.classList.contains('active');
                        
                        // Close all other active menus first
                        items.forEach(otherItem => {
                            if (otherItem !== item) {
                                otherItem.classList.remove('active');
                            }
                        });
                        
                        // Toggle active state for this item
                        if (isActive) {
                            item.classList.remove('active');
                        } else {
                            item.classList.add('active');
                        }
                    }
                });
            }
        });
    }
    
    // Setup toggle functionality for both menu types
    setupMobileMenuToggle(megaMenuItems);
    setupMobileMenuToggle(dropdownMenuItems);
    
    // Close menus when clicking outside
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) {
            let clickedInsideMenu = false;
            
            // Check if click was inside a menu
            const allMenuItems = [...megaMenuItems, ...dropdownMenuItems];
            allMenuItems.forEach(item => {
                if (item.contains(e.target)) {
                    clickedInsideMenu = true;
                }
            });
            
            // If clicked outside, close all menus
            if (!clickedInsideMenu) {
                allMenuItems.forEach(item => {
                    item.classList.remove('active');
                });
            }
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            // On desktop, remove the active class and let hover handle it
            const allMenuItems = [...megaMenuItems, ...dropdownMenuItems];
            allMenuItems.forEach(item => {
                item.classList.remove('active');
            });
        }
    });
});
