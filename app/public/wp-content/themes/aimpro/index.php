<?php
/**
 * Template for displaying the homepage
 *
 * @package AimproDigital
 */

get_header(); ?>

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- Loading Screen -->
<div id="loading-screen" class="loading-screen">
    <div class="loading-content">
        <div class="loading-logo">
            <h2 class="gradient-text">Aimpro</h2>
        </div>
        <div class="loading-spinner">
            <div class="spinner-ring"></div>
        </div>
        <p class="loading-text">Crafting your digital success...</p>
    </div>
</div>

<!-- Main Content -->
<main id="main-content" role="main">

<!-- Hero Section -->
<section id="home" class="hero-section premium-hero">
    <div class="hero-background"></div>    <!-- Target Icons -->
    <div class="target-icon hero-target-1"></div>
    <div class="target-icon hero-target-2"></div>
    <!-- Additional floating targets -->
    <div class="target-icon floating-target-hero" style="top: 60%; right: 25%; width: 24px; height: 24px; opacity: 0.15; animation: targetFloat 9s ease-in-out infinite;"></div>
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
    </div><div class="container">
        <div class="hero-wrapper">            <div class="hero-content">                <div class="hero-badge slide-up-delay-1">
                    <span><?php echo aimpro_get_field('hero_badge_text', 'Award-Winning Digital Agency'); ?></span>                </div><?php echo aimpro_get_field('hero_title', '<h1 class="hero-title">Scale Your Business With <span class="highlight curly-underline">PRECISION</span> Digital <span class="highlight-word" style="color: #f15a25 !important; -webkit-text-fill-color: #f15a25 !important;">Marketing</span></h1>'); ?>                <div class="hero-straplines">
                    <span class="strapline active"><?php echo aimpro_get_field('hero_strapline_1', 'No Fluff. Just Results.'); ?></span>
                    <span class="strapline"><?php echo aimpro_get_field('hero_strapline_2', 'Data-Driven Strategy. Measurable Results.'); ?></span>
                    <span class="strapline"><?php echo aimpro_get_field('hero_strapline_3', 'Grow Your Business With Precision Marketing.'); ?></span>
                    <span class="strapline"><?php echo aimpro_get_field('hero_strapline_4', 'Your High-ROI Digital Marketing Partner'); ?></span>
                </div>
                <p class="hero-subtitle"><?php echo aimpro_get_field('hero_subtitle', 'Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.'); ?></p>                <div class="hero-ctas">
                    <a href="<?php echo aimpro_get_field('hero_primary_cta_url', '#contact'); ?>" class="btn-primary large shine-effect pulse-animation"><?php echo aimpro_get_field('hero_primary_cta_text', 'CLAIM YOUR FREE GROWTH STRATEGY'); ?></a>
                </div>
            </div>            <!-- Lottie Animation Container -->
            <div class="hero-animation">
                <div id="lottie-hero-animation"></div>
                <!-- Target Icon -->
                <div class="hero-target-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aimpro-target.png" alt="Target" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Tags Strip -->
<section class="service-tags-strip">
    <div class="container">        <div class="tags-wrapper slide-up">
            <a href="<?php echo home_url('/seo-services'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_1', 'SEO'); ?></a>
            <a href="<?php echo home_url('/google-ads'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_2', 'Google Ads'); ?></a>
            <a href="<?php echo home_url('/meta-ads'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_3', 'Social Media'); ?></a>
            <a href="<?php echo home_url('/website-design'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_4', 'Website'); ?></a>
            <a href="<?php echo home_url('/retargeting-display'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_5', 'Ads'); ?></a>
            <a href="<?php echo home_url('/email-campaigns'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_6', 'Email'); ?></a>
            <a href="<?php echo home_url('/ai-tools'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_7', 'AI Automation'); ?></a>
            <a href="<?php echo home_url('/ai-crm-setup'); ?>" class="tag"><?php echo aimpro_get_field('service_tag_8', 'CRM'); ?></a>
        </div>
    </div>
</section>

