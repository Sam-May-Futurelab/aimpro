<?php
/**
 * Template Name: Chatbots
 * 
 * Chatbot development and automation services page
 *
 * @package Aimpro
 */

get_header(); 

// Get default values for meta fields
function get_chatbot_defaults() {
    if (function_exists('aimpro_get_chatbots_default_values')) {
        return aimpro_get_chatbots_default_values();
    }
    
    // Fallback if function doesn't exist
    return array();
}

// Get default value or meta field with fallback
function get_chatbot_field($field_key, $post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $defaults = get_chatbot_defaults();
    $meta_key = '_chatbots_' . $field_key;
    
    $value = get_post_meta($post_id, $meta_key, true);
    
    // If empty and we have a default, use it
    if (empty($value) && isset($defaults[$field_key])) {
        return $defaults[$field_key];
    }
    
    return $value;
}
?>

<main id="primary" class="service-page chatbots-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a>
                <span class="separator">›</span>
                <span class="current">Chatbots</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_chatbot_field('hero_title')); ?></h1>
                <p class="hero-subtitle"><?php echo wp_kses_post(get_chatbot_field('hero_subtitle')); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_chatbot_field('hero_stat1_number')); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post(get_chatbot_field('hero_stat1_label')); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_chatbot_field('hero_stat2_number')); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post(get_chatbot_field('hero_stat2_label')); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_chatbot_field('hero_stat3_number')); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post(get_chatbot_field('hero_stat3_label')); ?></div>
                    </div>
                </div>                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo wp_kses_post(get_chatbot_field('hero_cta1_text')); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo wp_kses_post(get_chatbot_field('overview_title')); ?></h2>
                <p><?php echo wp_kses_post(get_chatbot_field('overview_content')); ?></p>
            </div>
            
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("service_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_chatbot_field("service_title_{$i}")); ?></h3>
                    <p><?php echo wp_kses_post(get_chatbot_field("service_content_{$i}")); ?></p>
                </div>                <?php endfor; ?>            </div>            <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                <a href="/contact/" class="btn btn-primary">Get Your Custom Chatbot Solution</a>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content animate-on-scroll animate-fade-up">
                <div class="case-study-text">
                    <h2><?php echo wp_kses_post(get_chatbot_field('case_study_title')); ?></h2>
                    <p class="case-study-intro"><?php echo wp_kses_post(get_chatbot_field('case_study_intro')); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3><?php echo wp_kses_post(get_chatbot_field('challenge_title')); ?></h3>
                        <p><?php echo wp_kses_post(get_chatbot_field('challenge_content')); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3><?php echo wp_kses_post(get_chatbot_field('solution_title')); ?></h3>
                        <ul>
                            <?php 
                            $solution_list = get_chatbot_field('solution_list');
                            $solutions = explode("\n", $solution_list);
                            foreach ($solutions as $solution) {
                                echo '<li>' . wp_kses_post(trim($solution)) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results animate-on-scroll animate-fade-up animate-delay-200">
                    <h3><?php echo wp_kses_post(get_chatbot_field('results_title')); ?></h3>
                    <div class="results-grid animate-on-scroll animate-stagger animate-scale-up">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_chatbot_field("result_number_{$i}")); ?></div>
                            <div class="result-label"><?php echo wp_kses_post(get_chatbot_field("result_label_{$i}")); ?></div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Chatbot Types Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo wp_kses_post(get_chatbot_field('types_title')); ?></h2>
                <p><?php echo wp_kses_post(get_chatbot_field('types_subtitle')); ?></p>
            </div>
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("type_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo wp_kses_post(get_chatbot_field("type_title_{$i}")); ?></h3>
                    <p><?php echo wp_kses_post(get_chatbot_field("type_content_{$i}")); ?></p>
                    <div class="service-metric">
                        <span><?php echo wp_kses_post(get_chatbot_field("type_metric_{$i}")); ?></span>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_chatbot_field('process_title')); ?></h2>
            <div class="process-steps animate-on-scroll animate-stagger animate-fade-up">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="process-step">
                    <div class="step-number"><?php echo $i; ?></div>
                    <div class="step-content">
                        <h3><?php echo wp_kses_post(get_chatbot_field("process_step_title_{$i}")); ?></h3>
                        <p><?php echo wp_kses_post(get_chatbot_field("process_step_content_{$i}")); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Features Section -->
    <section class="tools-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <?php 
                    $features_title = get_post_meta(get_the_ID(), '_chatbots_features_title', true);
                    if (empty($features_title)) $features_title = 'Advanced Chatbot Features';
                ?>
                <h2><?php echo wp_kses_post($features_title); ?></h2>
                <?php 
                    $features_subtitle = get_post_meta(get_the_ID(), '_chatbots_features_subtitle', true);
                    if (empty($features_subtitle)) $features_subtitle = 'Cutting-edge AI capabilities that make our chatbots intelligent, responsive, and highly effective.';
                ?>
                <p><?php echo wp_kses_post($features_subtitle); ?></p>
            </div>
            <div class="tools-grid">
                <?php 
                // Default feature values
                $defaults = array(
                    1 => array('icon' => 'fas fa-brain', 'title' => 'Natural Language Processing', 'content' => 'Understanding context, intent, and nuance in human conversation for more natural interactions.'),
                    2 => array('icon' => 'fas fa-user-tag', 'title' => 'Personalisation', 'content' => 'Tailored responses based on user behaviour, location, and previous interactions for relevant experiences.'),
                    3 => array('icon' => 'fas fa-globe', 'title' => 'Multi-language Support', 'content' => 'Communicate with global audiences in their preferred language with automatic translation capabilities.'),
                    4 => array('icon' => 'fas fa-mobile-alt', 'title' => 'Multi-platform Integration', 'content' => 'Deploy across website, Facebook Messenger, WhatsApp, and other messaging platforms seamlessly.'),
                    5 => array('icon' => 'fas fa-hand-paper', 'title' => 'Human Handoff', 'content' => 'Smart escalation to human agents when conversations require personal attention or complex problem-solving.'),
                    6 => array('icon' => 'fas fa-chart-line', 'title' => 'Advanced Analytics', 'content' => 'Detailed insights into conversation patterns, user satisfaction, and optimisation opportunities.')
                );
                
                for ($i = 1; $i <= 6; $i++): 
                    $feature_icon = get_post_meta(get_the_ID(), '_chatbots_feature_icon_' . $i, true);
                    if (empty($feature_icon)) $feature_icon = $defaults[$i]['icon'];
                    
                    $feature_title = get_post_meta(get_the_ID(), '_chatbots_feature_title_' . $i, true);
                    if (empty($feature_title)) $feature_title = $defaults[$i]['title'];
                    
                    $feature_content = get_post_meta(get_the_ID(), '_chatbots_feature_content_' . $i, true);
                    if (empty($feature_content)) $feature_content = $defaults[$i]['content'];
                    
                    if ($feature_title): 
                ?>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="<?php echo esc_attr($feature_icon); ?>"></i>
                    </div>
                    <h3><?php echo wp_kses_post($feature_title); ?></h3>
                    <p><?php echo wp_kses_post($feature_content); ?></p>
                </div>
                <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Platforms Section -->
    <section class="tools-section">
        <div class="container">
            <?php 
                $platforms_title = get_post_meta(get_the_ID(), '_chatbots_platforms_title', true);
                if (empty($platforms_title)) $platforms_title = 'Chatbot Platforms We Use';
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($platforms_title); ?></h2>
            <div class="tools-grid">
                <?php 
                // Default platform values
                $platform_defaults = array(
                    1 => array('icon' => 'fas fa-comments', 'title' => 'Intercom', 'content' => 'Advanced conversational AI platform with sophisticated automation and customer support integration.'),
                    2 => array('icon' => 'fas fa-robot', 'title' => 'Chatfuel', 'content' => 'User-friendly bot builder with powerful AI capabilities and multi-platform deployment options.'),
                    3 => array('icon' => 'fab fa-microsoft', 'title' => 'Microsoft Bot Framework', 'content' => 'Enterprise-grade development platform for sophisticated, custom chatbot solutions.'),
                    4 => array('icon' => 'fas fa-cog', 'title' => 'ManyChat', 'content' => 'Marketing-focused chatbot platform with excellent social media and automation integrations.')
                );
                
                for ($i = 1; $i <= 4; $i++): 
                    $platform_icon = get_post_meta(get_the_ID(), '_chatbots_platform_icon_' . $i, true);
                    if (empty($platform_icon)) $platform_icon = $platform_defaults[$i]['icon'];
                    
                    $platform_title = get_post_meta(get_the_ID(), '_chatbots_platform_title_' . $i, true);
                    if (empty($platform_title)) $platform_title = $platform_defaults[$i]['title'];
                    
                    $platform_content = get_post_meta(get_the_ID(), '_chatbots_platform_content_' . $i, true);
                    if (empty($platform_content)) $platform_content = $platform_defaults[$i]['content'];
                    
                    if ($platform_title): 
                ?>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="<?php echo esc_attr($platform_icon); ?>"></i>
                    </div>
                    <h3><?php echo wp_kses_post($platform_title); ?></h3>
                    <p><?php echo wp_kses_post($platform_content); ?></p>
                </div>
                <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section><!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_chatbot_field('industries_title')); ?></h2>
            <div class="industries-grid animate-on-scroll animate-stagger animate-scale-up">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="industry-item">
                    <h3><?php echo wp_kses_post(get_chatbot_field("industry_title_{$i}")); ?></h3>
                    <p><?php echo wp_kses_post(get_chatbot_field("industry_content_{$i}")); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    "<?php echo wp_kses_post(get_chatbot_field('testimonial_quote')); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo wp_kses_post(get_chatbot_field('testimonial_name')); ?></strong><br>
                    <?php echo wp_kses_post(get_chatbot_field('testimonial_title')); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content animate-on-scroll animate-fade-up"><h2><?php echo wp_kses_post(get_chatbot_field('cta_title')); ?></h2>
                <p><?php echo wp_kses_post(get_chatbot_field('cta_content')); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline"><?php echo wp_kses_post(get_chatbot_field('cta_button_text')); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Mobile CSS for Chatbots Page */
