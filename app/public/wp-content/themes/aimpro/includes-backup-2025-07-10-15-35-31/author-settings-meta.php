<?php
// Author Settings Meta Fields - Global author information for blog posts and about sections

function add_author_settings_meta_boxes() {
    // Add to Posts for per-post author overrides
    add_meta_box(
        'author_settings_meta_box',
        'Author Information',
        'author_settings_meta_box_callback',
        'post',
        'side',
        'default'
    );
    
    // Add to Options page for global author settings
    add_action('admin_menu', 'add_author_settings_page');
}
add_action('add_meta_boxes', 'add_author_settings_meta_boxes');

// Add Author Settings page to WordPress admin
function add_author_settings_page() {
    add_options_page(
        'Author Settings',
        'Author Settings',
        'manage_options',
        'author-settings',
        'author_settings_page_callback'
    );
}

// Author Settings Page
function author_settings_page_callback() {
    if (isset($_POST['submit']) && wp_verify_nonce($_POST['author_settings_nonce'], 'author_settings_save')) {
        // Save global author settings
        update_option('author_name', sanitize_text_field($_POST['author_name']));
        update_option('author_title', sanitize_text_field($_POST['author_title']));
        update_option('author_bio', wp_kses_post($_POST['author_bio']));
        update_option('author_linkedin', esc_url($_POST['author_linkedin']));
        update_option('author_email', sanitize_email($_POST['author_email']));
        update_option('author_phone', sanitize_text_field($_POST['author_phone']));
        
        // Achievement statistics
        update_option('author_businesses_helped', sanitize_text_field($_POST['author_businesses_helped']));
        update_option('author_revenue_generated', sanitize_text_field($_POST['author_revenue_generated']));
        update_option('author_years_experience', sanitize_text_field($_POST['author_years_experience']));
        
        // Handle image upload
        if (!empty($_FILES['author_image']['name'])) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            require_once(ABSPATH . 'wp-admin/includes/media.php');
            
            $uploaded_file = wp_handle_upload($_FILES['author_image'], array('test_form' => false));
            if ($uploaded_file && !isset($uploaded_file['error'])) {
                update_option('author_image_url', $uploaded_file['url']);
            }
        }
        
        echo '<div class="notice notice-success"><p>Author settings saved successfully!</p></div>';
    }

    // Get current values
    $author_name = get_option('author_name', 'Ajay Dhunna');
    $author_title = get_option('author_title', 'Digital Marketing Expert & Growth Strategist');
    $author_bio = get_option('author_bio', 'Ajay Dhunna is a seasoned digital marketing expert with over a decade of experience helping businesses accelerate their growth through strategic online marketing. As the founder of AIM Pro, he specialises in SEO, PPC advertising, conversion optimisation, and comprehensive digital strategies that deliver measurable results.');
    $author_linkedin = get_option('author_linkedin', 'https://linkedin.com/in/ajaydhunna');
    $author_email = get_option('author_email', 'hello@aimpro.co.uk');
    $author_phone = get_option('author_phone', '07866 555 555');
    $author_businesses_helped = get_option('author_businesses_helped', '500+');
    $author_revenue_generated = get_option('author_revenue_generated', '£2M+');
    $author_years_experience = get_option('author_years_experience', '10+');
    $author_image_url = get_option('author_image_url', get_template_directory_uri() . '/assets/images/ajay-dhunna.png');
    ?>
    
    <div class="wrap">
        <h1>Author Settings</h1>
        <p>Configure the author information that appears in blog posts and other sections across the website.</p>
        
        <form method="post" action="" enctype="multipart/form-data">
            <?php wp_nonce_field('author_settings_save', 'author_settings_nonce'); ?>
            
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="author_name">Author Name</label>
                    </th>
                    <td>
                        <input type="text" id="author_name" name="author_name" value="<?php echo esc_attr($author_name); ?>" class="regular-text" />
                        <p class="description">The author's full name (e.g., "Ajay Dhunna")</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_title">Professional Title</label>
                    </th>
                    <td>
                        <input type="text" id="author_title" name="author_title" value="<?php echo esc_attr($author_title); ?>" class="regular-text" />
                        <p class="description">Professional title or expertise area</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_bio">Biography</label>
                    </th>
                    <td>
                        <textarea id="author_bio" name="author_bio" rows="6" class="large-text"><?php echo esc_textarea($author_bio); ?></textarea>
                        <p class="description">Author bio that appears in the "About the Author" section</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_image">Author Image</label>
                    </th>
                    <td>
                        <?php if ($author_image_url): ?>
                            <img src="<?php echo esc_url($author_image_url); ?>" alt="Current author image" style="max-width: 150px; height: auto; border-radius: 8px; margin-bottom: 10px; display: block;" />
                        <?php endif; ?>
                        <input type="file" id="author_image" name="author_image" accept="image/*" />
                        <p class="description">Upload a new author image (recommended: 300x300px or larger, square format)</p>
                        <?php if ($author_image_url): ?>
                            <p><strong>Current image URL:</strong> <?php echo esc_url($author_image_url); ?></p>
                        <?php endif; ?>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_linkedin">LinkedIn URL</label>
                    </th>
                    <td>
                        <input type="url" id="author_linkedin" name="author_linkedin" value="<?php echo esc_attr($author_linkedin); ?>" class="regular-text" />
                        <p class="description">Full LinkedIn profile URL</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_email">Contact Email</label>
                    </th>
                    <td>
                        <input type="email" id="author_email" name="author_email" value="<?php echo esc_attr($author_email); ?>" class="regular-text" />
                        <p class="description">Email address for the "Get in Touch" button</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_phone">Phone Number</label>
                    </th>
                    <td>
                        <input type="text" id="author_phone" name="author_phone" value="<?php echo esc_attr($author_phone); ?>" class="regular-text" />
                        <p class="description">Contact phone number</p>
                    </td>
                </tr>
            </table>
            
            <h2>Achievement Statistics</h2>
            <p>These numbers appear in the achievement section of the author bio.</p>
            
            <table class="form-table">
                <tr>
                    <th scope="row">
                        <label for="author_businesses_helped">Businesses Helped</label>
                    </th>
                    <td>
                        <input type="text" id="author_businesses_helped" name="author_businesses_helped" value="<?php echo esc_attr($author_businesses_helped); ?>" class="regular-text" />
                        <p class="description">Number of businesses helped (e.g., "500+")</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_revenue_generated">Revenue Generated</label>
                    </th>
                    <td>
                        <input type="text" id="author_revenue_generated" name="author_revenue_generated" value="<?php echo esc_attr($author_revenue_generated); ?>" class="regular-text" />
                        <p class="description">Total revenue generated for clients (e.g., "£2M+")</p>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">
                        <label for="author_years_experience">Years of Experience</label>
                    </th>
                    <td>
                        <input type="text" id="author_years_experience" name="author_years_experience" value="<?php echo esc_attr($author_years_experience); ?>" class="regular-text" />
                        <p class="description">Years of experience (e.g., "10+")</p>
                    </td>
                </tr>
            </table>
            
            <?php submit_button('Save Author Settings'); ?>
        </form>
        
        <div style="margin-top: 30px; padding: 20px; background: #f9f9f9; border-left: 4px solid #0073aa;">
            <h3>How to Use</h3>
            <ul>
                <li><strong>Global Settings:</strong> These settings apply to all blog posts and author sections across the website.</li>
                <li><strong>Per-Post Override:</strong> You can override these settings for individual blog posts using the "Author Information" meta box in the post editor.</li>
                <li><strong>Image Guidelines:</strong> For best results, use a square image (300x300px or larger) with good lighting and professional appearance.</li>
                <li><strong>Achievement Stats:</strong> Keep these concise and impactful (e.g., "500+" rather than "487").</li>
            </ul>
        </div>
    </div>
    <?php
}

