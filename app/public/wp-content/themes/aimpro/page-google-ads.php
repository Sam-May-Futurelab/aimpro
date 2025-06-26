<?php
/**
 * Template Name: Google Ads Management
 * Description: Google Ads management services page
 */

get_header(); 
?>
<style>
/* Direct page styles to ensure they override theme styles */
#primary.google-ads-page #contact.cta-section {
    background: linear-gradient(135deg, #F15A25 0%, #e04a15 100%) !important;
    padding: 60px 0 !important;
    margin: 60px 0 !important;
    border-radius: 16px !important;
    box-shadow: 0 20px 40px rgba(241, 90, 37, 0.2) !important;
    colour: white !important;
    position: relative !important;
    overflow: hidden !important;
}

#primary.google-ads-page #contact.cta-section .cta-content h2 {
    font-size: 36px !important;
    font-weight: 700 !important;
    margin-bottom: 20px !important;
    colour: white !important;
}

#primary.google-ads-page #contact.cta-section .cta-content p {
    font-size: 18px !important;
    margin-bottom: 30px !important;
    colour: rgba(255, 255, 255, 0.95) !important;
    line-height: 1.6 !important;
}

#primary.google-ads-page #contact.cta-section .cta-buttons {
    display: flex !important;
    justify-content: center !important;
    gap: 20px !important;
    margin-bottom: 30px !important;
}

#primary.google-ads-page #contact.cta-section .btn-primary {
    background: white !important;
    colour: #F15A25 !important;
    border: none !important;
}

#primary.google-ads-page #contact.cta-section .btn-outline {
    background: transparent !important;
    colour: white !important;
    border: 2px solid white !important;
}

#primary.google-ads-page #contact.cta-section .cta-features {
    display: flex !important;
    justify-content: center !important;
    gap: 40px !important;
    flex-wrap: wrap !important;
}

/* Ensure industries section has proper styling */
#primary.google-ads-page .industries-section {
    background: #f8fafc !important;
    padding: 80px 0 !important;
}

#primary.google-ads-page .industries-grid {
    display: grid !important;
    grid-template-columns: repeat(3, 1fr) !important;
    gap: 30px !important;
    margin-top: 40px !important;
}

#primary.google-ads-page .industry-item {
    background: white !important;
    padding: 30px !important;
    border-radius: 12px !important;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05) !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    text-align: left !important;
}

#primary.google-ads-page .industry-item:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
}

#primary.google-ads-page .industry-item h4 {
    font-size: 20px !important;
    colour: #F15A25 !important;
    margin-bottom: 10px !important;
    font-weight: 600 !important;
}

#primary.google-ads-page .industry-item p {
    colour: #64748b !important;
    line-height: 1.6 !important;
    margin: 0 !important;
    font-size: 15px !important;
}

#primary.google-ads-page #contact.cta-section .cta-features span {
    colour: white !important;
    font-size: 16px !important;
    font-weight: 500 !important;
}

