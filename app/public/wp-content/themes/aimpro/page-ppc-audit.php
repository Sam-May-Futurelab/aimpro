<?php
/**
 * Template Name: PPC Audit
 * 
 * PPC Audit services page
 *
 * @package Aimpro
 */

get_header(); ?>

<main id="primary" class="service-page ppc-audit-page">
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
                <span class="current">PPC Audit</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <?php
                // Get hero content from meta fields with fallbacks
                $defaults = aimpro_get_ppc_audit_default_values();
                
                $hero_title = get_post_meta(get_the_ID(), '_ppc_audit_hero_title', true);
                if (empty($hero_title)) $hero_title = $defaults['hero_title'];
                
                $hero_subtitle = get_post_meta(get_the_ID(), '_ppc_audit_hero_subtitle', true);
                if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
                
                $hero_cta1_text = get_post_meta(get_the_ID(), '_ppc_audit_hero_cta1_text', true);
                if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
                
                $hero_cta2_text = get_post_meta(get_the_ID(), '_ppc_audit_hero_cta2_text', true);
                if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
                ?>
                <h1><?php echo esc_html($hero_title); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
                <div class="hero-stats animate-on-scroll animate-stagger animate-scale-up">
                    <?php for ($i = 1; $i <= 3; $i++) : ?>
                        <?php
                        $stat_number = get_post_meta(get_the_ID(), "_ppc_audit_hero_stat{$i}_number", true);
                        if (empty($stat_number)) $stat_number = $defaults["hero_stat{$i}_number"];
                        
                        $stat_label = get_post_meta(get_the_ID(), "_ppc_audit_hero_stat{$i}_label", true);
                        if (empty($stat_label)) $stat_label = $defaults["hero_stat{$i}_label"];
                        ?>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo esc_html($stat_number); ?></div>
                            <div class="stat-label"><?php echo esc_html($stat_label); ?></div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html($hero_cta1_text); ?></a>
                    <a href="#packages" class="btn-outline streamlined"><?php echo esc_html($hero_cta2_text); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <?php
                $overview_title = get_post_meta(get_the_ID(), '_ppc_audit_overview_title', true);
                if (empty($overview_title)) $overview_title = $defaults['overview_title'];
                
                $overview_content = get_post_meta(get_the_ID(), '_ppc_audit_overview_content', true);
                if (empty($overview_content)) $overview_content = $defaults['overview_content'];
                ?>
                <h2><?php echo esc_html($overview_title); ?></h2>
                <p><?php echo esc_html($overview_content); ?></p>
            </div>
            
            <div class="services-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php
                    $service_title = get_post_meta(get_the_ID(), "_ppc_audit_service_title_{$i}", true);
                    if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
                    
                    $service_content = get_post_meta(get_the_ID(), "_ppc_audit_service_content_{$i}", true);
                    if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
                    
                    $service_icon = get_post_meta(get_the_ID(), "_ppc_audit_service_icon_{$i}", true);
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
    </section>    <!-- Audit Process Section -->
    <section class="whitelabel-benefits">
        <div class="section-content">
            <?php
            $process_title = get_post_meta(get_the_ID(), '_ppc_audit_process_title', true);
            if (empty($process_title)) $process_title = $defaults['process_title'];
            ?>
            <h2><?php echo esc_html($process_title); ?></h2>
            <div class="benefits-grid">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php
                    $category_title = get_post_meta(get_the_ID(), "_ppc_audit_process_category_title_{$i}", true);
                    if (empty($category_title)) $category_title = $defaults["process_category_title_{$i}"];
                    
                    $category_content = get_post_meta(get_the_ID(), "_ppc_audit_process_category_content_{$i}", true);
                    if (empty($category_content)) $category_content = $defaults["process_category_content_{$i}"];
                    
                    $category_icon = get_post_meta(get_the_ID(), "_ppc_audit_process_category_icon_{$i}", true);
                    if (empty($category_icon)) $category_icon = $defaults["process_category_icon_{$i}"];
                    ?>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($category_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($category_title); ?></h3>
                        <?php
                        // Convert newlines to list items
                        $content_items = explode("\n", $category_content);
                        if (count($content_items) > 1) {
                            echo '<ul class="service-features-list">';
                            foreach ($content_items as $item) {
                                $item = trim($item);
                                if (!empty($item)) {
                                    echo '<li>' . esc_html($item) . '</li>';
                                }
                            }
                            echo '</ul>';
                        } else {
                            echo '<p>' . esc_html($category_content) . '</p>';
                        }
                        ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Case Study Section -->
    <section class="case-study-section">
        <div class="container">
            <div class="case-study-content">
                <div class="case-study-text animate-on-scroll animate-slide-left">
                    <?php
                    $case_study_title = get_post_meta(get_the_ID(), '_ppc_audit_case_study_title', true);
                    if (empty($case_study_title)) $case_study_title = $defaults['case_study_title'];
                    
                    $case_study_intro = get_post_meta(get_the_ID(), '_ppc_audit_case_study_intro', true);
                    if (empty($case_study_intro)) $case_study_intro = $defaults['case_study_intro'];
                    
                    $case_study_challenge = get_post_meta(get_the_ID(), '_ppc_audit_case_study_challenge', true);
                    if (empty($case_study_challenge)) $case_study_challenge = $defaults['case_study_challenge'];
                    
                    $case_study_solution = get_post_meta(get_the_ID(), '_ppc_audit_case_study_solution', true);
                    if (empty($case_study_solution)) $case_study_solution = $defaults['case_study_solution'];
                    ?>
                    <h2><?php echo esc_html($case_study_title); ?></h2>
                    <p class="case-study-intro"><?php echo esc_html($case_study_intro); ?></p>
                    
                    <div class="case-study-challenge animate-on-scroll animate-fade-up">
                        <h3>The Challenge</h3>
                        <p><?php echo esc_html($case_study_challenge); ?></p>
                    </div>
                    
                    <div class="case-study-solution animate-on-scroll animate-fade-up">
                        <h3>Our Audit Findings</h3>
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
                    <h3>The Results After Implementation</h3>
                    <div class="results-grid">&
                        <?php for ($i = 1; $i <= 4; $i++) : ?>
                            <?php
                            $result_number = get_post_meta(get_the_ID(), "_ppc_audit_case_result_{$i}_number", true);
                            if (empty($result_number)) $result_number = $defaults["case_result_{$i}_number"];
                            
                            $result_label = get_post_meta(get_the_ID(), "_ppc_audit_case_result_{$i}_label", true);
                            if (empty($result_label)) $result_label = $defaults["case_result_{$i}_label"];
                            ?>
                            <div class="result-item">
                                <div class="result-number"><?php echo esc_html($result_number); ?></div>
                                <div class="result-label"><?php echo esc_html($result_label); ?></div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- What You Get Section -->
    <section class="whitelabel-benefits">
        <div class="section-content">
            <?php
            $deliverables_title = get_post_meta(get_the_ID(), '_ppc_audit_deliverables_title', true);
            if (empty($deliverables_title)) $deliverables_title = $defaults['deliverables_title'];
            ?>
            <h2><?php echo esc_html($deliverables_title); ?></h2>
            <div class="benefits-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php
                    $deliverable_title = get_post_meta(get_the_ID(), "_ppc_audit_deliverable_title_{$i}", true);
                    if (empty($deliverable_title)) $deliverable_title = $defaults["deliverable_title_{$i}"];
                    
                    $deliverable_content = get_post_meta(get_the_ID(), "_ppc_audit_deliverable_content_{$i}", true);
                    if (empty($deliverable_content)) $deliverable_content = $defaults["deliverable_content_{$i}"];
                    
                    $deliverable_icon = get_post_meta(get_the_ID(), "_ppc_audit_deliverable_icon_{$i}", true);
                    if (empty($deliverable_icon)) $deliverable_icon = $defaults["deliverable_icon_{$i}"];
                    ?>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($deliverable_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($deliverable_title); ?></h3>
                        <p><?php echo esc_html($deliverable_content); ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Why Audit Section -->    <!-- Why You Need a PPC Audit -->
    <section class="whitelabel-benefits">
        <div class="section-content">
            <?php
            $why_audit_title = get_post_meta(get_the_ID(), '_ppc_audit_why_audit_title', true);
            if (empty($why_audit_title)) $why_audit_title = $defaults['why_audit_title'];
            ?>
            <h2><?php echo esc_html($why_audit_title); ?></h2>
            <div class="benefits-grid benefits-grid-2x2">
                <?php for ($i = 1; $i <= 4; $i++) : ?>
                    <?php
                    $reason_title = get_post_meta(get_the_ID(), "_ppc_audit_why_reason_title_{$i}", true);
                    if (empty($reason_title)) $reason_title = $defaults["why_reason_title_{$i}"];
                    
                    $reason_content = get_post_meta(get_the_ID(), "_ppc_audit_why_reason_content_{$i}", true);
                    if (empty($reason_content)) $reason_content = $defaults["why_reason_content_{$i}"];
                    
                    $reason_icon = get_post_meta(get_the_ID(), "_ppc_audit_why_reason_icon_{$i}", true);
                    if (empty($reason_icon)) $reason_icon = $defaults["why_reason_icon_{$i}"];
                    ?>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($reason_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($reason_title); ?></h3>
                        <p><?php echo esc_html($reason_content); ?></p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <?php
                $testimonial_quote = get_post_meta(get_the_ID(), '_ppc_audit_testimonial_quote', true);
                if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
                
                $testimonial_name = get_post_meta(get_the_ID(), '_ppc_audit_testimonial_name', true);
                if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
                
                $testimonial_title = get_post_meta(get_the_ID(), '_ppc_audit_testimonial_title', true);
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
    </section>    <!-- CTA Section -->
    <section class="simple-cta-section animate-on-scroll animate-scale-up">
        <div class="section-content">
            <div class="simple-cta-content animate-on-scroll animate-fade-up">
                <?php
                $cta_title = get_post_meta(get_the_ID(), '_ppc_audit_cta_title', true);
                if (empty($cta_title)) $cta_title = $defaults['cta_title'];
                
                $cta_content = get_post_meta(get_the_ID(), '_ppc_audit_cta_content', true);
                if (empty($cta_content)) $cta_content = $defaults['cta_content'];
                
                $cta_button_text = get_post_meta(get_the_ID(), '_ppc_audit_cta_button_text', true);
                if (empty($cta_button_text)) $cta_button_text = $defaults['cta_button_text'];
                ?>
                <h2><?php echo esc_html($cta_title); ?></h2>
                <p><?php echo esc_html($cta_content); ?></p>
                <div class="simple-cta-buttons animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary"><?php echo esc_html($cta_button_text); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
