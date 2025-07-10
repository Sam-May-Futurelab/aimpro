<?php
/**
 * Partnership Page Meta Fields
 * Adds custom meta box for Partnership Page template with editable content fields
 */

if (!defined('ABSPATH')) exit;

add_action('add_meta_boxes', 'aimpro_add_partner_meta_box');
function aimpro_add_partner_meta_box() {
    global $post;
    if (empty($post)) return;
    
    $page_template = get_page_template_slug($post->ID);
    $page_slug = $post->post_name;
    
    if ($page_template === 'page-become-a-partner.php' || $page_slug === 'become-a-partner' || $page_slug === 'partner') {
        add_meta_box(
            'aimpro_partner_settings',
            'Partnership Page Settings',
            'aimpro_partner_meta_box_callback',
            'page',
            'normal',
            'high'
        );
    }
}

function aimpro_partner_meta_box_callback($post) {
    wp_nonce_field('aimpro_partner_meta_box', 'aimpro_partner_meta_box_nonce');
    
    // Page header
    $header_title = get_post_meta($post->ID, 'partner_header_title', true) ?: 'Become a Partner';
    $header_subtitle = get_post_meta($post->ID, 'partner_header_subtitle', true) ?: 'Join our network of strategic partners and grow together';
    
    // Introduction section
    $intro_heading = get_post_meta($post->ID, 'partner_intro_heading', true) ?: 'Partner with Aimpro Digital';
    $intro_text = get_post_meta($post->ID, 'partner_intro_text', true) ?: 'We believe in the power of collaboration. Our partnership program is designed to create mutually beneficial relationships that help both parties grow and succeed in the digital marketing landscape.\n\nWhether you\'re a complementary service provider, technology vendor, or strategic ally, we offer various partnership opportunities that can expand your reach while providing additional value to our clients.';
    
    // Stats section
    $stats_heading = get_post_meta($post->ID, 'partner_stats_heading', true) ?: 'Partnership Opportunity';
    $stats_value1 = get_post_meta($post->ID, 'partner_stats_value1', true) ?: '50+';
    $stats_label1 = get_post_meta($post->ID, 'partner_stats_label1', true) ?: 'Active Partners';
    $stats_value2 = get_post_meta($post->ID, 'partner_stats_value2', true) ?: '200%';
    $stats_label2 = get_post_meta($post->ID, 'partner_stats_label2', true) ?: 'Average Partner Growth';
    $stats_value3 = get_post_meta($post->ID, 'partner_stats_value3', true) ?: '$5M+';
    $stats_label3 = get_post_meta($post->ID, 'partner_stats_label3', true) ?: 'Partner Revenue Generated';
    
    // Partnership types section
    $opportunities_heading = get_post_meta($post->ID, 'partner_opportunities_heading', true) ?: 'Partnership Opportunities';
    
    // Referral Partners
    $referral_title = get_post_meta($post->ID, 'partner_referral_title', true) ?: 'Referral Partners';
    $referral_description = get_post_meta($post->ID, 'partner_referral_description', true) ?: 'Earn generous commissions by referring clients to our digital marketing services. Perfect for consultants, web developers, and business advisors.';
    $referral_benefits = get_post_meta($post->ID, 'partner_referral_benefits', true) ?: "Up to 20% commission on referred business\nDedicated partner support team\nMarketing materials and resources\nRegular training and updates";
    $referral_ideal = get_post_meta($post->ID, 'partner_referral_ideal', true) ?: 'Business consultants, web developers, graphic designers, and other service providers who work with businesses needing digital marketing.';
    
    // Technology Partners
    $tech_title = get_post_meta($post->ID, 'partner_tech_title', true) ?: 'Technology Partners';
    $tech_description = get_post_meta($post->ID, 'partner_tech_description', true) ?: 'Integrate your software or tools with our marketing stack to provide enhanced solutions for our mutual clients.';
    $tech_benefits = get_post_meta($post->ID, 'partner_tech_benefits', true) ?: "Technical integration and API access\nJoint marketing opportunities\nCo-branded solution development\nShared client success stories";
    $tech_ideal = get_post_meta($post->ID, 'partner_tech_ideal', true) ?: 'SaaS platforms, marketing tools, CRM providers, analytics platforms, and other technology solutions that complement digital marketing.';
    
    // Agency Partners
    $agency_title = get_post_meta($post->ID, 'partner_agency_title', true) ?: 'Agency Partners';
    $agency_description = get_post_meta($post->ID, 'partner_agency_description', true) ?: 'White-label our services or collaborate on larger projects that require specialised expertise in digital marketing.';
    $agency_benefits = get_post_meta($post->ID, 'partner_agency_benefits', true) ?: "White-label service delivery\nShared project management\nCollaborative proposal development\nResource and expertise sharing";
    $agency_ideal = get_post_meta($post->ID, 'partner_agency_ideal', true) ?: 'Creative agencies, PR firms, web development agencies, and other marketing service providers looking to expand their digital capabilities.';
    
    // Reseller Partners
    $reseller_title = get_post_meta($post->ID, 'partner_reseller_title', true) ?: 'Reseller Partners';
    $reseller_description = get_post_meta($post->ID, 'partner_reseller_description', true) ?: 'Resell our digital marketing services under your own brand with full support and training from our team.';
    $reseller_benefits = get_post_meta($post->ID, 'partner_reseller_benefits', true) ?: "Competitive wholesale pricing\nComplete sales and marketing training\nDedicated account management\nOngoing technical support";
    $reseller_ideal = get_post_meta($post->ID, 'partner_reseller_ideal', true) ?: 'Established businesses with existing client relationships who want to add digital marketing services to their portfolio.';
    
    // Why partner section
    $why_heading = get_post_meta($post->ID, 'partner_why_heading', true) ?: 'Why Partner with Aimpro Digital?';
    $why_benefit1_title = get_post_meta($post->ID, 'partner_why_benefit1_title', true) ?: 'Proven Track Record';
    $why_benefit1_text = get_post_meta($post->ID, 'partner_why_benefit1_text', true) ?: 'With 500+ successful client campaigns and a 99% retention rate, you can trust in our ability to deliver results.';
    $why_benefit2_title = get_post_meta($post->ID, 'partner_why_benefit2_title', true) ?: 'Comprehensive Support';
    $why_benefit2_text = get_post_meta($post->ID, 'partner_why_benefit2_text', true) ?: 'From initial onboarding to ongoing support, we provide the resources and training you need to succeed.';
    $why_benefit3_title = get_post_meta($post->ID, 'partner_why_benefit3_title', true) ?: 'Competitive Compensation';
    $why_benefit3_text = get_post_meta($post->ID, 'partner_why_benefit3_text', true) ?: 'Our partnership terms are designed to be mutually beneficial with competitive commissions and incentives.';
    $why_benefit4_title = get_post_meta($post->ID, 'partner_why_benefit4_title', true) ?: 'Expert Team';
    $why_benefit4_text = get_post_meta($post->ID, 'partner_why_benefit4_text', true) ?: 'Partner with certified specialists in SEO, PPC, content marketing, and web development.';
    $why_benefit5_title = get_post_meta($post->ID, 'partner_why_benefit5_title', true) ?: 'Cutting-Edge Tools';
    $why_benefit5_text = get_post_meta($post->ID, 'partner_why_benefit5_text', true) ?: 'Access to premium marketing tools and technologies that enhance service delivery and results.';
    $why_benefit6_title = get_post_meta($post->ID, 'partner_why_benefit6_title', true) ?: 'Flexible Arrangements';
    $why_benefit6_text = get_post_meta($post->ID, 'partner_why_benefit6_text', true) ?: 'We work with you to create partnership arrangements that fit your business model and goals.';
    
    // Success stories section
    $stories_heading = get_post_meta($post->ID, 'partner_stories_heading', true) ?: 'Partner Success Stories';
    
    // Testimonial 1
    $testimonial1_quote = get_post_meta($post->ID, 'partner_testimonial1_quote', true) ?: 'Partnering with Aimpro Digital has allowed us to offer comprehensive digital marketing services to our clients without having to build that expertise in-house. The results have been outstanding.';
    $testimonial1_name = get_post_meta($post->ID, 'partner_testimonial1_name', true) ?: 'Mark Johnson';
    $testimonial1_title = get_post_meta($post->ID, 'partner_testimonial1_title', true) ?: 'Founder, Creative Solutions Agency';
    $testimonial1_type = get_post_meta($post->ID, 'partner_testimonial1_type', true) ?: 'Agency Partner';
    
    // Testimonial 2
    $testimonial2_quote = get_post_meta($post->ID, 'partner_testimonial2_quote', true) ?: 'The referral program has been incredibly lucrative for our business. We\'ve earned over $50,000 in commissions while providing valuable services to our clients.';
    $testimonial2_name = get_post_meta($post->ID, 'partner_testimonial2_name', true) ?: 'Lisa Rodriguez';
    $testimonial2_title = get_post_meta($post->ID, 'partner_testimonial2_title', true) ?: 'Business Consultant';
    $testimonial2_type = get_post_meta($post->ID, 'partner_testimonial2_type', true) ?: 'Referral Partner';
    
    // Testimonial 3
    $testimonial3_quote = get_post_meta($post->ID, 'partner_testimonial3_quote', true) ?: 'The technical integration was seamless, and the collaborative approach has led to innovative solutions that neither of us could have developed alone.';
    $testimonial3_name = get_post_meta($post->ID, 'partner_testimonial3_name', true) ?: 'David Chen';
    $testimonial3_title = get_post_meta($post->ID, 'partner_testimonial3_title', true) ?: 'CTO, MarketingTech Pro';
    $testimonial3_type = get_post_meta($post->ID, 'partner_testimonial3_type', true) ?: 'Technology Partner';
    
    // Process section
    $process_heading = get_post_meta($post->ID, 'partner_process_heading', true) ?: 'How to Become a Partner';
    $process_step1_number = get_post_meta($post->ID, 'partner_process_step1_number', true) ?: '1';
    $process_step1_title = get_post_meta($post->ID, 'partner_process_step1_title', true) ?: 'Initial Inquiry';
    $process_step1_text = get_post_meta($post->ID, 'partner_process_step1_text', true) ?: 'Submit your partnership application with details about your business and partnership interests.';
    $process_step2_number = get_post_meta($post->ID, 'partner_process_step2_number', true) ?: '2';
    $process_step2_title = get_post_meta($post->ID, 'partner_process_step2_title', true) ?: 'Discovery Call';
    $process_step2_text = get_post_meta($post->ID, 'partner_process_step2_text', true) ?: 'We\'ll schedule a call to discuss your needs, goals, and how we can work together effectively.';
    $process_step3_number = get_post_meta($post->ID, 'partner_process_step3_number', true) ?: '3';
    $process_step3_title = get_post_meta($post->ID, 'partner_process_step3_title', true) ?: 'Partnership Proposal';
    $process_step3_text = get_post_meta($post->ID, 'partner_process_step3_text', true) ?: 'Based on our discussion, we\'ll create a customised partnership proposal that outlines terms and benefits.';
    $process_step4_number = get_post_meta($post->ID, 'partner_process_step4_number', true) ?: '4';
    $process_step4_title = get_post_meta($post->ID, 'partner_process_step4_title', true) ?: 'Agreement & Onboarding';
    $process_step4_text = get_post_meta($post->ID, 'partner_process_step4_text', true) ?: 'Once agreed, we\'ll formalize the partnership and begin the onboarding process with training and resources.';
    $process_step5_number = get_post_meta($post->ID, 'partner_process_step5_number', true) ?: '5';
    $process_step5_title = get_post_meta($post->ID, 'partner_process_step5_title', true) ?: 'Launch & Support';
    $process_step5_text = get_post_meta($post->ID, 'partner_process_step5_text', true) ?: 'Begin our partnership with ongoing support and regular check-ins to ensure mutual success.';
    
    // Application form
    $form_heading = get_post_meta($post->ID, 'partner_form_heading', true) ?: 'Apply to Become a Partner';
    $form_description = get_post_meta($post->ID, 'partner_form_description', true) ?: 'Ready to explore partnership opportunities? Fill out the form below and we\'ll get back to you within 24 hours.';
    
    // Contact section
    $contact_heading = get_post_meta($post->ID, 'partner_contact_heading', true) ?: 'Questions About Partnerships?';
    $contact_description = get_post_meta($post->ID, 'partner_contact_description', true) ?: 'Our partnership team is here to answer any questions and help you find the right partnership opportunity';
    $contact_email = get_post_meta($post->ID, 'partner_contact_email', true) ?: 'hello@aimpro.co.uk';
    $contact_phone = get_post_meta($post->ID, 'partner_contact_phone', true) ?: '+44 121 285 8490';
    
    ?>
    <table class="form-table">
        <tr>
          <th colspan="2"><h3>Page Header</h3></th>
        </tr>
        <tr>
            <th><label for="partner_header_title">Page Title</label></th>
            <td><input type="text" id="partner_header_title" name="partner_header_title" value="<?php echo esc_attr($header_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_header_subtitle">Page Subtitle</label></th>
            <td><input type="text" id="partner_header_subtitle" name="partner_header_subtitle" value="<?php echo esc_attr($header_subtitle); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Introduction Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_intro_heading">Introduction Heading</label></th>
            <td><input type="text" id="partner_intro_heading" name="partner_intro_heading" value="<?php echo esc_attr($intro_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_intro_text">Introduction Text</label></th>
            <td>
                <?php 
                wp_editor($intro_text, 'partner_intro_text', array(
                    'textarea_name' => 'partner_intro_text',
                    'media_buttons' => false,
                    'textarea_rows' => 5,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Stats Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_stats_heading">Stats Section Heading</label></th>
            <td><input type="text" id="partner_stats_heading" name="partner_stats_heading" value="<?php echo esc_attr($stats_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stats_value1">Stat 1 Value</label></th>
            <td><input type="text" id="partner_stats_value1" name="partner_stats_value1" value="<?php echo esc_attr($stats_value1); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stats_label1">Stat 1 Label</label></th>
            <td><input type="text" id="partner_stats_label1" name="partner_stats_label1" value="<?php echo esc_attr($stats_label1); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stats_value2">Stat 2 Value</label></th>
            <td><input type="text" id="partner_stats_value2" name="partner_stats_value2" value="<?php echo esc_attr($stats_value2); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stats_label2">Stat 2 Label</label></th>
            <td><input type="text" id="partner_stats_label2" name="partner_stats_label2" value="<?php echo esc_attr($stats_label2); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stats_value3">Stat 3 Value</label></th>
            <td><input type="text" id="partner_stats_value3" name="partner_stats_value3" value="<?php echo esc_attr($stats_value3); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_stats_label3">Stat 3 Label</label></th>
            <td><input type="text" id="partner_stats_label3" name="partner_stats_label3" value="<?php echo esc_attr($stats_label3); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Partnership Opportunities</h3></th>
        </tr>
        <tr>
            <th><label for="partner_opportunities_heading">Partnership Opportunities Heading</label></th>
            <td><input type="text" id="partner_opportunities_heading" name="partner_opportunities_heading" value="<?php echo esc_attr($opportunities_heading); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h4>Referral Partners</h4></th>
        </tr>
        <tr>
            <th><label for="partner_referral_title">Title</label></th>
            <td><input type="text" id="partner_referral_title" name="partner_referral_title" value="<?php echo esc_attr($referral_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_referral_description">Description</label></th>
            <td>
                <?php 
                wp_editor($referral_description, 'partner_referral_description', array(
                    'textarea_name' => 'partner_referral_description',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_referral_benefits">Benefits (one per line)</label></th>
            <td><textarea id="partner_referral_benefits" name="partner_referral_benefits" rows="4" class="large-text"><?php echo esc_textarea($referral_benefits); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="partner_referral_ideal">Ideal For</label></th>
            <td>
                <?php 
                wp_editor($referral_ideal, 'partner_referral_ideal', array(
                    'textarea_name' => 'partner_referral_ideal',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h4>Technology Partners</h4></th>
        </tr>
        <tr>
            <th><label for="partner_tech_title">Title</label></th>
            <td><input type="text" id="partner_tech_title" name="partner_tech_title" value="<?php echo esc_attr($tech_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_tech_description">Description</label></th>
            <td>
                <?php 
                wp_editor($tech_description, 'partner_tech_description', array(
                    'textarea_name' => 'partner_tech_description',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_tech_benefits">Benefits (one per line)</label></th>
            <td><textarea id="partner_tech_benefits" name="partner_tech_benefits" rows="4" class="large-text"><?php echo esc_textarea($tech_benefits); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="partner_tech_ideal">Ideal For</label></th>
            <td>
                <?php 
                wp_editor($tech_ideal, 'partner_tech_ideal', array(
                    'textarea_name' => 'partner_tech_ideal',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h4>Agency Partners</h4></th>
        </tr>
        <tr>
            <th><label for="partner_agency_title">Title</label></th>
            <td><input type="text" id="partner_agency_title" name="partner_agency_title" value="<?php echo esc_attr($agency_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_agency_description">Description</label></th>
            <td>
                <?php 
                wp_editor($agency_description, 'partner_agency_description', array(
                    'textarea_name' => 'partner_agency_description',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_agency_benefits">Benefits (one per line)</label></th>
            <td><textarea id="partner_agency_benefits" name="partner_agency_benefits" rows="4" class="large-text"><?php echo esc_textarea($agency_benefits); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="partner_agency_ideal">Ideal For</label></th>
            <td>
                <?php 
                wp_editor($agency_ideal, 'partner_agency_ideal', array(
                    'textarea_name' => 'partner_agency_ideal',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h4>Reseller Partners</h4></th>
        </tr>
        <tr>
            <th><label for="partner_reseller_title">Title</label></th>
            <td><input type="text" id="partner_reseller_title" name="partner_reseller_title" value="<?php echo esc_attr($reseller_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_reseller_description">Description</label></th>
            <td>
                <?php 
                wp_editor($reseller_description, 'partner_reseller_description', array(
                    'textarea_name' => 'partner_reseller_description',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_reseller_benefits">Benefits (one per line)</label></th>
            <td><textarea id="partner_reseller_benefits" name="partner_reseller_benefits" rows="4" class="large-text"><?php echo esc_textarea($reseller_benefits); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="partner_reseller_ideal">Ideal For</label></th>
            <td>
                <?php 
                wp_editor($reseller_ideal, 'partner_reseller_ideal', array(
                    'textarea_name' => 'partner_reseller_ideal',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Why Partner Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_why_heading">Why Partner Section Heading</label></th>
            <td><input type="text" id="partner_why_heading" name="partner_why_heading" value="<?php echo esc_attr($why_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit1_title">Benefit 1 Title</label></th>
            <td><input type="text" id="partner_why_benefit1_title" name="partner_why_benefit1_title" value="<?php echo esc_attr($why_benefit1_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit1_text">Benefit 1 Text</label></th>
            <td>
                <?php 
                wp_editor($why_benefit1_text, 'partner_why_benefit1_text', array(
                    'textarea_name' => 'partner_why_benefit1_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit2_title">Benefit 2 Title</label></th>
            <td><input type="text" id="partner_why_benefit2_title" name="partner_why_benefit2_title" value="<?php echo esc_attr($why_benefit2_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit2_text">Benefit 2 Text</label></th>
            <td>
                <?php 
                wp_editor($why_benefit2_text, 'partner_why_benefit2_text', array(
                    'textarea_name' => 'partner_why_benefit2_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit3_title">Benefit 3 Title</label></th>
            <td><input type="text" id="partner_why_benefit3_title" name="partner_why_benefit3_title" value="<?php echo esc_attr($why_benefit3_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit3_text">Benefit 3 Text</label></th>
            <td>
                <?php 
                wp_editor($why_benefit3_text, 'partner_why_benefit3_text', array(
                    'textarea_name' => 'partner_why_benefit3_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit4_title">Benefit 4 Title</label></th>
            <td><input type="text" id="partner_why_benefit4_title" name="partner_why_benefit4_title" value="<?php echo esc_attr($why_benefit4_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit4_text">Benefit 4 Text</label></th>
            <td>
                <?php 
                wp_editor($why_benefit4_text, 'partner_why_benefit4_text', array(
                    'textarea_name' => 'partner_why_benefit4_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit5_title">Benefit 5 Title</label></th>
            <td><input type="text" id="partner_why_benefit5_title" name="partner_why_benefit5_title" value="<?php echo esc_attr($why_benefit5_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit5_text">Benefit 5 Text</label></th>
            <td>
                <?php 
                wp_editor($why_benefit5_text, 'partner_why_benefit5_text', array(
                    'textarea_name' => 'partner_why_benefit5_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit6_title">Benefit 6 Title</label></th>
            <td><input type="text" id="partner_why_benefit6_title" name="partner_why_benefit6_title" value="<?php echo esc_attr($why_benefit6_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_why_benefit6_text">Benefit 6 Text</label></th>
            <td>
                <?php 
                wp_editor($why_benefit6_text, 'partner_why_benefit6_text', array(
                    'textarea_name' => 'partner_why_benefit6_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Success Stories Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_stories_heading">Success Stories Heading</label></th>
            <td><input type="text" id="partner_stories_heading" name="partner_stories_heading" value="<?php echo esc_attr($stories_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th colspan="2"><h4>Testimonial 1</h4></th>
        </tr>
        <tr>
            <th><label for="partner_testimonial1_quote">Testimonial 1 Quote</label></th>
            <td>
                <?php 
                wp_editor($testimonial1_quote, 'partner_testimonial1_quote', array(
                    'textarea_name' => 'partner_testimonial1_quote',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_testimonial1_name">Testimonial 1 Name</label></th>
            <td><input type="text" id="partner_testimonial1_name" name="partner_testimonial1_name" value="<?php echo esc_attr($testimonial1_name); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_testimonial1_title">Testimonial 1 Title</label></th>
            <td><input type="text" id="partner_testimonial1_title" name="partner_testimonial1_title" value="<?php echo esc_attr($testimonial1_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_testimonial1_type">Testimonial 1 Partner Type</label></th>
            <td><input type="text" id="partner_testimonial1_type" name="partner_testimonial1_type" value="<?php echo esc_attr($testimonial1_type); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th colspan="2"><h4>Testimonial 2</h4></th>
        </tr>
        <tr>
            <th><label for="partner_testimonial2_quote">Testimonial 2 Quote</label></th>
            <td>
                <?php 
                wp_editor($testimonial2_quote, 'partner_testimonial2_quote', array(
                    'textarea_name' => 'partner_testimonial2_quote',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_testimonial2_name">Testimonial 2 Name</label></th>
            <td><input type="text" id="partner_testimonial2_name" name="partner_testimonial2_name" value="<?php echo esc_attr($testimonial2_name); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_testimonial2_title">Testimonial 2 Title</label></th>
            <td><input type="text" id="partner_testimonial2_title" name="partner_testimonial2_title" value="<?php echo esc_attr($testimonial2_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_testimonial2_type">Testimonial 2 Partner Type</label></th>
            <td><input type="text" id="partner_testimonial2_type" name="partner_testimonial2_type" value="<?php echo esc_attr($testimonial2_type); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th colspan="2"><h4>Testimonial 3</h4></th>
        </tr>
        <tr>
            <th><label for="partner_testimonial3_quote">Testimonial 3 Quote</label></th>
            <td>
                <?php 
                wp_editor($testimonial3_quote, 'partner_testimonial3_quote', array(
                    'textarea_name' => 'partner_testimonial3_quote',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_testimonial3_name">Testimonial 3 Name</label></th>
            <td><input type="text" id="partner_testimonial3_name" name="partner_testimonial3_name" value="<?php echo esc_attr($testimonial3_name); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_testimonial3_title">Testimonial 3 Title</label></th>
            <td><input type="text" id="partner_testimonial3_title" name="partner_testimonial3_title" value="<?php echo esc_attr($testimonial3_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_testimonial3_type">Testimonial 3 Partner Type</label></th>
            <td><input type="text" id="partner_testimonial3_type" name="partner_testimonial3_type" value="<?php echo esc_attr($testimonial3_type); ?>" class="regular-text" /></td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Process Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_process_heading">Process Section Heading</label></th>
            <td><input type="text" id="partner_process_heading" name="partner_process_heading" value="<?php echo esc_attr($process_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
          <th colspan="2"><h4>Step 1</h4></th>
        </tr>
        <tr>
            <th><label for="partner_process_step1_number">Step 1 Number</label></th>
            <td><input type="text" id="partner_process_step1_number" name="partner_process_step1_number" value="<?php echo esc_attr($process_step1_number); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step1_title">Step 1 Title</label></th>
            <td><input type="text" id="partner_process_step1_title" name="partner_process_step1_title" value="<?php echo esc_attr($process_step1_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step1_text">Step 1 Text</label></th>
            <td>
                <?php 
                wp_editor($process_step1_text, 'partner_process_step1_text', array(
                    'textarea_name' => 'partner_process_step1_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
          <th colspan="2"><h4>Step 2</h4></th>
        </tr>
        <tr>
            <th><label for="partner_process_step2_number">Step 2 Number</label></th>
            <td><input type="text" id="partner_process_step2_number" name="partner_process_step2_number" value="<?php echo esc_attr($process_step2_number); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step2_title">Step 2 Title</label></th>
            <td><input type="text" id="partner_process_step2_title" name="partner_process_step2_title" value="<?php echo esc_attr($process_step2_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step2_text">Step 2 Text</label></th>
            <td>
                <?php 
                wp_editor($process_step2_text, 'partner_process_step2_text', array(
                    'textarea_name' => 'partner_process_step2_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
          <th colspan="2"><h4>Step 3</h4></th>
        </tr>
        <tr>
            <th><label for="partner_process_step3_number">Step 3 Number</label></th>
            <td><input type="text" id="partner_process_step3_number" name="partner_process_step3_number" value="<?php echo esc_attr($process_step3_number); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step3_title">Step 3 Title</label></th>
            <td><input type="text" id="partner_process_step3_title" name="partner_process_step3_title" value="<?php echo esc_attr($process_step3_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step3_text">Step 3 Text</label></th>
            <td>
                <?php 
                wp_editor($process_step3_text, 'partner_process_step3_text', array(
                    'textarea_name' => 'partner_process_step3_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
          <th colspan="2"><h4>Step 4</h4></th>
        </tr>
        <tr>
            <th><label for="partner_process_step4_number">Step 4 Number</label></th>
            <td><input type="text" id="partner_process_step4_number" name="partner_process_step4_number" value="<?php echo esc_attr($process_step4_number); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step4_title">Step 4 Title</label></th>
            <td><input type="text" id="partner_process_step4_title" name="partner_process_step4_title" value="<?php echo esc_attr($process_step4_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step4_text">Step 4 Text</label></th>
            <td>
                <?php 
                wp_editor($process_step4_text, 'partner_process_step4_text', array(
                    'textarea_name' => 'partner_process_step4_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
          <th colspan="2"><h4>Step 5</h4></th>
        </tr>
        <tr>
            <th><label for="partner_process_step5_number">Step 5 Number</label></th>
            <td><input type="text" id="partner_process_step5_number" name="partner_process_step5_number" value="<?php echo esc_attr($process_step5_number); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step5_title">Step 5 Title</label></th>
            <td><input type="text" id="partner_process_step5_title" name="partner_process_step5_title" value="<?php echo esc_attr($process_step5_title); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_process_step5_text">Step 5 Text</label></th>
            <td>
                <?php 
                wp_editor($process_step5_text, 'partner_process_step5_text', array(
                    'textarea_name' => 'partner_process_step5_text',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Application Form</h3></th>
        </tr>
        <tr>
            <th><label for="partner_form_heading">Form Heading</label></th>
            <td><input type="text" id="partner_form_heading" name="partner_form_heading" value="<?php echo esc_attr($form_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_form_description">Form Description</label></th>
            <td>
                <?php 
                wp_editor($form_description, 'partner_form_description', array(
                    'textarea_name' => 'partner_form_description',
                    'media_buttons' => false,
                    'textarea_rows' => 3,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        
        <tr>
          <th colspan="2"><h3>Contact Section</h3></th>
        </tr>
        <tr>
            <th><label for="partner_contact_heading">Contact Heading</label></th>
            <td><input type="text" id="partner_contact_heading" name="partner_contact_heading" value="<?php echo esc_attr($contact_heading); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_contact_description">Contact Description</label></th>
            <td>
                <?php 
                wp_editor($contact_description, 'partner_contact_description', array(
                    'textarea_name' => 'partner_contact_description',
                    'media_buttons' => false,
                    'textarea_rows' => 2,
                    'teeny' => true,
                    'quicktags' => true
                ));
                ?>
            </td>
        </tr>
        <tr>
            <th><label for="partner_contact_email">Contact Email</label></th>
            <td><input type="email" id="partner_contact_email" name="partner_contact_email" value="<?php echo esc_attr($contact_email); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="partner_contact_phone">Contact Phone</label></th>
            <td><input type="text" id="partner_contact_phone" name="partner_contact_phone" value="<?php echo esc_attr($contact_phone); ?>" class="regular-text" /></td>
        </tr>    </table>
    <?php
}

// Save meta box data
add_action('save_post', 'aimpro_save_partner_meta');
function aimpro_save_partner_meta($post_id) {
    if (!isset($_POST['aimpro_partner_meta_box_nonce']) || !wp_verify_nonce($_POST['aimpro_partner_meta_box_nonce'], 'aimpro_partner_meta_box')) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Function to sanitize based on field type (matching automate marketing pattern)
    function sanitize_partner_meta_value($field, $value) {
        // Rich text fields that should use wp_kses_post for HTML content
        if (strpos($field, 'text') !== false || strpos($field, 'description') !== false || 
            strpos($field, 'quote') !== false || strpos($field, 'ideal') !== false) {
            return wp_kses_post($value);
        } elseif (strpos($field, 'email') !== false) {
            return sanitize_email($value);
        } else {
            return sanitize_text_field($value);
        }
    }
    
    // Save all fields
    $fields = array(
        'partner_header_title',
        'partner_header_subtitle',
        'partner_intro_heading',
        'partner_intro_text',
        'partner_stats_heading',
        'partner_stats_value1',
        'partner_stats_label1',
        'partner_stats_value2',
        'partner_stats_label2',
        'partner_stats_value3',
        'partner_stats_label3',
        'partner_opportunities_heading',
        'partner_referral_title',
        'partner_referral_description',
        'partner_referral_benefits',
        'partner_referral_ideal',
        'partner_tech_title',
        'partner_tech_description',
        'partner_tech_benefits',
        'partner_tech_ideal',
        'partner_agency_title',
        'partner_agency_description',
        'partner_agency_benefits',
        'partner_agency_ideal',
        'partner_reseller_title',
        'partner_reseller_description',
        'partner_reseller_benefits',
        'partner_reseller_ideal',
        'partner_why_heading',
        'partner_why_benefit1_title',
        'partner_why_benefit1_text',
        'partner_why_benefit2_title',
        'partner_why_benefit2_text',
        'partner_why_benefit3_title',
        'partner_why_benefit3_text',
        'partner_why_benefit4_title',
        'partner_why_benefit4_text',
        'partner_why_benefit5_title',
        'partner_why_benefit5_text',
        'partner_why_benefit6_title',
        'partner_why_benefit6_text',
        'partner_stories_heading',
        'partner_testimonial1_quote',
        'partner_testimonial1_name',
        'partner_testimonial1_title',
        'partner_testimonial1_type',
        'partner_testimonial2_quote',
        'partner_testimonial2_name',
        'partner_testimonial2_title',
        'partner_testimonial2_type',
        'partner_testimonial3_quote',
        'partner_testimonial3_name',
        'partner_testimonial3_title',
        'partner_testimonial3_type',
        'partner_process_heading',
        'partner_process_step1_number',
        'partner_process_step1_title',
        'partner_process_step1_text',
        'partner_process_step2_number',
        'partner_process_step2_title',
        'partner_process_step2_text',
        'partner_process_step3_number',
        'partner_process_step3_title',
        'partner_process_step3_text',
        'partner_process_step4_number',
        'partner_process_step4_title',
        'partner_process_step4_text',
        'partner_process_step5_number',
        'partner_process_step5_title',
        'partner_process_step5_text',
        'partner_form_heading',
        'partner_form_description',
        'partner_contact_heading',
        'partner_contact_description',
        'partner_contact_email',
        'partner_contact_phone'
    );
    
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_partner_meta_value($field, $_POST[$field]));
        }
    }
}