/* Mobile adjustments */
@media (max-width: 768px) {
    #primary.google-ads-page #contact.cta-section .cta-buttons {
        flex-direction: column !important;
        align-items: center !important;
    }
    
    #primary.google-ads-page #contact.cta-section .cta-features {
        flex-direction: column !important;
        align-items: center !important;
        gap: 15px !important;
    }
    
    /* Industries Section Mobile Optimization */
    #primary.google-ads-page .industries-grid {
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        margin-top: 30px !important;
    }
    
    #primary.google-ads-page .industry-item {
        background: white !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        padding: 24px !important;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1) !important;
        text-align: center !important;
        transition: transform 0.3s ease !important;
    }
    
    #primary.google-ads-page .industry-item:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15) !important;
    }
    
    #primary.google-ads-page .industry-item h4 {
        font-size: 1.3rem !important;
        color: #f15a25 !important;
        margin-bottom: 12px !important;
        font-weight: 700 !important;
        line-height: 1.3 !important;
    }
    
    #primary.google-ads-page .industry-item p {
        color: #64748b !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        font-size: 0.95rem !important;
    }
    
    #primary.google-ads-page .industries-section {
        background: #f8fafc !important;
        padding: 60px 0 !important;
    }
    
    #primary.google-ads-page .industries-section .section-header {
        text-align: center !important;
        margin-bottom: 40px !important;
    }
    
    #primary.google-ads-page .industries-section .section-header h2 {
        font-size: 2rem !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin-bottom: 16px !important;
        line-height: 1.3 !important;
    }
    
    #primary.google-ads-page .industries-section .section-header p {
        font-size: 1.1rem !important;
        color: #64748b !important;
        line-height: 1.6 !important;
        max-width: 600px !important;
        margin: 0 auto !important;
    }
    
    /* Tools Section Mobile Optimization */
    #primary.google-ads-page .tools-grid {
        display: grid !important;
        grid-template-columns: 1fr !important;
        gap: 20px !important;
        margin-top: 30px !important;
    }
    
    #primary.google-ads-page .tool-item {
        background: linear-gradient(135deg, #f15a25 0%, #e04a15 100%) !important;
        border: none !important;
        border-radius: 12px !important;
        padding: 24px !important;
        box-shadow: 0 2px 8px rgba(241, 90, 37, 0.2) !important;
        text-align: center !important;
        transition: transform 0.3s ease !important;
        color: white !important;
    }
    
    #primary.google-ads-page .tool-item:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(241, 90, 37, 0.3) !important;
    }
    
    #primary.google-ads-page .tool-item .tool-icon {
        margin-bottom: 16px !important;
    }
    
    #primary.google-ads-page .tool-item .tool-icon i {
        font-size: 2rem !important;
        color: white !important;
    }
    
    #primary.google-ads-page .tool-item h4 {
        font-size: 1.3rem !important;
        color: white !important;
        margin-bottom: 12px !important;
        font-weight: 700 !important;
        line-height: 1.3 !important;
    }
    
    #primary.google-ads-page .tool-item p {
        color: rgba(255, 255, 255, 0.9) !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        font-size: 0.95rem !important;
    }
}
</style>

