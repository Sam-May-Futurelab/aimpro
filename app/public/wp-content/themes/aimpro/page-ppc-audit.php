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
                </div>                <div class="hero-ctas animate-on-scroll animate-fade-up">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html($hero_cta1_text); ?></a>
                </div>
            </div>
        </div>
    </section><!-- Service Overview -->
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
                    </div>                <?php endfor; ?>            </div>            <div class="text-center mt-1 animate-on-scroll animate-fade-up">
                <a href="/contact/" class="btn btn-primary">Request Your Free PPC Audit</a>
            </div>
        </div>
    </section>    <!-- Audit Process Section --><section class="whitelabel-benefits">
        <div class="section-content">
            <?php
            $process_title = get_post_meta(get_the_ID(), '_ppc_audit_process_title', true);
            if (empty($process_title)) $process_title = $defaults['process_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($process_title); ?></h2>            <div class="benefits-grid">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                    <?php
                    $category_title = get_post_meta(get_the_ID(), "_ppc_audit_process_category_title_{$i}", true);
                    if (empty($category_title)) $category_title = $defaults["process_category_title_{$i}"];
                    
                    $category_content = get_post_meta(get_the_ID(), "_ppc_audit_process_category_content_{$i}", true);
                    if (empty($category_content)) $category_content = $defaults["process_category_content_{$i}"];
                    
                    $category_icon = get_post_meta(get_the_ID(), "_ppc_audit_process_category_icon_{$i}", true);
                    if (empty($category_icon)) $category_icon = $defaults["process_category_icon_{$i}"];
                    ?>
                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($category_icon); ?>"></i>
                        </div>                        <h3><?php echo esc_html($category_title); ?></h3>
                        <?php
                        // Convert newlines to line breaks (no bullet points)
                        $content_items = explode("\n", $category_content);
                        if (count($content_items) > 1) {
                            echo '<div class="process-checklist">';
                            foreach ($content_items as $item) {
                                $item = trim($item);
                                if (!empty($item)) {
                                    echo '<div class="checklist-item">' . esc_html($item) . '</div>';
                                }
                            }
                            echo '</div>';
                        } else {
                            echo '<p>' . esc_html($category_content) . '</p>';
                        }
                        ?>
                    </div>                <?php endfor; ?>
            </div>
              <!-- CTA after audit process -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Ready for a comprehensive analysis of your PPC campaigns?</p>
                    <a href="/contact/" class="btn btn-primary">Get Your Free Audit</a>
                </div>
            </div>
        </div>
    </section>    <!-- Case Study Section with Better Styling -->
    <section id="case-study" class="case-study-showcase" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 80px 0;">
        <div class="container">
            <div class="case-study-wrapper">
                <!-- Header -->
                <div class="case-study-intro animate-on-scroll animate-fade-up" style="text-align: center; margin-bottom: 60px;">
                    <div class="case-study-badge" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); color: white; padding: 8px 16px; border-radius: 50px; margin-bottom: 20px; font-weight: 600;">
                        <span class="badge-icon">🏭</span>
                        <span class="badge-text">PPC Audit Success Story</span>
                    </div>
                    <h2 class="case-study-title" style="font-size: 2.5rem; font-weight: 700; color: #1e293b; margin-bottom: 20px;">Manufacturing Company Saves <span class="highlight-number" style="color: #f15a25;">£47,000</span> Annually</h2>
                    <p class="case-study-subtitle" style="font-size: 1.2rem; color: #64748b; max-width: 700px; margin: 0 auto;">Transforming declining PPC performance into exceptional B2B lead generation through comprehensive audit and optimisation</p>
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
                            <p class="story-text" style="font-size: 1.1rem; line-height: 1.8; color: #64748b; margin-bottom: 25px;">A manufacturing company had been running Google Ads for 3 years with steadily declining performance. Their cost-per-lead had increased 150% while lead quality decreased. They needed a thorough analysis to identify what was wrong and how to fix it.</p>
                            <div class="challenge-metrics" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">📉 150% increase in cost-per-lead</span>
                                </div>
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">📉 Declining lead quality</span>
                                </div>
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">📉 3 years of declining performance</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Arrow -->
                    <div class="story-arrow animate-on-scroll animate-scale-up" style="text-align: center; margin: 20px 0;">
                        <div class="arrow-icon" style="width: 60px; height: 60px; background: #f15a25; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">↓</div>
                        <span class="arrow-text" style="display: block; margin-top: 10px; font-weight: 600; color: #64748b;">Our Comprehensive Audit</span>
                    </div>

                    <!-- Solution -->
                    <div class="story-section solution-section animate-on-scroll animate-slide-right" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                        <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                            <div class="section-icon solution-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🎯</div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Critical Audit Findings</h3>
                        </div>
                        <div class="section-content">
                            <div class="audit-findings" style="display: grid; grid-template-columns: 1fr; gap: 15px;">
                                <div class="finding-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">🔍 Keyword Analysis</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">85% of keywords were irrelevant or too broad, wasting £2,100 monthly</p>
                                </div>
                                <div class="finding-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">🏗️ Campaign Structure</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Poor campaign structure with single keyword ad groups reducing Quality Score</p>
                                </div>
                                <div class="finding-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">📱 Landing Page Issues</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Landing pages had 12-second load times and poor mobile experience</p>
                                </div>
                                <div class="finding-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">🚫 Negative Keywords</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">No negative keyword strategy, capturing irrelevant traffic</p>
                                </div>
                                <div class="finding-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">⚔️ Competitive Bidding</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Bidding on competitor terms without competitive advantages</p>
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
                            <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Exceptional Results After Implementation</h3>
                        </div>
                        <div class="section-content">
                            <div class="results-showcase" style="text-align: center;">
                                <div class="primary-result" style="margin-bottom: 30px;">
                                    <span class="big-number" style="display: block; font-size: 4rem; font-weight: 800; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">£47K</span>
                                    <span class="big-label" style="font-size: 1.2rem; color: #64748b; font-weight: 600;">Annual Cost Savings</span>
                                </div>
                                <div class="secondary-results" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 25px; max-width: 700px; margin: 0 auto;">
                                    <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                        <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">280%</span>
                                        <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Qualified Lead Increase</span>
                                    </div>
                                    <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                        <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">65%</span>
                                        <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Cost Per Lead Reduction</span>
                                    </div>
                                    <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                        <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">340%</span>
                                        <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">ROI Improvement</span>
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
                            <span class="success-emoji" style="font-size: 2rem;">🔍</span>
                        </div>
                        <div class="cta-text-content" style="color: white;">
                            <h4 class="cta-headline" style="font-size: 1.5rem; font-weight: 700; margin: 0 0 8px 0;">Want Similar Results for Your PPC Campaigns?</h4>
                            <p class="cta-description" style="margin: 0; opacity: 0.9;">Let's uncover what's holding back your PPC performance</p>
                        </div>
                        <div class="cta-action">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary cta-btn-enhanced" style="background: white; color: #f15a25; border: none; padding: 15px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block; transition: all 0.3s ease;">Start Your Audit Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>    <!-- What You Get Section --><section class="whitelabel-benefits">
        <div class="section-content">
            <?php
            $deliverables_title = get_post_meta(get_the_ID(), '_ppc_audit_deliverables_title', true);
            if (empty($deliverables_title)) $deliverables_title = $defaults['deliverables_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($deliverables_title); ?></h2>
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
                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($deliverable_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($deliverable_title); ?></h3>
                        <p><?php echo esc_html($deliverable_content); ?></p>
                    </div>                <?php endfor; ?>
            </div>
              <!-- CTA after deliverables -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Get these comprehensive insights for your campaigns</p>
                    <a href="/contact/" class="btn btn-primary">Request Your Detailed Audit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Audit Section --><!-- Why You Need a PPC Audit -->    <section class="whitelabel-benefits">
        <div class="section-content">
            <?php
            $why_audit_title = get_post_meta(get_the_ID(), '_ppc_audit_why_audit_title', true);
            if (empty($why_audit_title)) $why_audit_title = $defaults['why_audit_title'];
            ?>
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html($why_audit_title); ?></h2>
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
                    <div class="benefit-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="benefit-icon">
                            <i class="<?php echo esc_attr($reason_icon); ?>"></i>
                        </div>
                        <h3><?php echo esc_html($reason_title); ?></h3>
                        <p><?php echo esc_html($reason_content); ?></p>
                    </div>                <?php endfor; ?>
            </div>
              <!-- CTA after why audit section -->
            <div class="text-center mt-2 animate-on-scroll animate-fade-up">
                <div class="inline-cta-content">
                    <p class="cta-text">Don't let these issues drain your ad budget any longer</p>
                    <a href="/contact/" class="btn btn-primary">Schedule Your Free Audit</a>
                </div>
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

<style>
/* Additional CTA centering styles for PPC Audit page */
.ppc-audit-page .text-center {
    text-align: center !important;
}

.ppc-audit-page .inline-cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.ppc-audit-page .inline-cta-content .cta-text {
    text-align: center;
    margin-bottom: 1.5rem;
}

.ppc-audit-page .simple-cta-buttons {
    text-align: center;
}

.ppc-audit-page .btn {
    display: inline-block;
    margin: 0 auto;
}

/* Mobile-specific styles for PPC Audit page */
@media (max-width: 768px) {
    /* Hero section mobile adjustments */
    .ppc-audit-page .page-hero {
        padding: 80px 0 60px !important;
        min-height: auto !important;
        background: #ffffff !important;
    }
    
    .ppc-audit-page .hero-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .hero-content h1 {
        font-size: 2.2rem !important;
        font-weight: 800 !important;
        color: #1e293b !important;
        margin-bottom: 20px !important;
        line-height: 1.2 !important;
        word-wrap: break-word !important;
    }
    
    .ppc-audit-page .hero-subtitle {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .ppc-audit-page .hero-stats {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        margin-bottom: 30px !important;
    }
    
    .ppc-audit-page .hero-stats .stat-item {
        background: #f8fafc !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        text-align: center !important;
        min-height: auto !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
    }
    
    .ppc-audit-page .hero-stats .stat-number {
        font-size: 2.5rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        margin-bottom: 8px !important;
        line-height: 1.1 !important;
    }
    
    .ppc-audit-page .hero-stats .stat-label {
        font-size: 0.95rem !important;
        color: #64748b !important;
        font-weight: 500 !important;
        line-height: 1.3 !important;
        word-wrap: break-word !important;
    }
    
    .ppc-audit-page .hero-ctas {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: stretch !important;
    }
    
    .ppc-audit-page .hero-ctas .btn-primary {
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
    
    .ppc-audit-page .hero-ctas .btn-primary:hover {
        background: #d14a1f !important;
        border-color: #d14a1f !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(241, 90, 37, 0.3) !important;
    }
    
    /* Service overview mobile adjustments */
    .ppc-audit-page .service-overview {
        padding: 60px 0 !important;
        background: white !important;
    }
    
    .ppc-audit-page .overview-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
        margin-bottom: 40px !important;
    }
    
    .ppc-audit-page .overview-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin-bottom: 20px !important;
        line-height: 1.3 !important;
    }
    
    .ppc-audit-page .overview-content p {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        margin-bottom: 0 !important;
    }
    
    .ppc-audit-page .services-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .service-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .ppc-audit-page .service-icon {
        margin-bottom: 16px !important;
    }
    
    .ppc-audit-page .service-icon i {
        font-size: 2rem !important;
        color: #f15a25 !important;
    }
    
    .ppc-audit-page .service-item h3 {
        color: #1e293b !important;
        font-size: 1.3rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .ppc-audit-page .service-item p {
        color: #64748b !important;
        font-size: 0.95rem !important;
        line-height: 1.5 !important;
        margin-bottom: 0 !important;
    }
    
    /* Process section mobile adjustments */
    .ppc-audit-page .process-steps {
        display: flex !important;
        flex-direction: column !important;
        gap: 20px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .process-step {
        display: flex !important;
        flex-direction: row !important;
        align-items: flex-start !important;
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 20px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .ppc-audit-page .step-number {
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
        margin-right: 16px !important;
        flex-shrink: 0 !important;
    }
    
    .ppc-audit-page .step-content h3 {
        color: #1e293b !important;
        font-size: 1.2rem !important;
        font-weight: 700 !important;
        margin-bottom: 8px !important;
        line-height: 1.3 !important;
    }
    
    .ppc-audit-page .step-content p {
        color: #64748b !important;
        font-size: 0.9rem !important;
        line-height: 1.5 !important;
        margin: 0 !important;
    }
    
    /* Pricing section mobile adjustments */
    .ppc-audit-page .pricing-section {
        padding: 60px 0 !important;
        background: #f8fafc !important;
    }
    
    .ppc-audit-page .pricing-section .section-header h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        text-align: center !important;
        margin-bottom: 16px !important;
        line-height: 1.3 !important;
    }
    
    .ppc-audit-page .pricing-section .section-header p {
        font-size: 1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        text-align: center !important;
        margin: 0 auto 40px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .pricing-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .pricing-card {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        text-align: center !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        max-width: 100% !important;
        word-wrap: break-word !important;
    }
    
    .ppc-audit-page .pricing-card.featured {
        border: 2px solid #f15a25 !important;
        transform: none !important;
        position: relative !important;
    }
    
    .ppc-audit-page .pricing-card .pricing-header h3 {
        color: #1e293b !important;
        font-size: 1.4rem !important;
        font-weight: 700 !important;
        margin-bottom: 12px !important;
        line-height: 1.3 !important;
    }
    
    .ppc-audit-page .pricing-card .price {
        font-size: 2.5rem !important;
        font-weight: 800 !important;
        color: #f15a25 !important;
        margin-bottom: 8px !important;
        line-height: 1.1 !important;
    }
    
    /* CTA section mobile adjustments */
    .ppc-audit-page .cta-section {
        padding: 60px 0 !important;
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%) !important;
    }
    
    .ppc-audit-page .cta-content {
        text-align: center !important;
        max-width: 100% !important;
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .cta-content h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: white !important;
        margin-bottom: 20px !important;
        line-height: 1.3 !important;
    }
    
    .ppc-audit-page .cta-content p {
        font-size: 1.1rem !important;
        color: #cbd5e1 !important;
        line-height: 1.6 !important;
        margin-bottom: 30px !important;
    }
    
    .ppc-audit-page .cta-buttons {
        display: flex !important;
        flex-direction: column !important;
        gap: 15px !important;
        width: 100% !important;
        align-items: stretch !important;
    }
    
    .ppc-audit-page .cta-buttons .btn-outline {
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
    
    /* Inline CTAs mobile adjustments */
    .ppc-audit-page .text-center {
        padding: 0 20px !important;
    }
    
    .ppc-audit-page .inline-cta-content {
        max-width: 100% !important;
        padding: 0 !important;
    }
    
    .ppc-audit-page .inline-cta-content .cta-text {
        font-size: 1rem !important;
        line-height: 1.6 !important;
        margin-bottom: 20px !important;
    }
    
    .ppc-audit-page .simple-cta-buttons .btn {
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
}
</style>

<?php get_footer(); ?>