<!-- Agency Value Statement -->
<section class="value-statement">
    <div class="container">
        <div class="content-center">            <h2><?php echo aimpro_get_field('value_statement_title', 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>'); ?></h2>
            <p><?php echo aimpro_get_field('value_statement_description', 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximize your competitive advantage.'); ?></p>
            <a href="<?php echo aimpro_get_field('value_statement_cta_url', '#contact'); ?>" class="btn-primary large"><?php echo aimpro_get_field('value_statement_cta_text', 'CLAIM YOUR FREE GROWTH AUDIT'); ?></a>
        </div>
    </div>
</section>

<!-- Stats Counter -->
<section class="stats-section">
    <!-- Target Icons -->
    <div class="target-icon stats-target-1"></div>
    <!-- Stats Lottie Animation Background -->
    <div class="stats-animation-bg">
        <div class="animation-layer">
            <!-- Three optimized Lottie instances for full-width animated coverage -->
            <div id="lottie-stats-animation-left" class="lottie-stats-instance"></div>
            <div id="lottie-stats-animation-center" class="lottie-stats-instance"></div>
            <div id="lottie-stats-animation-right" class="lottie-stats-instance"></div>
            <!-- CSS fallback animation -->
            <div class="css-wave-animation" style="display: none;"></div>
        </div>
    </div>
      <div class="container"><div class="stats-grid">
            <div class="stat-item counter">
                <div class="stat-number" data-count="<?php echo aimpro_get_field('stat_1_number', '25'); ?>"><?php echo aimpro_get_field('stat_1_number', '0'); ?></div>
                <div class="stat-label"><?php echo aimpro_get_field('stat_1_label', 'Years of Experience'); ?></div>
            </div>
            <div class="stat-item counter">
                <div class="stat-number" data-count="<?php echo aimpro_get_field('stat_2_number', '98'); ?>"><?php echo aimpro_get_field('stat_2_number', '0'); ?>%</div>
                <div class="stat-label"><?php echo aimpro_get_field('stat_2_label', 'Increase in Client Leads'); ?></div>
            </div>
            <div class="stat-item counter">
                <div class="stat-number" data-count="<?php echo aimpro_get_field('stat_3_number', '15'); ?>"><?php echo aimpro_get_field('stat_3_number', '0'); ?>+</div>
                <div class="stat-label"><?php echo aimpro_get_field('stat_3_label', 'Industries Transformed'); ?></div>
            </div>
            <div class="stat-item counter">
                <div class="stat-number" data-count="<?php echo aimpro_get_field('stat_4_number', '199'); ?>"><?php echo aimpro_get_field('stat_4_number', '0'); ?>%</div>
                <div class="stat-label"><?php echo aimpro_get_field('stat_4_label', 'Increase in Conversion Rates'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Premium Service Showcase -->
<section id="services" class="premium-services-section">
    <div class="services-background-gradient"></div>    <!-- Target Icons -->
    <div class="target-icon services-target-1"></div>
    <!-- Additional floating targets -->
    <div class="target-icon floating-target-services" style="bottom: 25%; left: 12%; width: 28px; height: 28px; opacity: 0.18; animation: targetFloat 7.5s ease-in-out infinite reverse;"></div>
    <div class="floating-elements">
        <div class="floating-orb orb-1"></div>
        <div class="floating-orb orb-2"></div>
        <div class="floating-orb orb-3"></div>
    </div>
    
    <div class="container">        <div class="content-center">            <h2><?php echo aimpro_get_field('services_title', 'Premium Digital Marketing Solutions That <span class="highlight curly-underline">DELIVER</span>'); ?></h2>
            <p class="section-subtitle"><?php echo aimpro_get_field('services_subtitle', 'Zero fluff. Pure performance. Our integrated marketing ecosystem works seamlessly to transform prospects into profits.'); ?></p>
        </div>
        
        <div class="premium-services-grid">            <!-- SEO Services -->
            <div class="premium-service-card" data-service="seo-services">
                <div class="service-background">
                    <div class="service-pattern pattern-1"></div>
                </div>
                <div class="service-content">
                    <div class="service-header">
                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <svg class="service-svg" viewBox="0 0 100 100">
                                    <circle cx="40" cy="40" r="20" class="icon-circle" fill="none" stroke="currentColor"/>
                                    <path d="M56 56 L70 70" class="icon-arrow" stroke="currentColor"/>
                                    <path d="M35 40 L45 40" class="icon-line" stroke="currentColor"/>
                                    <path d="M35 45 L50 45" class="icon-line" stroke="currentColor"/>
                                </svg>
                            </div>
                            <div class="service-badge">SEO</div>
                        </div>
                        <h3>SEO Services</h3>
                    </div>
                    <div class="service-description">
                        <p>Dominate search results with comprehensive SEO strategies including local SEO, technical optimization, and on-page excellence that drive organic traffic and qualified leads.</p>                        <div class="service-features">
                            <span class="feature-tag">Local SEO</span>
                            <span class="feature-tag">Technical SEO</span>
                            <span class="feature-tag">SEO Audits</span>
                        </div>
                    </div>
                    <div class="service-action">
                        <a href="#contact" class="premium-service-cta">
                            <span>RANK HIGHER</span>
                            <div class="cta-arrow">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="service-overlay"></div>
            </div>

            <!-- Google Ads Management -->
            <div class="premium-service-card" data-service="google-ads">
                <div class="service-background">
                    <div class="service-pattern pattern-2"></div>
                </div>
                <div class="service-content">
                    <div class="service-header">
                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <svg class="service-svg" viewBox="0 0 100 100">
                                    <rect x="20" y="40" width="60" height="20" class="icon-bar"/>
                                    <rect x="30" y="30" width="40" height="40" class="icon-chart" fill="none" stroke="currentColor"/>
                                    <path d="M35 50 L45 40 L55 45 L65 35" class="icon-line"/>
                                </svg>
                            </div>
                            <div class="service-badge">PPC</div>
                        </div>
                        <h3>Google Ads Management</h3>
                    </div>
                    <div class="service-description">
                        <p>Dominate search results with expertly crafted Google Ads campaigns that capture high-intent traffic and convert clicks into customers with surgical precision and maximum ROI.</p>                        <div class="service-features">
                            <span class="feature-tag">ROI Optimization</span>
                            <span class="feature-tag">Keyword Research</span>
                            <span class="feature-tag">A/B Testing</span>
                        </div>
                    </div>
                    <div class="service-action">
                        <a href="#contact" class="premium-service-cta">
                            <span>MAXIMIZE YOUR ROI</span>
                            <div class="cta-arrow">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="service-overlay"></div>
            </div>

            <!-- Website Design -->
            <div class="premium-service-card" data-service="website-design">
                <div class="service-background">
                    <div class="service-pattern pattern-3"></div>
                </div>
                <div class="service-content">
                    <div class="service-header">
                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <svg class="service-svg" viewBox="0 0 100 100">
                                    <rect x="15" y="25" width="70" height="50" class="icon-browser" fill="none" stroke="currentColor"/>
                                    <rect x="15" y="25" width="70" height="12" class="icon-header"/>
                                    <circle cx="22" cy="31" r="2" class="icon-dot"/>
                                    <circle cx="30" cy="31" r="2" class="icon-dot"/>
                                    <circle cx="38" cy="31" r="2" class="icon-dot"/>
                                </svg>
                            </div>
                            <div class="service-badge">Web</div>
                        </div>
                        <h3>Website Design</h3>
                    </div>
                    <div class="service-description">
                        <p>Engineer premium, conversion-optimized websites that captivate visitors and transform them into customers through strategic design and seamless user experiences.</p>
                        <div class="service-features">                            <span class="feature-tag">Mobile First</span>
                            <span class="feature-tag">SEO Ready</span>
                            <span class="feature-tag">Fast Loading</span>
                        </div>
                    </div>
                    <div class="service-action">
                        <a href="#contact" class="premium-service-cta">
                            <span>BUILD BETTER WEBSITE</span>
                            <div class="cta-arrow">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="service-overlay"></div>
            </div>            <!-- Meta Ads (Facebook/Instagram) -->
            <div class="premium-service-card" data-service="meta-ads">
                <div class="service-background">
                    <div class="service-pattern pattern-4"></div>
                </div>
                <div class="service-content">
                    <div class="service-header">
                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <svg class="service-svg" viewBox="0 0 100 100">
                                    <rect x="25" y="25" width="50" height="50" rx="8" class="icon-circle" fill="none" stroke="currentColor"/>
                                    <circle cx="40" cy="40" r="3" class="icon-dot"/>
                                    <circle cx="60" cy="40" r="3" class="icon-dot"/>
                                    <path d="M35 55 Q50 65 65 55" class="icon-line" fill="none" stroke="currentColor"/>
                                </svg>
                            </div>
                            <div class="service-badge">Meta</div>
                        </div>
                        <h3>Meta Ads (FB/Instagram)</h3>
                    </div>
                    <div class="service-description">
                        <p>Amplify your brand presence across Facebook and Instagram with strategic ad campaigns that capture attention, engage audiences, and convert social traffic into loyal customers.</p>
                        <div class="service-features">
                            <span class="feature-tag">✓ Facebook Ads</span>
                            <span class="feature-tag">✓ Instagram Ads</span>
                            <span class="feature-tag">✓ Retargeting Campaigns</span>
                        </div>
                    </div>
                    <div class="service-action">
                        <a href="#contact" class="premium-service-cta">
                            <span>SCALE YOUR REACH</span>
                            <div class="cta-arrow">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="service-overlay"></div>
            </div>

            <!-- AI Powered CRM -->
            <div class="premium-service-card" data-service="ai-crm">
                <div class="service-background">
                    <div class="service-pattern pattern-5"></div>
                </div>
                <div class="service-content">
                    <div class="service-header">
                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <svg class="service-svg" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="25" class="icon-brain" fill="none" stroke="currentColor"/>
                                    <path d="M35 45 Q50 35 65 45" class="icon-curve"/>
                                    <path d="M35 55 Q50 65 65 55" class="icon-curve"/>
                                    <circle cx="42" cy="45" r="2" class="icon-dot"/>
                                    <circle cx="58" cy="45" r="2" class="icon-dot"/>
                                </svg>
                            </div>
                            <div class="service-badge">AI</div>
                        </div>
                        <h3>AI Powered CRM</h3>
                    </div>
                    <div class="service-description">
                        <p>Streamline your customer relationships with intelligent CRM systems that automate processes and provide valuable insights.</p>
                        <div class="service-features">
                            <span class="feature-tag">✓ Smart Automation</span>
                            <span class="feature-tag">✓ Predictive Analytics</span>
                            <span class="feature-tag">✓ Customer Insights</span>
                        </div>
                    </div>
                    <div class="service-action">
                        <a href="#contact" class="premium-service-cta">
                            <span>AUTOMATE YOUR CRM</span>
                            <div class="cta-arrow">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="service-overlay"></div>
            </div>

            <!-- Marketing Automation -->
            <div class="premium-service-card" data-service="automation">
                <div class="service-background">
                    <div class="service-pattern pattern-6"></div>
                </div>
                <div class="service-content">
                    <div class="service-header">
                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <svg class="service-svg" viewBox="0 0 100 100">
                                    <circle cx="25" cy="50" r="8" class="icon-gear"/>
                                    <circle cx="50" cy="30" r="8" class="icon-gear"/>
                                    <circle cx="75" cy="50" r="8" class="icon-gear"/>
                                    <circle cx="50" cy="70" r="8" class="icon-gear"/>
                                    <path d="M33 50 L42 50" class="icon-connect"/>
                                    <path d="M58 50 L67 50" class="icon-connect"/>
                                    <path d="M50 38 L50 42" class="icon-connect"/>
                                    <path d="M50 58 L50 62" class="icon-connect"/>
                                </svg>
                            </div>
                            <div class="service-badge">Auto</div>
                        </div>
                        <h3>Marketing Automation</h3>
                    </div>
                    <div class="service-description">
                        <p>Automate your marketing workflows to nurture leads, retain customers, and scale your business efficiently with smart automation.</p>
                        <div class="service-features">
                            <span class="feature-tag">✓ Workflow Builder</span>
                            <span class="feature-tag">✓ Lead Nurturing</span>
                            <span class="feature-tag">✓ Performance Tracking</span>
                        </div>
                    </div>
                    <div class="service-action">
                        <a href="#contact" class="premium-service-cta">
                            <span>AUTOMATE YOUR GROWTH</span>
                            <div class="cta-arrow">
                                <svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2" fill="none"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="service-overlay"></div>
            </div>
        </div>
          <div class="services-cta-section">
            <a href="#contact" class="btn-primary large pulse-animation">UNLOCK YOUR GROWTH POTENTIAL</a>        </div>
    </div>
</section>

<!-- Lead Magnet Section -->
<section class="lead-magnet-section">
    <div class="container">
        <div class="content-center">
            <h2><?php echo aimpro_get_field('lead_magnet_title', 'Get Our Free Digital Marketing <span class="highlight curly-underline">GUIDE</span>'); ?></h2>
            <p class="section-subtitle"><?php echo aimpro_get_field('lead_magnet_subtitle', 'Download our comprehensive digital marketing guide packed with proven strategies to grow your business.'); ?></p>
        </div>
        
        <div class="lead-magnet-wrapper">            <div class="ebook-preview animate-slide-left">
                <div class="ebook-cover">
                    <div class="ebook-image">
                        <div class="ebook-content">
                            <div class="ebook-logo">AIMPRO</div>
                            <div class="ebook-title"><?php echo strip_tags(aimpro_get_field('lead_magnet_ebook_title', 'The Ultimate Digital Marketing Playbook')); ?></div>
                            <div class="ebook-subtitle">Complete Guide to Online Success</div>
                        </div>
                        <div class="ebook-badge">FREE</div>
                    </div>
                </div>
                <div class="ebook-details">
                    <h3><?php echo aimpro_get_field('lead_magnet_ebook_title', 'The Ultimate Digital Marketing Playbook'); ?></h3>
                    <p><?php echo aimpro_get_field('lead_magnet_ebook_description', 'Discover the exact strategies we use to help our clients increase leads by 200%+ and dominate their local markets.'); ?></p>
                    <ul class="ebook-features">
                        <li>50+ Pages of Actionable Strategies</li>
                        <li>Case Studies & Real Examples</li>
                        <li>Step-by-Step Implementation Guide</li>
                    </ul>
                </div>
            </div>              <div class="lead-capture-form animate-slide-right">
                <h3><?php echo aimpro_get_field('lead_magnet_form_title', 'Get Your Free Digital Marketing Guide'); ?></h3>
                <p class="form-subtitle"><?php echo aimpro_get_field('lead_magnet_form_subtitle', 'Fill out the form below and we\'ll send you our comprehensive guide plus schedule a free consultation.'); ?></p>
                
                <?php if (isset($_GET['lead_success'])): ?>
                    <div class="form-message success">
                        <p><strong>Thank you!</strong> Your request has been submitted successfully. Check your email for the guide and we'll be in touch within 24 hours!</p>
                    </div>
                <?php elseif (isset($_GET['lead_error'])): ?>
                    <div class="form-message error">
                        <p><strong>Error:</strong> There was a problem submitting your request. Please try again or contact us directly.</p>
                    </div>
                <?php endif; ?>
                  <form class="lead-magnet-form" id="lead-magnet-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>" novalidate>
                    <?php wp_nonce_field('lead_magnet_submission', 'lead_magnet_nonce'); ?>
                    <input type="hidden" name="action" value="lead_magnet_form">
                    <input type="hidden" name="lead_magnet_form" value="1">
                    
                    <div class="form-group">
                        <label for="lead_name"><?php echo aimpro_get_field('lead_magnet_name_label', 'Full Name *'); ?></label>
                        <input type="text" id="lead_name" name="lead_name" placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="lead_email"><?php echo aimpro_get_field('lead_magnet_email_label', 'Email Address *'); ?></label>
                        <input type="email" id="lead_email" name="lead_email" placeholder="Enter your email address" required>
                    </div>
                      <div class="form-group">
                        <label for="lead_phone"><?php echo aimpro_get_field('lead_magnet_phone_label', 'Phone Number *'); ?></label>
                        <input type="tel" id="lead_phone" name="lead_phone" placeholder="Enter your phone number" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary large submit-btn">
                        <?php echo aimpro_get_field('lead_magnet_submit_text', 'GET FREE EBOOK NOW'); ?>
                    </button>
                    
                    <p class="privacy-notice"><?php echo aimpro_get_field('lead_magnet_privacy_text', 'We respect your privacy and will never share your information. <a href="/privacy-policy">Privacy Policy</a>'); ?></p>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Visit Our Office Section -->
<section class="office-visit-section scroll-animate">
    <div class="container">        <div class="office-content-wrapper">            <div class="office-content animate-slide-left">
                <h2 class="animate-fade-up" data-delay="0.1"><?php echo aimpro_get_field('office_title', 'Come See Us... We\'re a <span class="highlight curly-underline">REAL</span> Company with Real Humans'); ?></h2>
                <p class="animate-fade-up" data-delay="0.2"><?php echo aimpro_get_field('office_description', 'Let\'s discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.'); ?></p>
                
                <div class="calendar-booking animate-fade-up" data-delay="0.3">
                    <a href="#" class="btn-primary large calendar-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        BOOK A COFFEE MEETING
                    </a>
                </div>
                  <div class="office-details animate-fade-up" data-delay="0.4">
                    <h3><?php echo aimpro_get_field('office_address_title', 'Our Birmingham Office'); ?></h3>
                    <?php echo aimpro_get_field('office_address', '<p><strong>Located in: 55 Colmore Row</strong><br>
                    Address: 55 Colmore Row, Birmingham B3 2AA<br>
                    Right in the heart of Birmingham\'s business district</p>'); ?>
                </div>
            </div>
            
            <div class="office-visual animate-slide-right">
                <div class="office-image animate-scale-up" data-delay="0.2">
                    <!-- Office image - replace with actual image when available -->
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="55 Colmore Row Birmingham Office" />
                </div>
                <div class="office-map animate-scale-up" data-delay="0.4">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.981800277795!2d-1.9008778836825295!3d52.48076417980789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bc8d3a49a4c7%3A0x4acfb08548f8dd3e!2s55%20Colmore%20Row%2C%20Birmingham%20B3%202AA!5e0!3m2!1sen!2suk!4v1623501234567!5m2!1sen!2suk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <a href="https://maps.google.com/?q=55+Colmore+Row+Birmingham+B3+2AA" target="_blank" class="map-overlay">
                            <span>View on Google Maps</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team" class="team-section premium-team">
    <div class="container">
        <div class="content-center">            <h2>Meet The Experts Who Make <span class="highlight curly-underline">MAGIC</span> Happen</h2>
            <p class="section-subtitle">No faceless agencies here. Our marketing specialists are passionate about client success and personally invested in delivering exceptional results for every business we partner with.</p>
        </div>
        <div class="team-grid">            <div class="team-member premium-card">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.png" alt="Ajay Dhunna" />
                    <div class="member-overlay">
                        <div class="credentials">
                            <span class="credential-badge">Google Certified</span>
                            <span class="credential-badge">Meta Partner</span>
                        </div>
                    </div>
                </div>
                <h3>Ajay Dhunna</h3>
                <p class="member-title">Director of Marketing</p>
                <p class="member-expertise">25+ Years Experience • 500+ Campaigns</p>
            </div>            <div class="team-member premium-card">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinesh-thapa.png" alt="Dinesh Thapa" />
                    <div class="member-overlay">
                        <div class="credentials">
                            <span class="credential-badge">Growth Expert</span>
                            <span class="credential-badge">Data Analyst</span>
                        </div>
                    </div>
                </div>
                <h3>Dinesh Thapa</h3>
                <p class="member-title">Business Growth Specialist</p>
                <p class="member-expertise">ROI Optimization • Analytics Expert</p>
            </div>            <div class="team-member premium-card">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-butler.png" alt="James Butler" />
                    <div class="member-overlay">
                        <div class="credentials">
                            <span class="credential-badge">UX Designer</span>
                            <span class="credential-badge">Brand Expert</span>
                        </div>
                    </div>
                </div>
                <h3>James Butler</h3>
                <p class="member-title">Creative Director</p>
                <p class="member-expertise">Award-Winning Designer • Brand Strategy</p>
            </div>
        </div>
        <div class="team-cta-section">
            <a href="#contact" class="btn-primary large shine-effect">TALK TO OUR EXPERTS</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <!-- Target Icons -->
    <div class="target-icon testimonials-target-1"></div>
    <div class="container">        <div class="content-center">            <h2><?php echo aimpro_get_field('testimonials_title', 'Don\'t Just Take Our Word for It'); ?></h2>
            <div class="curly-underline-accent"></div>
            <p class="section-subtitle"><?php echo aimpro_get_field('testimonials_subtitle', 'Discover how we\'ve transformed businesses across industries with strategies that deliver measurable growth:'); ?></p></div>
        <div class="testimonials-carousel-wrapper">
            <div class="testimonials-carousel-container">
                <div class="testimonials-carousel-track">                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"<?php echo aimpro_get_field('testimonial_1_content', 'Honestly, if you have a business that relies on your website to bring in business, don\'t waste your time on any other company. From my experience, I have gained approximately 50% increase in qualified leads.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong><?php echo aimpro_get_field('testimonial_1_author', 'Emily Hargreaves'); ?></strong>
                            <span><?php echo aimpro_get_field('testimonial_1_title', 'Marketing Director'); ?></span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"<?php echo aimpro_get_field('testimonial_2_content', 'No negatives at all. One of the best companies we have ever worked with. So dynamic and on trend. Incredibly proactive in everything they do and the bonus is that they are such lovely people to work with.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong><?php echo aimpro_get_field('testimonial_2_author', 'Charlotte Davies'); ?></strong>
                            <span><?php echo aimpro_get_field('testimonial_2_title', 'Business Owner'); ?></span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"<?php echo aimpro_get_field('testimonial_3_content', 'The Google Ads campaigns run by Aimpro Digital have been a fantastic success. Their attention to detail and ability to target the right audience has really paid off. We\'ve seen a significant increase in traffic and conversions, all thanks to their hard work and expertise!'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong><?php echo aimpro_get_field('testimonial_3_author', 'Tom Ridley'); ?></strong>
                            <span><?php echo aimpro_get_field('testimonial_3_title', 'Sales Director, Sheffield'); ?></span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"<?php echo aimpro_get_field('testimonial_4_content', 'Aimpro Digital has been a game-changer for our business! Since partnering with them, we\'ve seen a consistent flow of quality leads that truly align with our services. It\'s been a breath of fresh air to work with a team that understands our goals and delivers on their promises.'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong><?php echo aimpro_get_field('testimonial_4_author', 'Sarah Thompson'); ?></strong>
                            <span><?php echo aimpro_get_field('testimonial_4_title', 'Marketing Manager, London'); ?></span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"<?php echo aimpro_get_field('testimonial_5_content', 'Our online visibility has improved dramatically thanks to Aimpro Digital\'s SEO expertise. Within months, we went from barely being on the map to ranking on the first page for key terms. The team is knowledgeable, transparent, and always ready with helpful advice. Couldn\'t recommend them more!'); ?>"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong><?php echo aimpro_get_field('testimonial_5_author', 'James Whitfield'); ?></strong>
                            <span><?php echo aimpro_get_field('testimonial_5_title', 'Director, Birmingham'); ?></span>
                        </div>
                    </div>
                </div>
            </div>            <div class="carousel-controls">
                <button class="carousel-prev">‹</button>
                <div class="carousel-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <button class="carousel-next">›</button>
            </div>
        </div>        <div class="testimonials-cta-section">
            <a href="#contact" class="btn-primary large shine-effect">START YOUR SUCCESS STORY</a>
        </div>
    </div>
</section>



<!-- Magazine-Style Insights Section -->
<section class="insights-section magazine-layout">    <!-- Target Icons -->
    <div class="target-icon insights-target-1"></div>
    <!-- Additional floating targets -->
    <div class="target-icon floating-target-insights" style="bottom: 20%; right: 15%; width: 32px; height: 32px; opacity: 0.2; animation: targetFloat 6.5s ease-in-out infinite;"></div>
    <div class="container">
        <div class="content-center">
            <h2><?php echo aimpro_get_field('insights_title', 'Stay Ahead With Expert Insights & Cutting-Edge Industry Intelligence'); ?></h2>
            <p class="section-subtitle"><?php echo aimpro_get_field('insights_subtitle', 'Exclusive strategies and data-driven insights from our marketing experts to keep you at the forefront of digital innovation.'); ?></p>
        </div>
        <div class="insights-grid">
            <?php
            // Get featured insight
            $featured_insights_args = array(
                'post_type' => 'insight',
                'posts_per_page' => 1,
                'meta_query' => array(
                    array(
                        'key' => 'insight_featured',
                        'value' => '1',
                        'compare' => '='
                    )
                )
            );
            
            $featured_insights = new WP_Query($featured_insights_args);
            
            // If no featured insight, get the most recent
            if (!$featured_insights->have_posts()) {
                $featured_insights_args = array(
                    'post_type' => 'insight',
                    'posts_per_page' => 1
                );
                $featured_insights = new WP_Query($featured_insights_args);
            }
            
            if ($featured_insights->have_posts()) : 
                $featured_insights->the_post();
                $read_time = aimpro_get_read_time(get_the_ID());
                ?>
                <article class="featured-insight">
                    <div class="insight-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.png" alt="<?php the_title(); ?>" />
                        <?php endif; ?>
                        <div class="insight-category">Featured</div>
                    </div>
                    <div class="insight-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <div class="insight-meta">
                            <span class="read-time"><?php echo esc_html($read_time); ?> min read</span>
                            <span class="publish-date"><?php echo get_the_date('M j, Y'); ?></span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="insight-link">Read More →</a>
                    </div>
                </article>
            <?php endif; wp_reset_postdata(); ?>
            
            <div class="insights-sidebar">
                <?php
                // Get the rest of the insights
                $insights_args = array(
                    'post_type' => 'insight',
                    'posts_per_page' => 3,
                    'post__not_in' => $featured_insights->have_posts() ? array($featured_insights->posts[0]->ID) : array()
                );
                
                $insights = new WP_Query($insights_args);
                
                if ($insights->have_posts()) :
                    while ($insights->have_posts()) : $insights->the_post();
                        $read_time = aimpro_get_read_time(get_the_ID());
                        ?>
                        <article class="insight-card">
                            <div class="insight-image-small">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumbnail', array('alt' => get_the_title())); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-insight.png" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="insight-content-small">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></p>
                                <span class="read-time"><?php echo esc_html($read_time); ?> min read</span>
                            </div>
                        </article>
                    <?php endwhile;
                else : ?>
                    <p>No insights found. Please add some insights in the admin panel.</p>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>        <div class="insights-cta">
            <a href="<?php echo get_post_type_archive_link('insight'); ?>" class="btn-outline premium-hover"><?php echo aimpro_get_field('insights_cta_text', 'More Blogs'); ?></a>
        </div>
    </div>
</section>

<!-- Latest Blogs -->
<section class="blog-section">
    <div class="container">
        <div class="content-center">
            <h2><?php echo aimpro_get_field('blog_title', 'Latest <span class="highlight curly-underline">BLOGS</span>'); ?></h2>
            <p class="section-subtitle"><?php echo aimpro_get_field('blog_subtitle', 'Expert insights and industry updates to keep you ahead of the competition'); ?></p>
        </div>
        
        <div class="blog-grid">
            <?php
            // Get the 3 most recent posts
            $recent_posts = get_posts(array(
                'posts_per_page' => 3,
                'post_status' => 'publish'
            ));
            
            if (!empty($recent_posts)) {
                foreach ($recent_posts as $post) {
                    setup_postdata($post);
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
                    ?>
                    <article class="blog-card">                        <div class="blog-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'blog-thumbnail', 'alt' => get_the_title())); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-blog.png" alt="<?php the_title_attribute(); ?>" class="blog-thumbnail" />
                                <?php endif; ?>
                            </a>
                            <span class="blog-category"><?php echo $category_name; ?></span>
                        </div>                          <div class="blog-content">
                            <div>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="blog-meta">
                                    <span class="blog-date"><?php echo get_the_date('M j, Y'); ?></span>
                                </div>
                                <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-outline btn-sm">Read More</a>
                        </div>
                    </article>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p class="no-posts-found">No blog posts found. Please add some posts in the WordPress admin.</p>';
            }
            ?>
        </div>
        
        <div class="blog-cta-section">
            <a href="<?php echo aimpro_get_field('blog_cta_url', '/blog'); ?>" class="btn-primary large"><?php echo aimpro_get_field('blog_cta_text', 'MORE BLOGS'); ?></a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="final-cta-section">
    <!-- Target Icons -->
    <div class="target-icon contact-target-1"></div>
    <div class="target-icon contact-target-2"></div>
    <div class="container">
        <div class="final-cta-content">
            <h2><?php echo aimpro_get_field('final_cta_title', 'You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span>'); ?></h2>
            <p><?php echo aimpro_get_field('final_cta_description', 'Request a marketing review today. We\'ll send you a detailed analysis of your website and marketing, breaking down your next steps to success.'); ?></p>
            
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <?php if (isset($_GET['contact_success'])): ?>
                    <div class="form-message success">
                        <p><strong>Thank you!</strong> Your message has been sent successfully. We'll respond within 24 hours!</p>
                    </div>
                <?php elseif (isset($_GET['contact_error'])): ?>
                    <div class="form-message error">
                        <p><strong>Error:</strong> There was a problem sending your message. Please try again or contact us directly.</p>
                    </div>
                <?php endif; ?>

                <form class="contact-form" id="contact-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>" novalidate>
                    <?php wp_nonce_field('contact_submission', 'contact_nonce'); ?>
                    <input type="hidden" name="action" value="contact_form">
                    <input type="hidden" name="contact_form" value="1">
                    
                    <div class="form-header">
                        <h3><?php echo aimpro_get_field('contact_form_title', 'Get In Touch'); ?></h3>
                        <p><?php echo aimpro_get_field('contact_form_subtitle', 'We\'d love to hear from you. Send us a message and we\'ll respond as soon as possible.'); ?></p>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name"><?php echo aimpro_get_field('contact_form_name_label', 'Name *'); ?></label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email"><?php echo aimpro_get_field('contact_form_email_label', 'Email *'); ?></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone"><?php echo aimpro_get_field('contact_form_phone_label', 'Phone'); ?></label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="referral"><?php echo aimpro_get_field('contact_form_referral_label', 'Where did you find us?'); ?></label>
                            <select id="referral" name="referral">
                                <option value="">Please select...</option>
                                <option value="google-search">Google Search</option>
                                <option value="social-media">Social Media</option>
                                <option value="referral">Referral</option>
                                <option value="linkedin">LinkedIn</option>
                                <option value="facebook">Facebook</option>
                                <option value="instagram">Instagram</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group full-width">
                            <label for="query"><?php echo aimpro_get_field('contact_form_query_label', 'Query'); ?></label>
                            <textarea id="query" name="query" rows="4" placeholder="<?php echo esc_attr(aimpro_get_field('contact_form_query_placeholder', 'Tell us about your inquiry...')); ?>"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="form-submit-btn"><?php echo aimpro_get_field('contact_form_submit_text', 'Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
