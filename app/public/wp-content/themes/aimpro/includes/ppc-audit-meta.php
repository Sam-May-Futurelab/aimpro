<?php
/**
 * PPC Audit Meta Fields
 *
 * @package Aimpro
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set default values for PPC Audit page meta fields
 * This ensures fields are pre-populated with the frontend content
 */
function aimpro_get_ppc_audit_default_values() {
    return array(
        // Hero Section
        'hero_title' => 'Comprehensive PPC Audit Services',
        'hero_subtitle' => 'Uncover hidden opportunities and eliminate waste in your PPC campaigns with our detailed 50-point audit that identifies exactly what\'s preventing optimal performance.',
        
        // Hero Stats
        'hero_stat1_number' => '£47K',
        'hero_stat1_label' => 'Average Annual Savings',
        'hero_stat2_number' => '340%',
        'hero_stat2_label' => 'Average ROI Improvement',
        'hero_stat3_number' => '72hrs',
        'hero_stat3_label' => 'Audit Delivery Time',
        
        // Hero CTAs
        'hero_cta1_text' => 'Get Your Audit',
        'hero_cta2_text' => 'View Audit Packages',
        
        // Service Overview Section
        'overview_title' => 'Professional PPC Campaign Audit',
        'overview_content' => 'Is your PPC performance plateauing? Are costs rising while conversions decline? Our comprehensive PPC audit examines every aspect of your campaigns to identify opportunities for improvement, cost reduction, and performance optimization across all major advertising platforms.',
        
        // Service Items (6 services)
        'service_title_1' => 'Account Structure Analysis',
        'service_content_1' => 'Comprehensive review of campaign organization, ad groups, and keyword structure for optimal performance and management.',
        'service_icon_1' => 'fas fa-search',
        
        'service_title_2' => 'Keyword Performance Review',
        'service_content_2' => 'Detailed analysis of keyword relevance, match types, search terms, and negative keyword opportunities.',
        'service_icon_2' => 'fas fa-key',
        
        'service_title_3' => 'Ad Copy & Creative Audit',
        'service_content_3' => 'Evaluation of ad messaging, extensions, and creative performance with recommendations for improvement.',
        'service_icon_3' => 'fas fa-ad',
        
        'service_title_4' => 'Landing Page Analysis',
        'service_content_4' => 'Assessment of landing page relevance, user experience, and conversion optimization opportunities.',
        'service_icon_4' => 'fas fa-mouse-pointer',
        
        'service_title_5' => 'Bidding Strategy Review',
        'service_content_5' => 'Analysis of bidding strategies, budget allocation, and automated bidding performance across campaigns.',
        'service_icon_5' => 'fas fa-chart-line',
        
        'service_title_6' => 'Targeting & Audience Audit',
        'service_content_6' => 'Review of geographic, demographic, and audience targeting settings for maximum relevance and efficiency.',
        'service_icon_6' => 'fas fa-crosshairs',
        
        // Audit Process Section
        'process_title' => 'Our PPC Audit Process',
        
        'process_category_title_1' => 'Account Foundation',
        'process_category_content_1' => "Account structure optimization\nCampaign organization review\nConversion tracking validation\nGoal alignment assessment\nBudget allocation analysis",
        'process_category_icon_1' => 'fas fa-building',
        
        'process_category_title_2' => 'Keyword Strategy',
        'process_category_content_2' => "Keyword relevance scoring\nMatch type optimization\nSearch query analysis\nNegative keyword gaps\nKeyword bidding efficiency",
        'process_category_icon_2' => 'fas fa-key',
        
        'process_category_title_3' => 'Ad Performance',
        'process_category_content_3' => "Ad copy effectiveness\nExtension utilization\nCreative testing strategy\nCall-to-action optimization\nAd rank factors analysis",
        'process_category_icon_3' => 'fas fa-bullhorn',
        
        'process_category_title_4' => 'Landing Pages',
        'process_category_content_4' => "Relevance and alignment\nConversion optimization\nPage speed analysis\nMobile experience review",
        'process_category_icon_4' => 'fas fa-crosshairs',
          'process_category_title_5' => 'Targeting & Audiences',
        'process_category_content_5' => "Geographic targeting precision\nDemographic optimization\nAudience segmentation\nDevice targeting strategy\nScheduling optimization",
        'process_category_icon_5' => 'fas fa-users',
        
        'process_category_title_6' => 'Analytics & Reporting',
        'process_category_content_6' => "Conversion tracking accuracy\nGoal setup and attribution\nReporting dashboard optimization\nData integration review\nPerformance metrics validation",
        'process_category_icon_6' => 'fas fa-chart-line',
        
        // Case Study Section
        'case_study_title' => 'Case Study: Manufacturing Company Audit',
        'case_study_intro' => 'How our comprehensive PPC audit helped a B2B manufacturer save £47,000 annually while increasing qualified leads by 280%.',
        'case_study_challenge' => 'A manufacturing company had been running Google Ads for 3 years with steadily declining performance. Their cost-per-lead had increased 150% while lead quality decreased. They needed a thorough analysis to identify what was wrong and how to fix it.',
        'case_study_solution' => "85% of keywords were irrelevant or too broad, wasting £2,100 monthly\nPoor campaign structure with single keyword ad groups reducing Quality Score\nLanding pages had 12-second load times and poor mobile experience\nNo negative keyword strategy, capturing irrelevant traffic\nBidding on competitor terms without competitive advantages",
        
        // Case Study Results
        'case_result_1_number' => '£47K',
        'case_result_1_label' => 'Annual Cost Savings',
        'case_result_2_number' => '280%',
        'case_result_2_label' => 'Qualified Lead Increase',
        'case_result_3_number' => '65%',
        'case_result_3_label' => 'Cost Per Lead Reduction',
        'case_result_4_number' => '340%',
        'case_result_4_label' => 'ROI Improvement',
        
        // What You Receive Section
        'deliverables_title' => 'What You Receive',
        
        'deliverable_title_1' => 'Comprehensive Report',
        'deliverable_content_1' => 'Detailed 25+ page analysis with specific findings, scores, and prioritized recommendations for each area of your account.',
        'deliverable_icon_1' => 'fas fa-file-alt',
        
        'deliverable_title_2' => 'Action Plan',
        'deliverable_content_2' => 'Step-by-step implementation guide with timelines and expected impact for each recommended change.',
        'deliverable_icon_2' => 'fas fa-clipboard-list',
        
        'deliverable_title_3' => 'Cost Savings Analysis',
        'deliverable_content_3' => 'Identification of wasted spend and projected savings from implementing our recommendations.',
        'deliverable_icon_3' => 'fas fa-piggy-bank',
        
        'deliverable_title_4' => 'Performance Benchmarks',
        'deliverable_content_4' => 'Industry comparison data and realistic performance targets for your campaigns.',
        'deliverable_icon_4' => 'fas fa-chart-bar',
        
        'deliverable_title_5' => 'Strategy Presentation',
        'deliverable_content_5' => '60-minute screen-share session explaining findings and answering questions about the recommendations.',
        'deliverable_icon_5' => 'fas fa-video',
        
        'deliverable_title_6' => 'Implementation Support',
        'deliverable_content_6' => '30 days of email support to help you implement changes and answer technical questions.',
        'deliverable_icon_6' => 'fas fa-tools',
        
        // Why Audit Section
        'why_audit_title' => 'Why You Need a PPC Audit',
        
        'why_reason_title_1' => 'Stop Wasting Money',
        'why_reason_content_1' => 'The average audit uncovers £3,000+ in monthly waste from irrelevant keywords, poor targeting, and inefficient bidding.',
        'why_reason_icon_1' => 'fas fa-money-bill-wave',
        
        'why_reason_title_2' => 'Find Hidden Opportunities',
        'why_reason_content_2' => 'Discover untapped keywords, audience segments, and campaign types that could drive additional qualified traffic.',
        'why_reason_icon_2' => 'fas fa-search-plus',
        
        'why_reason_title_3' => 'Improve Performance',
        'why_reason_content_3' => 'Get specific recommendations to increase click-through rates, Quality Scores, and conversion rates.',
        'why_reason_icon_3' => 'fas fa-chart-line',
        
        'why_reason_title_4' => 'Gain Fresh Perspective',
        'why_reason_content_4' => 'External expert analysis reveals blind spots and biases that internal teams often miss.',
        'why_reason_icon_4' => 'fas fa-eye',
        
        // Testimonial Section
        'testimonial_quote' => 'The PPC audit was eye-opening. We were wasting £3,200 every month on irrelevant keywords. Within 3 months of implementing their recommendations, our ROI improved by 340% and we\'re saving nearly £40,000 annually.',
        'testimonial_name' => 'David Martinez',
        'testimonial_title' => 'Marketing Director, Industrial Solutions Ltd',
        
        // CTA Section
        'cta_title' => 'Ready to Uncover What\'s Holding Back Your PPC?',
        'cta_content' => 'Stop guessing and get definitive answers about your PPC performance. Our comprehensive audit will show you exactly where money is being wasted and how to fix it. Get started today.',
        'cta_button_text' => 'Order Your Audit',
    );
}

