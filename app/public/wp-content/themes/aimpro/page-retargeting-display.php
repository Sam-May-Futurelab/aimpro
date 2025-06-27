<?php
/**
 * Template Name: Retargeting & Display Ads
 * 
 * Retargeting & Display advertising services page
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page retargeting-page">
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
                <span class="current">Retargeting & Display Ads</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <?php
                // Get hero content from meta fields with fallbacks
                $defaults = aimpro_get_retargeting_display_default_values();
                
                $hero_title = get_post_meta(get_the_ID(), '_retargeting_display_hero_title', true);
                if (empty($hero_title)) $hero_title = $defaults['hero_title'];
                
                $hero_subtitle = get_post_meta(get_the_ID(), '_retargeting_display_hero_subtitle', true);
                if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
                
                $hero_cta1_text = get_post_meta(get_the_ID(), '_retargeting_display_hero_cta1_text', true);
                if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
                
                $hero_cta2_text = get_post_meta(get_the_ID(), '_retargeting_display_hero_cta2_text', true);
                if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
                ?>                <h1><?php echo esc_html($hero_title); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
                <div class="hero-stats animate-on-scroll animate-fade-up">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <?php
                        $stat_number = get_post_meta(get_the_ID(), "_retargeting_display_hero_stat{$i}_number", true);
                        if (empty($stat_number)) $stat_number = $defaults["hero_stat{$i}_number"];
                        
                        $stat_label = get_post_meta(get_the_ID(), "_retargeting_display_hero_stat{$i}_label", true);
                        if (empty($stat_label)) $stat_label = $defaults["hero_stat{$i}_label"];
                        ?>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo esc_html($stat_number); ?></div>
                            <div class="stat-label"><?php echo esc_html($stat_label); ?></div>
                        </div>
                    <?php endfor; ?>                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html($hero_cta1_text); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview --><section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <?php
                $overview_title = get_post_meta(get_the_ID(), '_retargeting_display_overview_title', true);
                if (empty($overview_title)) $overview_title = $defaults['overview_title'];
                
                $overview_content = get_post_meta(get_the_ID(), '_retargeting_display_overview_content', true);
                if (empty($overview_content)) $overview_content = $defaults['overview_content'];
                ?>
                <h2><?php echo esc_html($overview_title); ?></h2>
                <p><?php echo esc_html($overview_content); ?></p>
            </div>
            
            <div class="services-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php
                    $service_title = get_post_meta(get_the_ID(), "_retargeting_display_service_title_{$i}", true);
                    if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
                    
                    $service_content = get_post_meta(get_the_ID(), "_retargeting_display_service_content_{$i}", true);
                    if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
                    
                    $service_icon = get_post_meta(get_the_ID(), "_retargeting_display_service_icon_{$i}", true);
                    if (empty($service_icon)) $service_icon = $defaults["service_icon_{$i}"];
                    ?>
                    <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="<?php echo esc_attr($service_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($service_title); ?></h3>
                        <p><?php echo esc_html($service_content); ?></p>
                    </div>                <?php endfor; ?>            </div>            <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                <a href="/contact/" class="btn btn-primary">Get Started with Retargeting</a>
            </div>
        </div>
    </section>    <!-- Case Study Section --><section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <?php
                    $case_study_title = get_post_meta(get_the_ID(), '_retargeting_display_case_study_title', true);
                    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
                    
                    $case_study_intro = get_post_meta(get_the_ID(), '_retargeting_display_case_study_intro', true);
                    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
                    
                    $case_study_challenge = get_post_meta(get_the_ID(), '_retargeting_display_case_study_challenge', true);
                    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
                    
                    $case_study_solution = get_post_meta(get_the_ID(), '_retargeting_display_case_study_solution', true);
                    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
                    ?>
                    <h2><?php echo esc_html($case_study_title); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html($case_study_intro); ?></p>
                    
                    <div class="case-study-challenge">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html($case_study_challenge); ?></p>
                    </div>
                    
                    <div class="case-study-solution">
                        <h3>Our Solution</h3>
                        <?php
                        // Convert newlines to list items
                        $solution_items = explode("\n", $case_study_solution);
                        if (count($solution_items) > 1) {
                            echo '<ul>';
                            foreach ($solution_items as $item) {
                                $item = trim($item);
                                if (!empty($item)) {
                                    echo '<li>' . esc_html($item) . '</li>';
                                }
                            }
                            echo '</ul>';
                        } else {
                            echo '<p>' . esc_html($case_study_solution) . '</p>';
                        }
                        ?>
                    </div>
                </div>
                  <div class="case-study-results animate-on-scroll animate-slide-right">
                    <h3>The Results</h3>
                    <div class="results-grid">
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                            <?php
                            $result_number = get_post_meta(get_the_ID(), "_retargeting_display_case_result_{$i}_number", true);
                            if (empty($result_number)) $result_number = $defaults["case_result_{$i}_number"];
                            
                            $result_label = get_post_meta(get_the_ID(), "_retargeting_display_case_result_{$i}_label", true);
                            if (empty($result_label)) $result_label = $defaults["case_result_{$i}_label"];
                            ?>
                            <div class="result-item animate-on-scroll animate-stagger animate-scale-up">
                                <div class="result-number"><?php echo esc_html($result_number); ?></div>
                                <div class="result-label"><?php echo esc_html($result_label); ?></div>
                            </div>
                        <?php endfor; ?>
                    </div>                </div>
            </div>
              <!-- CTA after case study -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Ready to achieve similar results for your business?</p>
                    <a href="/contact/" class="btn btn-primary">Start Your Retargeting Campaign</a>
                </div>
            </div>
        </div>
    </section>    <!-- Process Section --><section class="process-section">
        <div class="container">
            <?php
            $process_title = get_post_meta(get_the_ID(), '_retargeting_display_process_title', true);
            if (empty($process_title)) $process_title = $defaults['process_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo esc_html($process_title); ?></h2>
            <div class="process-steps">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php
                    $step_number = get_post_meta(get_the_ID(), "_retargeting_display_process_step_number_{$i}", true);
                    if (empty($step_number)) $step_number = $defaults["process_step_number_{$i}"];
                    
                    $step_title = get_post_meta(get_the_ID(), "_retargeting_display_process_step_title_{$i}", true);
                    if (empty($step_title)) $step_title = $defaults["process_step_title_{$i}"];
                    
                    $step_content = get_post_meta(get_the_ID(), "_retargeting_display_process_step_content_{$i}", true);
                    if (empty($step_content)) $step_content = $defaults["process_step_content_{$i}"];
                    ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><?php echo esc_html($step_number); ?></div>
                        <div class="step-content">
                            <h3><?php echo esc_html($step_title); ?></h3>
                            <p><?php echo esc_html($step_content); ?></p>
                        </div>
                    </div>                <?php endfor; ?>
            </div>
              <!-- CTA after process section -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Let our proven process drive your retargeting success</p>
                    <a href="/contact/" class="btn btn-primary">Get Your Custom Strategy</a>
                </div>
            </div>
        </div>
    </section>    <!-- Retargeting Types Section --><section class="retargeting-types-section">
        <div class="container">
            <?php
            $types_title = get_post_meta(get_the_ID(), '_retargeting_display_types_title', true);
            if (empty($types_title)) $types_title = $defaults['types_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up" style="text-align: center; margin-bottom: 2rem;"><?php echo esc_html($types_title); ?></h2>
            <div class="types-grid" style="margin: 2.5rem 0;">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php
                    $type_title = get_post_meta(get_the_ID(), "_retargeting_display_type_title_{$i}", true);
                    if (empty($type_title)) $type_title = $defaults["type_title_{$i}"];
                    
                    $type_content = get_post_meta(get_the_ID(), "_retargeting_display_type_content_{$i}", true);
                    if (empty($type_content)) $type_content = $defaults["type_content_{$i}"];
                    
                    $type_icon = get_post_meta(get_the_ID(), "_retargeting_display_type_icon_{$i}", true);
                    if (empty($type_icon)) $type_icon = $defaults["type_icon_{$i}"];
                    ?>
                    <div class="type-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html($type_title); ?></h3>
                        <p><?php echo esc_html($type_content); ?></p>
                    </div>                <?php endfor; ?>
            </div>
              <!-- CTA after retargeting types -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Which retargeting strategy is right for your business?</p>
                    <a href="/contact/" class="btn btn-primary">Get Expert Recommendations</a>
                </div>
            </div>
        </div>
    </section>    <!-- Tools & Technologies --><section class="tools-section">
        <div class="container">
            <?php
            $tools_title = get_post_meta(get_the_ID(), '_retargeting_display_tools_title', true);
            if (empty($tools_title)) $tools_title = $defaults['tools_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo esc_html($tools_title); ?></h2>
            <div class="tools-grid">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <?php
                    $tool_title = get_post_meta(get_the_ID(), "_retargeting_display_tool_title_{$i}", true);
                    if (empty($tool_title)) $tool_title = $defaults["tool_title_{$i}"];
                    
                    $tool_content = get_post_meta(get_the_ID(), "_retargeting_display_tool_content_{$i}", true);
                    if (empty($tool_content)) $tool_content = $defaults["tool_content_{$i}"];
                    
                    $tool_icon = get_post_meta(get_the_ID(), "_retargeting_display_tool_icon_{$i}", true);
                    if (empty($tool_icon)) $tool_icon = $defaults["tool_icon_{$i}"];
                    ?>
                    <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="tool-icon">
                            <i class="<?php echo esc_attr($tool_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($tool_title); ?></h3>
                        <p><?php echo esc_html($tool_content); ?></p>
                    </div>                <?php endfor; ?>
            </div>
              <!-- CTA after tools section -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Experience the power of our advanced retargeting tools</p>
                    <a href="/contact/" class="btn btn-primary">Launch Your Campaign Today</a>
                </div>
            </div>
        </div>
    </section>    <!-- Industries Section --><section class="industries-section">
        <div class="container">
            <?php
            $industries_title = get_post_meta(get_the_ID(), '_retargeting_display_industries_title', true);
            if (empty($industries_title)) $industries_title = $defaults['industries_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up" style="text-align: center;"><?php echo esc_html($industries_title); ?></h2>
            <div class="industries-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php
                    $industry_title = get_post_meta(get_the_ID(), "_retargeting_display_industry_title_{$i}", true);
                    if (empty($industry_title)) $industry_title = $defaults["industry_title_{$i}"];
                    
                    $industry_content = get_post_meta(get_the_ID(), "_retargeting_display_industry_content_{$i}", true);
                    if (empty($industry_content)) $industry_content = $defaults["industry_content_{$i}"];
                    ?>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo esc_html($industry_title); ?></h3>
                        <p><?php echo esc_html($industry_content); ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <?php
                $testimonial_quote = get_post_meta(get_the_ID(), '_retargeting_display_testimonial_quote', true);
                if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
                
                $testimonial_name = get_post_meta(get_the_ID(), '_retargeting_display_testimonial_name', true);
                if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
                
                $testimonial_title = get_post_meta(get_the_ID(), '_retargeting_display_testimonial_title', true);
                if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
                ?>
                <blockquote>
                    "<?php echo esc_html($testimonial_quote); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html($testimonial_name); ?></strong><br>
                    <?php echo esc_html($testimonial_title); ?>
                </cite>
            </div>
        </div>
    </section>    <!-- CTA Section -->    <section class="simple-cta-section">
        <div class="section-content">
            <div class="simple-cta-content animate-on-scroll animate-fade-up">
                <?php
                $cta_title = get_post_meta(get_the_ID(), '_retargeting_display_cta_title', true);
                if (empty($cta_title)) $cta_title = $defaults['cta_title'];
                
                $cta_content = get_post_meta(get_the_ID(), '_retargeting_display_cta_content', true);
                if (empty($cta_content)) $cta_content = $defaults['cta_content'];
                
                $cta_button_1_text = get_post_meta(get_the_ID(), '_retargeting_display_cta_button_1_text', true);
                if (empty($cta_button_1_text)) $cta_button_1_text = $defaults['cta_button_1_text'];
                
                $cta_button_2_text = get_post_meta(get_the_ID(), '_retargeting_display_cta_button_2_text', true);
                if (empty($cta_button_2_text)) $cta_button_2_text = $defaults['cta_button_2_text'];
                ?>
                <h2 class="animate-on-scroll animate-scale-up"><?php echo esc_html($cta_title); ?></h2>
                <p><?php echo esc_html($cta_content); ?></p>
                <div class="simple-cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary"><?php echo esc_html($cta_button_1_text); ?></a>
                    <?php if (!empty($cta_button_2_text)) : ?>
                        <a href="<?php echo home_url('/services'); ?>" class="btn btn-outline"><?php echo esc_html($cta_button_2_text); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Mobile-specific styles for Retargeting & Display Ads page */
