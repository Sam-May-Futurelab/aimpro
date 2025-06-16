<?php
/**
 * Template Name: Microsoft/Bing Ads
 * 
 * Microsoft/Bing Ads management services page
 *
 * @package Aimpro
 */

get_header(); 

// Get post ID and defaults
$post_id = get_the_ID();
$defaults = aimpro_get_microsoft_ads_default_values();

// Helper function to get meta value with fallback
function get_microsoft_ads_meta($key, $post_id, $defaults, $prefix = '_microsoft_ads_') {
    $value = get_post_meta($post_id, $prefix . $key, true);
    return !empty($value) ? $value : (isset($defaults[$key]) ? $defaults[$key] : '');
}
?>

<main id="primary" class="service-page bing-ads-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/advertising-ppc'); ?>">PPC Advertising</a>
                <span class="separator">›</span>
                <span class="current">Microsoft/Bing Ads</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content">
                <h1><?php echo esc_html(get_microsoft_ads_meta('hero_title', $post_id, $defaults)); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_microsoft_ads_meta('hero_subtitle', $post_id, $defaults)); ?></p>
                <div class="hero-stats">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_microsoft_ads_meta('hero_stat1_number', $post_id, $defaults)); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_microsoft_ads_meta('hero_stat1_label', $post_id, $defaults)); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_microsoft_ads_meta('hero_stat2_number', $post_id, $defaults)); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_microsoft_ads_meta('hero_stat2_label', $post_id, $defaults)); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_microsoft_ads_meta('hero_stat3_number', $post_id, $defaults)); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_microsoft_ads_meta('hero_stat3_label', $post_id, $defaults)); ?></div>
                    </div>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_microsoft_ads_meta('hero_cta1_text', $post_id, $defaults)); ?></a>
                    <a href="#packages" class="btn-outline streamlined"><?php echo esc_html(get_microsoft_ads_meta('hero_cta2_text', $post_id, $defaults)); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content">
                <h2><?php echo esc_html(get_microsoft_ads_meta('overview_title', $post_id, $defaults)); ?></h2>
                <p><?php echo esc_html(get_microsoft_ads_meta('overview_content', $post_id, $defaults)); ?></p>
            </div>
            
            <div class="services-grid">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_microsoft_ads_meta("service_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_microsoft_ads_meta("service_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_microsoft_ads_meta("service_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text">
                    <h2><?php echo esc_html(get_microsoft_ads_meta('case_study_title', $post_id, $defaults)); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_microsoft_ads_meta('case_study_intro', $post_id, $defaults)); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_microsoft_ads_meta('case_study_challenge', $post_id, $defaults)); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Solution</h3>
                        <ul>
                            <?php 
                            $solution_items = explode("\n", get_microsoft_ads_meta('case_study_solution', $post_id, $defaults));
                            foreach($solution_items as $item) {
                                if (!empty(trim($item))) {
                                    echo '<li>' . esc_html(trim($item)) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                
                <div class="case-study-results">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <?php for($i = 1; $i <= 4; $i++) : ?>
                        <div class="result-item">
                            <div class="result-number"><?php echo esc_html(get_microsoft_ads_meta("case_result_{$i}_number", $post_id, $defaults)); ?></div>
                            <div class="result-label"><?php echo esc_html(get_microsoft_ads_meta("case_result_{$i}_label", $post_id, $defaults)); ?></div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">        <div class="container">
            <h2><?php echo esc_html(get_microsoft_ads_meta('process_title', $post_id, $defaults)); ?></h2>
            <div class="process-steps">
                <?php for($i = 1; $i <= 5; $i++) : ?>
                <div class="process-step">
                    <div class="step-number"><?php echo esc_html(get_microsoft_ads_meta("process_step_number_{$i}", $post_id, $defaults)); ?></div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_microsoft_ads_meta("process_step_title_{$i}", $post_id, $defaults)); ?></h3>
                        <p><?php echo esc_html(get_microsoft_ads_meta("process_step_content_{$i}", $post_id, $defaults)); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
        </div>    </section>    <!-- Tools & Technologies -->
    <section class="tools-section">
        <div class="container">
            <h2><?php echo esc_html(get_microsoft_ads_meta('tools_title', $post_id, $defaults)); ?></h2>
            <div class="tools-grid">
                <?php for($i = 1; $i <= 4; $i++) : ?>
                <div class="tool-item">
                    <div class="tool-icon">
                        <i class="<?php echo esc_attr(get_microsoft_ads_meta("tool_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_microsoft_ads_meta("tool_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_microsoft_ads_meta("tool_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Why Bing Ads Section -->
    <section class="whitelabel-benefits">
        <div class="container">
            <h2><?php echo esc_html(get_microsoft_ads_meta('benefits_title', $post_id, $defaults)); ?></h2>
            <div class="benefits-grid">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="<?php echo esc_attr(get_microsoft_ads_meta("benefit_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_microsoft_ads_meta("benefit_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_microsoft_ads_meta("benefit_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content">
                <blockquote>
                    "<?php echo esc_html(get_microsoft_ads_meta('testimonial_quote', $post_id, $defaults)); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_microsoft_ads_meta('testimonial_name', $post_id, $defaults)); ?></strong><br>
                    <?php echo esc_html(get_microsoft_ads_meta('testimonial_title', $post_id, $defaults)); ?>
                </cite>
            </div>
        </div>
    </section><!-- CTA Section -->
    <section class="simple-cta-section">
        <div class="section-content">
            <div class="simple-cta-content">
                <h2>Ready to Expand Beyond Google?</h2>
                <p>Discover the untapped potential of Microsoft/Bing Ads for your business. Get started with a free competitive analysis and see how much market share you're missing.</p>
                <div class="simple-cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Start Bing Campaigns</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
