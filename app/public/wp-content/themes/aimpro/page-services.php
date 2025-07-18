﻿<?php
/**
 * Template Name: Services Page
 * Description: Main services hub page
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Services</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <?php 
                $header_title = get_post_meta(get_the_ID(), '_services_header_title', true) ?: 'Services';
                $header_subtitle = get_post_meta(get_the_ID(), '_services_header_subtitle', true) ?: 'Comprehensive digital marketing services that drive measurable results';
                ?>
                <h1><?php echo wp_kses_post($header_title); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post($header_subtitle); ?></p>
            </div>
        </section>

        <!-- Services Introduction -->
        <section class="services-intro">
            <div class="section-content">
                <?php 
                $intro_title = get_post_meta(get_the_ID(), '_services_intro_title', true) ?: 'Award-Winning Digital Marketing Services';
                $intro_description = get_post_meta(get_the_ID(), '_services_intro_description', true) ?: 'From SEO and PPC to website development and marketing automation, our comprehensive suite of services is designed to accelerate your business growth. Each service is delivered by certified experts using proven methodologies and cutting-edge technology.';
                ?>
                <div class="intro-content animate-on-scroll animate-slide-left">
                    <h2><?php echo wp_kses_post($intro_title); ?></h2>
                    <p><?php echo wp_kses_post($intro_description); ?></p>
                </div>                <?php 
                // Get statistics
                $stats = array();
                for ($i = 1; $i <= 3; $i++) {
                    $stat_number = get_post_meta(get_the_ID(), "_services_stat_{$i}_number", true);
                    $stat_label = get_post_meta(get_the_ID(), "_services_stat_{$i}_label", true);
                    
                    if ($stat_number || $stat_label) {
                        $stats[] = array(
                            'number' => $stat_number ?: ($i == 1 ? '15+' : ($i == 2 ? '500+' : '98%')),
                            'label' => $stat_label ?: ($i == 1 ? 'Service Categories' : ($i == 2 ? 'Successful Projects' : 'Client Satisfaction'))
                        );
                    }
                }
                ?>
                <div class="services-stats animate-on-scroll animate-slide-right">
                    <?php foreach ($stats as $stat): ?>
                    <div class="stat-item">
                        <div class="stat-number"><?php echo wp_kses_post($stat['number']); ?></div>
                        <div class="stat-label"><?php echo wp_kses_post($stat['label']); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>        <!-- Service Links Grid -->
        <section class="service-links-grid">
            <div class="section-content">
                <?php 
                $grid_title = get_post_meta(get_the_ID(), '_services_grid_title', true) ?: 'Our Services';
                $grid_subtitle = get_post_meta(get_the_ID(), '_services_grid_subtitle', true) ?: 'Explore our comprehensive range of services designed to elevate your digital presence';
                ?>
                <div class="service-links-heading animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post($grid_title); ?></h2>
                    <p><?php echo wp_kses_post($grid_subtitle); ?></p>
                </div>
                
                <!-- Quick Service Navigation Grid -->
                <div class="services-grid">
                    <?php 
                    // Default services data
                    $default_services = array(
                        1 => array('title' => 'SEO Services', 'description' => 'Improve search rankings and organic traffic', 'icon' => 'fas fa-search', 'link' => home_url('/seo-services')),
                        2 => array('title' => 'PPC Advertising', 'description' => 'Maximize ROI with targeted advertising', 'icon' => 'fas fa-bullhorn', 'link' => home_url('/advertising-ppc')),
                        3 => array('title' => 'Website Design', 'description' => 'Beautiful, conversion-focused websites', 'icon' => 'fas fa-paint-brush', 'link' => home_url('/website-design')),
                        4 => array('title' => 'Marketing Automation', 'description' => 'Streamline and scale your marketing', 'icon' => 'fas fa-cogs', 'link' => home_url('/automate-marketing')),
                        5 => array('title' => 'Lead Generation', 'description' => 'Convert visitors into qualified leads', 'icon' => 'fas fa-chart-line', 'link' => home_url('/lead-generation')),
                        6 => array('title' => 'Sales Funnels', 'description' => 'Optimise your conversion process', 'icon' => 'fas fa-funnel-dollar', 'link' => home_url('/streamline-sales-funnel'))
                    );
                    
                    for ($i = 1; $i <= 6; $i++):
                        $service_title = get_post_meta(get_the_ID(), "_services_service_{$i}_title", true) ?: $default_services[$i]['title'];
                        $service_description = get_post_meta(get_the_ID(), "_services_service_{$i}_description", true) ?: $default_services[$i]['description'];
                        $service_icon = get_post_meta(get_the_ID(), "_services_service_{$i}_icon", true) ?: $default_services[$i]['icon'];
                        $service_link = get_post_meta(get_the_ID(), "_services_service_{$i}_link", true) ?: $default_services[$i]['link'];
                    ?>
                    <div class="service-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="service-icon">
                            <i class="<?php echo esc_attr($service_icon); ?>" aria-hidden="true"></i>
                        </div>
                        <h3><?php echo wp_kses_post($service_title); ?></h3>
                        <p><?php echo wp_kses_post($service_description); ?></p>
                        <a href="<?php echo esc_url($service_link); ?>" class="service-link">Learn More</a>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- Services Categories -->
        <section class="services-categories">
            <div class="section-content">
                  <!-- SEO Services -->
                <div class="service-category-section">
                    <div class="category-header animate-on-scroll animate-fade-up">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="8" stroke="currentcolour" stroke-width="2"/>
                                <path d="M21 21L16.65 16.65" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>SEO Services</h2>
                            <p>Dominate search results and drive organic traffic with our comprehensive SEO strategies</p>
                            <a href="<?php echo home_url('/seo-services'); ?>" class="category-main-link">Explore SEO Services</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Local SEO</h3>
                            <p>Dominate local search results and attract customers in your area.</p>
                            <ul class="service-features">
                                <li>Google My Business optimisation</li>
                                <li>Local citation building</li>
                                <li>Review management</li>
                                <li>Local keyword targeting</li>
                            </ul>
                            <a href="<?php echo home_url('/local-seo'); ?>" class="service-link">Learn More</a>
                        </div>                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>SEO Audit</h3>
                            <p>Comprehensive analysis of your website's SEO performance and opportunities.</p>
                            <ul class="service-features">
                                <li>Technical SEO analysis</li>
                                <li>Content gap identification</li>
                                <li>Competitor analysis</li>
                                <li>Action plan creation</li>
                            </ul>
                            <a href="<?php echo home_url('/seo-audit'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>Technical SEO</h3>
                            <p>optimise your website's technical foundation for better search performance.</p>
                            <ul class="service-features">
                                <li>Site speed optimisation</li>
                                <li>Core Web Vitals improvement</li>
                                <li>Schema markup implementation</li>
                                <li>Mobile optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/technical-seo'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>On-Page SEO</h3>
                            <p>optimise individual pages to rank higher and earn more relevant traffic.</p>
                            <ul class="service-features">
                                <li>Keyword optimisation</li>
                                <li>Content optimisation</li>
                                <li>Meta tag optimisation</li>
                                <li>Internal linking strategy</li>
                            </ul>
                            <a href="<?php echo home_url('/on-page-seo'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card animate-on-scroll animate-stagger animate-fade-up">
                            <h3>White Label SEO</h3>
                            <p>Professional SEO services for agencies and resellers under your brand.</p>
                            <ul class="service-features">
                                <li>Branded reporting</li>
                                <li>Agency dashboard access</li>
                                <li>Scalable solutions</li>
                                <li>Partner support</li>
                            </ul>
                            <a href="<?php echo home_url('/white-label-seo'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Advertising & PPC -->
                <div class="service-category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 20V10" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 20V4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 20V14" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>Advertising & PPC</h2>
                            <p>Maximize your advertising ROI with expertly managed pay-per-click campaigns</p>
                            <a href="<?php echo home_url('/advertising-ppc'); ?>" class="category-main-link">Explore PPC Services</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card">
                            <h3>Google Ads</h3>
                            <p>Drive qualified traffic and conversions with expertly managed Google Ads campaigns.</p>
                            <ul class="service-features">
                                <li>Search campaign management</li>
                                <li>Shopping ads optimisation</li>
                                <li>Display advertising</li>
                                <li>YouTube advertising</li>
                            </ul>
                            <a href="<?php echo home_url('/google-ads'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Meta Ads (FB/Instagram)</h3>
                            <p>Reach your audience on Facebook and Instagram with targeted social media advertising.</p>
                            <ul class="service-features">
                                <li>Facebook advertising</li>
                                <li>Instagram advertising</li>
                                <li>Audience targeting</li>
                                <li>Creative optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/meta-ads'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Microsoft/Bing Ads</h3>
                            <p>Capture additional market share with Microsoft Advertising campaigns.</p>
                            <ul class="service-features">
                                <li>Bing search advertising</li>
                                <li>LinkedIn audience network</li>
                                <li>Microsoft audience targeting</li>
                                <li>Cross-platform optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/microsoft-ads'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Retargeting & Display</h3>
                            <p>Re-engage visitors and build brand awareness with strategic display advertising.</p>
                            <ul class="service-features">
                                <li>Retargeting campaigns</li>
                                <li>Display network advertising</li>
                                <li>Dynamic remarketing</li>
                                <li>Cross-device tracking</li>
                            </ul>
                            <a href="<?php echo home_url('/retargeting-display'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>PPC Audit</h3>
                            <p>Comprehensive analysis of your existing PPC campaigns for optimisation opportunities.</p>
                            <ul class="service-features">
                                <li>Account structure review</li>
                                <li>Keyword analysis</li>
                                <li>Ad copy optimisation</li>
                                <li>Performance recommendations</li>
                            </ul>
                            <a href="<?php echo home_url('/ppc-audit'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>White Label PPC</h3>
                            <p>Professional PPC management services for agencies under your brand.</p>
                            <ul class="service-features">
                                <li>Branded reporting</li>
                                <li>Agency dashboard</li>
                                <li>Scalable management</li>
                                <li>Partner training</li>
                            </ul>
                            <a href="<?php echo home_url('/white-label-ppc'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Marketing Automation -->
                <div class="service-category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>Marketing Automation</h2>
                            <p>Streamline your marketing processes with intelligent automation and AI-powered tools</p>
                            <a href="<?php echo home_url('/marketing-automation'); ?>" class="category-main-link">Explore Automation</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card">
                            <h3>AI CRM Setup</h3>
                            <p>Implement and optimise AI-powered CRM systems for better customer management.</p>
                            <ul class="service-features">
                                <li>CRM implementation</li>
                                <li>AI workflow automation</li>
                                <li>Lead scoring setup</li>
                                <li>Integration management</li>
                            </ul>
                            <a href="<?php echo home_url('/ai-crm-setup'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Email & SMS Flows</h3>
                            <p>Create automated email and SMS sequences that nurture leads and drive conversions.</p>
                            <ul class="service-features">
                                <li>Email automation</li>
                                <li>SMS marketing flows</li>
                                <li>behavioural triggers</li>
                                <li>Segmentation strategy</li>
                            </ul>
                            <a href="<?php echo home_url('/email-sms-flows'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Email Campaigns</h3>
                            <p>Design and execute high-converting email marketing campaigns.</p>
                            <ul class="service-features">
                                <li>Campaign design</li>
                                <li>List management</li>
                                <li>A/B testing</li>
                                <li>Performance optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/email-campaigns'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Funnel Automation</h3>
                            <p>Automate your sales funnels to convert more leads into customers.</p>
                            <ul class="service-features">
                                <li>Funnel design</li>
                                <li>Automation setup</li>
                                <li>Lead qualification</li>
                                <li>Conversion optimisation</li>
                            </ul>
                            <a href="<?php echo home_url('/funnel-automation'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Chatbots</h3>
                            <p>Implement intelligent chatbots to engage visitors and qualify leads 24/7.</p>
                            <ul class="service-features">
                                <li>Chatbot development</li>
                                <li>AI conversation flows</li>
                                <li>Lead qualification</li>
                                <li>Integration setup</li>
                            </ul>
                            <a href="<?php echo home_url('/chatbots'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>AI Tools</h3>
                            <p>Leverage cutting-edge AI tools to enhance your marketing effectiveness.</p>
                            <ul class="service-features">
                                <li>AI tool implementation</li>
                                <li>Process automation</li>
                                <li>Performance analytics</li>
                                <li>Custom AI solutions</li>
                            </ul>
                            <a href="<?php echo home_url('/ai-tools'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Website Development -->
                <div class="service-category-section">
                    <div class="category-header">
                        <div class="category-icon">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2" stroke="currentcolour" stroke-width="2"/>
                                <line x1="8" y1="21" x2="16" y2="21" stroke="currentcolour" stroke-width="2"/>
                                <line x1="12" y1="17" x2="12" y2="21" stroke="currentcolour" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="category-info">
                            <h2>Website Development</h2>
                            <p>Create high-converting websites that engage visitors and drive business growth</p>
                            <a href="<?php echo home_url('/website-development'); ?>" class="category-main-link">Explore Web Services</a>
                        </div>
                    </div>
                    
                    <div class="service-subcategories">
                        <div class="subcategory-card">
                            <h3>Website Design</h3>
                            <p>Custom website design that reflects your brand and converts visitors into customers.</p>
                            <ul class="service-features">
                                <li>Custom design</li>
                                <li>Mobile-first approach</li>
                                <li>User experience optimisation</li>
                                <li>Brand integration</li>
                            </ul>
                            <a href="<?php echo home_url('/website-design'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Landing Pages</h3>
                            <p>High-converting landing pages designed to maximise campaign performance.</p>
                            <ul class="service-features">
                                <li>Conversion-focused design</li>
                                <li>A/B testing setup</li>
                                <li>Campaign integration</li>
                                <li>Performance tracking</li>
                            </ul>
                            <a href="<?php echo home_url('/landing-pages'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>Funnel Builds</h3>
                            <p>Complete sales funnel development from lead capture to conversion.</p>
                            <ul class="service-features">
                                <li>Multi-step funnels</li>
                                <li>Conversion optimisation</li>
                                <li>Payment integration</li>
                                <li>Analytics setup</li>
                            </ul>
                            <a href="<?php echo home_url('/funnel-builds'); ?>" class="service-link">Learn More</a>
                        </div>

                        <div class="subcategory-card">
                            <h3>UX/UI optimisation</h3>
                            <p>Improve user experience and interface design for better conversions.</p>
                            <ul class="service-features">
                                <li>User experience audit</li>
                                <li>Interface optimisation</li>
                                <li>Usability testing</li>
                                <li>Conversion improvements</li>
                            </ul>
                            <a href="<?php echo home_url('/ux-ui-optimisation'); ?>" class="service-link">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>        </section>

        <!-- Why Choose Our Services -->
        <section class="services-benefits services-why-choose">
            <div class="section-content">
                <?php 
                $benefits_title = get_post_meta(get_the_ID(), '_services_benefits_title', true) ?: 'Why Choose Aimpro Digital Services?';
                ?>
                <h2><?php echo wp_kses_post($benefits_title); ?></h2>
                <div class="benefits-grid benefits-grid-4">
                    <?php 
                    // Default benefits data
                    $default_benefits = array(
                        1 => array('title' => 'Certified Experts', 'description' => 'Our team holds certifications from Google, Meta, Microsoft, and other leading platforms.'),
                        2 => array('title' => 'Data-Driven Results', 'description' => 'Every strategy is backed by data analysis and proven methodologies for measurable results.'),
                        3 => array('title' => 'Integrated Approach', 'description' => 'All our services work together seamlessly to create a comprehensive marketing ecosystem.'),
                        4 => array('title' => 'Transparent Reporting', 'description' => 'Regular, detailed reports keep you informed about performance and ROI at every step.')
                    );
                    
                    // SVG icons for each benefit
                    $benefit_icons = array(
                        1 => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentcolour" stroke-width="2"/></svg>',
                        2 => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 20V10" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 20V4" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 20V14" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        3 => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        4 => '<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22 12H18L15 21L9 3L6 12H2" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
                    );
                    
                    for ($i = 1; $i <= 4; $i++):
                        $benefit_title = get_post_meta(get_the_ID(), "_services_benefit_{$i}_title", true) ?: $default_benefits[$i]['title'];
                        $benefit_description = get_post_meta(get_the_ID(), "_services_benefit_{$i}_description", true) ?: $default_benefits[$i]['description'];
                    ?>
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <?php echo $benefit_icons[$i]; ?>
                        </div>
                        <h3><?php echo wp_kses_post($benefit_title); ?></h3>
                        <p><?php echo wp_kses_post($benefit_description); ?></p>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- Service Process -->
        <section class="services-process">
            <div class="section-content">
                <?php 
                $process_title = get_post_meta(get_the_ID(), '_services_process_title', true) ?: 'Our Service Delivery Process';
                ?>
                <h2><?php echo wp_kses_post($process_title); ?></h2>
                <div class="process-steps">
                    <?php 
                    // Default process steps
                    $default_steps = array(
                        1 => array('title' => 'Discovery & Analysis', 'description' => 'We analyze your business, goals, and current performance to create a tailored strategy.'),
                        2 => array('title' => 'Strategy Development', 'description' => 'Our experts develop a comprehensive plan aligned with your objectives and budget.'),
                        3 => array('title' => 'Implementation', 'description' => 'We execute the strategy using proven methodologies and cutting-edge tools.'),
                        4 => array('title' => 'Monitor & Optimize', 'description' => 'Continuous monitoring and optimization ensure maximum performance and ROI.')
                    );
                    
                    for ($i = 1; $i <= 4; $i++):
                        $step_title = get_post_meta(get_the_ID(), "_services_process_step_{$i}_title", true) ?: $default_steps[$i]['title'];
                        $step_description = get_post_meta(get_the_ID(), "_services_process_step_{$i}_description", true) ?: $default_steps[$i]['description'];
                    ?>
                    <div class="process-step">
                        <div class="step-number"><?php echo $i; ?></div>
                        <div class="step-content">
                            <h3><?php echo wp_kses_post($step_title); ?></h3>
                            <p><?php echo wp_kses_post($step_description); ?></p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="services-cta">
            <div class="section-content">
                <?php 
                $cta_title = get_post_meta(get_the_ID(), '_services_cta_title', true) ?: 'Ready to Transform Your Digital Presence?';
                $cta_description = get_post_meta(get_the_ID(), '_services_cta_description', true) ?: 'Let\'s discuss which services will have the biggest impact on your business growth.';
                $cta_primary_text = get_post_meta(get_the_ID(), '_services_cta_primary_text', true) ?: 'Get Free Consultation';
                $cta_primary_link = get_post_meta(get_the_ID(), '_services_cta_primary_link', true) ?: home_url('/contact');
                $cta_secondary_text = get_post_meta(get_the_ID(), '_services_cta_secondary_text', true) ?: 'View Our Results';
                $cta_secondary_link = get_post_meta(get_the_ID(), '_services_cta_secondary_link', true) ?: home_url('/case-studies');
                $cta_features = get_post_meta(get_the_ID(), '_services_cta_features', true) ?: array('Free strategy session', 'No obligation consultation', 'Custom recommendations');
                ?>
                <h2><?php echo wp_kses_post($cta_title); ?></h2>
                <p><?php echo wp_kses_post($cta_description); ?></p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url($cta_primary_link); ?>" class="btn btn-primary"><?php echo wp_kses_post($cta_primary_text); ?></a>
                    <a href="<?php echo esc_url($cta_secondary_link); ?>" class="btn btn-secondary"><?php echo wp_kses_post($cta_secondary_text); ?></a>
                </div>                <div class="cta-benefits">
                    <?php foreach ((array)$cta_features as $feature): ?>
                        <?php if (!empty(trim($feature))): ?>
                        <span class="benefit"><i class="fas fa-check" aria-hidden="true"></i> <?php echo esc_html($feature); ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </div>
</main>

<style>
/* Services Page Mobile Optimization */