<main id="primary" class="services-page google-ads-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/services'); ?>">Services</a>
                <span class="separator">/</span>
                <a href="<?php echo home_url('/advertising-ppc'); ?>">PPC & Advertising</a>
                <span class="separator">/</span>
                <span class="current">Google Ads Management</span>
            </nav>
        </div>
    </div>    <!-- Hero Section -->
    <section class="page-hero services-hero google-ads-hero">
        <?php
        // Get meta values with fallbacks to defaults
        $defaults = aimpro_get_google_ads_default_values();
        
        $hero_badge = get_post_meta(get_the_ID(), '_google_ads_hero_badge', true);
        if (empty($hero_badge)) $hero_badge = $defaults['hero_badge'];
        
        $hero_title = get_post_meta(get_the_ID(), '_google_ads_hero_title', true);
        if (empty($hero_title)) $hero_title = $defaults['hero_title'];
        
        $hero_subtitle = get_post_meta(get_the_ID(), '_google_ads_hero_subtitle', true);
        if (empty($hero_subtitle)) $hero_subtitle = $defaults['hero_subtitle'];
        
        // Hero stats
        $hero_stat1_number = get_post_meta(get_the_ID(), '_google_ads_hero_stat1_number', true);
        if (empty($hero_stat1_number)) $hero_stat1_number = $defaults['hero_stat1_number'];
        
        $hero_stat1_label = get_post_meta(get_the_ID(), '_google_ads_hero_stat1_label', true);
        if (empty($hero_stat1_label)) $hero_stat1_label = $defaults['hero_stat1_label'];
        
        $hero_stat2_number = get_post_meta(get_the_ID(), '_google_ads_hero_stat2_number', true);
        if (empty($hero_stat2_number)) $hero_stat2_number = $defaults['hero_stat2_number'];
        
        $hero_stat2_label = get_post_meta(get_the_ID(), '_google_ads_hero_stat2_label', true);
        if (empty($hero_stat2_label)) $hero_stat2_label = $defaults['hero_stat2_label'];
        
        $hero_stat3_number = get_post_meta(get_the_ID(), '_google_ads_hero_stat3_number', true);
        if (empty($hero_stat3_number)) $hero_stat3_number = $defaults['hero_stat3_number'];
        
        $hero_stat3_label = get_post_meta(get_the_ID(), '_google_ads_hero_stat3_label', true);
        if (empty($hero_stat3_label)) $hero_stat3_label = $defaults['hero_stat3_label'];
        
        // Hero CTAs
        $hero_cta1_text = get_post_meta(get_the_ID(), '_google_ads_hero_cta1_text', true);
        if (empty($hero_cta1_text)) $hero_cta1_text = $defaults['hero_cta1_text'];
        
        $hero_cta2_text = get_post_meta(get_the_ID(), '_google_ads_hero_cta2_text', true);
        if (empty($hero_cta2_text)) $hero_cta2_text = $defaults['hero_cta2_text'];
        ?>
        <div class="hero-background">
            <div class="hero-pattern"></div>
        </div>        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <div class="hero-badge">
                    <span><?php echo esc_html($hero_badge); ?></span>
                </div>
                <h1><?php echo wp_kses_post($hero_title); ?></h1>
                <p class="hero-subtitle"><?php echo wp_kses_post($hero_subtitle); ?></p>                <div class="hero-stats animate-on-scroll animate-fade-up" style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($hero_stat1_number); ?></span>
                        <span class="stat-label"><?php echo esc_html($hero_stat1_label); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($hero_stat2_number); ?></span>
                        <span class="stat-label"><?php echo esc_html($hero_stat2_label); ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo esc_html($hero_stat3_number); ?></span>
                        <span class="stat-label"><?php echo esc_html($hero_stat3_label); ?></span>
                    </div>
                </div><div class="hero-ctas">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary streamlined"><?php echo esc_html($hero_cta1_text); ?></a>
                    <a href="#services" class="btn-outline streamlined"><?php echo esc_html($hero_cta2_text); ?></a>
                </div>
            </div>
        </div>
    </section>    <!-- Services Section -->
    <section id="services" class="services-overview-section">
        <?php
        // Get services data
        $services_title = get_post_meta(get_the_ID(), '_google_ads_services_title', true);
        if (empty($services_title)) $services_title = $defaults['services_title'];
        
        $services_subtitle = get_post_meta(get_the_ID(), '_google_ads_services_subtitle', true);
        if (empty($services_subtitle)) $services_subtitle = $defaults['services_subtitle'];
        ?>
        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html($services_title); ?></h2>
                <p><?php echo esc_html($services_subtitle); ?></p>
            </div>

            <div class="services-grid">
                <?php for ($i = 1; $i <= 6; $i++):
                    $service_title = get_post_meta(get_the_ID(), "_google_ads_service_title_{$i}", true);
                    if (empty($service_title)) $service_title = $defaults["service_title_{$i}"];
                    
                    $service_content = get_post_meta(get_the_ID(), "_google_ads_service_content_{$i}", true);
                    if (empty($service_content)) $service_content = $defaults["service_content_{$i}"];
                    
                    $service_features = get_post_meta(get_the_ID(), "_google_ads_service_features_{$i}", true);
                    if (empty($service_features)) $service_features = $defaults["service_features_{$i}"];
                      // Convert features to array
                    $features_array = explode("\n", $service_features);
                    
                    // Service FontAwesome icons array
                    $service_icons = [
                        1 => 'fas fa-search',        // Search Campaigns
                        2 => 'fas fa-tv',            // Display Campaigns  
                        3 => 'fas fa-shopping-cart', // Shopping Campaigns
                        4 => 'fab fa-youtube',       // YouTube Advertising
                        5 => 'fas fa-chart-line',    // Performance Max
                        6 => 'fas fa-map-marker-alt' // Local Campaigns
                    ];
                ?>
                <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                    <div class="service-icon">
                        <i class="<?php echo esc_attr($service_icons[$i]); ?>"></i>
                    </div>
                    <h3><?php echo esc_html($service_title); ?></h3>
                    <p><?php echo esc_html($service_content); ?></p>                    <ul class="service-features">
                        <?php foreach ($features_array as $feature): ?>
                            <li><?php echo esc_html(trim($feature)); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="service-cta-wrapper">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn-outline service-cta-btn">Get Started</a>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>    </section>

    <!-- Case Study Section with Better Styling -->
    <section class="success-metrics-section" style="background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); padding: 80px 0;">
        <div class="container">
            <div class="section-content">
                <div class="content-header animate-on-scroll animate-fade-up" style="text-align: center; margin-bottom: 50px;">
                    <h2 style="font-size: 2.5rem; font-weight: 700; colour: #1e293b; margin-bottom: 20px;">Law Firm Increases Qualified Leads by 340% with Strategic Google Ads</h2>
                    <div style="max-width: 900px; margin: 0 auto;">
                        <p style="font-size: 1.1rem; line-height: 1.8; colour: #64748b; margin-bottom: 15px;"><strong>The Challenge:</strong> A Manchester-based law firm was struggling with expensive Google Ads campaigns that generated low-quality leads, wasting £5,000+ monthly budget.</p>
                        <p style="font-size: 1.1rem; line-height: 1.8; colour: #64748b; margin-bottom: 15px;"><strong>Our Solution:</strong> We restructured their campaigns with precise keyword targeting, created compelling ad copy focused on legal expertise, and implemented advanced conversion tracking.</p>
                        <p style="font-size: 1.1rem; line-height: 1.8; colour: #64748b;"><strong>The Results:</strong> Within 120 days, we transformed their Google Ads performance completely.</p>
                    </div>
                </div>
                
                <div class="stats-grid animate-on-scroll animate-fade-up" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; max-width: 1000px; margin: 0 auto;">
                    <div class="stat-card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; border: 1px solid #e2e8f0;">
                        <span class="stat-number" style="display: block; font-size: 3rem; font-weight: 700; colour: #f15a25; margin-bottom: 10px;">340%</span>
                        <span class="stat-label" style="font-size: 1rem; font-weight: 600; colour: #64748b;">Increase in Qualified Leads</span>
                    </div>
                    <div class="stat-card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; border: 1px solid #e2e8f0;">
                        <span class="stat-number" style="display: block; font-size: 3rem; font-weight: 700; colour: #f15a25; margin-bottom: 10px;">58%</span>
                        <span class="stat-label" style="font-size: 1rem; font-weight: 600; colour: #64748b;">Lower Cost Per Lead</span>
                    </div>
                    <div class="stat-card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; border: 1px solid #e2e8f0;">
                        <span class="stat-number" style="display: block; font-size: 3rem; font-weight: 700; colour: #f15a25; margin-bottom: 10px;">720%</span>
                        <span class="stat-label" style="font-size: 1rem; font-weight: 600; colour: #64748b;">Return on Ad Spend</span>
                    </div>
                    <div class="stat-card" style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); text-align: center; border: 1px solid #e2e8f0;">
                        <span class="stat-number" style="display: block; font-size: 3rem; font-weight: 700; colour: #f15a25; margin-bottom: 10px;">£85,000</span>
                        <span class="stat-label" style="font-size: 1rem; font-weight: 600; colour: #64748b;">Monthly Revenue Generated</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <?php
        // Get process data
        $process_title = get_post_meta(get_the_ID(), '_google_ads_process_title', true);
        if (empty($process_title)) $process_title = $defaults['process_title'];
        
        $process_subtitle = get_post_meta(get_the_ID(), '_google_ads_process_subtitle', true);
        if (empty($process_subtitle)) $process_subtitle = $defaults['process_subtitle'];
        ?>
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html($process_title); ?></h2>
                <p><?php echo esc_html($process_subtitle); ?></p>
            </div>
            <div class="process-steps">
                <?php for ($i = 1; $i <= 5; $i++):
                    $step_number = get_post_meta(get_the_ID(), "_google_ads_process_step_number_{$i}", true);
                    if (empty($step_number)) $step_number = $defaults["process_step_number_{$i}"];
                    
                    $step_title = get_post_meta(get_the_ID(), "_google_ads_process_step_title_{$i}", true);
                    if (empty($step_title)) $step_title = $defaults["process_step_title_{$i}"];
                    
                    $step_content = get_post_meta(get_the_ID(), "_google_ads_process_step_content_{$i}", true);
                    if (empty($step_content)) $step_content = $defaults["process_step_content_{$i}"];
                ?>
                <div class="process-step">
                    <div class="step-number"><?php echo esc_html($step_number); ?></div>                    <h3><?php echo esc_html($step_title); ?></h3>
                    <p><?php echo esc_html($step_content); ?></p>
                </div>
                <?php endfor; ?>            </div>
                <div class="process-cta">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn-primary process-cta-btn">Launch Your Google Ads Campaign</a>
                </div>
        </div>
    </section>

    <!-- Tools & Technologies -->
    <section class="tools-section">
        <?php
        // Get tools data
        $tools_title = get_post_meta(get_the_ID(), '_google_ads_tools_title', true);
        if (empty($tools_title)) $tools_title = $defaults['tools_title'];
        
        $tools_subtitle = get_post_meta(get_the_ID(), '_google_ads_tools_subtitle', true);
        if (empty($tools_subtitle)) $tools_subtitle = $defaults['tools_subtitle'];
        ?>
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html($tools_title); ?></h2>
                <p><?php echo esc_html($tools_subtitle); ?></p>
            </div>            <div class="tools-grid">
                <?php 
                // Define icons for each tool
                $tool_icons = array(
                    1 => 'fas fa-edit',           // Google Ads Editor
                    2 => 'fas fa-chart-line',     // Google Analytics 4
                    3 => 'fas fa-tags',           // Google Tag Manager
                    4 => 'fas fa-search',         // Keyword Planner
                    5 => 'fas fa-chart-bar',      // SEMrush/Ahrefs
                    6 => 'fas fa-flask'           // Google Optimise
                );
                
                for ($i = 1; $i <= 6; $i++):
                    $tool_name = get_post_meta(get_the_ID(), "_google_ads_tool_name_{$i}", true);
                    if (empty($tool_name)) $tool_name = $defaults["tool_name_{$i}"];
                    
                    $tool_description = get_post_meta(get_the_ID(), "_google_ads_tool_description_{$i}", true);
                    if (empty($tool_description)) $tool_description = $defaults["tool_description_{$i}"];
                ?>
                <div class="tool-item">
                    <div class="tool-icon">
                        <i class="<?php echo esc_attr($tool_icons[$i]); ?>"></i>
                    </div>
                    <h4><?php echo esc_html($tool_name); ?></h4>
                    <p><?php echo esc_html($tool_description); ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Industry Focus -->
    <section class="industries-section">
        <?php
        // Get industries data
        $industries_title = get_post_meta(get_the_ID(), '_google_ads_industries_title', true);
        if (empty($industries_title)) $industries_title = $defaults['industries_title'];
        
        $industries_subtitle = get_post_meta(get_the_ID(), '_google_ads_industries_subtitle', true);
        if (empty($industries_subtitle)) $industries_subtitle = $defaults['industries_subtitle'];
        ?>
        <div class="container">
            <div class="section-header">
                <h2><?php echo esc_html($industries_title); ?></h2>
                <p><?php echo esc_html($industries_subtitle); ?></p>
            </div>
            <div class="industries-grid">
                <?php for ($i = 1; $i <= 6; $i++):
                    $industry_name = get_post_meta(get_the_ID(), "_google_ads_industry_name_{$i}", true);
                    if (empty($industry_name)) $industry_name = $defaults["industry_name_{$i}"];
                    
                    $industry_description = get_post_meta(get_the_ID(), "_google_ads_industry_description_{$i}", true);
                    if (empty($industry_description)) $industry_description = $defaults["industry_description_{$i}"];
                ?>                <div class="industry-item animate-on-scroll animate-stagger animate-fade-up">
                    <h4><?php echo esc_html($industry_name); ?></h4>
                    <p><?php echo esc_html($industry_description); ?></p>
                </div><?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <?php
        // Get pricing data
        $pricing_title = get_post_meta(get_the_ID(), '_google_ads_pricing_title', true);
        if (empty($pricing_title)) $pricing_title = $defaults['pricing_title'];
        
        $pricing_subtitle = get_post_meta(get_the_ID(), '_google_ads_pricing_subtitle', true);
        if (empty($pricing_subtitle)) $pricing_subtitle = $defaults['pricing_subtitle'];
        ?>        <div class="container">
            <div class="section-header animate-on-scroll animate-fade-up">
                <h2><?php echo esc_html($pricing_title); ?></h2>
                <p><?php echo esc_html($pricing_subtitle); ?></p>
            </div>
            <div class="pricing-grid">
                <?php for ($i = 1; $i <= 3; $i++):
                    $package_name = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_name", true);
                    if (empty($package_name)) $package_name = $defaults["pricing_package_{$i}_name"];
                    
                    $package_price = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_price", true);
                    if (empty($package_price)) $package_price = $defaults["pricing_package_{$i}_price"];
                    
                    $package_period = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_period", true);
                    if (empty($package_period)) $package_period = $defaults["pricing_package_{$i}_period"];
                    
                    $package_features = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_features", true);
                    if (empty($package_features)) $package_features = $defaults["pricing_package_{$i}_features"];
                    
                    $package_button_text = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_button_text", true);
                    if (empty($package_button_text)) $package_button_text = $defaults["pricing_package_{$i}_button_text"];
                    
                    // Optional fields for package 2
                    $package_badge = '';
                    $package_featured = false;
                    if ($i == 2) {
                        $package_badge = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_badge", true);
                        if (empty($package_badge) && isset($defaults["pricing_package_{$i}_badge"])) {
                            $package_badge = $defaults["pricing_package_{$i}_badge"];
                        }
                        
                        $package_featured = get_post_meta(get_the_ID(), "_google_ads_pricing_package_{$i}_featured", true);
                        if (empty($package_featured) && isset($defaults["pricing_package_{$i}_featured"])) {
                            $package_featured = $defaults["pricing_package_{$i}_featured"];
                        }
                    }
                    
                    // Convert features to array
                    $features_array = explode("\n", $package_features);
                ?>
                <div class="pricing-card animate-on-scroll animate-stagger animate-fade-up <?php echo ($package_featured) ? 'featured' : ''; ?>">
                    <div class="pricing-header">
                        <h3><?php echo esc_html($package_name); ?></h3>
                        <div class="price"><?php echo esc_html($package_price); ?><span><?php echo esc_html($package_period); ?></span></div>
                        <?php if (!empty($package_badge)): ?>
                        <span class="popular-badge"><?php echo esc_html($package_badge); ?></span>
                        <?php endif; ?>
                    </div>
                    <ul class="pricing-features">
                        <?php foreach ($features_array as $feature): ?>
                            <li><?php echo esc_html(trim($feature)); ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="#contact" class="btn-<?php echo ($package_featured) ? 'primary' : 'outline'; ?>"><?php echo esc_html($package_button_text); ?></a>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <?php
        // Get testimonial data
        $testimonial_quote = get_post_meta(get_the_ID(), '_google_ads_testimonial_quote', true);
        if (empty($testimonial_quote)) $testimonial_quote = $defaults['testimonial_quote'];
        
        $testimonial_name = get_post_meta(get_the_ID(), '_google_ads_testimonial_name', true);
        if (empty($testimonial_name)) $testimonial_name = $defaults['testimonial_name'];
        
        $testimonial_title = get_post_meta(get_the_ID(), '_google_ads_testimonial_title', true);
        if (empty($testimonial_title)) $testimonial_title = $defaults['testimonial_title'];
        ?>        <div class="container">
            <div class="testimonial-card animate-on-scroll animate-fade-up">
                <div class="testimonial-content">
                    <div class="quote-mark">"</div>
                    <p>"<?php echo esc_html($testimonial_quote); ?>"</p>
                    <div class="testimonial-author">
                        <strong><?php echo esc_html($testimonial_name); ?></strong>
                        <span><?php echo esc_html($testimonial_title); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- CTA Section -->
    <section class="simple-cta-section animate-on-scroll animate-scale-up">
        <?php
        // Get simple CTA data
        $simple_cta_title = get_post_meta(get_the_ID(), '_google_ads_simple_cta_title', true);
        if (empty($simple_cta_title)) $simple_cta_title = $defaults['simple_cta_title'];
        
        $simple_cta_content = get_post_meta(get_the_ID(), '_google_ads_simple_cta_content', true);
        if (empty($simple_cta_content)) $simple_cta_content = $defaults['simple_cta_content'];
        
        $simple_cta_button_text = get_post_meta(get_the_ID(), '_google_ads_simple_cta_button_text', true);
        if (empty($simple_cta_button_text)) $simple_cta_button_text = $defaults['simple_cta_button_text'];
        ?>
        <div class="section-content">
            <div class="simple-cta-content">
                <h2><?php echo esc_html($simple_cta_title); ?></h2>
                <p><?php echo esc_html($simple_cta_content); ?></p>
                <div class="simple-cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary"><?php echo esc_html($simple_cta_button_text); ?></a>
                </div>
                <div class="simple-cta-features">
                    <?php for ($i = 1; $i <= 3; $i++):
                        $simple_cta_feature = get_post_meta(get_the_ID(), "_google_ads_simple_cta_feature_{$i}", true);                        if (empty($simple_cta_feature)) $simple_cta_feature = $defaults["simple_cta_feature_{$i}"];
                    ?>
                    <span><?php echo esc_html($simple_cta_feature); ?></span>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>

