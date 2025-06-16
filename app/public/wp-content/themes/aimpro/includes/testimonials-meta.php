<?php
/**
 * Testimonials Page Meta Fields
 * Adds custom meta box for Testimonials Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_testimonials_meta_box');
function aimpro_add_testimonials_meta_box() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-testimonials.php' || $page_slug === 'testimonials') {
        add_meta_box(
            'aimpro_testimonials_settings',
            'Testimonials Page Settings',
            'aimpro_testimonials_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_testimonials_meta_box_callback($post) {
    wp_nonce_field('aimpro_testimonials_meta_box', 'aimpro_testimonials_meta_box_nonce');
    
    // Page header
    $header_title = get_post_meta($post->ID, 'testimonials_header_title', true) ?: 'Client Testimonials';
    $header_subtitle = get_post_meta($post->ID, 'testimonials_header_subtitle', true) ?: 'See what our clients have to say about working with Aimpro Digital';
    
    // Featured section
    $featured_heading = get_post_meta($post->ID, 'testimonials_featured_heading', true) ?: 'Success Stories';
    
    ?>
    <table class="form-table">
        <tr>
          <th colspan="2"><h3>Page Header</h3></th>
        </tr>
        <tr>
            <th><label for="testimonials_header_title">Page Title</label></th>
            <td><input type="text" id="testimonials_header_title" name="testimonials_header_title" value="<?php echo esc_attr($header_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonials_header_subtitle">Page Subtitle</label></th>
            <td><input type="text" id="testimonials_header_subtitle" name="testimonials_header_subtitle" value="<?php echo esc_attr($header_subtitle); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Featured Testimonials Section</h3></th>
        </tr>
        <tr>
            <th><label for="testimonials_featured_heading">Section Heading</label></th>
            <td><input type="text" id="testimonials_featured_heading" name="testimonials_featured_heading" value="<?php echo esc_attr($featured_heading); ?>" class="regular-text" /></td>
        </tr>
        
        <?php for ($i = 1; $i <= 2; $i++): 
            $testimonial_quote = get_post_meta($post->ID, "testimonial{$i}_quote", true);
            $testimonial_author = get_post_meta($post->ID, "testimonial{$i}_author", true);
            $testimonial_title = get_post_meta($post->ID, "testimonial{$i}_title", true);
            $testimonial_company = get_post_meta($post->ID, "testimonial{$i}_company", true);
            $testimonial_industry = get_post_meta($post->ID, "testimonial{$i}_industry", true);
            $testimonial_result1 = get_post_meta($post->ID, "testimonial{$i}_result1", true);
            $testimonial_result1_label = get_post_meta($post->ID, "testimonial{$i}_result1_label", true);
            $testimonial_result2 = get_post_meta($post->ID, "testimonial{$i}_result2", true);
            $testimonial_result2_label = get_post_meta($post->ID, "testimonial{$i}_result2_label", true);
            $testimonial_result3 = get_post_meta($post->ID, "testimonial{$i}_result3", true);
            $testimonial_result3_label = get_post_meta($post->ID, "testimonial{$i}_result3_label", true);
            
            // Default values
            if ($i == 1 && !$testimonial_quote) {
                $testimonial_quote = 'Aimpro Digital transformed our online presence completely. Within 6 months, our website traffic increased by 300% and our lead generation improved by 250%. Their team\'s expertise in SEO and PPC advertising delivered results beyond our expectations.';
                $testimonial_author = 'Sarah Williams';
                $testimonial_title = 'CEO, TechStart Solutions';
                $testimonial_company = 'TechStart Solutions';
                $testimonial_industry = 'Technology Consulting';
                $testimonial_result1 = '300%';
                $testimonial_result1_label = 'Traffic Increase';
                $testimonial_result2 = '250%';
                $testimonial_result2_label = 'More Leads';
                $testimonial_result3 = '6';
                $testimonial_result3_label = 'Months to Results';
            } elseif ($i == 2 && !$testimonial_quote) {
                $testimonial_quote = 'Working with Aimpro Digital has been a game-changer for our e-commerce business. Their strategic approach to Google Ads and Facebook advertising helped us achieve a 400% return on ad spend. The team is professional, responsive, and truly understands our industry.';
                $testimonial_author = 'Michael Chen';
                $testimonial_title = 'Founder, Elite Fitness Gear';
                $testimonial_company = 'Elite Fitness Gear';
                $testimonial_industry = 'E-commerce';
                $testimonial_result1 = '400%';
                $testimonial_result1_label = 'ROAS';
                $testimonial_result2 = '180%';
                $testimonial_result2_label = 'Sales Growth';
                $testimonial_result3 = '90';
                $testimonial_result3_label = 'Days to ROI';
            }
        ?>
        
        <tr>
          <th colspan="2"><h4>Featured Testimonial <?php echo $i; ?></h4></th>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_quote">Quote</label></th>
            <td><textarea id="testimonial<?php echo $i; ?>_quote" name="testimonial<?php echo $i; ?>_quote" rows="4" class="large-text"><?php echo esc_textarea($testimonial_quote); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_author">Author Name</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_author" name="testimonial<?php echo $i; ?>_author" value="<?php echo esc_attr($testimonial_author); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_title">Author Title</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_title" name="testimonial<?php echo $i; ?>_title" value="<?php echo esc_attr($testimonial_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_company">Company</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_company" name="testimonial<?php echo $i; ?>_company" value="<?php echo esc_attr($testimonial_company); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_industry">Industry</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_industry" name="testimonial<?php echo $i; ?>_industry" value="<?php echo esc_attr($testimonial_industry); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_result1">Result 1</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_result1" name="testimonial<?php echo $i; ?>_result1" value="<?php echo esc_attr($testimonial_result1); ?>" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_result1_label">Result 1 Label</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_result1_label" name="testimonial<?php echo $i; ?>_result1_label" value="<?php echo esc_attr($testimonial_result1_label); ?>" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_result2">Result 2</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_result2" name="testimonial<?php echo $i; ?>_result2" value="<?php echo esc_attr($testimonial_result2); ?>" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_result2_label">Result 2 Label</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_result2_label" name="testimonial<?php echo $i; ?>_result2_label" value="<?php echo esc_attr($testimonial_result2_label); ?>" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_result3">Result 3</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_result3" name="testimonial<?php echo $i; ?>_result3" value="<?php echo esc_attr($testimonial_result3); ?>" /></td>
        </tr>
        <tr>
            <th><label for="testimonial<?php echo $i; ?>_result3_label">Result 3 Label</label></th>
            <td><input type="text" id="testimonial<?php echo $i; ?>_result3_label" name="testimonial<?php echo $i; ?>_result3_label" value="<?php echo esc_attr($testimonial_result3_label); ?>" /></td>
        </tr>
          <?php endfor; ?>
        
        <tr>
          <th colspan="2"><h3>Metrics Section</h3></th>
        </tr>
        <tr>
            <th><label for="testimonials_metrics_heading">Metrics Section Heading</label></th>
            <td><input type="text" id="testimonials_metrics_heading" name="testimonials_metrics_heading" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_metrics_heading', true) ?: 'Client Results by the Numbers'); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>CTA Section</h3></th>
        </tr>
        <tr>
            <th><label for="testimonials_cta_heading">CTA Heading</label></th>
            <td><input type="text" id="testimonials_cta_heading" name="testimonials_cta_heading" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_cta_heading', true) ?: 'Ready to Join Our Success Stories?'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonials_cta_text">CTA Text</label></th>
            <td><input type="text" id="testimonials_cta_text" name="testimonials_cta_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_cta_text', true) ?: 'Let\'s discuss how we can help your business achieve similar results'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonials_cta_button1_text">Primary Button Text</label></th>
            <td><input type="text" id="testimonials_cta_button1_text" name="testimonials_cta_button1_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_cta_button1_text', true) ?: 'Start Your Success Story'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonials_cta_button1_url">Primary Button URL</label></th>
            <td><input type="text" id="testimonials_cta_button1_url" name="testimonials_cta_button1_url" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_cta_button1_url', true) ?: '/contact'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonials_cta_button2_text">Secondary Button Text</label></th>
            <td><input type="text" id="testimonials_cta_button2_text" name="testimonials_cta_button2_text" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_cta_button2_text', true) ?: 'View Case Studies'); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="testimonials_cta_button2_url">Secondary Button URL</label></th>
            <td><input type="text" id="testimonials_cta_button2_url" name="testimonials_cta_button2_url" value="<?php echo esc_attr(get_post_meta($post->ID, 'testimonials_cta_button2_url', true) ?: '/case-studies'); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

// Save meta box data
add_action('save_post', 'aimpro_save_testimonials_meta');
function aimpro_save_testimonials_meta($post_id) {
    if (!isset($_POST['aimpro_testimonials_meta_box_nonce']) || !wp_verify_nonce($_POST['aimpro_testimonials_meta_box_nonce'], 'aimpro_testimonials_meta_box')) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Save header fields
    if (isset($_POST['testimonials_header_title'])) {
        update_post_meta($post_id, 'testimonials_header_title', sanitize_text_field($_POST['testimonials_header_title']));
    }
    if (isset($_POST['testimonials_header_subtitle'])) {
        update_post_meta($post_id, 'testimonials_header_subtitle', sanitize_text_field($_POST['testimonials_header_subtitle']));
    }    if (isset($_POST['testimonials_featured_heading'])) {
        update_post_meta($post_id, 'testimonials_featured_heading', sanitize_text_field($_POST['testimonials_featured_heading']));
    }
    
    // Save metrics and CTA fields
    $additional_fields = array(
        'testimonials_metrics_heading' => 'sanitize_text_field',
        'testimonials_cta_heading' => 'sanitize_text_field',
        'testimonials_cta_text' => 'sanitize_text_field',
        'testimonials_cta_button1_text' => 'sanitize_text_field',
        'testimonials_cta_button1_url' => 'sanitize_text_field',
        'testimonials_cta_button2_text' => 'sanitize_text_field',
        'testimonials_cta_button2_url' => 'sanitize_text_field'
    );
    
    foreach ($additional_fields as $field => $sanitize_func) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
        }
    }
    
    // Save testimonial fields
    for ($i = 1; $i <= 2; $i++) {
        $fields = array(
            "testimonial{$i}_quote" => 'sanitize_textarea_field',
            "testimonial{$i}_author" => 'sanitize_text_field',
            "testimonial{$i}_title" => 'sanitize_text_field',
            "testimonial{$i}_company" => 'sanitize_text_field',
            "testimonial{$i}_industry" => 'sanitize_text_field',
            "testimonial{$i}_result1" => 'sanitize_text_field',
            "testimonial{$i}_result1_label" => 'sanitize_text_field',
            "testimonial{$i}_result2" => 'sanitize_text_field',
            "testimonial{$i}_result2_label" => 'sanitize_text_field',
            "testimonial{$i}_result3" => 'sanitize_text_field',
            "testimonial{$i}_result3_label" => 'sanitize_text_field'
        );
        
        foreach ($fields as $field => $sanitize_func) {
            if (isset($_POST[$field])) {
                update_post_meta($post_id, $field, $sanitize_func($_POST[$field]));
            }
        }
    }
}