/* Benefit Cards Styles */
.benefits-grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.benefit-card {
    background: #ffffff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 2rem 1.5rem;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.benefit-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    border-color: #f15a25;
}

.benefit-icon {
    color: #f15a25;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-icon svg {
    width: 48px;
    height: 48px;
    stroke: currentColor;
}

.benefit-card h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #212529;
    margin-bottom: 1rem;
    line-height: 1.3;
}

.benefit-card p {
    color: #6c757d;
    font-size: 0.95rem;
    line-height: 1.5;
    margin: 0;
    flex-grow: 1;
}

/* Base styles for service subcategories */
.service-subcategories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.subcategory-card {
    background: #ffffff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.subcategory-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    border-color: #f15a25;
}

.subcategory-card h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #212529;
    margin-bottom: 0.75rem;
    line-height: 1.3;
}

.subcategory-card p {
    color: #6c757d;
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 1rem;
    flex-grow: 1;
}

.service-features {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
}

.service-features li {
    color: #495057;
    font-size: 0.9rem;
    padding: 0.375rem 0;
    border-bottom: 1px solid #f8f9fa;
    position: relative;
    padding-left: 1.25rem;
}

.service-features li:before {
    content: '✓';
    color: #f15a25;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0.375rem;
}

.service-features li:last-child {
    border-bottom: none;
}

