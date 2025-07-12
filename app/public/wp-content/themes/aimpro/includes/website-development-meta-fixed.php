<?php
// Meta fields for Website Development page

// Function to get default values for website development page
function get_website_development_defaults() {
    return array(
        'header_title' => 'Website Development Services',
        'header_subtitle' => 'Create high-converting websites that drive results and grow your business',
        'header_tags' => 'Mobile-First, Conversion Optimised, SEO Ready',
        'overview_title' => 'Build Websites That Convert',
        'overview_description' => 'Our website development services focus on creating beautiful, fast, and conversion-optimised websites that not only look great but drive real business results. From custom website design to high-converting landing pages, we build digital experiences that engage visitors and turn them into customers.

Every website we develop is built with performance, user experience, and search engine optimisation in mind, ensuring your investment delivers maximum return through increased traffic, leads, and sales.',
        'case_title' => 'Case Study: E-commerce Website Redesign',
        'case_subtitle' => 'Complete Website Overhaul Generates 380% Revenue Increase',
        'case_description' => 'An established e-commerce business approached us with an outdated website that was hurting their sales. Our comprehensive redesign and optimisation strategy transformed their online presence and dramatically improved their bottom line.',
        'case_challenges' => 'Outdated design reducing customer trust
Poor mobile experience (65% mobile traffic)
Slow loading times (8+ seconds)  
Confusing navigation and checkout process
Low conversion rate (0.8%)',
        'case_solutions' => 'Modern, mobile-first responsive design
Streamlined user experience and navigation
Optimised checkout process (one-click checkout)
Performance optimisation (2.1s load time)
A/B tested conversion elements',
        'testimonial_quote' => 'The new website AIM Pro Marketing built for us has exceeded all expectations. Our conversion rate tripled within the first month, and we\'re getting compliments on the design daily. The investment has already paid for itself.',
        'testimonial_name' => 'Rachel Green',
        'testimonial_position' => 'Founder, Green Garden Solutions',
        'cta_title' => 'Ready to Build Your High-Converting Website?',
        'cta_description' => 'Let\'s create a website that drives results and grows your business with our expert development services.',
        'cta_primary_text' => 'Get Started',
        'cta_primary_link' => '',
        'cta_secondary_text' => 'View Our Work',
        'cta_secondary_link' => ''
    );
}

add_action('add_meta_boxes', function() {
    global $post;
    
    // Check if this is the right page/template
    if (!$post || $post->post_type !== 'page') return;
    
    $template = get_page_template_slug($post->ID);
    $page_slug = get_post_field('post_name', $post->ID);
    
    // Show meta box only for website development template/page
    if ($template === 'page-website-development.php' || 
        $template === 'Website Development Services' ||
        $page_slug === 'website-development' || 
        $page_slug === 'website-development-services') {
        add_meta_box(
            'website_development_meta', 
            'Website Development Page Content', 
            'website_development_meta_callback', 
            'page', 
            'normal', 
            'high'
        );
    }
});