// Meta box for individual posts (for overrides)
function author_settings_meta_box_callback($post) {
    wp_nonce_field('author_post_meta_box', 'author_post_meta_box_nonce');
    
    // Get post-specific values (empty means use global settings)
    $use_custom_author = get_post_meta($post->ID, '_use_custom_author', true);
    $custom_author_name = get_post_meta($post->ID, '_custom_author_name', true);
    $custom_author_title = get_post_meta($post->ID, '_custom_author_title', true);
    $custom_author_bio = get_post_meta($post->ID, '_custom_author_bio', true);
    ?>
    
    <p>
        <label>
            <input type="checkbox" name="use_custom_author" value="1" <?php checked($use_custom_author, '1'); ?> />
            Use custom author information for this post
        </label>
    </p>
    
    <div id="custom-author-fields" style="<?php echo $use_custom_author ? '' : 'display:none;'; ?>">
        <p>
            <label for="custom_author_name"><strong>Author Name:</strong></label><br>
            <input type="text" id="custom_author_name" name="custom_author_name" value="<?php echo esc_attr($custom_author_name); ?>" style="width: 100%;" />
        </p>
        
        <p>
            <label for="custom_author_title"><strong>Professional Title:</strong></label><br>
            <input type="text" id="custom_author_title" name="custom_author_title" value="<?php echo esc_attr($custom_author_title); ?>" style="width: 100%;" />
        </p>
        
        <p>
            <label for="custom_author_bio"><strong>Biography:</strong></label><br>
            <textarea id="custom_author_bio" name="custom_author_bio" rows="4" style="width: 100%;"><?php echo esc_textarea($custom_author_bio); ?></textarea>
        </p>
        
        <p><em>Note: Other settings (image, achievements, contact info) will use the global settings from <a href="<?php echo admin_url('options-general.php?page=author-settings'); ?>" target="_blank">Author Settings</a>.</em></p>
    </div>
    
    <script>
    jQuery(document).ready(function($) {
        $('input[name="use_custom_author"]').change(function() {
            if ($(this).is(':checked')) {
                $('#custom-author-fields').show();
            } else {
                $('#custom-author-fields').hide();
            }
        });
    });
    </script>
    <?php
}