/**
 * Register PPC Audit meta boxes
 */
function aimpro_register_ppc_audit_meta_boxes() {
    // Only show these meta boxes on the PPC Audit page template
    $screen = get_current_screen();
    if ($screen->id == 'page' && isset($_GET['post'])) {
        $template = get_post_meta($_GET['post'], '_wp_page_template', true);
        if ($template != 'page-ppc-audit.php') {
            return;
        }
    }
    
    add_meta_box(
        'ppc_audit_hero_section',
        __('Hero Section', 'aimpro'),
        'aimpro_ppc_audit_hero_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_overview_section',
        __('Service Overview Section', 'aimpro'),
        'aimpro_ppc_audit_overview_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_services_section',
        __('Services Section', 'aimpro'),
        'aimpro_ppc_audit_services_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_process_section',
        __('Audit Process Section', 'aimpro'),
        'aimpro_ppc_audit_process_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_case_study_section',
        __('Case Study Section', 'aimpro'),
        'aimpro_ppc_audit_case_study_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_deliverables_section',
        __('What You Receive Section', 'aimpro'),
        'aimpro_ppc_audit_deliverables_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_why_section',
        __('Why Audit Section', 'aimpro'),
        'aimpro_ppc_audit_why_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_testimonial_section',
        __('Testimonial Section', 'aimpro'),
        'aimpro_ppc_audit_testimonial_callback',
        'page',
        'normal',
        'high'
    );

    add_meta_box(
        'ppc_audit_cta_section',
        __('CTA Section', 'aimpro'),
        'aimpro_ppc_audit_cta_callback',
        'page',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes_page', 'aimpro_register_ppc_audit_meta_boxes');

/**
 * Hero Section Callback
 */
function aimpro_ppc_audit_hero_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_hero_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    // Get saved values or use defaults if empty
    $hero_title = get_post_meta($post->ID, '_ppc_audit_hero_title', true);
    if (empty($hero_title)) $hero_title = $defaults['hero_title'];
    
    $hero_subtitle = get_post_meta($post->ID, '_ppc_audit_hero_subtitle', true);
    if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
    
    // Hero Stats
    $hero_stat1_number = get_post_meta($post->ID, '_ppc_audit_hero_stat1_number', true);
    if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
    
    $hero_stat1_label = get_post_meta($post->ID, '_ppc_audit_hero_stat1_label', true);
    if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
    
    $hero_stat2_number = get_post_meta($post->ID, '_ppc_audit_hero_stat2_number', true);
    if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
    
    $hero_stat2_label = get_post_meta($post->ID, '_ppc_audit_hero_stat2_label', true);
    if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
    
    $hero_stat3_number = get_post_meta($post->ID, '_ppc_audit_hero_stat3_number', true);
    if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
    
    $hero_stat3_label = get_post_meta($post->ID, '_ppc_audit_hero_stat3_label', true);
    if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
    
    // Hero CTAs
    $hero_cta1_text = get_post_meta($post->ID, '_ppc_audit_hero_cta1_text', true);
    if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
    
    $hero_cta2_text = get_post_meta($post->ID, '_ppc_audit_hero_cta2_text', true);
    if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
    
    // Output fields
    ?>
    <p>
        <label for="ppc_audit_hero_title"><?php _e('Hero Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_hero_title" name="ppc_audit_hero_title" value="<?php echo esc_attr($hero_title); ?>" class="widefat">
    </p>
    <p>
        <label for="ppc_audit_hero_subtitle"><?php _e('Hero Subtitle', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_hero_subtitle" name="ppc_audit_hero_subtitle" class="widefat" rows="4"><?php echo esc_textarea($hero_subtitle); ?></textarea>
    </p>
    
    <h4><?php _e('Hero Stats', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="ppc_audit_hero_stat1_number"><?php _e('Stat 1 Number', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_stat1_number" name="ppc_audit_hero_stat1_number" value="<?php echo esc_attr($hero_stat1_number); ?>" class="widefat">
            </p>
            <p>
                <label for="ppc_audit_hero_stat1_label"><?php _e('Stat 1 Label', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_stat1_label" name="ppc_audit_hero_stat1_label" value="<?php echo esc_attr($hero_stat1_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="ppc_audit_hero_stat2_number"><?php _e('Stat 2 Number', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_stat2_number" name="ppc_audit_hero_stat2_number" value="<?php echo esc_attr($hero_stat2_number); ?>" class="widefat">
            </p>
            <p>
                <label for="ppc_audit_hero_stat2_label"><?php _e('Stat 2 Label', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_stat2_label" name="ppc_audit_hero_stat2_label" value="<?php echo esc_attr($hero_stat2_label); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="ppc_audit_hero_stat3_number"><?php _e('Stat 3 Number', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_stat3_number" name="ppc_audit_hero_stat3_number" value="<?php echo esc_attr($hero_stat3_number); ?>" class="widefat">
            </p>
            <p>
                <label for="ppc_audit_hero_stat3_label"><?php _e('Stat 3 Label', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_stat3_label" name="ppc_audit_hero_stat3_label" value="<?php echo esc_attr($hero_stat3_label); ?>" class="widefat">
            </p>
        </div>
    </div>
    
    <h4><?php _e('Hero CTAs', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 20px;">
        <div style="flex: 1;">
            <p>
                <label for="ppc_audit_hero_cta1_text"><?php _e('Primary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_cta1_text" name="ppc_audit_hero_cta1_text" value="<?php echo esc_attr($hero_cta1_text); ?>" class="widefat">
            </p>
        </div>
        <div style="flex: 1;">
            <p>
                <label for="ppc_audit_hero_cta2_text"><?php _e('Secondary CTA Text', 'aimpro'); ?></label><br>
                <input type="text" id="ppc_audit_hero_cta2_text" name="ppc_audit_hero_cta2_text" value="<?php echo esc_attr($hero_cta2_text); ?>" class="widefat">
            </p>
        </div>
    </div>
    <?php
}

/**
 * Service Overview Section Callback
 */
function aimpro_ppc_audit_overview_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_overview_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $overview_title = get_post_meta($post->ID, '_ppc_audit_overview_title', true);
    if (empty($overview_title)) $overview_title = $defaults['overview_title'];
    
    $overview_content = get_post_meta($post->ID, '_ppc_audit_overview_content', true);
    if (empty($overview_content)) $overview_content = $defaults['overview_content'];
    
    ?>
    <p>
        <label for="ppc_audit_overview_title"><?php _e('Overview Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_overview_title" name="ppc_audit_overview_title" value="<?php echo esc_attr($overview_title); ?>" class="widefat">
    </p>
    <p>
        <label for="ppc_audit_overview_content"><?php _e('Overview Content', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_overview_content" name="ppc_audit_overview_content" class="widefat" rows="5"><?php echo esc_textarea($overview_content); ?></textarea>
    </p>
    <?php
}

/**
 * Services Section Callback
 */
function aimpro_ppc_audit_services_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_services_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    ?>
    <div id="ppc-audit-services">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Service %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $service_title = get_post_meta($post->ID, "_ppc_audit_service_title_{$i}", true);
                if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
                
                $service_content = get_post_meta($post->ID, "_ppc_audit_service_content_{$i}", true);
                if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
                
                $service_icon = get_post_meta($post->ID, "_ppc_audit_service_icon_{$i}", true);
                if (empty($service_icon)) $service_icon = $defaults["service_icon_{$i}"];
                ?>
                
                <p>
                    <label for="ppc_audit_service_title_<?php echo $i; ?>"><?php _e('Service Title', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_service_title_<?php echo $i; ?>" name="ppc_audit_service_title_<?php echo $i; ?>" value="<?php echo esc_attr($service_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="ppc_audit_service_content_<?php echo $i; ?>"><?php _e('Service Content', 'aimpro'); ?></label><br>
                    <textarea id="ppc_audit_service_content_<?php echo $i; ?>" name="ppc_audit_service_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($service_content); ?></textarea>
                </p>
                <p>
                    <label for="ppc_audit_service_icon_<?php echo $i; ?>"><?php _e('Service Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_service_icon_<?php echo $i; ?>" name="ppc_audit_service_icon_<?php echo $i; ?>" value="<?php echo esc_attr($service_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Audit Process Section Callback
 */
function aimpro_ppc_audit_process_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_process_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $process_title = get_post_meta($post->ID, '_ppc_audit_process_title', true);
    if (empty($process_title)) $process_title = $defaults['process_title'];
    
    ?>
    <p>
        <label for="ppc_audit_process_title"><?php _e('Process Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_process_title" name="ppc_audit_process_title" value="<?php echo esc_attr($process_title); ?>" class="widefat">
    </p>
    
    <div id="ppc-audit-process-categories">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Process Category %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $category_title = get_post_meta($post->ID, "_ppc_audit_process_category_title_{$i}", true);
                if (empty($category_title)) $category_title = $defaults["process_category_title_{$i}"];
                
                $category_content = get_post_meta($post->ID, "_ppc_audit_process_category_content_{$i}", true);
                if (empty($category_content)) $category_content = $defaults["process_category_content_{$i}"];
                
                $category_icon = get_post_meta($post->ID, "_ppc_audit_process_category_icon_{$i}", true);
                if (empty($category_icon)) $category_icon = $defaults["process_category_icon_{$i}"];
                ?>
                
                <p>
                    <label for="ppc_audit_process_category_title_<?php echo $i; ?>"><?php _e('Category Title', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_process_category_title_<?php echo $i; ?>" name="ppc_audit_process_category_title_<?php echo $i; ?>" value="<?php echo esc_attr($category_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="ppc_audit_process_category_content_<?php echo $i; ?>"><?php _e('Category Items (one per line)', 'aimpro'); ?></label><br>
                    <textarea id="ppc_audit_process_category_content_<?php echo $i; ?>" name="ppc_audit_process_category_content_<?php echo $i; ?>" class="widefat" rows="5"><?php echo esc_textarea($category_content); ?></textarea>
                </p>
                <p>
                    <label for="ppc_audit_process_category_icon_<?php echo $i; ?>"><?php _e('Category Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_process_category_icon_<?php echo $i; ?>" name="ppc_audit_process_category_icon_<?php echo $i; ?>" value="<?php echo esc_attr($category_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Case Study Section Callback
 */
function aimpro_ppc_audit_case_study_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_case_study_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $case_study_title = get_post_meta($post->ID, '_ppc_audit_case_study_title', true);
    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
    
    $case_study_intro = get_post_meta($post->ID, '_ppc_audit_case_study_intro', true);
    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
    
    $case_study_challenge = get_post_meta($post->ID, '_ppc_audit_case_study_challenge', true);
    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
    
    $case_study_solution = get_post_meta($post->ID, '_ppc_audit_case_study_solution', true);
    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
    
    ?>
    <p>
        <label for="ppc_audit_case_study_title"><?php _e('Case Study Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_case_study_title" name="ppc_audit_case_study_title" value="<?php echo esc_attr($case_study_title); ?>" class="widefat">
    </p>
    <p>
        <label for="ppc_audit_case_study_intro"><?php _e('Case Study Intro', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_case_study_intro" name="ppc_audit_case_study_intro" class="widefat" rows="3"><?php echo esc_textarea($case_study_intro); ?></textarea>
    </p>
    <p>
        <label for="ppc_audit_case_study_challenge"><?php _e('Challenge', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_case_study_challenge" name="ppc_audit_case_study_challenge" class="widefat" rows="4"><?php echo esc_textarea($case_study_challenge); ?></textarea>
    </p>
    <p>
        <label for="ppc_audit_case_study_solution"><?php _e('Audit Findings (one per line)', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_case_study_solution" name="ppc_audit_case_study_solution" class="widefat" rows="6"><?php echo esc_textarea($case_study_solution); ?></textarea>
    </p>
    
    <h4><?php _e('Case Study Results', 'aimpro'); ?></h4>
    <div style="display: flex; gap: 15px; flex-wrap: wrap;">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="flex: 1; min-width: 200px;">
                <?php
                $result_number = get_post_meta($post->ID, "_ppc_audit_case_result_{$i}_number", true);
                if (empty($result_number)) $result_number = $defaults["case_result_{$i}_number"];
                
                $result_label = get_post_meta($post->ID, "_ppc_audit_case_result_{$i}_label", true);
                if (empty($result_label)) $result_label = $defaults["case_result_{$i}_label"];
                ?>
                <p>
                    <label for="ppc_audit_case_result_<?php echo $i; ?>_number"><?php echo sprintf(__('Result %d Number', 'aimpro'), $i); ?></label><br>
                    <input type="text" id="ppc_audit_case_result_<?php echo $i; ?>_number" name="ppc_audit_case_result_<?php echo $i; ?>_number" value="<?php echo esc_attr($result_number); ?>" class="widefat">
                </p>
                <p>
                    <label for="ppc_audit_case_result_<?php echo $i; ?>_label"><?php echo sprintf(__('Result %d Label', 'aimpro'), $i); ?></label><br>
                    <input type="text" id="ppc_audit_case_result_<?php echo $i; ?>_label" name="ppc_audit_case_result_<?php echo $i; ?>_label" value="<?php echo esc_attr($result_label); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Deliverables Section Callback
 */
function aimpro_ppc_audit_deliverables_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_deliverables_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $deliverables_title = get_post_meta($post->ID, '_ppc_audit_deliverables_title', true);
    if (empty($deliverables_title)) $deliverables_title = $defaults['deliverables_title'];
    
    ?>
    <p>
        <label for="ppc_audit_deliverables_title"><?php _e('Deliverables Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_deliverables_title" name="ppc_audit_deliverables_title" value="<?php echo esc_attr($deliverables_title); ?>" class="widefat">
    </p>
    
    <div id="ppc-audit-deliverables">
        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Deliverable %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $deliverable_title = get_post_meta($post->ID, "_ppc_audit_deliverable_title_{$i}", true);
                if (empty($deliverable_title)) $deliverable_title = $defaults["deliverable_title_{$i}"];
                
                $deliverable_content = get_post_meta($post->ID, "_ppc_audit_deliverable_content_{$i}", true);
                if (empty($deliverable_content)) $deliverable_content = $defaults["deliverable_content_{$i}"];
                
                $deliverable_icon = get_post_meta($post->ID, "_ppc_audit_deliverable_icon_{$i}", true);
                if (empty($deliverable_icon)) $deliverable_icon = $defaults["deliverable_icon_{$i}"];
                ?>
                
                <p>
                    <label for="ppc_audit_deliverable_title_<?php echo $i; ?>"><?php _e('Deliverable Title', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_deliverable_title_<?php echo $i; ?>" name="ppc_audit_deliverable_title_<?php echo $i; ?>" value="<?php echo esc_attr($deliverable_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="ppc_audit_deliverable_content_<?php echo $i; ?>"><?php _e('Deliverable Content', 'aimpro'); ?></label><br>
                    <textarea id="ppc_audit_deliverable_content_<?php echo $i; ?>" name="ppc_audit_deliverable_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($deliverable_content); ?></textarea>
                </p>
                <p>
                    <label for="ppc_audit_deliverable_icon_<?php echo $i; ?>"><?php _e('Deliverable Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_deliverable_icon_<?php echo $i; ?>" name="ppc_audit_deliverable_icon_<?php echo $i; ?>" value="<?php echo esc_attr($deliverable_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Why Audit Section Callback
 */
function aimpro_ppc_audit_why_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_why_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $why_audit_title = get_post_meta($post->ID, '_ppc_audit_why_audit_title', true);
    if (empty($why_audit_title)) $why_audit_title = $defaults['why_audit_title'];
    
    ?>
    <p>
        <label for="ppc_audit_why_audit_title"><?php _e('Why Audit Section Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_why_audit_title" name="ppc_audit_why_audit_title" value="<?php echo esc_attr($why_audit_title); ?>" class="widefat">
    </p>
    
    <div id="ppc-audit-why-reasons">
        <?php for ($i = 1; $i <= 4; $i++) : ?>
            <div style="border: 1px solid #ddd; padding: 15px; margin-bottom: 15px;">
                <h4><?php echo sprintf(__('Reason %d', 'aimpro'), $i); ?></h4>
                
                <?php
                $reason_title = get_post_meta($post->ID, "_ppc_audit_why_reason_title_{$i}", true);
                if (empty($reason_title)) $reason_title = $defaults["why_reason_title_{$i}"];
                
                $reason_content = get_post_meta($post->ID, "_ppc_audit_why_reason_content_{$i}", true);
                if (empty($reason_content)) $reason_content = $defaults["why_reason_content_{$i}"];
                
                $reason_icon = get_post_meta($post->ID, "_ppc_audit_why_reason_icon_{$i}", true);
                if (empty($reason_icon)) $reason_icon = $defaults["why_reason_icon_{$i}"];
                ?>
                
                <p>
                    <label for="ppc_audit_why_reason_title_<?php echo $i; ?>"><?php _e('Reason Title', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_why_reason_title_<?php echo $i; ?>" name="ppc_audit_why_reason_title_<?php echo $i; ?>" value="<?php echo esc_attr($reason_title); ?>" class="widefat">
                </p>
                <p>
                    <label for="ppc_audit_why_reason_content_<?php echo $i; ?>"><?php _e('Reason Content', 'aimpro'); ?></label><br>
                    <textarea id="ppc_audit_why_reason_content_<?php echo $i; ?>" name="ppc_audit_why_reason_content_<?php echo $i; ?>" class="widefat" rows="3"><?php echo esc_textarea($reason_content); ?></textarea>
                </p>
                <p>
                    <label for="ppc_audit_why_reason_icon_<?php echo $i; ?>"><?php _e('Reason Icon (Font Awesome class)', 'aimpro'); ?></label><br>
                    <input type="text" id="ppc_audit_why_reason_icon_<?php echo $i; ?>" name="ppc_audit_why_reason_icon_<?php echo $i; ?>" value="<?php echo esc_attr($reason_icon); ?>" class="widefat">
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <?php
}

/**
 * Testimonial Section Callback
 */
function aimpro_ppc_audit_testimonial_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_testimonial_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $testimonial_quote = get_post_meta($post->ID, '_ppc_audit_testimonial_quote', true);
    if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
    
    $testimonial_name = get_post_meta($post->ID, '_ppc_audit_testimonial_name', true);
    if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
    
    $testimonial_title = get_post_meta($post->ID, '_ppc_audit_testimonial_title', true);
    if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
    
    ?>
    <p>
        <label for="ppc_audit_testimonial_quote"><?php _e('Testimonial Quote', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_testimonial_quote" name="ppc_audit_testimonial_quote" class="widefat" rows="4"><?php echo esc_textarea($testimonial_quote); ?></textarea>
    </p>
    <p>
        <label for="ppc_audit_testimonial_name"><?php _e('Client Name', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_testimonial_name" name="ppc_audit_testimonial_name" value="<?php echo esc_attr($testimonial_name); ?>" class="widefat">
    </p>
    <p>
        <label for="ppc_audit_testimonial_title"><?php _e('Client Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_testimonial_title" name="ppc_audit_testimonial_title" value="<?php echo esc_attr($testimonial_title); ?>" class="widefat">
    </p>
    <?php
}

/**
 * CTA Section Callback
 */
function aimpro_ppc_audit_cta_callback($post) {
    wp_nonce_field(basename(__FILE__), 'ppc_audit_cta_nonce');
    
    $defaults = aimpro_get_ppc_audit_default_values();
    
    $cta_title = get_post_meta($post->ID, '_ppc_audit_cta_title', true);
    if (empty($cta_title)) $cta_title = $defaults['cta_title'];
    
    $cta_content = get_post_meta($post->ID, '_ppc_audit_cta_content', true);
    if (empty($cta_content)) $cta_content = $defaults['cta_content'];
    
    $cta_button_text = get_post_meta($post->ID, '_ppc_audit_cta_button_text', true);
    if (empty($cta_button_text)) $cta_button_text = $defaults['cta_button_text'];
    
    ?>
    <p>
        <label for="ppc_audit_cta_title"><?php _e('CTA Title', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_cta_title" name="ppc_audit_cta_title" value="<?php echo esc_attr($cta_title); ?>" class="widefat">
    </p>
    <p>
        <label for="ppc_audit_cta_content"><?php _e('CTA Content', 'aimpro'); ?></label><br>
        <textarea id="ppc_audit_cta_content" name="ppc_audit_cta_content" class="widefat" rows="3"><?php echo esc_textarea($cta_content); ?></textarea>
    </p>
    <p>
        <label for="ppc_audit_cta_button_text"><?php _e('Button Text', 'aimpro'); ?></label><br>
        <input type="text" id="ppc_audit_cta_button_text" name="ppc_audit_cta_button_text" value="<?php echo esc_attr($cta_button_text); ?>" class="widefat">
    </p>
    <?php
}

/**
 * Save PPC Audit meta boxes
 */
function aimpro_save_ppc_audit_meta_boxes($post_id) {
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
    if (isset($_POST['ppc_audit_hero_nonce']) && wp_verify_nonce($_POST['ppc_audit_hero_nonce'], basename(__FILE__))) {
        $hero_fields = [
            'ppc_audit_hero_title' => '_ppc_audit_hero_title',
            'ppc_audit_hero_subtitle' => '_ppc_audit_hero_subtitle',
            'ppc_audit_hero_cta1_text' => '_ppc_audit_hero_cta1_text',
            'ppc_audit_hero_cta2_text' => '_ppc_audit_hero_cta2_text'
        ];
        
        foreach ($hero_fields as $field => $meta_key) {
            if (isset($_POST[$field])) {
                $value = ($field === 'ppc_audit_hero_subtitle') ? 
                    sanitize_textarea_field($_POST[$field]) : 
                    sanitize_text_field($_POST[$field]);
                update_post_meta($post_id, $meta_key, $value);
            }
        }
        
        // Hero Stats
        for ($i = 1; $i <= 3; $i++) {
            if (isset($_POST["ppc_audit_hero_stat{$i}_number"])) {
                update_post_meta($post_id, "_ppc_audit_hero_stat{$i}_number", sanitize_text_field($_POST["ppc_audit_hero_stat{$i}_number"]));
            }
            if (isset($_POST["ppc_audit_hero_stat{$i}_label"])) {
                update_post_meta($post_id, "_ppc_audit_hero_stat{$i}_label", sanitize_text_field($_POST["ppc_audit_hero_stat{$i}_label"]));
            }
        }
    }
    
    // Save Overview Section
    if (isset($_POST['ppc_audit_overview_nonce']) && wp_verify_nonce($_POST['ppc_audit_overview_nonce'], basename(__FILE__))) {
        if (isset($_POST['ppc_audit_overview_title'])) {
            update_post_meta($post_id, '_ppc_audit_overview_title', sanitize_text_field($_POST['ppc_audit_overview_title']));
        }
        if (isset($_POST['ppc_audit_overview_content'])) {
            update_post_meta($post_id, '_ppc_audit_overview_content', sanitize_textarea_field($_POST['ppc_audit_overview_content']));
        }
    }
    
    // Save Services Section
    if (isset($_POST['ppc_audit_services_nonce']) && wp_verify_nonce($_POST['ppc_audit_services_nonce'], basename(__FILE__))) {
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["ppc_audit_service_title_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_service_title_{$i}", sanitize_text_field($_POST["ppc_audit_service_title_{$i}"]));
            }
            if (isset($_POST["ppc_audit_service_content_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_service_content_{$i}", sanitize_textarea_field($_POST["ppc_audit_service_content_{$i}"]));
            }
            if (isset($_POST["ppc_audit_service_icon_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_service_icon_{$i}", sanitize_text_field($_POST["ppc_audit_service_icon_{$i}"]));
            }
        }
    }
    
    // Save Process Section
    if (isset($_POST['ppc_audit_process_nonce']) && wp_verify_nonce($_POST['ppc_audit_process_nonce'], basename(__FILE__))) {
        if (isset($_POST['ppc_audit_process_title'])) {
            update_post_meta($post_id, '_ppc_audit_process_title', sanitize_text_field($_POST['ppc_audit_process_title']));
        }
        
        for ($i = 1; $i <= 5; $i++) {
            if (isset($_POST["ppc_audit_process_category_title_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_process_category_title_{$i}", sanitize_text_field($_POST["ppc_audit_process_category_title_{$i}"]));
            }
            if (isset($_POST["ppc_audit_process_category_content_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_process_category_content_{$i}", sanitize_textarea_field($_POST["ppc_audit_process_category_content_{$i}"]));
            }
            if (isset($_POST["ppc_audit_process_category_icon_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_process_category_icon_{$i}", sanitize_text_field($_POST["ppc_audit_process_category_icon_{$i}"]));
            }
        }
    }
    
    // Save Case Study Section
    if (isset($_POST['ppc_audit_case_study_nonce']) && wp_verify_nonce($_POST['ppc_audit_case_study_nonce'], basename(__FILE__))) {
        $case_study_fields = [
            'ppc_audit_case_study_title' => '_ppc_audit_case_study_title',
            'ppc_audit_case_study_intro' => '_ppc_audit_case_study_intro',
            'ppc_audit_case_study_challenge' => '_ppc_audit_case_study_challenge',
            'ppc_audit_case_study_solution' => '_ppc_audit_case_study_solution'
        ];
        
        foreach ($case_study_fields as $field => $meta_key) {
            if (isset($_POST[$field])) {
                $value = ($field === 'ppc_audit_case_study_title') ? 
                    sanitize_text_field($_POST[$field]) : 
                    sanitize_textarea_field($_POST[$field]);
                update_post_meta($post_id, $meta_key, $value);
            }
        }
        
        // Case Study Results
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["ppc_audit_case_result_{$i}_number"])) {
                update_post_meta($post_id, "_ppc_audit_case_result_{$i}_number", sanitize_text_field($_POST["ppc_audit_case_result_{$i}_number"]));
            }
            if (isset($_POST["ppc_audit_case_result_{$i}_label"])) {
                update_post_meta($post_id, "_ppc_audit_case_result_{$i}_label", sanitize_text_field($_POST["ppc_audit_case_result_{$i}_label"]));
            }
        }
    }
    
    // Save Deliverables Section
    if (isset($_POST['ppc_audit_deliverables_nonce']) && wp_verify_nonce($_POST['ppc_audit_deliverables_nonce'], basename(__FILE__))) {
        if (isset($_POST['ppc_audit_deliverables_title'])) {
            update_post_meta($post_id, '_ppc_audit_deliverables_title', sanitize_text_field($_POST['ppc_audit_deliverables_title']));
        }
        
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST["ppc_audit_deliverable_title_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_deliverable_title_{$i}", sanitize_text_field($_POST["ppc_audit_deliverable_title_{$i}"]));
            }
            if (isset($_POST["ppc_audit_deliverable_content_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_deliverable_content_{$i}", sanitize_textarea_field($_POST["ppc_audit_deliverable_content_{$i}"]));
            }
            if (isset($_POST["ppc_audit_deliverable_icon_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_deliverable_icon_{$i}", sanitize_text_field($_POST["ppc_audit_deliverable_icon_{$i}"]));
            }
        }
    }
    
    // Save Why Audit Section
    if (isset($_POST['ppc_audit_why_nonce']) && wp_verify_nonce($_POST['ppc_audit_why_nonce'], basename(__FILE__))) {
        if (isset($_POST['ppc_audit_why_audit_title'])) {
            update_post_meta($post_id, '_ppc_audit_why_audit_title', sanitize_text_field($_POST['ppc_audit_why_audit_title']));
        }
        
        for ($i = 1; $i <= 4; $i++) {
            if (isset($_POST["ppc_audit_why_reason_title_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_why_reason_title_{$i}", sanitize_text_field($_POST["ppc_audit_why_reason_title_{$i}"]));
            }
            if (isset($_POST["ppc_audit_why_reason_content_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_why_reason_content_{$i}", sanitize_textarea_field($_POST["ppc_audit_why_reason_content_{$i}"]));
            }
            if (isset($_POST["ppc_audit_why_reason_icon_{$i}"])) {
                update_post_meta($post_id, "_ppc_audit_why_reason_icon_{$i}", sanitize_text_field($_POST["ppc_audit_why_reason_icon_{$i}"]));
            }
        }
    }
    
    // Save Testimonial Section
    if (isset($_POST['ppc_audit_testimonial_nonce']) && wp_verify_nonce($_POST['ppc_audit_testimonial_nonce'], basename(__FILE__))) {
        if (isset($_POST['ppc_audit_testimonial_quote'])) {
            update_post_meta($post_id, '_ppc_audit_testimonial_quote', sanitize_textarea_field($_POST['ppc_audit_testimonial_quote']));
        }
        if (isset($_POST['ppc_audit_testimonial_name'])) {
            update_post_meta($post_id, '_ppc_audit_testimonial_name', sanitize_text_field($_POST['ppc_audit_testimonial_name']));
        }
        if (isset($_POST['ppc_audit_testimonial_title'])) {
            update_post_meta($post_id, '_ppc_audit_testimonial_title', sanitize_text_field($_POST['ppc_audit_testimonial_title']));
        }
    }
    
    // Save CTA Section
    if (isset($_POST['ppc_audit_cta_nonce']) && wp_verify_nonce($_POST['ppc_audit_cta_nonce'], basename(__FILE__))) {
        if (isset($_POST['ppc_audit_cta_title'])) {
            update_post_meta($post_id, '_ppc_audit_cta_title', sanitize_text_field($_POST['ppc_audit_cta_title']));
        }
        if (isset($_POST['ppc_audit_cta_content'])) {
            update_post_meta($post_id, '_ppc_audit_cta_content', sanitize_textarea_field($_POST['ppc_audit_cta_content']));
        }
        if (isset($_POST['ppc_audit_cta_button_text'])) {
            update_post_meta($post_id, '_ppc_audit_cta_button_text', sanitize_text_field($_POST['ppc_audit_cta_button_text']));
        }
    }
}
add_action('save_post', 'aimpro_save_ppc_audit_meta_boxes');
