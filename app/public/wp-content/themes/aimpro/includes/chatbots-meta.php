<?php
/**
 * Chatbots Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for chatbots page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_chatbots_default_values() {
    return array(
        // Hero Section
        'hero_title' => 'AI-Powered Chatbot Development',
        'hero_subtitle' => 'Engage website visitors 24/7, qualify leads automatically, and provide instant customer support with intelligent chatbots that understand context and drive conversions.',
        'hero_stat1_number' => '380%',
        'hero_stat1_label' => 'Lead Qualification Increase',
        'hero_stat2_number' => '24/7',
        'hero_stat2_label' => 'Instant Response Time',
        'hero_stat3_number' => '65%',
        'hero_stat3_label' => 'Support Cost Reduction',
        'hero_cta1_text' => 'Build Your Chatbot',
        'hero_cta2_text' => 'View Packages',
        
        // Overview Section
        'overview_title' => 'Intelligent Chatbot Solutions',
        'overview_content' => 'Transform your website into an interactive experience that never sleeps. Our AI-powered chatbots handle customer inquiries, qualify leads, book appointments, and guide visitors toward conversion - all while providing personalised, human-like interactions.',
        
        // Service Items
        'service_icon_1' => 'fas fa-robot',
        'service_title_1' => 'AI-Powered Conversations',
        'service_content_1' => 'Natural language processing that understands context and provides intelligent, relevant responses to user inquiries.',
        
        'service_icon_2' => 'fas fa-user-check',
        'service_title_2' => 'Lead Qualification',
        'service_content_2' => 'Automatically qualify prospects with smart questioning flows that identify high-value leads for your sales team.',
        
        'service_icon_3' => 'fas fa-calendar-check',
        'service_title_3' => 'Appointment Booking',
        'service_content_3' => 'Seamless calendar integration that allows visitors to book consultations and appointments directly through chat.',
        
        'service_icon_4' => 'fas fa-headset',
        'service_title_4' => 'Customer Support Automation',
        'service_content_4' => 'Handle common customer questions and support requests instantly, escalating complex issues to human agents.',
        
        'service_icon_5' => 'fas fa-shopping-cart',
        'service_title_5' => 'E-commerce Integration',
        'service_content_5' => 'Product recommendations, order tracking, and purchase assistance to increase sales and improve customer experience.',
        
        'service_icon_6' => 'fas fa-chart-bar',
        'service_title_6' => 'Analytics & Insights',
        'service_content_6' => 'Detailed conversation analytics and user behaviour insights to optimise chatbot performance and identify opportunities.',
        
        // Case Study Section
        'case_study_title' => 'Case Study: Legal Firm Lead Generation',
        'case_study_intro' => 'How we helped a law firm increase qualified leads by 380% and reduce response time from hours to seconds with an intelligent chatbot that pre-qualifies legal consultations.',
        
        'challenge_title' => 'The Challenge',
        'challenge_content' => 'A growing legal firm was losing potential clients due to slow response times and inefficient lead qualification. Their website generated inquiries but many visitors left without engaging, and the intake process took days to schedule consultations.',
        
        'solution_title' => 'Our Chatbot Solution',
        'solution_list' => "Developed AI chatbot with legal expertise and natural conversation flow\nCreated intelligent qualification process for different legal practice areas\nIntegrated with calendar system for instant consultation booking\nBuilt knowledge base for common legal questions and FAQ responses\nImplemented lead scoring and CRM integration for sales team follow-up",
        
        'results_title' => 'The Results',
        'result_number_1' => '380%',
        'result_label_1' => 'Qualified Lead Increase',
        'result_number_2' => '95%',
        'result_label_2' => 'Website Engagement Rate',
        'result_number_3' => '24/7',
        'result_label_3' => 'Instant Response Time',
        'result_number_4' => '£425K',
        'result_label_4' => 'Additional Annual Revenue',
        
        // Chatbot Types Section
        'types_title' => 'Types of Chatbots We Build',
        'types_subtitle' => 'Custom chatbot solutions designed for specific business needs and customer engagement goals.',
        
        'type_icon_1' => 'fas fa-user-tie',
        'type_title_1' => 'Lead Generation Bots',
        'type_content_1' => 'Engage visitors, qualify prospects, and capture contact information through conversational lead forms.',
        'type_metric_1' => 'Average: 45% lead capture rate',
        
        'type_icon_2' => 'fas fa-life-ring',
        'type_title_2' => 'Customer Support Bots',
        'type_content_2' => 'Provide instant answers to common questions and escalate complex issues to human agents when needed.',
        'type_metric_2' => 'Average: 70% issue resolution',
        
        'type_icon_3' => 'fas fa-shopping-bag',
        'type_title_3' => 'E-commerce Bots',
        'type_content_3' => 'Recommend products, assist with purchases, track orders, and handle returns or exchanges.',
        'type_metric_3' => 'Average: 25% sales increase',
        
        'type_icon_4' => 'fas fa-calendar',
        'type_title_4' => 'Appointment Booking Bots',
        'type_content_4' => 'Allow visitors to check availability and book appointments or consultations directly through chat.',
        'type_metric_4' => 'Average: 60% booking completion',
        
        'type_icon_5' => 'fas fa-graduation-cap',
        'type_title_5' => 'Educational Bots',
        'type_content_5' => 'Guide users through learning paths, answer course questions, and provide educational resources.',
        'type_metric_5' => 'Average: 85% engagement rate',
        
        'type_icon_6' => 'fas fa-poll',
        'type_title_6' => 'Survey & Feedback Bots',
        'type_content_6' => 'Collect customer feedback, conduct surveys, and gather insights through interactive conversations.',
        'type_metric_6' => 'Average: 3x higher completion',
        
        // Process Section
        'process_title' => 'Our Chatbot Development Process',
        
        'process_step_title_1' => 'Strategy & Planning',
        'process_step_content_1' => 'analyse your customer interactions and define chatbot objectives, conversation flows, and success metrics.',
        
        'process_step_title_2' => 'Conversation Design',
        'process_step_content_2' => 'Create natural conversation flows, response scripts, and decision trees that guide users toward desired outcomes.',
        
        'process_step_title_3' => 'AI Training & Development',
        'process_step_content_3' => 'Build and train the chatbot with industry-specific knowledge and natural language understanding capabilities.',
        
        'process_step_title_4' => 'Integration & Testing',
        'process_step_content_4' => 'Integrate with your website, CRM, and other systems, then thoroughly test all conversation paths and scenarios.',
        
        'process_step_title_5' => 'Launch & optimisation',
        'process_step_content_5' => 'Deploy the chatbot with monitoring and continuous improvement based on user interactions and feedback.',
        
        // Features Section
        'features_title' => 'Advanced Chatbot Features',
        'features_subtitle' => 'Cutting-edge AI capabilities that make our chatbots intelligent, responsive, and highly effective.',
        
        'feature_icon_1' => 'fas fa-brain',
        'feature_title_1' => 'Natural Language Processing',
        'feature_content_1' => 'Understanding context, intent, and nuance in human conversation for more natural interactions.',
        
        'feature_icon_2' => 'fas fa-user-tag',
        'feature_title_2' => 'personalisation',
        'feature_content_2' => 'Tailored responses based on user behaviour, location, and previous interactions for relevant experiences.',
        
        'feature_icon_3' => 'fas fa-globe',
        'feature_title_3' => 'Multi-language Support',
        'feature_content_3' => 'Communicate with global audiences in their preferred language with automatic translation capabilities.',
        
        'feature_icon_4' => 'fas fa-mobile-alt',
        'feature_title_4' => 'Multi-platform Integration',
        'feature_content_4' => 'Deploy across website, Facebook Messenger, WhatsApp, and other messaging platforms seamlessly.',
        
        'feature_icon_5' => 'fas fa-hand-paper',
        'feature_title_5' => 'Human Handoff',
        'feature_content_5' => 'Smart escalation to human agents when conversations require personal attention or complex problem-solving.',
        
        'feature_icon_6' => 'fas fa-chart-line',
        'feature_title_6' => 'Advanced Analytics',
        'feature_content_6' => 'Detailed insights into conversation patterns, user satisfaction, and optimisation opportunities.',
        
        // Platforms Section
        'platforms_title' => 'Chatbot Platforms We Use',
        
        'platform_icon_1' => 'fas fa-comments',
        'platform_title_1' => 'Intercom',
        'platform_content_1' => 'Advanced conversational AI platform with sophisticated automation and customer support integration.',
        
        'platform_icon_2' => 'fas fa-robot',
        'platform_title_2' => 'Chatfuel',
        'platform_content_2' => 'User-friendly bot builder with powerful AI capabilities and multi-platform deployment options.',
        
        'platform_icon_3' => 'fab fa-microsoft',
        'platform_title_3' => 'Microsoft Bot Framework',
        'platform_content_3' => 'Enterprise-grade development platform for sophisticated, custom chatbot solutions.',
        
        'platform_icon_4' => 'fas fa-cog',
        'platform_title_4' => 'ManyChat',
        'platform_content_4' => 'Marketing-focused chatbot platform with excellent social media and automation integrations.',
        
        // Industries Section
        'industries_title' => 'Industries We Serve',
        
        'industry_title_1' => 'E-commerce & Retail',
        'industry_content_1' => 'Product recommendations, order support, and sales assistance chatbots.',
        
        'industry_title_2' => 'Healthcare',
        'industry_content_2' => 'Appointment scheduling, symptom assessment, and patient support automation.',
        
        'industry_title_3' => 'Professional Services',
        'industry_content_3' => 'Lead qualification, consultation booking, and client support chatbots.',
        
        'industry_title_4' => 'Real Estate',
        'industry_content_4' => 'Property search assistance, viewing appointments, and buyer qualification.',
        
        'industry_title_5' => 'Education',
        'industry_content_5' => 'Student support, course information, and enrollment assistance chatbots.',
        
        'industry_title_6' => 'Financial Services',
        'industry_content_6' => 'Account assistance, loan applications, and financial advice automation.',
        
        // Testimonial Section
        'testimonial_quote' => 'Our chatbot has revolutionized our lead generation. We\'re capturing 380% more qualified leads and providing instant responses 24/7. It\'s like having a team of salespeople that never sleep.',
        'testimonial_name' => 'David Thompson',
        'testimonial_title' => 'Senior Partner, Thompson Legal Group',
        
        // CTA Section
        'cta_title' => 'Ready to Engage Visitors 24/7?',
        'cta_content' => 'Stop losing leads to slow response times and missed opportunities. Our intelligent chatbots provide instant engagement and qualification, turning your website into a lead-generating machine that works around the clock.',
        'cta_button_text' => 'Build Your Chatbot'
    );
}

/**
 * Register Chatbots meta boxes
 */