function website_development_meta_callback($post) {
    wp_nonce_field('website_development_meta', 'website_development_meta_nonce');
    
    // Default values
    $defaults = get_website_development_defaults();
    
    // Get current values or use defaults
    $header_title = get_post_meta($post->ID, 'website_development_header_title', true);
    if (empty($header_title)) $header_title = $defaults['header_title'];
    
    $header_subtitle = get_post_meta($post->ID, 'website_development_header_subtitle', true);
    if (empty($header_subtitle)) $header_subtitle = $defaults['header_subtitle'];
    
    $header_tags = get_post_meta($post->ID, 'website_development_header_tags', true);
    if (empty($header_tags)) $header_tags = $defaults['header_tags'];
    
    $overview_title = get_post_meta($post->ID, 'website_development_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_description = get_post_meta($post->ID, 'website_development_overview_description', true);
    if (empty($overview_description)) $overview_description = $defaults['overview_description'];
    
    $case_title = get_post_meta($post->ID, 'website_development_case_title', true);
    if (empty($case_title)) $case_title = $defaults['case_title'];
    
    $case_subtitle = get_post_meta($post->ID, 'website_development_case_subtitle', true);
    if (empty($case_subtitle)) $case_subtitle = $defaults['case_subtitle'];
    
    $case_description = get_post_meta($post->ID, 'website_development_case_description', true);
    if (empty($case_description)) $case_description = $defaults['case_description'];
    
    $case_challenges = get_post_meta($post->ID, 'website_development_case_challenges', true);
    if (empty($case_challenges)) $case_challenges = $defaults['case_challenges'];
    
    $case_solutions = get_post_meta($post->ID, 'website_development_case_solutions', true);
    if (empty($case_solutions)) $case_solutions = $defaults['case_solutions'];
    
    $testimonial_quote = get_post_meta($post->ID, 'website_development_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, 'website_development_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_position = get_post_meta($post->ID, 'website_development_testimonial_position', true);
    if (empty($testimonial_position)) $testimonial_position = $defaults['testimonial_position'];
    
    $cta_title = get_post_meta($post->ID, 'website_development_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_description = get_post_meta($post->ID, 'website_development_cta_description', true);
    if (empty($cta_description)) $cta_description = $defaults['cta_description'];
    
    $cta_primary_text = get_post_meta($post->ID, 'website_development_cta_primary_text', true);
    if (empty($cta_primary_text)) $cta_primary_text = $defaults['cta_primary_text'];
    
    $cta_primary_link = get_post_meta($post->ID, 'website_development_cta_primary_link', true);
    if (empty($cta_primary_link)) $cta_primary_link = $defaults['cta_primary_link'];
    
    $cta_secondary_text = get_post_meta($post->ID, 'website_development_cta_secondary_text', true);
    if (empty($cta_secondary_text)) $cta_secondary_text = $defaults['cta_secondary_text'];
    
    $cta_secondary_link = get_post_meta($post->ID, 'website_development_cta_secondary_link', true);
    if (empty($cta_secondary_link)) $cta_secondary_link = $defaults['cta_secondary_link'];
    
    ?>
    <style>
        .meta-section { 
            margin-bottom: 30px; 
            padding: 20px; 
            border: 1px solid #ddd; 
            background: #fafafa; 
        }
        .meta-section h3 { 
            margin-top: 0; 
            color: #0073aa; 
            border-bottom: 1px solid #ddd; 
            padding-bottom: 10px; 
        }
        .meta-field { 
            margin-bottom: 15px; 
        }
        .meta-field label { 
            display: block; 
            font-weight: bold; 
            margin-bottom: 5px; 
        }
        .meta-field input[type="text"], 
        .meta-field input[type="url"] { 
            width: 100%; 
            padding: 8px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }
        .meta-field textarea { 
            width: 100%; 
            padding: 8px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
            min-height: 100px; 
        }
    </style>

    <div class="meta-section">
        <h3>Hero Section</h3>
        
        <div class="meta-field">
            <label>Header Title</label>
            <?php 
            wp_editor($header_title, 'website_development_header_title', array(
                'textarea_name' => 'website_development_header_title',
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Header Subtitle</label>
            <?php 
            wp_editor($header_subtitle, 'website_development_header_subtitle', array(
                'textarea_name' => 'website_development_header_subtitle',
                'media_buttons' => false,
                'textarea_rows' => 3,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Header Tags (comma separated)</label>
            <input type="text" name="website_development_header_tags" value="<?php echo esc_attr($header_tags); ?>" placeholder="e.g., Mobile-First, Conversion Optimised, SEO Ready" />
        </div>
    </div>

    <div class="meta-section">
        <h3>Service Overview</h3>
        
        <div class="meta-field">
            <label>Overview Title</label>
            <?php 
            wp_editor($overview_title, 'website_development_overview_title', array(
                'textarea_name' => 'website_development_overview_title',
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Overview Description</label>
            <?php 
            wp_editor($overview_description, 'website_development_overview_description', array(
                'textarea_name' => 'website_development_overview_description',
                'media_buttons' => false,
                'textarea_rows' => 6,
                'teeny' => false,
                'quicktags' => array('buttons' => 'strong,em,link,ul,ol,li')
            )); 
            ?>
        </div>
    </div>

    <div class="meta-section">
        <h3>Case Study</h3>
        
        <div class="meta-field">
            <label>Case Study Title</label>
            <?php 
            wp_editor($case_title, 'website_development_case_title', array(
                'textarea_name' => 'website_development_case_title',
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Case Study Subtitle</label>
            <?php 
            wp_editor($case_subtitle, 'website_development_case_subtitle', array(
                'textarea_name' => 'website_development_case_subtitle',
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Case Study Description</label>
            <?php 
            wp_editor($case_description, 'website_development_case_description', array(
                'textarea_name' => 'website_development_case_description',
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Case Study Challenges</label>
            <textarea name="website_development_case_challenges" placeholder="List challenges (one per line)"><?php echo esc_textarea($case_challenges); ?></textarea>
        </div>
        
        <div class="meta-field">
            <label>Case Study Solutions</label>
            <textarea name="website_development_case_solutions" placeholder="List solutions (one per line)"><?php echo esc_textarea($case_solutions); ?></textarea>
        </div>
    </div>

    <div class="meta-section">
        <h3>Testimonial</h3>
        
        <div class="meta-field">
            <label>Testimonial Quote</label>
            <?php 
            wp_editor($testimonial_quote, 'website_development_testimonial_quote', array(
                'textarea_name' => 'website_development_testimonial_quote',
                'media_buttons' => false,
                'textarea_rows' => 4,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Testimonial Name</label>
            <input type="text" name="website_development_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" placeholder="Client Name" />
        </div>
        
        <div class="meta-field">
            <label>Testimonial Position</label>
            <input type="text" name="website_development_testimonial_position" value="<?php echo esc_attr($testimonial_position); ?>" placeholder="Position, Company" />
        </div>
    </div>

    <div class="meta-section">
        <h3>Call to Action</h3>
        
        <div class="meta-field">
            <label>CTA Title</label>
            <?php 
            wp_editor($cta_title, 'website_development_cta_title', array(
                'textarea_name' => 'website_development_cta_title',
                'media_buttons' => false,
                'textarea_rows' => 2,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>CTA Description</label>
            <?php 
            wp_editor($cta_description, 'website_development_cta_description', array(
                'textarea_name' => 'website_development_cta_description',
                'media_buttons' => false,
                'textarea_rows' => 3,
                'teeny' => true,
                'quicktags' => array('buttons' => 'strong,em,link')
            )); 
            ?>
        </div>
        
        <div class="meta-field">
            <label>Primary Button Text</label>
            <input type="text" name="website_development_cta_primary_text" value="<?php echo esc_attr($cta_primary_text); ?>" placeholder="Get Started" />
        </div>
        
        <div class="meta-field">
            <label>Primary Button Link</label>
            <input type="url" name="website_development_cta_primary_link" value="<?php echo esc_attr($cta_primary_link); ?>" placeholder="Leave blank for default contact page" />
        </div>
        
        <div class="meta-field">
            <label>Secondary Button Text</label>
            <input type="text" name="website_development_cta_secondary_text" value="<?php echo esc_attr($cta_secondary_text); ?>" placeholder="View Our Work" />
        </div>
        
        <div class="meta-field">
            <label>Secondary Button Link</label>
            <input type="url" name="website_development_cta_secondary_link" value="<?php echo esc_attr($cta_secondary_link); ?>" placeholder="Leave blank to hide button" />
        </div>
    </div>
    <?php
}

// Save meta data
add_action('save_post', function($post_id) {
    // Check if nonce is set and valid
    if (!isset($_POST['website_development_meta_nonce']) || !wp_verify_nonce($_POST['website_development_meta_nonce'], 'website_development_meta')) {
        return;
    }
    
    // Check if autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // List of all meta fields to save
    $meta_fields = array(
        'website_development_header_title',
        'website_development_header_subtitle',
        'website_development_header_tags',
        'website_development_overview_title',
        'website_development_overview_description',
        'website_development_case_title',
        'website_development_case_subtitle',
        'website_development_case_description',
        'website_development_case_challenges',
        'website_development_case_solutions',
        'website_development_testimonial_quote',
        'website_development_testimonial_name',
        'website_development_testimonial_position',
        'website_development_cta_title',
        'website_development_cta_description',
        'website_development_cta_primary_text',
        'website_development_cta_primary_link',
        'website_development_cta_secondary_text',
        'website_development_cta_secondary_link'
    );
    
    // Save each field
    foreach ($meta_fields as $field) {
        if (isset($_POST[$field])) {
            if (in_array($field, array('website_development_case_challenges', 'website_development_case_solutions'))) {
                // For textarea fields
                $value = sanitize_textarea_field($_POST[$field]);
            } elseif (strpos($field, '_link') !== false) {
                // For URL fields
                $value = esc_url_raw($_POST[$field]);
            } else {
                // For rich text fields, allow HTML
                $value = wp_kses_post($_POST[$field]);
            }
            update_post_meta($post_id, $field, $value);
        }
    }
});
