<?php
/**
 * Template Name: Advertising & PPC Services
 * Description: Comprehensive advertising and PPC services overview
 */

get_header(); 

// Get default values for meta fields
function get_advertising_ppc_defaults() {
    if (function_exists('aimpro_get_advertising_ppc_default_values')) {
        return aimpro_get_advertising_ppc_default_values();
    }
    
    // Fallback if function doesn't exist
    return array();
}

// Get default value or meta field with fallback
function get_advertising_ppc_field($field_key, $post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $defaults = get_advertising_ppc_defaults();
    $meta_key = '_advertising_ppc_' . $field_key;
    
    $value = get_post_meta($post_id, $meta_key, true);
    
    // If empty and we have a default, use it
    if (empty($value) && isset($defaults[$field_key])) {
        return $defaults[$field_key];
    }
    
    return $value;
}
?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">›</span>
                <span class="current">PPC & Advertising</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo esc_html(get_advertising_ppc_field('header_title')); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_advertising_ppc_field('header_subtitle')); ?></p>
                <div class="header-badges animate-on-scroll animate-stagger animate-fade-up">
                    <span class="badge"><?php echo esc_html(get_advertising_ppc_field('header_badge_1')); ?></span>
                    <span class="badge"><?php echo esc_html(get_advertising_ppc_field('header_badge_2')); ?></span>
                    <span class="badge"><?php echo esc_html(get_advertising_ppc_field('header_badge_3')); ?></span>
                </div>
            </div>
        </section>        <!-- Service Overview -->
        <section class="service-overview">
            <div class="section-content">
                <div class="overview-content">
                    <div class="overview-text animate-on-scroll animate-slide-left">
                        <h2><?php echo esc_html(get_advertising_ppc_field('overview_title')); ?></h2>
                        <p><?php echo esc_html(get_advertising_ppc_field('overview_content_1')); ?></p>
                        <p><?php echo esc_html(get_advertising_ppc_field('overview_content_2')); ?></p>
                    </div>
                    <div class="overview-stats animate-on-scroll animate-slide-right">
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="stat-number"><?php echo esc_html(get_advertising_ppc_field('overview_stat1_number')); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_advertising_ppc_field('overview_stat1_label')); ?></span>
                        </div>
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="stat-number"><?php echo esc_html(get_advertising_ppc_field('overview_stat2_number')); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_advertising_ppc_field('overview_stat2_label')); ?></span>
                        </div>
                        <div class="stat-item animate-on-scroll animate-stagger animate-scale-up">
                            <span class="stat-number"><?php echo esc_html(get_advertising_ppc_field('overview_stat3_number')); ?></span>
                            <span class="stat-label"><?php echo esc_html(get_advertising_ppc_field('overview_stat3_label')); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services Grid -->
        <section class="service-overview">
            <div class="container">
                <div class="section-header animate-on-scroll animate-fade-up">
                    <h2>Our Advertising & PPC Services</h2>
                    <p>Comprehensive pay-per-click advertising solutions designed to maximise your return on investment across all major platforms.</p>
                </div>                <div class="services-grid">                      <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fab fa-google" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3>Google Ads Management</h3>
                            <p>Comprehensive Google Ads campaigns including Search, Display, Shopping, and YouTube advertising for maximum reach and ROI.</p>
                            <ul class="service-features">
                                <li>Search campaign optimisation</li>
                                <li>Display and remarketing campaigns</li>
                                <li>Shopping ads for e-commerce</li>
                                <li>YouTube advertising</li>                                <li>Performance Max campaigns</li>
                            </ul>
                            <a href="<?php echo home_url('/google-ads'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fab fa-facebook" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3>Meta Ads (Facebook & Instagram)</h3>
                            <p>Strategic social media advertising campaigns on Facebook and Instagram to reach and engage your target audience effectively.</p>
                            <ul class="service-features">
                                <li>Facebook advertising campaigns</li>
                                <li>Instagram advertising</li>
                                <li>Audience targeting and lookalikes</li>
                                <li>Creative optimisation</li>                                <li>Conversion tracking setup</li>
                            </ul>
                            <a href="<?php echo home_url('/meta-ads'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fab fa-microsoft" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3>Microsoft Ads (Bing)</h3>
                            <p>Capture additional market share with Microsoft Ads on Bing, reaching audiences that competitors often overlook.</p>
                            <ul class="service-features">
                                <li>Bing search advertising</li>
                                <li>Microsoft Audience Network</li>
                                <li>LinkedIn integration targeting</li>
                                <li>Import from Google Ads</li>
                                <li>Unique audience insights</li>
                            </ul>
                            <div class="service-results">
                                <span>Average: 35% lower CPC than Google</span>
                            </div>
                            <a href="<?php echo home_url('/microsoft-ads'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-redo-alt" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3>Retargeting & Display Advertising</h3>
                            <p>Re-engage visitors who didn't convert with strategic retargeting campaigns across multiple platforms and networks.</p>
                            <ul class="service-features">
                                <li>Dynamic retargeting campaigns</li>
                                <li>Cross-platform remarketing</li>
                                <li>Display network advertising</li>
                                <li>Custom audience creation</li>
                                <li>Sequential messaging strategies</li>
                            </ul>
                            <div class="service-results">
                                <span>Average: 3x higher conversion rates</span>
                            </div>
                            <a href="<?php echo home_url('/retargeting-display'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-clipboard-check" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3>PPC Audit</h3>
                            <p>Comprehensive analysis of your existing PPC campaigns with actionable recommendations for immediate improvements.</p>
                            <ul class="service-features">
                                <li>Account structure analysis</li>
                                <li>Keyword performance review</li>
                                <li>Ad copy effectiveness assessment</li>
                                <li>Landing page optimisation</li>
                                <li>Conversion tracking audit</li>
                            </ul>
                            <div class="service-results">
                                <span>Identify 20+ optimisation opportunities</span>
                            </div>
                            <a href="<?php echo home_url('/ppc-audit'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-handshake" style="font-size: 2.5rem;"></i>
                        </div>
                        <div class="service-content">
                            <h3>White Label PPC</h3>
                            <p>Professional PPC management services for agencies and resellers, delivered under your brand with full transparency.</p>
                            <ul class="service-features">
                                <li>Branded PPC reporting</li>
                                <li>Agency dashboard access</li>
                                <li>Scalable campaign management</li>
                                <li>Partner training and support</li>
                                <li>Client communication tools</li>
                            </ul>
                            <div class="service-results">
                                <span>Scale your agency PPC offerings</span>
                            </div>
                            <a href="<?php echo home_url('/white-label-ppc'); ?>" class="service-cta">Learn More</a>
                        </div>
                    </div>                </div>
            </div>
        </section>

        <!-- PPC Success Story -->
        <section class="ppc-case-study" style="padding-top: 5px;">
            <div class="section-content">
                <div class="case-study-content">
                    <div class="case-study-text animate-on-scroll animate-slide-left">
                        <h2>Case Study: E-commerce Success Story</h2>
                        <h3>Online Retailer Achieves 520% ROI Improvement</h3>
                        <p>A growing e-commerce business approached us with underperforming Google Ads campaigns and high advertising costs. Our comprehensive PPC optimisation strategy transformed their advertising performance and dramatically improved their bottom line.</p>
                        
                        <div class="challenge-solution">
                            <div class="challenge">
                                <h4>The Challenge</h4>
                                <ul>
                                    <li>High cost per acquisition (£45 average)</li>
                                    <li>Poor campaign structure and targeting</li>
                                    <li>Low-quality traffic and conversions</li>
                                    <li>Wasted ad spend on irrelevant keywords</li>
                                    <li>No conversion tracking or optimisation</li>
                                </ul>
                            </div>
                            <div class="solution">
                                <h4>Our Solution</h4>
                                <ul>
                                    <li>Complete account restructure and keyword optimisation</li>
                                    <li>Implemented advanced audience targeting</li>
                                    <li>Created high-converting ad copy variations</li>
                                    <li>Set up comprehensive conversion tracking</li>
                                    <li>optimised landing pages for better conversions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="case-study-metrics animate-on-scroll animate-slide-right">
                        <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                            <div class="metric-number">520%</div>
                            <div class="metric-label">ROI Improvement</div>
                        </div>
                        <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                            <div class="metric-number">73%</div>
                            <div class="metric-label">Reduction in CPA</div>
                        </div>
                        <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                            <div class="metric-number">340%</div>
                            <div class="metric-label">Increase in Conversions</div>
                        </div>
                        <div class="metric-card animate-on-scroll animate-stagger animate-scale-up">
                            <div class="metric-number">8 Weeks</div>
                            <div class="metric-label">Time to See Results</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        <!-- PPC Process -->
        <section class="ppc-process">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">Our PPC Management Process</h2>
                <div class="process-steps">
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Discovery & Strategy</h3>
                            <p>Comprehensive analysis of your business, competitors, and market to develop a winning PPC strategy.</p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Campaign Setup</h3>
                            <p>Expert campaign structure, keyword research, ad creation, and tracking implementation across chosen platforms.</p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Launch & Monitor</h3>
                            <p>Campaign launch with close monitoring of performance metrics and immediate optimisations as needed.</p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Optimise & Scale</h3>
                            <p>Continuous optimisation based on data insights, scaling successful campaigns and improving underperformers.</p>
                        </div>
                    </div>
                    <div class="process-step animate-on-scroll animate-stagger animate-fade-up">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Report & Refine</h3>                            <p>Regular reporting with insights and recommendations for ongoing improvement and growth.</p>
                        </div>
                    </div>
                </div>
                <div class="process-cta animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Transform Your PPC Strategy</a>
                </div>
            </div>
        </section>        <!-- Platforms We Manage -->
        <section class="local-seo-services">
            <div class="container">
                <h2 class="animate-on-scroll animate-fade-up">Advertising Platforms We Manage</h2>
                <div class="services-grid">
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="service-content">
                            <h3>Search Advertising</h3>
                            <p>Comprehensive search advertising across major platforms to capture high-intent traffic.</p>
                            <ul class="service-features">
                                <li>Google Ads Search Campaigns</li>
                                <li>Microsoft Ads (Bing)</li>
                                <li>YouTube Search Ads</li>
                                <li>Amazon Advertising</li>
                                <li>Google Display Network</li>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="service-cta">Get Search Advertising</a>
                        </div>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="service-content">
                            <h3>E-commerce Advertising</h3>
                            <p>Specialized advertising solutions for online retailers and product-based businesses.</p>
                            <ul class="service-features">
                                <li>Google Shopping Ads</li>
                                <li>Facebook Shop Ads</li>
                                <li>Amazon PPC</li>
                                <li>Product Listing Ads</li>
                                <li>Programmatic Display</li>
                                <li>Retargeting Networks</li>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="service-cta">Boost E-commerce Sales</a>
                        </div>
                    </div>
                    
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="service-content">
                            <h3>Social Media Advertising</h3>
                            <p>Strategic social media campaigns to engage your target audience across popular platforms.</p>
                            <ul class="service-features">
                                <li>Facebook Advertising</li>
                                <li>Instagram Advertising</li>
                                <li>LinkedIn Ads</li>
                                <li>Twitter Ads</li>
                                <li>YouTube Video Ads</li>
                            </ul>
                            <a href="<?php echo home_url('/contact'); ?>" class="service-cta">Start Social Advertising</a>
                        </div>
                    </div>
                </div>
                <div class="section-cta text-center animate-on-scroll animate-fade-up">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Talk to an Advertising Expert</a>
                </div>
            </div>
        </section>        <!-- Industry Applications -->
        <section class="industry-applications">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up">PPC Advertising for Your Industry</h2>
                <div class="industry-grid">
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3>E-commerce</h3>
                        <p>Shopping campaigns, dynamic remarketing, and conversion optimisation for online retailers and product-based businesses.</p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Professional Services</h3>
                        <p>Lead generation campaigns, local targeting, and conversion tracking for lawyers, accountants, consultants, and agencies.</p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Healthcare</h3>
                        <p>Compliant advertising strategies for healthcare providers, medical practices, and wellness businesses.</p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Real Estate</h3>
                        <p>Local property advertising, lead generation, and audience targeting for real estate agents and property developers.</p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Home & Garden</h3>
                        <p>Seasonal campaigns, local targeting, and conversion optimisation for contractors, landscapers, and home improvement businesses.</p>
                    </div>
                    <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                        <h3>Automotive</h3>
                        <p>Vehicle advertising, local dealership promotion, and service-based campaigns for automotive businesses.</p>
                    </div>
                </div>
            </div>
        </section>        <!-- Client Testimonial -->
        <section class="client-testimonial">
            <div class="section-content">
                <div class="testimonial-content animate-on-scroll animate-fade-up">
                    <div class="quote-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 21C3 17.4 5.4 17.4 5.4 17.4H9V21H3Z" stroke="currentcolour" stroke-width="2"/>
                            <path d="M15 21C15 17.4 17.4 17.4 17.4 17.4H21V21H15Z" stroke="currentcolour" stroke-width="2"/>
                        </svg>
                    </div>
                    <blockquote>
                        "AIM Pro Marketing completely transformed our Google Ads performance. Within 3 months, our cost per lead dropped by 60% while our conversion volume tripled. Their expertise in PPC is unmatched."
                    </blockquote>
                    <div class="testimonial-author">
                        <strong>Michael Thompson</strong>
                        <span>Marketing Director, TechStart Solutions</span>
                    </div>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section id="contact" class="cta-section">
            <div class="container">
                <div class="cta-content animate-on-scroll animate-scale-up">
                    <h2>Ready to Maximize Your Advertising ROI?</h2>
                    <p>Get a free PPC audit and strategy session. We'll analyse your current campaigns and show you exactly how to improve performance and reduce costs.</p>
                    <div class="cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-primary">Get Free PPC Audit</a>
                        <a href="<?php echo home_url('/services'); ?>" class="btn-outline">View All Services</a>
                    </div>                    <div class="cta-features">
                        <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> Free campaign analysis</span>
                        <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> Performance improvement plan</span>
                        <span class="feature-check"><i class="fas fa-check" aria-hidden="true"></i> No obligation consultation</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>

