<?php
/**
 * Template for displaying the homepage
 *
 * @package AimproDigital
 */

get_header(); ?>

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
    </div><div class="container">        <div class="hero-wrapper">            <div class="hero-content animate-on-scroll animate-fade-up">                <div class="hero-badge slide-up-delay-1">
                    <span><?php echo aimpro_get_field('hero_badge_text', 'Award-Winning Digital Agency'); ?></span>                </div><?php echo aimpro_get_field('hero_title', '<h1 class="hero-title">Scale Your Business With <span class="curly-underline">PRECISION</span> Digital <span class="highlight-word" style="colour: #f15a25 !important; -webkit-text-fill-colour: #f15a25 !important;">Marketing</span></h1>'); ?>                <div class="hero-straplines">
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
    <div class="container">        <div class="content-center">            <h2><?php echo aimpro_get_field('value_statement_title', 'A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span>'); ?></h2>
            <p><?php echo aimpro_get_field('value_statement_description', 'We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximise your competitive advantage.'); ?></p>
            <a href="<?php echo aimpro_get_field('value_statement_cta_url', '#contact'); ?>" class="btn-primary large"><?php echo aimpro_get_field('value_statement_cta_text', 'CLAIM YOUR FREE GROWTH AUDIT'); ?></a>
        </div>
    </div>
</section>

<!-- Stats Counter -->
<section class="stats-section">
    <!-- Target Icons -->
    <div class="target-icon stats-target-1"></div>    <!-- Stats Lottie Animation Background - optimiseD: Single animation instead of 3 -->
    <div class="stats-animation-bg">
        <div class="animation-layer">
            <!-- Single optimised Lottie instance with CSS-based width coverage -->
            <div id="lottie-stats-animation" class="lottie-stats-single"></div>
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
                <div class="stat-number" data-count="<?php echo aimpro_get_field('stat_3_number', '25'); ?>"><?php echo aimpro_get_field('stat_3_number', '0'); ?>+</div>
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
                <div class="service-content">                    <div class="service-header">                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <i class="fas fa-search" style="font-size: 30px; colour: #f15a25;"></i>
                            </div>
                        </div>
                        <div class="service-badge">SEO</div>
                        <h3>SEO Services</h3>
                    </div>
                    <div class="service-description">
                        <p>Dominate search results with comprehensive SEO strategies including local SEO, technical optimisation, and on-page excellence that drive organic traffic and qualified leads.</p>                        <div class="service-features">
                            <span class="feature-tag">Local SEO</span>
                            <span class="feature-tag">Technical SEO</span>
                            <span class="feature-tag">SEO Audits</span>
                        </div>
                    </div>                    <div class="service-action">
                        <a href="#contact" class="btn-primary">
                            <span>RANK HIGHER</span>
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
                <div class="service-content">                    <div class="service-header">                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <i class="fab fa-google" style="font-size: 30px; colour: #f15a25;"></i>
                            </div>
                        </div>
                        <div class="service-badge">PPC</div>
                        <h3>Google Ads Management</h3>
                    </div>
                    <div class="service-description">
                        <p>Dominate search results with expertly crafted Google Ads campaigns that capture high-intent traffic and convert clicks into customers with surgical precision and maximum ROI.</p>                        <div class="service-features">
                            <span class="feature-tag">ROI Optimisation</span>
                            <span class="feature-tag">Keyword Research</span>
                            <span class="feature-tag">A/B Testing</span>
                        </div>
                    </div>                    <div class="service-action">
                        <a href="#contact" class="btn-primary">
                            <span>MAXIMIZE YOUR ROI</span>
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
                <div class="service-content">                    <div class="service-header">                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <i class="fas fa-palette" style="font-size: 30px; colour: #f15a25;"></i>
                            </div>
                        </div>
                        <div class="service-badge">Web</div>
                        <h3>Website Design</h3>
                    </div>
                    <div class="service-description">
                        <p>Engineer premium, conversion-optimised websites that captivate visitors and transform them into customers through strategic design and seamless user experiences.</p>
                        <div class="service-features">                            <span class="feature-tag">Mobile First</span>
                            <span class="feature-tag">SEO Ready</span>
                            <span class="feature-tag">Fast Loading</span>
                        </div>
                    </div>                    <div class="service-action">
                        <a href="#contact" class="btn-primary">
                            <span>BUILD BETTER WEBSITE</span>
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
                    <div class="service-header">                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <i class="fab fa-meta" style="font-size: 30px; colour: #f15a25;"></i>
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
                    </div>                    <div class="service-action">
                        <a href="#contact" class="btn-primary">
                            <span>SCALE YOUR REACH</span>
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
                    <div class="service-header">                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <i class="fas fa-robot" style="font-size: 30px; colour: #f15a25;"></i>
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
                    </div>                    <div class="service-action">
                        <a href="#contact" class="btn-primary">
                            <span>AUTOMATE YOUR CRM</span>
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
                    <div class="service-header">                        <div class="service-icon-container">
                            <div class="service-icon-animated">
                                <i class="fas fa-cogs" style="font-size: 30px; colour: #f15a25;"></i>
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
                    </div>                    <div class="service-action">
                        <a href="#contact" class="btn-primary">
                            <span>AUTOMATE YOUR GROWTH</span>
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
    <div class="container">        <div class="content-center">
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
                <?php endif; ?>                <iframe
                    src="https://api.leadconnectorhq.com/widget/form/urFhaxQ2JKbdOn5YtUxv"
                    style="width:100%;height:100%;border:none;border-radius:3px"
                    id="inline-urFhaxQ2JKbdOn5YtUxv" 
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Digital Marketing Guide - Aimpro Website"
                    data-height="432"
                    data-layout-iframe-id="inline-urFhaxQ2JKbdOn5YtUxv"
                    data-form-id="urFhaxQ2JKbdOn5YtUxv"
                    title="Digital Marketing Guide - Aimpro Website"
                        >
                </iframe>
                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
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
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentcolour" stroke-width="2">
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
        <div class="content-centre">            <h2>Meet The Experts Who Make <span class="highlight curly-underline">MAGIC</span> Happen</h2>
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
                <p class="member-expertise">ROI Optimisation • Analytics Expert</p>
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
    <div class="target-icon testimonials-target-1"></div>    <div class="container">
        <div class="content-centre animate-on-scroll animate-fade-up">
            <h2><?php echo aimpro_get_field('testimonials_title', 'Don\'t Just Take Our Word for It'); ?></h2>
        </div>
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




