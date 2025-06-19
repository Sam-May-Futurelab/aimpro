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
                <h1><?php echo esc_html(get_chatbot_field('hero_title')); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_chatbot_field('hero_subtitle')); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
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
                </div>                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_chatbot_field('hero_cta1_text')); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_chatbot_field('overview_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('overview_content')); ?></p>
            </div>
            
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_chatbot_field("service_icon_{$i}")); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_chatbot_field("service_title_{$i}")); ?></h3>
                    <p><?php echo esc_html(get_chatbot_field("service_content_{$i}")); ?></p>
                </div>                <?php endfor; ?>            </div>            <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                <a href="/contact/" class="btn btn-primary">Get Your Custom Chatbot Solution</a>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content animate-on-scroll animate-fade-up">
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
                
                <div class="case-study-results animate-on-scroll animate-fade-up animate-delay-200">
                    <h3><?php echo esc_html(get_chatbot_field('results_title')); ?></h3>
                    <div class="results-grid animate-on-scroll animate-stagger animate-scale-up">
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
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_chatbot_field('types_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('types_subtitle')); ?></p>
            </div>
            <div class="services-grid animate-on-scroll animate-stagger animate-scale-up">
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
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_chatbot_field('process_title')); ?></h2>
            <div class="process-steps animate-on-scroll animate-stagger animate-fade-up">
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
    <section class="tools-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2>Advanced Chatbot Features</h2>
                <p>Cutting-edge AI capabilities that make our chatbots intelligent, responsive, and highly effective.</p>
            </div>
            <div class="tools-grid">
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Natural Language Processing</h3>
                    <p>Understanding context, intent, and nuance in human conversation for more natural interactions.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <h3>personalisation</h3>
                    <p>Tailored responses based on user behaviour, location, and previous interactions for relevant experiences.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3>Multi-language Support</h3>
                    <p>Communicate with global audiences in their preferred language with automatic translation capabilities.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Multi-platform Integration</h3>
                    <p>Deploy across website, Facebook Messenger, WhatsApp, and other messaging platforms seamlessly.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Human Handoff</h3>
                    <p>Smart escalation to human agents when conversations require personal attention or complex problem-solving.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Advanced Analytics</h3>
                    <p>Detailed insights into conversation patterns, user satisfaction, and optimisation opportunities.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Platforms Section -->
    <section class="tools-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up">Chatbot Platforms We Use</h2>
            <div class="tools-grid">
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-intercom"></i>
                    </div>
                    <h3>Intercom</h3>
                    <p>Advanced conversational AI platform with sophisticated automation and customer support integration.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Chatfuel</h3>
                    <p>User-friendly bot builder with powerful AI capabilities and multi-platform deployment options.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fab fa-microsoft"></i>
                    </div>
                    <h3>Microsoft Bot Framework</h3>
                    <p>Enterprise-grade development platform for sophisticated, custom chatbot solutions.</p>
                </div>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <h3>ManyChat</h3>
                    <p>Marketing-focused chatbot platform with excellent social media and automation integrations.</p>
                </div>
            </div>
        </div>
    </section><!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_chatbot_field('industries_title')); ?></h2>
            <div class="industries-grid animate-on-scroll animate-stagger animate-scale-up">
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
            <div class="testimonial-content animate-on-scroll animate-fade-up">
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
            <div class="cta-content animate-on-scroll animate-fade-up"><h2><?php echo esc_html(get_chatbot_field('cta_title')); ?></h2>
                <p><?php echo esc_html(get_chatbot_field('cta_content')); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-outline"><?php echo esc_html(get_chatbot_field('cta_button_text')); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
