<?php
/**
 * Template Name: Meta Ads (Facebook/Instagram)
 * 
 * Meta Ads (Facebook/Instagram) management services page
 *
 * @package Aimpro
 */

get_header(); 

// Get post ID and defaults
$post_id = get_the_ID();
$defaults = aimpro_get_meta_ads_default_values();

// Helper function to get meta value with fallback
function get_meta_ads_meta($key, $post_id, $defaults, $prefix = '_meta_ads_') {
    $value = get_post_meta($post_id, $prefix . $key, true);
    return !empty($value) ? $value : (isset($defaults[$key]) ? $defaults[$key] : '');
}
?>

<main id="primary" class="service-page meta-ads-page">
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
                <span class="current">Meta Ads (Facebook/Instagram)</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_meta_ads_meta('hero_title', $post_id, $defaults)); ?></h1>
                <p class="hero-subtitle"><?php echo esc_html(get_meta_ads_meta('hero_subtitle', $post_id, $defaults)); ?></p>
                <div class="hero-stats animate-on-scroll animate-fade-up">
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_meta_ads_meta('hero_stat1_number', $post_id, $defaults)); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_meta_ads_meta('hero_stat1_label', $post_id, $defaults)); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_meta_ads_meta('hero_stat2_number', $post_id, $defaults)); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_meta_ads_meta('hero_stat2_label', $post_id, $defaults)); ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo esc_html(get_meta_ads_meta('hero_stat3_number', $post_id, $defaults)); ?></div>
                        <div class="stat-label"><?php echo esc_html(get_meta_ads_meta('hero_stat3_label', $post_id, $defaults)); ?></div>
                    </div>                </div>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary streamlined"><?php echo esc_html(get_meta_ads_meta('hero_cta1_text', $post_id, $defaults)); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Service Overview -->
    <section class="service-overview">
        <div class="container">
            <div class="overview-content animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_meta_ads_meta('overview_title', $post_id, $defaults)); ?></h2>
                <p><?php echo esc_html(get_meta_ads_meta('overview_content', $post_id, $defaults)); ?></p>
            </div>
            
            <div class="services-grid">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                <div class="service-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr(get_meta_ads_meta("service_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_meta_ads_meta("service_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_meta_ads_meta("service_content_{$i}", $post_id, $defaults)); ?></p>
                </div>                <?php endfor; ?>            </div>
            <div class="text-centre mt-1 animate-on-scroll animate-fade-up">
                <a href="/contact/" class="btn btn-primary">Schedule Your Meta Ads Consultation</a>
            </div>
        </div>
    </section>    <!-- Case Study Section with Better Styling -->
    <section id="case-study" class="case-study-showcase" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 80px 0;">
        <div class="container">
            <div class="case-study-wrapper">
                <!-- Header -->
                <div class="case-study-intro animate-on-scroll animate-fade-up" style="text-align: center; margin-bottom: 60px;">
                    <div class="case-study-badge" style="display: inline-flex; align-items: center; gap: 8px; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); color: white; padding: 8px 16px; border-radius: 50px; margin-bottom: 20px; font-weight: 600;">
                        <span class="badge-icon">🛒</span>
                        <span class="badge-text">E-commerce Success Story</span>
                    </div>
                    <h2 class="case-study-title" style="font-size: 2.5rem; font-weight: 700; color: #1e293b; margin-bottom: 20px;">Online Retailer Achieves <span class="highlight-number" style="color: #f15a25;">380% Sales</span> Increase</h2>
                    <p class="case-study-subtitle" style="font-size: 1.2rem; color: #64748b; max-width: 700px; margin: 0 auto;">Transforming declining ROAS into exceptional e-commerce growth through strategic Meta advertising</p>
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
                            <p class="story-text" style="font-size: 1.1rem; line-height: 1.8; color: #64748b; margin-bottom: 25px;">An established e-commerce retailer was struggling with high customer acquisition costs and declining ROAS from their existing Meta ads campaigns. Their broad targeting approach wasn't delivering qualified traffic, and their ad creative wasn't resonating with their target audience.</p>
                            <div class="challenge-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">❌ High customer acquisition costs</span>
                                </div>
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">❌ Declining ROAS performance</span>
                                </div>
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">❌ Poor audience targeting</span>
                                </div>
                                <div class="challenge-item" style="background: #fee2e2; padding: 15px; border-radius: 10px; border-left: 4px solid #dc2626;">
                                    <span style="font-weight: 600; color: #dc2626; display: block;">❌ Low-performing ad creatives</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Arrow -->
                    <div class="story-arrow animate-on-scroll animate-scale-up" style="text-align: center; margin: 20px 0;">
                        <div class="arrow-icon" style="width: 60px; height: 60px; background: #f15a25; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: bold;">↓</div>
                        <span class="arrow-text" style="display: block; margin-top: 10px; font-weight: 600; color: #64748b;">Our Strategic Solution</span>
                    </div>

                    <!-- Solution -->
                    <div class="story-section solution-section animate-on-scroll animate-slide-right" style="background: white; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin-bottom: 30px;">
                        <div class="section-header" style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
                            <div class="section-icon solution-icon" style="width: 50px; height: 50px; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">🎯</div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Strategic Meta Ads Transformation</h3>
                        </div>
                        <div class="section-content">
                            <div class="solution-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                                <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Advanced Audience Segmentation</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Implemented lookalike modeling and precise targeting strategies</p>
                                </div>
                                <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Platform-Specific Creative</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Created optimised content for Facebook and Instagram feeds</p>
                                </div>
                                <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Retargeting Campaigns</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Launched abandoned cart recovery and dynamic product ads</p>
                                </div>
                                <div class="solution-item" style="padding: 20px; background: #f8fafc; border-radius: 10px; border-left: 4px solid #f15a25;">
                                    <strong style="display: block; color: #1e293b; margin-bottom: 8px;">Conversion Tracking</strong>
                                    <p style="color: #64748b; margin: 0; font-size: 0.9rem; line-height: 1.6;">Established advanced attribution modeling and tracking</p>
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
                            <h3 style="font-size: 1.5rem; font-weight: 700; color: #1e293b; margin: 0;">Exceptional E-commerce Results</h3>
                        </div>
                        <div class="section-content">
                            <div class="results-showcase" style="text-align: center;">
                                <div class="primary-result" style="margin-bottom: 30px;">
                                    <span class="big-number" style="display: block; font-size: 4rem; font-weight: 800; background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">380%</span>
                                    <span class="big-label" style="font-size: 1.2rem; color: #64748b; font-weight: 600;">Sales Increase</span>
                                </div>
                                <div class="secondary-results" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 25px; max-width: 700px; margin: 0 auto;">
                                    <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                        <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">285%</span>
                                        <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">ROAS Improvement</span>
                                    </div>
                                    <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                        <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">65%</span>
                                        <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Cost Per Acquisition Reduction</span>
                                    </div>
                                    <div class="result-stat" style="background: #f0fdf4; padding: 20px; border-radius: 12px; border: 1px solid #bbf7d0;">
                                        <span class="stat-number" style="display: block; font-size: 2rem; font-weight: 700; color: #059669;">450%</span>
                                        <span class="stat-label" style="font-size: 0.9rem; color: #065f46;">Qualified Traffic Increase</span>
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
                            <span class="success-emoji" style="font-size: 2rem;">📈</span>
                        </div>
                        <div class="cta-text-content" style="color: white;">
                            <h4 class="cta-headline" style="font-size: 1.5rem; font-weight: 700; margin: 0 0 8px 0;">Ready for Similar Results?</h4>
                            <p class="cta-description" style="margin: 0; opacity: 0.9;">Let's transform your Meta advertising into a revenue-generating machine</p>
                        </div>
                        <div class="cta-action">
                            <a href="<?php echo home_url('/contact'); ?>" class="btn-primary cta-btn-enhanced" style="background: white; color: #f15a25; border: none; padding: 15px 30px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-block; transition: all 0.3s ease;">Get Similar Results for Your Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_meta_ads_meta('process_title', $post_id, $defaults)); ?></h2>
            <div class="process-steps">
                <?php for($i = 1; $i <= 5; $i++) : ?>
                <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                    <div class="step-number"><?php echo esc_html(get_meta_ads_meta("process_step_number_{$i}", $post_id, $defaults)); ?></div>
                    <div class="step-content">
                        <h3><?php echo esc_html(get_meta_ads_meta("process_step_title_{$i}", $post_id, $defaults)); ?></h3>
                        <p><?php echo esc_html(get_meta_ads_meta("process_step_content_{$i}", $post_id, $defaults)); ?></p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Packages Section -->
    <section id="packages" class="pricing-section">
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html(get_meta_ads_meta('pricing_title', $post_id, $defaults)); ?></h2>
                <p><?php echo esc_html(get_meta_ads_meta('pricing_subtitle', $post_id, $defaults)); ?></p>
            </div>
            
            <div class="pricing-grid">
                <?php for($i = 1; $i <= 3; $i++) : 
                    $is_featured = ($i == 2) && get_meta_ads_meta("pricing_package_{$i}_featured", $post_id, $defaults);
                    $badge = get_meta_ads_meta("pricing_package_{$i}_badge", $post_id, $defaults);
                ?>
                <div class="pricing-card <?php echo $is_featured ? 'featured' : ''; ?> animate-on-scroll animate-stagger animate-fade-up">
                    <?php if($badge) : ?>
                    <div class="pricing-badge"><?php echo esc_html($badge); ?></div>
                    <?php endif; ?>
                    <div class="pricing-header">
                        <h3><?php echo esc_html(get_meta_ads_meta("pricing_package_{$i}_name", $post_id, $defaults)); ?></h3>
                        <div class="price"><?php echo esc_html(get_meta_ads_meta("pricing_package_{$i}_price", $post_id, $defaults)); ?><span><?php echo esc_html(get_meta_ads_meta("pricing_package_{$i}_period", $post_id, $defaults)); ?></span></div>
                        <p><?php echo esc_html(get_meta_ads_meta("pricing_package_{$i}_description", $post_id, $defaults)); ?></p>
                    </div>
                    <ul class="pricing-features">
                        <?php 
                        $features = explode("\n", get_meta_ads_meta("pricing_package_{$i}_features", $post_id, $defaults));
                        foreach($features as $feature) {
                            if (!empty(trim($feature))) {
                                echo '<li>' . esc_html(trim($feature)) . '</li>';
                            }
                        }
                        ?>
                    </ul>
                    <a href="#contact" class="<?php echo $is_featured ? 'btn-primary' : 'btn-outline'; ?>"><?php echo esc_html(get_meta_ads_meta("pricing_package_{$i}_button_text", $post_id, $defaults)); ?></a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Tools & Technologies -->
    <section class="tools-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_meta_ads_meta('tools_title', $post_id, $defaults)); ?></h2>
            <div class="tools-grid">
                <?php for($i = 1; $i <= 4; $i++) : ?>
                <div class="tool-item animate-on-scroll animate-stagger animate-fade-up">
                    <div class="tool-icon">
                        <i class="<?php echo esc_attr(get_meta_ads_meta("tool_icon_{$i}", $post_id, $defaults)); ?>"></i>
                    </div>
                    <h3><?php echo esc_html(get_meta_ads_meta("tool_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_meta_ads_meta("tool_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Industries Section -->
    <section class="industries-section">
        <div class="container">
            <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_meta_ads_meta('industries_title', $post_id, $defaults)); ?></h2>
            <div class="industries-grid">
                <?php for($i = 1; $i <= 6; $i++) : ?>
                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h3><?php echo esc_html(get_meta_ads_meta("industry_title_{$i}", $post_id, $defaults)); ?></h3>
                    <p><?php echo esc_html(get_meta_ads_meta("industry_content_{$i}", $post_id, $defaults)); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="testimonial-content animate-on-scroll animate-fade-up">
                <blockquote>
                    "<?php echo esc_html(get_meta_ads_meta('testimonial_quote', $post_id, $defaults)); ?>"
                </blockquote>
                <cite>
                    <strong><?php echo esc_html(get_meta_ads_meta('testimonial_name', $post_id, $defaults)); ?></strong><br>
                    <?php echo esc_html(get_meta_ads_meta('testimonial_title', $post_id, $defaults)); ?>
                </cite>
            </div>
        </div>
    </section>
      <!-- CTA Section -->
    <section class="meta-ads-cta text-centre">
        <div class="section-content animate-on-scroll animate-fade-up">
            <h2 class="animate-on-scroll animate-scale-up"><?php echo esc_html(get_meta_ads_meta('cta_title', $post_id, $defaults)); ?></h2>
            <p><?php echo esc_html(get_meta_ads_meta('cta_content', $post_id, $defaults)); ?></p>
            <div class="cta-buttons">
                <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary"><?php echo esc_html(get_meta_ads_meta('cta_button_1_text', $post_id, $defaults)); ?></a>
                <a href="<?php echo home_url('/services'); ?>" class="btn btn-secondary"><?php echo esc_html(get_meta_ads_meta('cta_button_2_text', $post_id, $defaults)); ?></a>
            </div>
            <div class="cta-benefits animate-on-scroll animate-stagger animate-fade-up">
                <?php for($i = 1; $i <= 3; $i++) : ?>
                <span class="benefit">✓ <?php echo esc_html(get_meta_ads_meta("cta_benefit_{$i}", $post_id, $defaults)); ?></span>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
