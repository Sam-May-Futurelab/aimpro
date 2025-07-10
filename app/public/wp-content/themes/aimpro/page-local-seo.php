<?php
/**
 * Template Name: Local SEO Page
 * Description: Local SEO services for businesses targeting local customers
 */

get_header(); 

// Get default values
$defaults = get_local_seo_defaults();

// Get meta values with fallbacks
$header_title = get_post_meta(get_the_ID(), '_local_seo_header_title', true) ?: $defaults['header_title'];
$header_subtitle = get_post_meta(get_the_ID(), '_local_seo_header_subtitle', true) ?: $defaults['header_subtitle'];

?>

<main id="main" class="main-content seo-service-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/seo-services'); ?>">SEO Services</a>
                <span class="separator">›</span>
                <span class="current">Local SEO</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post($header_title); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle); ?></p>
            </div>
        </section>

        <!-- Local SEO Overview -->
        <section class="local-seo-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <?php
                        $overview_title = get_post_meta(get_the_ID(), '_local_seo_overview_title', true) ?: $defaults['overview_title'];
                        $overview_description = get_post_meta(get_the_ID(), '_local_seo_overview_description', true) ?: $defaults['overview_description'];
                        $benefits_title = get_post_meta(get_the_ID(), '_local_seo_overview_benefits_title', true) ?: $defaults['overview_benefits_title'];
                        $benefits = get_post_meta(get_the_ID(), '_local_seo_overview_benefits', true) ?: $defaults['overview_benefits'];
                        ?>
                        <h2><?php echo wp_kses_post($overview_title); ?></h2>
                        <p><?php echo wp_kses_post($overview_description); ?></p>
                        
                        <div class="local-seo-benefits">
                            <h3><?php echo wp_kses_post($benefits_title); ?></h3>
                            <ul>
                                <?php foreach ((array)$benefits as $benefit): ?>
                                    <li><?php echo wp_kses_post($benefit); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="overview-image animate-on-scroll animate-slide-right">
                        <?php
                        $overview_image = get_post_meta(get_the_ID(), '_local_seo_overview_image', true) ?: $defaults['overview_image'];
                        ?>
                        <img src="<?php echo esc_url($overview_image); ?>" alt="Local SEO Services" />
                    </div>
                </div>
            </div>
        </section>        <!-- Local SEO Services -->
        <section class="local-seo-services">
            <div class="section-content">
                <?php
                $services_title = get_post_meta(get_the_ID(), '_local_seo_services_title', true) ?: $defaults['services_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($services_title); ?></h2>
                <div class="services-grid">
                    
                    <?php for ($i = 1; $i <= 6; $i++): 
                        $service_title = get_post_meta(get_the_ID(), "_local_seo_service_{$i}_title", true) ?: $defaults["service_{$i}_title"];
                        $service_description = get_post_meta(get_the_ID(), "_local_seo_service_{$i}_description", true) ?: $defaults["service_{$i}_description"];
                        $service_features = get_post_meta(get_the_ID(), "_local_seo_service_{$i}_features", true) ?: $defaults["service_{$i}_features"];
                    ?>
                      <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <?php 
                            // Service FontAwesome icons based on service number
                            $service_icons = array(
                                1 => 'fab fa-google',           // Google My Business Optimisation
                                2 => 'fas fa-list-ul',          // Local Citation Building
                                3 => 'fas fa-star',             // Review Management
                                4 => 'fas fa-map-marked-alt',   // Local Keyword Optimisation
                                5 => 'fas fa-link',             // Local Link Building
                                6 => 'fas fa-desktop'           // Local Website Optimisation
                            );
                            
                            echo '<i class="' . esc_attr($service_icons[$i]) . '"></i>';
                            ?>
                        </div>
                        <div class="service-content">
                            <h3><?php echo wp_kses_post($service_title); ?></h3>
                            <p><?php echo wp_kses_post($service_description); ?></p>
                            <ul class="service-features">
                                <?php foreach ((array)$service_features as $feature): ?>
                                    <li><?php echo wp_kses_post($feature); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <?php endfor; ?>                </div>                <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                    <a href="/contact/" class="btn btn-primary">Get Your Free Local SEO Consultation</a>
                </div>
            </div>
        </section>        <!-- Case Study Section with Better Styling -->
        <section id="case-study" class="case-study-showcase" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 80px 0;">
            <div class="container">
                <div class="case-study-wrapper">
                    <!-- Header -->
                    <div class="case-study-intro animate-on-scroll animate-fade-up" style="text-align: center; margin-bottom: 60px;">
                        <div class="case-study-badge" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); color: white; padding: 8px 16px; border-radius: 50px; margin-bottom: 20px; font-weight: 600;">
                            <span class="badge-icon">🏥</span>
                            <span class="badge-text">Local SEO Success Story</span>
                        </div>
                        <h2 class="case-study-title" style="font-size: 2.5rem; font-weight: 700; color: #1e293b; margin-bottom: 20px;">Birmingham Dental Practice Achieves <span class="highlight-number" style="color: #f15a25;">500% Local Visibility</span> Increase</h2>
                        <p class="case-study-subtitle" style="font-size: 1.2rem; color: #64748b; max-width: 700px; margin: 0 auto;">Transforming an invisible local practice into Birmingham's most visible dental clinic</p>
                    </div>

                    <!-- Story Flow -->
                    <div class="case-study-flow" style="max-width: 1000px; margin: 0 auto;">
                        <!-- Challenge -->
                        <div class="story-section challenge-section animate-on-scroll animate-slide-left" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                            <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="section-icon challenge-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">⚡</div>
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">The Challenge</h3>
                            </div>
                            <div class="section-content">
                                <p class="story-text" style="font-size: 1.1rem; line-height: 1.8; color: #64748b; margin-bottom: 25px;">A local dental practice in Birmingham was struggling to attract new patients despite providing excellent service. They were invisible in local search results and losing potential patients to competitors who appeared first.</p>
                                <div class="challenge-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                                    <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                        <span style="font-weight: 600; color: #dc2626; display: block;">❌ No Google My Business optimisation</span>
                                    </div>
                                    <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                        <span style="font-weight: 600; color: #dc2626; display: block;">❌ Inconsistent business information online</span>
                                    </div>
                                    <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                        <span style="font-weight: 600; color: #dc2626; display: block;">❌ Very few online reviews</span>
                                    </div>
                                    <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                        <span style="font-weight: 600; color: #dc2626; display: block;">❌ Poor local search rankings</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arrow -->
                        <div class="story-arrow animate-on-scroll animate-scale-up" style="text-align: center; margin: 20px 0;">
                            <div class="arrow-icon" style="width: 60px; height: 60px; background: #f15a25; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">↓</div>
                            <span class="arrow-text" style="display: block; margin-top: 10px; font-weight: 600; color: #64748b;">Our Local SEO Strategy</span>
                        </div>

                        <!-- Solution -->
                        <div class="story-section solution-section animate-on-scroll animate-slide-right" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                            <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                                <div class="section-icon solution-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🎯</div>
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Strategic Local SEO Transformation</h3>
                            </div>
                            <div class="section-content">
                                <div class="solution-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Complete Google My Business Optimisation</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Full profile setup, photos, posts, and local SEO optimisation</p>
                                    </div>
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Local Citation Building & Cleanup</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Consistent NAP across all major directories and health platforms</p>
                                    </div>
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Review Generation Campaign</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Systematic approach to generate authentic patient reviews</p>
                                    </div>
                                    <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                        <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Local Content Optimisation</strong>
                                        <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Location-specific content targeting Birmingham dental searches</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arrow -->
                        <div class="story-arrow animate-on-scroll animate-scale-up" style="text-align: center; margin: 20px 0;">
                            <div class="arrow-icon" style="width: 60px; height: 60px; background: #f15a25; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">↓</div>
                            <span class="arrow-text" style="display: block; margin-top: 10px; font-weight: 600; color: #64748b;">The Results</span>
                        </div>

                        <!-- Results -->
                        <div class="story-section results-section animate-on-scroll animate-fade-up" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                            <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px; justify-content: center;">
                                <div class="section-icon results-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #10b981 0%, #059669 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🚀</div>
                                <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Exceptional Results After 6 Months</h3>
                            </div>
                            <div class="section-content">
                                <div class="results-showcase" style="text-align: center;">
                                    <div class="primary-result" style="margin-bottom: 30px;">
                                        <span class="big-number" style="display: block; font-size: 4rem; font-weight: 800; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">500%</span>
                                        <span class="big-label" style="font-size: 1.2rem; color: #64748b; font-weight: 600;">Local Visibility Increase</span>
                                    </div>
                                    <div class="secondary-results" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 25px; max-width: 700px; margin: 0 auto;">
                                        <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                            <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">350%</span>
                                            <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">More Phone Calls</span>
                                        </div>
                                        <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                            <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">80+</span>
                                            <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">New Patient Reviews</span>
                                        </div>
                                        <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                            <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">65%</span>
                                            <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Increase in New Patients</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="case-study-cta-redesigned animate-on-scroll animate-fade-up" style="margin-top: 40px; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); padding: 40px; border-radius: 16px; text-align: center;">
                        <div class="cta-container" style="display: flex; align-items: center; justify-content: center; gap: 20px; flex-wrap: wrap;">
                            <div class="cta-icon">
                                <span class="success-emoji" style="font-size: 2rem;">🏆</span>
                            </div>
                            <div class="cta-text-content" style="color: white;">
                                <h4 class="cta-headline" style="font-size: 1.5rem; font-weight: 700; margin: 0 0 8px 0;">Ready to Dominate Local Search?</h4>
                                <p class="cta-description" style="margin: 0; opacity: 0.9;">Let's transform your local visibility and attract more customers</p>
                            </div>
                            <div class="cta-action">
                                <a href="<?php echo home_url('/contact'); ?>" class="btn-primary cta-btn-enhanced" style="background: white; color: #f15a25; border: none; padding: 15px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block; transition: all 0.3s ease;">Get Your Free Local SEO Consultation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Local SEO Process -->
        <section class="local-seo-process">
            <div class="section-content">
                <?php
                $process_title = get_post_meta(get_the_ID(), '_local_seo_process_title', true) ?: $defaults['process_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($process_title); ?></h2>
                <div class="process-steps">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $step_title = get_post_meta(get_the_ID(), "_local_seo_process_step_{$i}_title", true) ?: $defaults["process_step_{$i}_title"];
                        $step_description = get_post_meta(get_the_ID(), "_local_seo_process_step_{$i}_description", true) ?: $defaults["process_step_{$i}_description"];
                    ?>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-content">
                            <h3><?php echo wp_kses_post($step_title); ?></h3>
                            <p><?php echo wp_kses_post($step_description); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- Local SEO Industries -->
        <section class="local-seo-industries">
            <div class="section-content">
                <?php
                $industries_title = get_post_meta(get_the_ID(), '_local_seo_industries_title', true) ?: $defaults['industries_title'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($industries_title); ?></h2>
                <div class="industries-grid">
                    
                    <?php for ($i = 1; $i <= 4; $i++): 
                        $industry_title = get_post_meta(get_the_ID(), "_local_seo_industry_{$i}_title", true) ?: $defaults["industry_{$i}_title"];
                        $industry_features = get_post_meta(get_the_ID(), "_local_seo_industry_{$i}_features", true) ?: $defaults["industry_{$i}_features"];
                    ?>
                    <div class="industry-card animate-on-scroll animate-stagger animate-fade-up">
                        <h3><?php echo wp_kses_post($industry_title); ?></h3>
                        <ul class="industry-features">
                            <?php foreach ((array)$industry_features as $feature): ?>
                                <li><?php echo wp_kses_post($feature); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>        <!-- Local SEO Tools -->
        <section class="local-seo-tools">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Local SEO Tools & Platforms</h2>
                <div class="tools-grid">
                    
                    <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Google Platforms</h3>
                        <ul class="tool-list">
                            <li>Google My Business</li>
                            <li>Google Search Console</li>
                            <li>Google Analytics</li>
                            <li>Google Maps</li>
                        </ul>
                    </div>

                    <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Local SEO Tools</h3>
                        <ul class="tool-list">
                            <li>BrightLocal</li>
                            <li>Whitespark</li>
                            <li>Moz Local</li>
                            <li>LocalFalcon</li>
                        </ul>
                    </div>

                    <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Review Management</h3>
                        <ul class="tool-list">
                            <li>ReviewTrackers</li>
                            <li>Podium</li>
                            <li>BirdEye</li>
                            <li>Grade.us</li>
                        </ul>
                    </div>

                    <div class="tool-category animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Citation Management</h3>
                        <ul class="tool-list">
                            <li>Yext</li>
                            <li>Synup</li>
                            <li>Neustar Localeze</li>
                            <li>Acxiom</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

<style>
/* Hide Local SEO Tools & Platforms section on mobile */
@media (max-width: 768px) {
    .local-seo-tools {
        display: none !important;
    }
}
</style>        <!-- Local SEO Testimonial -->
        <section class="local-seo-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <?php
                    $testimonial_quote = get_post_meta(get_the_ID(), '_local_seo_testimonial_quote', true) ?: $defaults['testimonial_quote'];
                    $testimonial_name = get_post_meta(get_the_ID(), '_local_seo_testimonial_name', true) ?: $defaults['testimonial_name'];
                    $testimonial_title = get_post_meta(get_the_ID(), '_local_seo_testimonial_title', true) ?: $defaults['testimonial_title'];
                    $testimonial_company = get_post_meta(get_the_ID(), '_local_seo_testimonial_company', true) ?: $defaults['testimonial_company'];
                    ?>
                    <blockquote>
                        <?php echo wp_kses_post($testimonial_quote); ?>
                    </blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <h4><?php echo esc_html($testimonial_name); ?></h4>
                            <span><?php echo esc_html($testimonial_title); ?></span>
                            <div class="author-company"><?php echo esc_html($testimonial_company); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="local-seo-cta">
            <div class="section-content">
                <?php
                $cta_title = get_post_meta(get_the_ID(), '_local_seo_cta_title', true) ?: $defaults['cta_title'];
                $cta_description = get_post_meta(get_the_ID(), '_local_seo_cta_description', true) ?: $defaults['cta_description'];
                $cta_primary_text = get_post_meta(get_the_ID(), '_local_seo_cta_primary_text', true) ?: $defaults['cta_primary_text'];
                $cta_primary_link = get_post_meta(get_the_ID(), '_local_seo_cta_primary_link', true) ?: $defaults['cta_primary_link'];
                $cta_secondary_text = get_post_meta(get_the_ID(), '_local_seo_cta_secondary_text', true) ?: $defaults['cta_secondary_text'];
                $cta_secondary_link = get_post_meta(get_the_ID(), '_local_seo_cta_secondary_link', true) ?: $defaults['cta_secondary_link'];
                $cta_benefits = get_post_meta(get_the_ID(), '_local_seo_cta_benefits', true) ?: $defaults['cta_benefits'];
                ?>
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($cta_title); ?></h2>
                <p class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post($cta_description); ?></p>
                <div class="cta-buttons animate-on-scroll animate-scale-up">
                    <a href="<?php echo esc_url($cta_primary_link); ?>" class="btn btn-primary"><?php echo esc_html($cta_primary_text); ?></a>
                    <a href="<?php echo esc_url($cta_secondary_link); ?>" class="btn btn-secondary"><?php echo esc_html($cta_secondary_text); ?></a>
                </div>
                <div class="cta-benefits animate-on-scroll animate-fade-up">
                    <?php foreach ((array)$cta_benefits as $benefit): ?>
                        <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> <?php echo wp_kses_post($benefit); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

