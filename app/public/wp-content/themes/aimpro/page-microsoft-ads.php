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
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_microsoft_ads_meta('hero_title', $post_id, $defaults)); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_microsoft_ads_meta('hero_subtitle', $post_id, $defaults)); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
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
                    </div>                </div>
                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_microsoft_ads_meta('hero_cta1_text', $post_id, $defaults)); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_microsoft_ads_meta('overview_title', $post_id, $defaults)); ?></h2>
                <p><?php echo esc_html(get_microsoft_ads_meta('overview_content', $post_id, $defaults)); ?></p>
            </div>
            
            <div class="services-grid">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_microsoft_ads_meta("service_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_microsoft_ads_meta("service_title_{$i}", $post_id, $defaults)); ?></h3>                    <p><?php echo esc_html(get_microsoft_ads_meta("service_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>
            </div>
            
            <!-- CTA after services overview -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Your Microsoft Ads Strategy</a>
            </div>
        </div>
    </section><!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <h2><?php echo esc_html(get_microsoft_ads_meta('case_study_title', $post_id, $defaults)); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html(get_microsoft_ads_meta('case_study_intro', $post_id, $defaults)); ?></p>
                    
                    <div class="case-study-challenge animate-on-scroll animate-fade-up">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html(get_microsoft_ads_meta('case_study_challenge', $post_id, $defaults)); ?></p>
                    </div>
                    
                    <div class="case-study-solution animate-on-scroll animate-fade-up">
                        <h3>Our Solution</h3>
                        <ul>
                            <?php 
                            $solution_items = explode("\n", get_microsoft_ads_meta('case_study_solution', $post_id, $defaults));
                            foreach($solution_items as $item) {
                                if (!empty(trim($item))) {
                                    echo '<li>' . esc_html(trim($item)) . '</li>';
                                }
                            }
                            ?>                        </ul>
                    </div>                </div>
                
                <div class="case-study-results animate-on-scroll animate-slide-right">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <?php for($i = 1; $i <= 4; $i++) : ?>
                        <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                            <div class="result-number"><?php echo esc_html(get_microsoft_ads_meta("case_result_{$i}_number", $post_id, $defaults)); ?></div>
                            <div class="result-label"><?php echo esc_html(get_microsoft_ads_meta("case_result_{$i}_label", $post_id, $defaults)); ?></div>
                        </div>                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            
            <!-- CTA after case study results -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Ready to achieve similar results with Microsoft Ads?</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Start Your Microsoft Ads Campaign</a>
            </div>
        </div>
    </section><!-- Process Section -->
    <section class="process-section">        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_microsoft_ads_meta('process_title', $post_id, $defaults)); ?></h2>
            <div class="process-steps">
                <?php for($i = 1; $i <= 5; $i++) : ?>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number"><?php echo esc_html(get_microsoft_ads_meta("process_step_number_{$i}", $post_id, $defaults)); ?></div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_microsoft_ads_meta("process_step_title_{$i}", $post_id, $defaults)); ?></h3>
                        <p><?php echo esc_html(get_microsoft_ads_meta("process_step_content_{$i}", $post_id, $defaults)); ?></p>
                    </div>                </div>
                <?php endfor; ?>
        </div>
        
        <!-- CTA after process section -->
        <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
            <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Let us implement this proven process for your business</p>
            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Expert Microsoft Ads Management</a>
        </div>    </section><!-- Tools & Technologies -->
    <section class="tools-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_microsoft_ads_meta('tools_title', $post_id, $defaults)); ?></h2>
            <div class="tools-grid">
                <?php for($i = 1; $i <= 4; $i++) : ?>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="<?php echo esc_attr(get_microsoft_ads_meta("tool_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_microsoft_ads_meta("tool_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_microsoft_ads_meta("tool_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>            </div>
            
            <!-- CTA after tools section -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Ready to leverage these powerful tools for your Microsoft Ads campaigns?</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Start Your Campaign Today</a>
            </div>
        </div>
    </section>    <!-- Why Bing Ads Section -->
    <section class="whitelabel-benefits">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_microsoft_ads_meta('benefits_title', $post_id, $defaults)); ?></h2>
            <div class="benefits-grid">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="benefit-icon">
                        <i class="<?php echo esc_attr(get_microsoft_ads_meta("benefit_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_microsoft_ads_meta("benefit_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_microsoft_ads_meta("benefit_content_{$i}", $post_id, $defaults)); ?></p>
                </div>                <?php endfor; ?>
            </div>
            
            <!-- CTA after benefits section -->
            <div class="text-center animate-on-scroll animate-fade-up" style="margin-top: 3rem;">
                <p style="font-size: 1.1rem; colour: #666; margin-bottom: 1.5rem;">Experience these Microsoft Ads benefits for your business</p>
                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Started with Microsoft Ads</a>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    "<?php echo esc_html(get_microsoft_ads_meta('testimonial_quote', $post_id, $defaults)); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_microsoft_ads_meta('testimonial_name', $post_id, $defaults)); ?></strong><br>
                    <?php echo esc_html(get_microsoft_ads_meta('testimonial_title', $post_id, $defaults)); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section class="simple-cta-section animate-on-scroll animate-scale-up">
        <div class="section-content">
            <div class="simple-cta-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_microsoft_ads_meta('cta_title', $post_id, $defaults)); ?></h2>
                <p><?php echo esc_html(get_microsoft_ads_meta('cta_content', $post_id, $defaults)); ?></p>                <div class="simple-cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary"><?php echo esc_html(get_microsoft_ads_meta('cta_button_1_text', $post_id, $defaults)); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Mobile CSS for Microsoft Ads Page */
@media (max-width: 768px) {
    /* Hero Section Mobile Optimization */
    .bing-ads-page .page-hero {
        padding: 60px 0 !important;
    }
    
    .bing-ads-page .hero-content {
        text-align: center;
        max-width: 100%;
        padding: 0 20px;
    }
    
    .bing-ads-page .page-hero h1 {
        font-size: 2rem !important;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 16px;
        line-height: 1.3;
    }
    
    .bing-ads-page .hero-subtitle {
        font-size: 1.1rem !important;
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 30px;
        max-width: 100%;
    }
    
    .bing-ads-page .hero-stats {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        margin: 30px 0 !important;
        max-width: 100%;
    }
    
    .bing-ads-page .stat-item {
        background: white !important;
        border: 2px solid #f15a25 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .bing-ads-page .stat-number {
        font-size: 2rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        display: block !important;
        margin-bottom: 8px !important;
    }
    
    .bing-ads-page .stat-label {
        color: #64748b !important;
        font-size: 0.9rem !important;
        font-weight: 600 !important;
        line-height: 1.3 !important;
    }
    
    .bing-ads-page .hero-ctas {
        margin-top: 30px !important;
    }
    
    .bing-ads-page .hero-ctas .btn-primary {
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        padding: 16px 24px !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        text-decoration: none !important;
        display: block !important;
        width: 100% !important;
        text-align: center !important;
        font-size: 1rem !important;
    }
    
    /* Service Overview Grid */
    .bing-ads-page .services-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .bing-ads-page .service-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .bing-ads-page .service-icon {
        margin-bottom: 16px !important;
    }
    
    .bing-ads-page .service-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .bing-ads-page .service-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
    }
    
    .bing-ads-page .service-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* Tools Section Mobile Optimization */
    .bing-ads-page .tools-section {
        padding: 60px 0 !important;
    }
    
    .bing-ads-page .tools-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
    
    .bing-ads-page .tools-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
    }
    
    .bing-ads-page .tool-item {
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
    
    .bing-ads-page .tool-icon {
        margin-bottom: 16px !important;
    }
    
    .bing-ads-page .tool-icon i {
        font-size: 2rem !important;
        color: white !important;
    }
    
    .bing-ads-page .tool-item h3 {
        color: white !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .bing-ads-page .tool-item p {
        color: rgba(255, 255, 255, 0.9) !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        hyphens: auto !important;
        word-wrap: break-word !important;
    }
    
    /* Process Steps */
    .bing-ads-page .process-steps {
        display: flex !important;
        flex-direction: column !important;
        gap: 20px !important;
    }
    
    .bing-ads-page .process-step {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        display: flex !important;
        align-items: flex-start !important;
        gap: 16px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .bing-ads-page .step-number {
        background: #f15a25 !important;
        color: white !important;
        width: 40px !important;
        height: 40px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        font-weight: 700 !important;
        font-size: 1.1rem !important;
        flex-shrink: 0 !important;
    }
    
    .bing-ads-page .step-content h3 {
        color: #1e293b !important;
        font-size: 1.2rem !important;
        font-weight: 700 !important;
        margin-bottom: 8px !important;
    }
    
    .bing-ads-page .step-content p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* Case Study Results Grid */
    .bing-ads-page .results-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 15px !important;
    }
    
    .bing-ads-page .result-item {
        background: white !important;
        border: 2px solid #f15a25 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .bing-ads-page .result-number {
        font-size: 2rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        display: block !important;
        margin-bottom: 8px !important;
    }
    
    .bing-ads-page .result-label {
        color: #64748b !important;
        font-size: 0.85rem !important;
        font-weight: 600 !important;
        line-height: 1.3 !important;
    }
    
    /* Case Study Content */
    .bing-ads-page .case-study-content {
        flex-direction: column !important;
        gap: 30px !important;
    }
    
    .bing-ads-page .case-study-text,
    .bing-ads-page .case-study-results {
        max-width: 100% !important;
    }
    
    /* Benefits Grid */
    .bing-ads-page .benefits-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
    }
    
    .bing-ads-page .benefit-card {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .bing-ads-page .benefit-icon {
        margin-bottom: 16px !important;
    }
    
    .bing-ads-page .benefit-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .bing-ads-page .benefit-card h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
    }
    
    .bing-ads-page .benefit-card p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.6 !important;
        margin: 0 !important;
    }
    
    /* CTA Buttons */
    .bing-ads-page .btn-primary {
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
    
    /* Testimonial */
    .bing-ads-page .testimonial-content {
        text-align: center !important;
        padding: 0 20px !important;
    }
    
    .bing-ads-page .testimonial-content blockquote {
        font-size: 1.1rem !important;
        line-height: 1.6 !important;
        margin-bottom: 20px !important;
    }
    
    /* Simple CTA Section */
    .bing-ads-page .simple-cta-section {
        padding: 60px 20px !important;
    }
    
    .bing-ads-page .simple-cta-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin-bottom: 16px !important;
        line-height: 1.3 !important;
    }
    
    .bing-ads-page .simple-cta-content p {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        margin-bottom: 24px !important;
    }
}
</style>

<?php get_footer(); ?>