@media (max-width: 768px) {
    /* Advanced Chatbot Features Section */
    .tools-section .section-header {
        text-align: center !important;
        margin-bottom: 40px !important;
    }
    
    .tools-section .section-header h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin-bottom: 16px !important;
        line-height: 1.3 !important;
    }
    
    .tools-section .section-header p {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        max-width: 600px !important;
        margin: 0 auto !important;
    }
    
    /* Tools Grid */
    .tools-section .tools-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
    }
    
    .tools-section .tool-item {
        background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%) !important;
        border: none !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(241, 90, 37, 0.2) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
        color: white !important;
    }
    
    .tools-section .tool-icon {
        margin-bottom: 16px !important;
    }
    
    .tools-section .tool-icon i {
        font-size: 2rem !important;
        color: white !important;
    }
    
    .tools-section .tool-item h3 {
        color: white !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .tools-section .tool-item p {
        color: rgba(255, 255, 255, 0.9) !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        hyphens: auto !important;
        word-wrap: break-word !important;
    }
    
    /* Industries Section */
    .industries-section {
        padding: 60px 0 !important;
    }
    
    .industries-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
    
    .industries-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .industry-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .industry-item h3 {
        color: #f15a25 !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .industry-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* Testimonial Section */
    .testimonial-section {
        padding: 60px 20px !important;
    }
    
    .testimonial-section .testimonial-content {
        text-align: center !important;
        max-width: 100% !important;
    }
    
    .testimonial-section blockquote {
        font-size: 1.1rem !important;
        line-height: 1.6 !important;
        margin-bottom: 20px !important;
    }
    
    /* CTA Buttons */
    .btn-primary {
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        padding: 16px 24px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        text-align: center !important;
        font-size: 1rem !important;
        display: block !important;
        width: 100% !important;
        max-width: 300px !important;
        margin: 0 auto !important;
    }
}
</style>

<?php get_footer(); ?>