.service-link {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    background: #f15a25;
    color: white !important;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    text-align: center;
    transition: background-color 0.3s ease;
    margin-top: auto;
}

.service-link:hover {
    background: #d54a20;
    color: white !important;
}

.category-header {
    display: flex;
    align-items: flex-start;
    gap: 1.5rem;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 2px solid #e9ecef;
}

.category-icon {
    color: #f15a25;
    flex-shrink: 0;
}

.category-info h2 {
    color: #212529;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
}

.category-info p {
    color: #6c757d;
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.category-main-link {
    display: inline-block;
    padding: 0.875rem 1.75rem;
    background: #f15a25;
    color: white !important;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.category-main-link:hover {
    background: #d54a20;
    color: white !important;
}

.service-category-section {
    margin-bottom: 4rem;
}

/* Mobile Responsive Styles */
@media (max-width: 768px) {
    /* Benefit cards mobile optimization */
    .benefits-grid-4 {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 1.5rem;
    }
    
    .benefit-card {
        padding: 1.5rem 1.25rem;
        border-radius: 8px;
    }
    
    .benefit-icon {
        margin-bottom: 1rem;
    }
    
    .benefit-icon svg {
        width: 40px;
        height: 40px;
    }
    
    .benefit-card h3 {
        font-size: 1.125rem;
        margin-bottom: 0.75rem;
    }
    
    .benefit-card p {
        font-size: 0.9rem;
        line-height: 1.4;
    }
    
    /* Service subcategories - single column on mobile */
    .service-subcategories {
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-top: 1.5rem;
    }
    
    .subcategory-card {
        padding: 1.25rem;
        margin-bottom: 0;
    }
    
    .subcategory-card h3 {
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
    }
    
    .subcategory-card p {
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    
    .service-features li {
        font-size: 0.85rem;
        padding: 0.25rem 0 0.25rem 1rem;
    }
    
    .service-link {
        padding: 0.625rem 1.25rem;
        font-size: 0.9rem;
        width: 100%;
        box-sizing: border-box;
    }
    
    /* Category header mobile adjustments */
    .category-header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
        margin-bottom: 1.5rem;
    }
    
    .category-icon {
        align-self: center;
    }
    
    .category-info h2 {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }
    
    .category-info p {
        font-size: 1rem;
        margin-bottom: 0.75rem;
    }
    
    .category-main-link {
        padding: 0.75rem 1.5rem;
        font-size: 0.9rem;
    }
    
    .service-category-section {
        margin-bottom: 2.5rem;
    }
    
    /* Services grid mobile optimization */
    .services-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .service-card {
        padding: 1.25rem;
        text-align: center;
    }
    
    .service-card h3 {
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
    }
    
    .service-card p {
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    
    .service-card .service-link {
        width: 100%;
        padding: 0.625rem;
        font-size: 0.85rem;
    }
}

@media (max-width: 480px) {
    /* Benefit cards for extra small screens */
    .benefit-card {
        padding: 1.25rem 1rem;
        border-radius: 6px;
    }
    
    .benefit-icon {
        margin-bottom: 0.75rem;
    }
    
    .benefit-icon svg {
        width: 36px;
        height: 36px;
    }
    
    .benefit-card h3 {
        font-size: 1rem;
        margin-bottom: 0.625rem;
    }
    
    .benefit-card p {
        font-size: 0.85rem;
        line-height: 1.4;
    }
    
    /* Extra small screens */
    .subcategory-card {
        padding: 1rem;
        border-radius: 8px;
    }
    
    .subcategory-card h3 {
        font-size: 1rem;
    }
    
    .subcategory-card p {
        font-size: 0.85rem;
    }
    
    .service-features li {
        font-size: 0.8rem;
        padding: 0.2rem 0 0.2rem 0.9rem;
    }
    
    .service-link {
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
    }
    
    .category-info h2 {
        font-size: 1.375rem;
    }
    
    .category-info p {
        font-size: 0.95rem;
    }
}

/* Tablet responsive styles */
@media (min-width: 769px) and (max-width: 1024px) {
    /* Benefit cards tablet optimization */
    .benefits-grid-4 {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
    
    .benefit-card {
        padding: 1.75rem 1.5rem;
    }
    
    .benefit-card h3 {
        font-size: 1.125rem;
    }
    
    .benefit-card p {
        font-size: 0.9rem;
    }
    
    .service-subcategories {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.25rem;
    }
    
    .subcategory-card {
        padding: 1.375rem;
    }
    
    .category-header {
        gap: 1.25rem;
    }
}

/* Ensure proper spacing and alignment */
.services-categories {
    padding: 3rem 0;
}

@media (max-width: 768px) {
    .services-categories {
        padding: 2rem 0;
    }
}
</style>

<?php get_footer(); ?>
