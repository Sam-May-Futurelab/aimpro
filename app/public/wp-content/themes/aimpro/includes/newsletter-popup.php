<?php
/**
 * Newsletter Popup Component
 * Reusable popup for newsletter signup and other forms
 */
?>

<!-- Newsletter Popup Modal -->
<div id="newsletter-popup" class="popup-overlay" style="display: none;">
    <div class="popup-content">
        <div class="popup-header">
            <h3 id="popup-title">Newsletter Subscription</h3>
            <button class="popup-close" onclick="closeNewsletterPopup()">&times;</button>
        </div>
        <div class="popup-body">
            <div id="popup-icon"></div>
            <p id="popup-message"></p>
        </div>
        <div class="popup-footer">
            <button class="btn btn-primary" onclick="closeNewsletterPopup()">OK</button>
        </div>
    </div>
</div>

<style>
.popup-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10000;
    backdrop-filter: blur(5px);
}

.popup-content {
    background: white;
    border-radius: 12px;
    max-width: 400px;
    width: 90%;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    animation: popupSlideIn 0.3s ease-out;
}

@keyframes popupSlideIn {
    from {
        opacity: 0;
        transform: translateY(-20px) scale(0.95);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

.popup-header {
    padding: 20px 20px 10px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.popup-header h3 {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #f15a25 !important; /* Orange brand color with !important */
}

.popup-close {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #999;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.2s ease;
}

.popup-close:hover {
    background: #f5f5f5;
    color: #333;
}

.popup-body {
    padding: 20px;
    text-align: center;
}

#popup-icon {
    width: 50px;
    height: 50px;
    margin: 0 auto 15px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}

#popup-icon.success {
    background: #d4edda;
    color: #28a745;
}

#popup-icon.error {
    background: #f8d7da;
    color: #dc3545;
}

#popup-icon.success::before {
    content: "✓";
}

#popup-icon.error::before {
    content: "✕";
}

#popup-message {
    margin: 0;
    font-size: 16px;
    line-height: 1.5;
    color: #333 !important; /* Dark text with !important to override any theme styles */
    font-weight: 500;
}

.popup-footer {
    padding: 10px 20px 20px;
    text-align: center;
}

.popup-footer .btn {
    min-width: 80px;
    background: #f15a25; /* Orange brand color */
    border-color: #f15a25;
    color: white !important; /* White text with !important to override any theme styles */
}

.popup-footer .btn:hover {
    background: #d14a1f;
    border-color: #d14a1f;
    color: white !important; /* Ensure white text on hover too */
}
</style>

<script>
function closeNewsletterPopup() {
    document.getElementById('newsletter-popup').style.display = 'none';
}

function showNewsletterPopup(title, message, isSuccess) {
    const popup = document.getElementById('newsletter-popup');
    const titleEl = document.getElementById('popup-title');
    const messageEl = document.getElementById('popup-message');
    const iconEl = document.getElementById('popup-icon');
    
    titleEl.textContent = title;
    messageEl.textContent = message;
    iconEl.className = isSuccess ? 'success' : 'error';
    
    popup.style.display = 'flex';
    
    // Auto-close after 5 seconds
    setTimeout(() => {
        closeNewsletterPopup();
    }, 5000);
}

// Close popup when clicking outside
document.addEventListener('click', function(e) {
    const popup = document.getElementById('newsletter-popup');
    if (e.target === popup) {
        closeNewsletterPopup();
    }
});

// Close popup with escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeNewsletterPopup();
    }
});

// Newsletter form AJAX functionality - automatically applies to any newsletter form on the page
document.addEventListener('DOMContentLoaded', function() {
    // Find all newsletter forms on the page
    const forms = document.querySelectorAll('.newsletter-form, #newsletter-form');
    
    forms.forEach(function(form) {
        if (!form) return;
        
        const button = form.querySelector('button[type="submit"]');
        const buttonText = button ? button.querySelector('.button-text') : null;
        const buttonSpinner = button ? button.querySelector('.button-spinner') : null;
        
        if (!button) return; // Skip if no submit button found
        
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            button.disabled = true;
            if (buttonText) buttonText.style.display = 'none';
            if (buttonSpinner) buttonSpinner.style.display = 'inline-block';
            
            // Get form data
            const formData = new FormData(form);
            formData.append('action', 'newsletter_signup');
            formData.append('nonce', '<?php echo wp_create_nonce('newsletter_signup'); ?>');
            
            // Send AJAX request
            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Reset button state
                button.disabled = false;
                if (buttonText) buttonText.style.display = 'inline-block';
                if (buttonSpinner) buttonSpinner.style.display = 'none';
                
                if (data.success) {
                    showNewsletterPopup(
                        'Subscription Successful!', 
                        data.data || 'Thank you for subscribing! You\'ll receive our latest updates and tips.',
                        true
                    );
                    form.reset(); // Clear the form
                } else {
                    showNewsletterPopup(
                        'Subscription Failed', 
                        data.data || 'There was a problem with your subscription. Please try again.',
                        false
                    );
                }
            })
            .catch(error => {
                // Reset button state
                button.disabled = false;
                if (buttonText) buttonText.style.display = 'inline-block';
                if (buttonSpinner) buttonSpinner.style.display = 'none';
                
                showNewsletterPopup(
                    'Error', 
                    'There was a problem with your subscription. Please try again.',
                    false
                );
            });
        });
    });
});
</script>
