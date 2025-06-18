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
    </div>

    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo esc_html(get_chatbot_field('hero_title')); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_chatbot_field('hero_subtitle')); ?></p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_chatbot_field('hero_stat1_number')); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_chatbot_field('hero_stat1_label')); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_chatbot_field('hero_stat2_number')); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_chatbot_field('hero_stat2_label')); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_chatbot_field('hero_stat3_number')); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_chatbot_field('hero_stat3_label')); ?></div>
                    </div>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_chatbot_field('hero_cta1_text')); ?></a>
                    <a href="#packages" class="btn-outline streamlined"><?php echo esc_html(get_chatbot_field('hero_cta2_text')); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <h2><?php echo esc_html(get_chatbot_field('overview_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('overview_content')); ?></p>
            </div>
            
            <div class="services-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("service_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_chatbot_field("service_title_{$i}")); ?></h3>
                    <p><?php echo esc_html(get_chatbot_field("service_content_{$i}")); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text">
                    <h2><?php echo esc_html(get_chatbot_field('case_study_title')); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_chatbot_field('case_study_intro')); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3><?php echo esc_html(get_chatbot_field('challenge_title')); ?></h3>
                        <p><?php echo esc_html(get_chatbot_field('challenge_content')); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3><?php echo esc_html(get_chatbot_field('solution_title')); ?></h3>
                        <ul>
                            <?php 
                            $solution_list = get_chatbot_field('solution_list');
                            $solutions = explode("\n", $solution_list);
                            foreach ($solutions as $solution) {
                                echo '<li>' . esc_html(trim($solution)) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results">
                    <h3><?php echo esc_html(get_chatbot_field('results_title')); ?></h3>
                    <div class="results-grid">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_chatbot_field("result_number_{$i}")); ?></div>
                            <div class="result-label"><?php echo esc_html(get_chatbot_field("result_label_{$i}")); ?></div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Chatbot Types Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html(get_chatbot_field('types_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('types_subtitle')); ?></p>
            </div>
            <div class="services-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("type_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_chatbot_field("type_title_{$i}")); ?></h3>
                    <p><?php echo esc_html(get_chatbot_field("type_content_{$i}")); ?></p>
                    <div class="service-metric">
                        <span><?php echo esc_html(get_chatbot_field("type_metric_{$i}")); ?></span>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2><?php echo esc_html(get_chatbot_field('process_title')); ?></h2>
            <div class="process-steps">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                <div class="process-step">
                    <div class="step-number"><?php echo $i; ?></div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_chatbot_field("process_step_title_{$i}")); ?></h3>
                        <p><?php echo esc_html(get_chatbot_field("process_step_content_{$i}")); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Features Section -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html(get_chatbot_field('features_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('features_subtitle')); ?></p>
            </div>
            <div class="features-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("feature_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_chatbot_field("feature_title_{$i}")); ?></h3>
                    <p><?php echo esc_html(get_chatbot_field("feature_content_{$i}")); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Platforms Section -->
    <section class="platforms-section">
        <div class="container">
            <h2><?php echo esc_html(get_chatbot_field('platforms_title')); ?></h2>
            <div class="platforms-grid">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                <div class="platform-item">
                    <div class="platform-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("platform_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_chatbot_field("platform_title_{$i}")); ?></h3>
                    <p><?php echo esc_html(get_chatbot_field("platform_content_{$i}")); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2><?php echo esc_html(get_chatbot_field('industries_title')); ?></h2>
            <div class="industries-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="industry-item">
                    <h3><?php echo esc_html(get_chatbot_field("industry_title_{$i}")); ?></h3>
                    <p><?php echo esc_html(get_chatbot_field("industry_content_{$i}")); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content">
                <blockquote>
                    "<?php echo esc_html(get_chatbot_field('testimonial_quote')); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_chatbot_field('testimonial_name')); ?></strong><br>
                    <?php echo esc_html(get_chatbot_field('testimonial_title')); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">                <h2><?php echo esc_html(get_chatbot_field('cta_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('cta_content')); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline"><?php echo esc_html(get_chatbot_field('cta_button_text')); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