function aimpro_register_chatbots_meta_boxes() {
    // Only show these meta boxes on the Chatbots page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-chatbots.php') {
            return;
        }
    }
    
    add_meta_box(
        'chatbots_hero_section',
        __('Hero Section', 'aimpro'),
        'aimpro_chatbots_hero_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_overview_section',
        __('Service Overview', 'aimpro'),
        'aimpro_chatbots_overview_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_chatbots_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_types_section',
        __('Chatbot Types Section', 'aimpro'),
        'aimpro_chatbots_types_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_process_section',
        __('Process Section', 'aimpro'),
        'aimpro_chatbots_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_features_section',
        __('Features Section', 'aimpro'),
        'aimpro_chatbots_features_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_platforms_section',
        __('Platforms Section', 'aimpro'),
        'aimpro_chatbots_platforms_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_industries_section',
        __('Industries Section', 'aimpro'),
        'aimpro_chatbots_industries_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_chatbots_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'chatbots_cta_section',
        __('CTA Section', 'aimpro'),
        'aimpro_chatbots_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_chatbots_meta_boxes');

/**
 * Hero Section Callback
 */
function aimpro_chatbots_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_hero_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $hero_title = get_post_meta($post->ID, '_chatbots_hero_title', true);
    if (empty($hero_title)) $hero_title = $defaults['hero_title'];
    
    $hero_subtitle = get_post_meta($post->ID, '_chatbots_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
    
    // Stats
    $hero_stat1_number = get_post_meta($post->ID, '_chatbots_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
    
    $hero_stat1_label = get_post_meta($post->ID, '_chatbots_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
    
    $hero_stat2_number = get_post_meta($post->ID, '_chatbots_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
    
    $hero_stat2_label = get_post_meta($post->ID, '_chatbots_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
    
    $hero_stat3_number = get_post_meta($post->ID, '_chatbots_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
    
    $hero_stat3_label = get_post_meta($post->ID, '_chatbots_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
    
    // CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_chatbots_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
    
    $hero_cta2_text = get_post_meta($post->ID, '_chatbots_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_hero_title"><?php _e('Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_hero_title" name="chatbots_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_hero_subtitle"><?php _e('Subtitle', 'aimpro'); ?></label><br>
        <textarea id="chatbots_hero_subtitle" name="chatbots_hero_subtitle" class="widefat" rows="3"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="chatbots_hero_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_stat1_number" name="chatbots_hero_stat1_number" value="<?php echo esc_attr($hero_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_hero_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_stat1_label" name="chatbots_hero_stat1_label" value="<?php echo esc_attr($hero_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="chatbots_hero_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_stat2_number" name="chatbots_hero_stat2_number" value="<?php echo esc_attr($hero_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_hero_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_stat2_label" name="chatbots_hero_stat2_label" value="<?php echo esc_attr($hero_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="chatbots_hero_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_stat3_number" name="chatbots_hero_stat3_number" value="<?php echo esc_attr($hero_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_hero_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_stat3_label" name="chatbots_hero_stat3_label" value="<?php echo esc_attr($hero_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('Call to Actions', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="chatbots_hero_cta1_text"><?php _e('Primary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_cta1_text" name="chatbots_hero_cta1_text" value="<?php echo esc_attr($hero_cta1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="chatbots_hero_cta2_text"><?php _e('Secondary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_hero_cta2_text" name="chatbots_hero_cta2_text" value="<?php echo esc_attr($hero_cta2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Service Overview Callback
 */
function aimpro_chatbots_overview_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_overview_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $overview_title = get_post_meta($post->ID, '_chatbots_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content = get_post_meta($post->ID, '_chatbots_overview_content', true);
    if (empty($overview_content)) $overview_content = $defaults['overview_content'];
    
    // Service Items (6 items)
    $services = array();
    for ($i = 1; $i <= 6; $i++) {
        $icon = get_post_meta($post->ID, "_chatbots_service_icon_{$i}", true);
        if (empty($icon)) $icon = $defaults["service_icon_{$i}"];
        
        $title = get_post_meta($post->ID, "_chatbots_service_title_{$i}", true);
        if (empty($title)) $title = $defaults["service_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_chatbots_service_content_{$i}", true);
        if (empty($content)) $content = $defaults["service_content_{$i}"];
        
        $services[$i] = array(
            'icon' => $icon,
            'title' => $title,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_overview_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_overview_title" name="chatbots_overview_title" value="<?php echo esc_attr($overview_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_overview_content"><?php _e('Section Content', 'aimpro'); ?></label><br>
        <textarea id="chatbots_overview_content" name="chatbots_overview_content" class="widefat" rows="3"><?php echo esc_textarea($overview_content); ?></textarea>
    </p>
    
    <h4><?php _e('Service Items', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Service %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="chatbots_service_icon_<?php echo $i; ?>"><?php _e('Icon Class (Font Awesome)', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_service_icon_<?php echo $i; ?>" name="chatbots_service_icon_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['icon']); ?>" class="widefat">
                <small><?php _e('Example: fas fa-robot', 'aimpro'); ?></small>
            </p>
            <p>
                <label for="chatbots_service_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_service_title_<?php echo $i; ?>" name="chatbots_service_title_<?php echo $i; ?>" value="<?php echo esc_attr($services[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_service_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="chatbots_service_content_<?php echo $i; ?>" name="chatbots_service_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($services[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_chatbots_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_case_study_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $case_study_title = get_post_meta($post->ID, '_chatbots_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_intro = get_post_meta($post->ID, '_chatbots_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
    
    $challenge_title = get_post_meta($post->ID, '_chatbots_challenge_title', true);
    if (empty($challenge_title)) $challenge_title = $defaults['challenge_title'];
    
    $challenge_content = get_post_meta($post->ID, '_chatbots_challenge_content', true);
    if (empty($challenge_content)) $challenge_content = $defaults['challenge_content'];
    
    $solution_title = get_post_meta($post->ID, '_chatbots_solution_title', true);
    if (empty($solution_title)) $solution_title = $defaults['solution_title'];
    
    $solution_list = get_post_meta($post->ID, '_chatbots_solution_list', true);
    if (empty($solution_list)) $solution_list = $defaults['solution_list'];
    
    $results_title = get_post_meta($post->ID, '_chatbots_results_title', true);
    if (empty($results_title)) $results_title = $defaults['results_title'];
    
    // Result items
    $results = array();
    for ($i = 1; $i <= 4; $i++) {
        $number = get_post_meta($post->ID, "_chatbots_result_number_{$i}", true);
        if (empty($number)) $number = $defaults["result_number_{$i}"];
        
        $label = get_post_meta($post->ID, "_chatbots_result_label_{$i}", true);
        if (empty($label)) $label = $defaults["result_label_{$i}"];
        
        $results[$i] = array(
            'number' => $number,
            'label' => $label,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_case_study_title" name="chatbots_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <textarea id="chatbots_case_study_intro" name="chatbots_case_study_intro" class="widefat" rows="3"><?php echo esc_textarea($case_study_intro); ?></textarea>
    </p>
    
    <h4><?php _e('The Challenge', 'aimpro'); ?></h4>
    <p>
        <label for="chatbots_challenge_title"><?php _e('Challenge Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_challenge_title" name="chatbots_challenge_title" value="<?php echo esc_attr($challenge_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_challenge_content"><?php _e('Challenge Content', 'aimpro'); ?></label><br>
        <textarea id="chatbots_challenge_content" name="chatbots_challenge_content" class="widefat" rows="3"><?php echo esc_textarea($challenge_content); ?></textarea>
    </p>
    
    <h4><?php _e('The Solution', 'aimpro'); ?></h4>
    <p>
        <label for="chatbots_solution_title"><?php _e('Solution Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_solution_title" name="chatbots_solution_title" value="<?php echo esc_attr($solution_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_solution_list"><?php _e('Solution List (one item per line)', 'aimpro'); ?></label><br>
        <textarea id="chatbots_solution_list" name="chatbots_solution_list" class="widefat" rows="5"><?php echo esc_textarea($solution_list); ?></textarea>
    </p>
    
    <h4><?php _e('The Results', 'aimpro'); ?></h4>
    <p>
        <label for="chatbots_results_title"><?php _e('Results Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_results_title" name="chatbots_results_title" value="<?php echo esc_attr($results_title); ?>" class="widefat">
    </p>
    
    <div style="display: flex; flex-wrap: wrap; gap: 20px;">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="flex: 1; min-width: 200px;">
                <h4><?php printf(__('Result %d', 'aimpro'), $i); ?></h4>
                <p>
                    <label for="chatbots_result_number_<?php echo $i; ?>"><?php _e('Number/Value', 'aimpro'); ?></label><br>
                    <input type="text" id="chatbots_result_number_<?php echo $i; ?>" name="chatbots_result_number_<?php echo $i; ?>" value="<?php echo esc_attr($results[$i]['number']); ?>" class="widefat">
                </p>
                <p>
                    <label for="chatbots_result_label_<?php echo $i; ?>"><?php _e('Label', 'aimpro'); ?></label><br>
                    <input type="text" id="chatbots_result_label_<?php echo $i; ?>" name="chatbots_result_label_<?php echo $i; ?>" value="<?php echo esc_attr($results[$i]['label']); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Chatbot Types Section Callback
 */
function aimpro_chatbots_types_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_types_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $types_title = get_post_meta($post->ID, '_chatbots_types_title', true);
    if (empty($types_title)) $types_title = $defaults['types_title'];
    
    $types_subtitle = get_post_meta($post->ID, '_chatbots_types_subtitle', true);
    if (empty($types_subtitle)) $types_subtitle = $defaults['types_subtitle'];
    
    // Chatbot type items (6 items)
    $types = array();
    for ($i = 1; $i <= 6; $i++) {
        $icon = get_post_meta($post->ID, "_chatbots_type_icon_{$i}", true);
        if (empty($icon)) $icon = $defaults["type_icon_{$i}"];
        
        $title = get_post_meta($post->ID, "_chatbots_type_title_{$i}", true);
        if (empty($title)) $title = $defaults["type_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_chatbots_type_content_{$i}", true);
        if (empty($content)) $content = $defaults["type_content_{$i}"];
        
        $metric = get_post_meta($post->ID, "_chatbots_type_metric_{$i}", true);
        if (empty($metric)) $metric = $defaults["type_metric_{$i}"];
        
        $types[$i] = array(
            'icon' => $icon,
            'title' => $title,
            'content' => $content,
            'metric' => $metric,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_types_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_types_title" name="chatbots_types_title" value="<?php echo esc_attr($types_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_types_subtitle"><?php _e('Section Subtitle', 'aimpro'); ?></label><br>
        <textarea id="chatbots_types_subtitle" name="chatbots_types_subtitle" class="widefat" rows="3"><?php echo esc_textarea($types_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Chatbot Types', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Type %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="chatbots_type_icon_<?php echo $i; ?>"><?php _e('Icon Class (Font Awesome)', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_type_icon_<?php echo $i; ?>" name="chatbots_type_icon_<?php echo $i; ?>" value="<?php echo esc_attr($types[$i]['icon']); ?>" class="widefat">
                <small><?php _e('Example: fas fa-user-tie', 'aimpro'); ?></small>
            </p>
            <p>
                <label for="chatbots_type_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_type_title_<?php echo $i; ?>" name="chatbots_type_title_<?php echo $i; ?>" value="<?php echo esc_attr($types[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_type_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="chatbots_type_content_<?php echo $i; ?>" name="chatbots_type_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($types[$i]['content']); ?></textarea>
            </p>
            <p>
                <label for="chatbots_type_metric_<?php echo $i; ?>"><?php _e('Metric', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_type_metric_<?php echo $i; ?>" name="chatbots_type_metric_<?php echo $i; ?>" value="<?php echo esc_attr($types[$i]['metric']); ?>" class="widefat">
                <small><?php _e('Example: Average: 45% lead capture rate', 'aimpro'); ?></small>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Process Section Callback
 */
function aimpro_chatbots_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_process_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $process_title = get_post_meta($post->ID, '_chatbots_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    // Process steps (5 items)
    $steps = array();
    for ($i = 1; $i <= 5; $i++) {
        $title = get_post_meta($post->ID, "_chatbots_process_step_title_{$i}", true);
        if (empty($title)) $title = $defaults["process_step_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_chatbots_process_step_content_{$i}", true);
        if (empty($content)) $content = $defaults["process_step_content_{$i}"];
        
        $steps[$i] = array(
            'title' => $title,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_process_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_process_title" name="chatbots_process_title" value="<?php echo esc_attr($process_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Process Steps', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Step %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="chatbots_process_step_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_process_step_title_<?php echo $i; ?>" name="chatbots_process_step_title_<?php echo $i; ?>" value="<?php echo esc_attr($steps[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_process_step_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="chatbots_process_step_content_<?php echo $i; ?>" name="chatbots_process_step_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($steps[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Features Section Callback
 */
function aimpro_chatbots_features_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_features_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $features_title = get_post_meta($post->ID, '_chatbots_features_title', true);
    if (empty($features_title)) $features_title = $defaults['features_title'];
    
    $features_subtitle = get_post_meta($post->ID, '_chatbots_features_subtitle', true);
    if (empty($features_subtitle)) $features_subtitle = $defaults['features_subtitle'];
    
    // Feature items (6 items)
    $features = array();
    for ($i = 1; $i <= 6; $i++) {
        $icon = get_post_meta($post->ID, "_chatbots_feature_icon_{$i}", true);
        if (empty($icon)) $icon = $defaults["feature_icon_{$i}"];
        
        $title = get_post_meta($post->ID, "_chatbots_feature_title_{$i}", true);
        if (empty($title)) $title = $defaults["feature_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_chatbots_feature_content_{$i}", true);
        if (empty($content)) $content = $defaults["feature_content_{$i}"];
        
        $features[$i] = array(
            'icon' => $icon,
            'title' => $title,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_features_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_features_title" name="chatbots_features_title" value="<?php echo esc_attr($features_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_features_subtitle"><?php _e('Section Subtitle', 'aimpro'); ?></label><br>
        <textarea id="chatbots_features_subtitle" name="chatbots_features_subtitle" class="widefat" rows="3"><?php echo esc_textarea($features_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Features', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Feature %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="chatbots_feature_icon_<?php echo $i; ?>"><?php _e('Icon Class (Font Awesome)', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_feature_icon_<?php echo $i; ?>" name="chatbots_feature_icon_<?php echo $i; ?>" value="<?php echo esc_attr($features[$i]['icon']); ?>" class="widefat">
                <small><?php _e('Example: fas fa-brain', 'aimpro'); ?></small>
            </p>
            <p>
                <label for="chatbots_feature_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_feature_title_<?php echo $i; ?>" name="chatbots_feature_title_<?php echo $i; ?>" value="<?php echo esc_attr($features[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_feature_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="chatbots_feature_content_<?php echo $i; ?>" name="chatbots_feature_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($features[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Platforms Section Callback
 */
function aimpro_chatbots_platforms_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_platforms_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $platforms_title = get_post_meta($post->ID, '_chatbots_platforms_title', true);
    if (empty($platforms_title)) $platforms_title = $defaults['platforms_title'];
    
    // Platform items (4 items)
    $platforms = array();
    for ($i = 1; $i <= 4; $i++) {
        $icon = get_post_meta($post->ID, "_chatbots_platform_icon_{$i}", true);
        if (empty($icon)) $icon = $defaults["platform_icon_{$i}"];
        
        $title = get_post_meta($post->ID, "_chatbots_platform_title_{$i}", true);
        if (empty($title)) $title = $defaults["platform_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_chatbots_platform_content_{$i}", true);
        if (empty($content)) $content = $defaults["platform_content_{$i}"];
        
        $platforms[$i] = array(
            'icon' => $icon,
            'title' => $title,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_platforms_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_platforms_title" name="chatbots_platforms_title" value="<?php echo esc_attr($platforms_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Platforms', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 4; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Platform %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="chatbots_platform_icon_<?php echo $i; ?>"><?php _e('Icon Class (Font Awesome)', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_platform_icon_<?php echo $i; ?>" name="chatbots_platform_icon_<?php echo $i; ?>" value="<?php echo esc_attr($platforms[$i]['icon']); ?>" class="widefat">
                <small><?php _e('Example: fas fa-comments', 'aimpro'); ?></small>
            </p>
            <p>
                <label for="chatbots_platform_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_platform_title_<?php echo $i; ?>" name="chatbots_platform_title_<?php echo $i; ?>" value="<?php echo esc_attr($platforms[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_platform_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="chatbots_platform_content_<?php echo $i; ?>" name="chatbots_platform_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($platforms[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Industries Section Callback
 */
function aimpro_chatbots_industries_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_industries_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $industries_title = get_post_meta($post->ID, '_chatbots_industries_title', true);
    if (empty($industries_title)) $industries_title = $defaults['industries_title'];
    
    // Industry items (6 items)
    $industries = array();
    for ($i = 1; $i <= 6; $i++) {
        $title = get_post_meta($post->ID, "_chatbots_industry_title_{$i}", true);
        if (empty($title)) $title = $defaults["industry_title_{$i}"];
        
        $content = get_post_meta($post->ID, "_chatbots_industry_content_{$i}", true);
        if (empty($content)) $content = $defaults["industry_content_{$i}"];
        
        $industries[$i] = array(
            'title' => $title,
            'content' => $content,
        );
    }
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_industries_title"><?php _e('Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_industries_title" name="chatbots_industries_title" value="<?php echo esc_attr($industries_title); ?>" class="widefat">
    </p>
    
    <h4><?php _e('Industries', 'aimpro'); ?></h4>
    <?php for ($i = 1; $i <= 6; $i++) : ?>
        <div style="margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee;">
            <h4><?php printf(__('Industry %d', 'aimpro'), $i); ?></h4>
            <p>
                <label for="chatbots_industry_title_<?php echo $i; ?>"><?php _e('Title', 'aimpro'); ?></label><br>
                <input type="text" id="chatbots_industry_title_<?php echo $i; ?>" name="chatbots_industry_title_<?php echo $i; ?>" value="<?php echo esc_attr($industries[$i]['title']); ?>" class="widefat">
            </p>
            <p>
                <label for="chatbots_industry_content_<?php echo $i; ?>"><?php _e('Content', 'aimpro'); ?></label><br>
                <textarea id="chatbots_industry_content_<?php echo $i; ?>" name="chatbots_industry_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($industries[$i]['content']); ?></textarea>
            </p>
        </div>
    <?php endfor; ?>
    <?php
}

/**
 * Testimonial Section Callback
 */
function aimpro_chatbots_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_testimonial_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $testimonial_quote = get_post_meta($post->ID, '_chatbots_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_chatbots_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_chatbots_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <textarea id="chatbots_testimonial_quote" name="chatbots_testimonial_quote" class="widefat" rows="4"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </p>
    <p>
        <label for="chatbots_testimonial_name"><?php _e('Name', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_testimonial_name" name="chatbots_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_testimonial_title"><?php _e('Title/Company', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_testimonial_title" name="chatbots_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
    </p>
    <?php
}

/**
 * CTA Section Callback
 */
function aimpro_chatbots_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'chatbots_cta_nonce');
    
    $defaults = aimpro_get_chatbots_default_values();
    
    // Get saved values or use defaults if empty
    $cta_title = get_post_meta($post->ID, '_chatbots_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_content = get_post_meta($post->ID, '_chatbots_cta_content', true);
    if (empty($cta_content)) $cta_content = $defaults['cta_content'];
    
    $cta_button_text = get_post_meta($post->ID, '_chatbots_cta_button_text', true);
    if (empty($cta_button_text)) $cta_button_text = $defaults['cta_button_text'];
    
    // Output fields
    ?>
    <p>
        <label for="chatbots_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_cta_title" name="chatbots_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="widefat">
    </p>
    <p>
        <label for="chatbots_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <textarea id="chatbots_cta_content" name="chatbots_cta_content" class="widefat" rows="3"><?php echo esc_textarea($cta_content); ?></textarea>
    </p>
    <p>
        <label for="chatbots_cta_button_text"><?php _e('Button Text', 'aimpro'); ?></label><br>
        <input type="text" id="chatbots_cta_button_text" name="chatbots_cta_button_text" value="<?php echo esc_attr($cta_button_text); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Save meta box data
 */
function aimpro_save_chatbots_meta_boxes($post_id) {
    // Check if we're autosaving
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    // Check the user's permissions
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    }
    
    // Save Hero Section
    if (isset($_POST['chatbots_hero_nonce']) && wp_verify_nonce($_POST['chatbots_hero_nonce'], basename(__FILE__))) {
        // Title and subtitle
        if (isset($_POST['chatbots_hero_title'])) {
            update_post_meta($post_id, '_chatbots_hero_title', sanitize_text_field($_POST['chatbots_hero_title']));
        }
        if (isset($_POST['chatbots_hero_subtitle'])) {
            update_post_meta($post_id, '_chatbots_hero_subtitle', sanitize_textarea_field($_POST['chatbots_hero_subtitle']));
        }
        
        // Stats
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["chatbots_hero_stat{$i}_number"])) {
                update_post_meta($post_id, "_chatbots_hero_stat{$i}_number", sanitize_text_field($_POST["chatbots_hero_stat{$i}_number"]));
            }
            if (isset($_POST["chatbots_hero_stat{$i}_label"])) {
                update_post_meta($post_id, "_chatbots_hero_stat{$i}_label", sanitize_text_field($_POST["chatbots_hero_stat{$i}_label"]));
            }
        }
        
        // CTAs
        if (isset($_POST['chatbots_hero_cta1_text'])) {
            update_post_meta($post_id, '_chatbots_hero_cta1_text', sanitize_text_field($_POST['chatbots_hero_cta1_text']));
        }
        if (isset($_POST['chatbots_hero_cta2_text'])) {
            update_post_meta($post_id, '_chatbots_hero_cta2_text', sanitize_text_field($_POST['chatbots_hero_cta2_text']));
        }
    }
    
    // Save Overview Section
    if (isset($_POST['chatbots_overview_nonce']) && wp_verify_nonce($_POST['chatbots_overview_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_overview_title'])) {
            update_post_meta($post_id, '_chatbots_overview_title', sanitize_text_field($_POST['chatbots_overview_title']));
        }
        if (isset($_POST['chatbots_overview_content'])) {
            update_post_meta($post_id, '_chatbots_overview_content', sanitize_textarea_field($_POST['chatbots_overview_content']));
        }
        
        // Services
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["chatbots_service_icon_{$i}"])) {
                update_post_meta($post_id, "_chatbots_service_icon_{$i}", sanitize_text_field($_POST["chatbots_service_icon_{$i}"]));
            }
            if (isset($_POST["chatbots_service_title_{$i}"])) {
                update_post_meta($post_id, "_chatbots_service_title_{$i}", sanitize_text_field($_POST["chatbots_service_title_{$i}"]));
            }
            if (isset($_POST["chatbots_service_content_{$i}"])) {
                update_post_meta($post_id, "_chatbots_service_content_{$i}", sanitize_textarea_field($_POST["chatbots_service_content_{$i}"]));
            }
        }
    }
    
    // Save Case Study Section
    if (isset($_POST['chatbots_case_study_nonce']) && wp_verify_nonce($_POST['chatbots_case_study_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_case_study_title'])) {
            update_post_meta($post_id, '_chatbots_case_study_title', sanitize_text_field($_POST['chatbots_case_study_title']));
        }
        if (isset($_POST['chatbots_case_study_intro'])) {
            update_post_meta($post_id, '_chatbots_case_study_intro', sanitize_textarea_field($_POST['chatbots_case_study_intro']));
        }
        
        if (isset($_POST['chatbots_challenge_title'])) {
            update_post_meta($post_id, '_chatbots_challenge_title', sanitize_text_field($_POST['chatbots_challenge_title']));
        }
        if (isset($_POST['chatbots_challenge_content'])) {
            update_post_meta($post_id, '_chatbots_challenge_content', sanitize_textarea_field($_POST['chatbots_challenge_content']));
        }
        
        if (isset($_POST['chatbots_solution_title'])) {
            update_post_meta($post_id, '_chatbots_solution_title', sanitize_text_field($_POST['chatbots_solution_title']));
        }
        if (isset($_POST['chatbots_solution_list'])) {
            update_post_meta($post_id, '_chatbots_solution_list', sanitize_textarea_field($_POST['chatbots_solution_list']));
        }
        
        if (isset($_POST['chatbots_results_title'])) {
            update_post_meta($post_id, '_chatbots_results_title', sanitize_text_field($_POST['chatbots_results_title']));
        }
        
        // Results
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["chatbots_result_number_{$i}"])) {
                update_post_meta($post_id, "_chatbots_result_number_{$i}", sanitize_text_field($_POST["chatbots_result_number_{$i}"]));
            }
            if (isset($_POST["chatbots_result_label_{$i}"])) {
                update_post_meta($post_id, "_chatbots_result_label_{$i}", sanitize_text_field($_POST["chatbots_result_label_{$i}"]));
            }
        }
    }
    
    // Save Chatbot Types Section
    if (isset($_POST['chatbots_types_nonce']) && wp_verify_nonce($_POST['chatbots_types_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_types_title'])) {
            update_post_meta($post_id, '_chatbots_types_title', sanitize_text_field($_POST['chatbots_types_title']));
        }
        if (isset($_POST['chatbots_types_subtitle'])) {
            update_post_meta($post_id, '_chatbots_types_subtitle', sanitize_textarea_field($_POST['chatbots_types_subtitle']));
        }
        
        // Type Items
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["chatbots_type_icon_{$i}"])) {
                update_post_meta($post_id, "_chatbots_type_icon_{$i}", sanitize_text_field($_POST["chatbots_type_icon_{$i}"]));
            }
            if (isset($_POST["chatbots_type_title_{$i}"])) {
                update_post_meta($post_id, "_chatbots_type_title_{$i}", sanitize_text_field($_POST["chatbots_type_title_{$i}"]));
            }
            if (isset($_POST["chatbots_type_content_{$i}"])) {
                update_post_meta($post_id, "_chatbots_type_content_{$i}", sanitize_textarea_field($_POST["chatbots_type_content_{$i}"]));
            }
            if (isset($_POST["chatbots_type_metric_{$i}"])) {
                update_post_meta($post_id, "_chatbots_type_metric_{$i}", sanitize_text_field($_POST["chatbots_type_metric_{$i}"]));
            }
        }
    }
    
    // Save Process Section
    if (isset($_POST['chatbots_process_nonce']) && wp_verify_nonce($_POST['chatbots_process_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_process_title'])) {
            update_post_meta($post_id, '_chatbots_process_title', sanitize_text_field($_POST['chatbots_process_title']));
        }
        
        // Steps
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["chatbots_process_step_title_{$i}"])) {
                update_post_meta($post_id, "_chatbots_process_step_title_{$i}", sanitize_text_field($_POST["chatbots_process_step_title_{$i}"]));
            }
            if (isset($_POST["chatbots_process_step_content_{$i}"])) {
                update_post_meta($post_id, "_chatbots_process_step_content_{$i}", sanitize_textarea_field($_POST["chatbots_process_step_content_{$i}"]));
            }
        }
    }
    
    // Save Features Section
    if (isset($_POST['chatbots_features_nonce']) && wp_verify_nonce($_POST['chatbots_features_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_features_title'])) {
            update_post_meta($post_id, '_chatbots_features_title', sanitize_text_field($_POST['chatbots_features_title']));
        }
        if (isset($_POST['chatbots_features_subtitle'])) {
            update_post_meta($post_id, '_chatbots_features_subtitle', sanitize_textarea_field($_POST['chatbots_features_subtitle']));
        }
        
        // Features
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["chatbots_feature_icon_{$i}"])) {
                update_post_meta($post_id, "_chatbots_feature_icon_{$i}", sanitize_text_field($_POST["chatbots_feature_icon_{$i}"]));
            }
            if (isset($_POST["chatbots_feature_title_{$i}"])) {
                update_post_meta($post_id, "_chatbots_feature_title_{$i}", sanitize_text_field($_POST["chatbots_feature_title_{$i}"]));
            }
            if (isset($_POST["chatbots_feature_content_{$i}"])) {
                update_post_meta($post_id, "_chatbots_feature_content_{$i}", sanitize_textarea_field($_POST["chatbots_feature_content_{$i}"]));
            }
        }
    }
    
    // Save Platforms Section
    if (isset($_POST['chatbots_platforms_nonce']) && wp_verify_nonce($_POST['chatbots_platforms_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_platforms_title'])) {
            update_post_meta($post_id, '_chatbots_platforms_title', sanitize_text_field($_POST['chatbots_platforms_title']));
        }
        
        // Platforms
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["chatbots_platform_icon_{$i}"])) {
                update_post_meta($post_id, "_chatbots_platform_icon_{$i}", sanitize_text_field($_POST["chatbots_platform_icon_{$i}"]));
            }
            if (isset($_POST["chatbots_platform_title_{$i}"])) {
                update_post_meta($post_id, "_chatbots_platform_title_{$i}", sanitize_text_field($_POST["chatbots_platform_title_{$i}"]));
            }
            if (isset($_POST["chatbots_platform_content_{$i}"])) {
                update_post_meta($post_id, "_chatbots_platform_content_{$i}", sanitize_textarea_field($_POST["chatbots_platform_content_{$i}"]));
            }
        }
    }
    
    // Save Industries Section
    if (isset($_POST['chatbots_industries_nonce']) && wp_verify_nonce($_POST['chatbots_industries_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_industries_title'])) {
            update_post_meta($post_id, '_chatbots_industries_title', sanitize_text_field($_POST['chatbots_industries_title']));
        }
        
        // Industries
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["chatbots_industry_title_{$i}"])) {
                update_post_meta($post_id, "_chatbots_industry_title_{$i}", sanitize_text_field($_POST["chatbots_industry_title_{$i}"]));
            }
            if (isset($_POST["chatbots_industry_content_{$i}"])) {
                update_post_meta($post_id, "_chatbots_industry_content_{$i}", sanitize_textarea_field($_POST["chatbots_industry_content_{$i}"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['chatbots_testimonial_nonce']) && wp_verify_nonce($_POST['chatbots_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_testimonial_quote'])) {
            update_post_meta($post_id, '_chatbots_testimonial_quote', sanitize_textarea_field($_POST['chatbots_testimonial_quote']));
        }
        if (isset($_POST['chatbots_testimonial_name'])) {
            update_post_meta($post_id, '_chatbots_testimonial_name', sanitize_text_field($_POST['chatbots_testimonial_name']));
        }
        if (isset($_POST['chatbots_testimonial_title'])) {
            update_post_meta($post_id, '_chatbots_testimonial_title', sanitize_text_field($_POST['chatbots_testimonial_title']));
        }
    }
    
    // Save CTA Section
    if (isset($_POST['chatbots_cta_nonce']) && wp_verify_nonce($_POST['chatbots_cta_nonce'], basename(__FILE__))) {
        if (isset($_POST['chatbots_cta_title'])) {
            update_post_meta($post_id, '_chatbots_cta_title', sanitize_text_field($_POST['chatbots_cta_title']));
        }
        if (isset($_POST['chatbots_cta_content'])) {
            update_post_meta($post_id, '_chatbots_cta_content', sanitize_textarea_field($_POST['chatbots_cta_content']));
        }
        if (isset($_POST['chatbots_cta_button_text'])) {
            update_post_meta($post_id, '_chatbots_cta_button_text', sanitize_text_field($_POST['chatbots_cta_button_text']));
        }
    }
}
add_action('save_post', 'aimpro_save_chatbots_meta_boxes');
