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
                    <?php endfor; ?>
                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html($hero_cta1_text); ?></a>
                    <a href="#packages" class="btn-outline streamlined"><?php echo esc_html($hero_cta2_text); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->    <section class="service-overview">
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
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Case Study Section -->    <section class="case-study-section">
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
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- Process Section -->    <section class="process-section">
        <div class="container">
            <?php
            $process_title = get_post_meta(get_the_ID(), '_retargeting_display_process_title', true);
            if (empty($process_title)) $process_title = $defaults['process_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($process_title); ?></h2>
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
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Retargeting Types Section -->    <section class="retargeting-types-section">
        <div class="container">
            <?php
            $types_title = get_post_meta(get_the_ID(), '_retargeting_display_types_title', true);
            if (empty($types_title)) $types_title = $defaults['types_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($types_title); ?></h2>
            <div class="types-grid">
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
                        <div class="type-icon">
                            <i class="<?php echo esc_attr($type_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($type_title); ?></h3>
                        <p><?php echo esc_html($type_content); ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Tools & Technologies -->    <section class="tools-section">
        <div class="container">
            <?php
            $tools_title = get_post_meta(get_the_ID(), '_retargeting_display_tools_title', true);
            if (empty($tools_title)) $tools_title = $defaults['tools_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($tools_title); ?></h2>
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
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Industries Section -->    <section class="industries-section">
        <div class="container">
            <?php
            $industries_title = get_post_meta(get_the_ID(), '_retargeting_display_industries_title', true);
            if (empty($industries_title)) $industries_title = $defaults['industries_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($industries_title); ?></h2>
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

<?php get_footer(); ?>