@media (max-width: 768px) {
    /* Hero section mobile adjustments */
    .retargeting-page .page-hero {
        padding: 80px 0 60px !important;
        min-height: auto !important;
        background: #ffffff !important;
    }
    
    .retargeting-page .hero-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .retargeting-page .hero-content h1 {
        font-size: 2.2rem !important;
        font-weight: 800 !important;
        color: #1e293b !important;
        margin-bottom: 20px !important;
        line-height: 1.2 !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .hero-subtitle {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .hero-stats {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        margin-bottom: 30px !important;
    }
    
    .retargeting-page .hero-stats .stat-item {
        background: #f8fafc !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        min-height: auto !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .retargeting-page .hero-stats .stat-number {
        font-size: 2.5rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        margin-bottom: 8px !important;
        line-height: 1.1 !important;
    }
    
    .retargeting-page .hero-stats .stat-label {
        font-size: 0.95rem !important;
        color: #64748b !important;
        font-weight: 500 !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .hero-ctas {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: stretch !important;
    }
    
    .retargeting-page .hero-ctas .btn-primary {
        width: 100% !important;
        padding: 16px 24px !important;
        font-size: 1.1rem !important;
        font-weight: 600 !important;
        text-align: center !important;
        border-radius: 8px !important;
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
    }
    
    /* Service overview mobile adjustments */
    .retargeting-page .service-overview {
        padding: 60px 0 !important;
        background: white !important;
    }
    
    .retargeting-page .overview-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
        margin-bottom: 40px !important;
    }
    
    .retargeting-page .overview-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin-bottom: 20px !important;
        line-height: 1.3 !important;
    }
    
    .retargeting-page .overview-content p {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        margin-bottom: 0 !important;
    }
    
    .retargeting-page .services-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .retargeting-page .service-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .service-icon {
        margin-bottom: 16px !important;
    }
    
    .retargeting-page .service-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .retargeting-page .service-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .retargeting-page .service-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
    }
    
    /* Tools section mobile adjustments - KEY FIX FOR WIDTH ISSUE */
    .retargeting-page .tools-section {
        padding: 60px 0 !important;
        background: #f8fafc !important;
        overflow-x: hidden !important;
    }
    
    .retargeting-page .tools-section .container {
        width: 100% !important;
        max-width: 100% !important;
        padding: 0 20px !important;
        overflow-x: hidden !important;
    }
    
    .retargeting-page .tools-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .tools-section .tools-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        width: 100% !important;
        margin: 0 auto !important;
        overflow-x: hidden !important;
    }
    
    .retargeting-page .tools-section .tool-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        width: 100% !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        hyphens: auto !important;
    }
    
    .retargeting-page .tools-section .tool-icon {
        margin: 0 auto 16px !important;
        background: #f15a25 !important;
        width: 64px !important;
        height: 64px !important;
        border-radius: 50% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    
    .retargeting-page .tools-section .tool-icon i {
        font-size: 2rem !important;
        color: white !important;
    }
    
    .retargeting-page .tools-section .tool-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .tools-section .tool-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin: 0 !important;
        word-wrap: break-word !important;
        overflow-wrap: break-word !important;
        hyphens: auto !important;
    }
    
    /* Industries section mobile adjustments */
    .retargeting-page .industries-section {
        padding: 60px 0 !important;
        background: white !important;
    }
    
    .retargeting-page .industries-section h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 40px !important;
        line-height: 1.3 !important;
    }
    
    .retargeting-page .industries-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .retargeting-page .industry-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .retargeting-page .industry-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .retargeting-page .industry-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
    }
    
    /* CTA sections mobile adjustments */
    .retargeting-page .cta-section {
        padding: 60px 0 !important;
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%) !important;
    }
    
    .retargeting-page .cta-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
        margin: 0 auto !important;
    }
    
    .retargeting-page .cta-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: white !important;
        margin-bottom: 20px !important;
        line-height: 1.3 !important;
        text-align: center !important;
    }
    
    .retargeting-page .cta-content p {
        font-size: 1.1rem !important;
        color: #cbd5e1 !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
        text-align: center !important;
    }
    
    .retargeting-page .simple-cta-buttons {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: center !important;
        justify-content: center !important;
        margin: 0 auto !important;
    }
    
    .retargeting-page .simple-cta-buttons .btn {
        width: 100% !important;
        max-width: 300px !important;
        padding: 16px 24px !important;
        font-size: 1.1rem !important;
        font-weight: 600 !important;
        text-align: center !important;
        border-radius: 8px !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
        display: block !important;
        margin: 0 auto !important;
    }
    
    .retargeting-page .simple-cta-buttons .btn-primary {
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
    }
    
    .retargeting-page .simple-cta-buttons .btn-outline {
        background: transparent !important;
        color: #f15a25 !important;
        border: 2px solid #f15a25 !important;
    }
    
    .retargeting-page .simple-cta-buttons .btn-outline:hover {
        background: #f15a25 !important;
        color: white !important;
    }
    
    /* Inline CTAs mobile adjustments */
    .retargeting-page .text-center {
        padding: 0 20px !important;
        margin-top: 40px !important;
    }
    
    .retargeting-page .inline-cta-content {
        max-width: 100% !important;
        padding: 0 !important;
        text-align: center !important;
    }
    
    .retargeting-page .inline-cta-content .cta-text {
        font-size: 1rem !important;
        line-height: 1.6 !important;
        margin-bottom: 20px !important;
        color: #64748b !important;
    }
    
    .retargeting-page .inline-cta-content .btn {
        width: 100% !important;
        padding: 16px 24px !important;
        font-size: 1.1rem !important;
        font-weight: 600 !important;
        text-align: center !important;
        border-radius: 8px !important;
        background: #f15a25 !important;
        color: white !important;
        border: 2px solid #f15a25 !important;
        transition: all 0.3s ease !important;
        text-decoration: none !important;
        display: block !important;
        margin: 0 !important;
    }
    
    .retargeting-page .inline-cta-content .btn:hover {
        background: #d14a1f !important;
        border-color: #d14a1f !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(241, 90, 37, 0.3) !important;
    }
}
</style>

<?php get_footer(); ?>