<!-- Latest Blogs -->
<section class="blog-section">
    <div class="container">
        <div class="content-centre">            <h2><?php echo aimpro_get_field('blog_title', 'Scale Up Your <span class="highlight curly-underline">MARKETING</span>'); ?></h2>
            <p class="section-subtitle"><?php echo aimpro_get_field('blog_subtitle', 'Zero secrets. Maximum value. We share proven strategies and insider insights to help ambitious marketers like you accelerate growth, drive traffic, and maximise revenue.'); ?></p>
        </div>
          <div class="blog-grid">
            <?php
            // Get the 4 most recent posts
            $recent_posts = get_posts(array(
                'posts_per_page' => 4,
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
                                <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
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
                <?php endif; ?>                <iframe
                    src="https://api.leadconnectorhq.com/widget/form/lLA80fnC5VJUH545FX37"
                    style="width:100%;height:100%;border:none;border-radius:3px"
                    id="inline-lLA80fnC5VJUH545FX37" 
                    data-layout="{'id':'INLINE'}"
                    data-trigger-type="alwaysShow"
                    data-trigger-value=""
                    data-activation-type="alwaysActivated"
                    data-activation-value=""
                    data-deactivation-type="neverDeactivate"
                    data-deactivation-value=""
                    data-form-name="Get In Touch - Aimpro Website"
                    data-height="603"
                    data-layout-iframe-id="inline-lLA80fnC5VJUH545FX37"
                    data-form-id="lLA80fnC5VJUH545FX37"
                    title="Get In Touch - Aimpro Website"
                        >
                </iframe>
                <script src="https://link.msgsndr.com/js/form_embed.js"></script>
            </div>
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