// Save post meta
function save_author_post_meta($post_id) {
    if (!isset($_POST['author_post_meta_box_nonce']) || !wp_verify_nonce($_POST['author_post_meta_box_nonce'], 'author_post_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['post_type']) && 'post' == $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save custom author settings
    $use_custom_author = isset($_POST['use_custom_author']) ? '1' : '0';
    update_post_meta($post_id, '_use_custom_author', $use_custom_author);
    
    if ($use_custom_author) {
        update_post_meta($post_id, '_custom_author_name', sanitize_text_field($_POST['custom_author_name']));
        update_post_meta($post_id, '_custom_author_title', sanitize_text_field($_POST['custom_author_title']));
        update_post_meta($post_id, '_custom_author_bio', wp_kses_post($_POST['custom_author_bio']));
    }
}
add_action('save_post', 'save_author_post_meta');

// Helper function to get author data (global or post-specific)
function get_author_data($post_id = null) {
    $data = array();
    
    // Check if this post has custom author settings
    if ($post_id && get_post_meta($post_id, '_use_custom_author', true)) {
        $data['name'] = get_post_meta($post_id, '_custom_author_name', true);
        $data['title'] = get_post_meta($post_id, '_custom_author_title', true);
        $data['bio'] = get_post_meta($post_id, '_custom_author_bio', true);
        
        // Always use global settings for these
        $data['linkedin'] = get_option('author_linkedin', 'https://linkedin.com/in/ajaydhunna');
        $data['email'] = get_option('author_email', 'hello@aimpro.co.uk');
        $data['phone'] = get_option('author_phone', '07866 555 555');
        $data['businesses_helped'] = get_option('author_businesses_helped', '500+');
        $data['revenue_generated'] = get_option('author_revenue_generated', '£2M+');
        $data['years_experience'] = get_option('author_years_experience', '10+');
        $data['image_url'] = get_option('author_image_url', get_template_directory_uri() . '/assets/images/ajay-dhunna.png');
    } else {
        // Use global settings
        $data['name'] = get_option('author_name', 'Ajay Dhunna');
        $data['title'] = get_option('author_title', 'Digital Marketing Expert & Growth Strategist');
        $data['bio'] = get_option('author_bio', 'Ajay Dhunna is a seasoned digital marketing expert with over a decade of experience helping businesses accelerate their growth through strategic online marketing. As the founder of AIM Pro, he specialises in SEO, PPC advertising, conversion optimisation, and comprehensive digital strategies that deliver measurable results.');
        $data['linkedin'] = get_option('author_linkedin', 'https://linkedin.com/in/ajaydhunna');
        $data['email'] = get_option('author_email', 'hello@aimpro.co.uk');
        $data['phone'] = get_option('author_phone', '07866 555 555');
        $data['businesses_helped'] = get_option('author_businesses_helped', '500+');
        $data['revenue_generated'] = get_option('author_revenue_generated', '£2M+');
        $data['years_experience'] = get_option('author_years_experience', '10+');
        $data['image_url'] = get_option('author_image_url', get_template_directory_uri() . '/assets/images/ajay-dhunna.png');
    }
    
    return $data;
}

// Add admin styles for author settings
function author_settings_admin_styles() {
    ?>
    <style>
    .form-table th {
        width: 200px;
    }
    .form-table td input[type="text"],
    .form-table td input[type="email"],
    .form-table td input[type="url"],
    .form-table td textarea {
        width: 100%;
        max-width: 500px;
    }
    .form-table img {
        border: 2px solid #ddd;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    #custom-author-fields {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
        margin-top: 10px;
    }
    #custom-author-fields p {
        margin-bottom: 15px;
    }
    #custom-author-fields label {
        font-weight: 600;
        color: #333;
    }
    </style>
    <?php
}
add_action('admin_head', 'author_settings_admin_styles');
