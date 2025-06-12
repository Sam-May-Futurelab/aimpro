<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Performance Optimization: Resource Hints -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <!-- Preload critical animation data -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/images/stats.json" as="fetch" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" as="script">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/style.css" as="style">
    
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <!-- Google Fonts - Inter with performance optimizations -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- GSAP for Premium Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

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

<!-- Sticky Header -->
<header class="sticky-header glassmorphism-header">
    <div class="container">
        <div class="header-content">            <div class="logo">
                <a href="<?php echo home_url(); ?>" class="logo-link" aria-label="Aimpro Digital - Home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-Digital-UK-Final-Logo.png" alt="Aimpro Digital - Award-Winning Digital Marketing Agency" class="logo-image" width="200" height="45">
                </a>
            </div>            <nav class="main-nav">
                <ul>                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item-mega">
                        <a href="#services" class="nav-link">Services <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="mega-menu">
                            <div class="mega-menu-container">
                                <div class="mega-menu-grid">
                                    <div class="mega-menu-column">
                                        <h4 class="mega-menu-title">SEO</h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="#local-seo">Local SEO</a></li>
                                            <li><a href="#seo-audit">SEO Audit</a></li>
                                            <li><a href="#technical-seo">Technical SEO</a></li>
                                            <li><a href="#on-page-seo">On-Page SEO</a></li>
                                            <li><a href="#white-label-seo">White Label SEO</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h4 class="mega-menu-title">Ads</h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="#google-ads">Google Ads</a></li>
                                            <li><a href="#meta-ads">Meta Ads (FB/Instagram)</a></li>
                                            <li><a href="#microsoft-ads">Microsoft/Bing Ads</a></li>
                                            <li><a href="#retargeting">Retargeting & Display</a></li>
                                            <li><a href="#ppc-audit">PPC Audit</a></li>
                                            <li><a href="#white-label-ppc">White Label PPC</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h4 class="mega-menu-title">Automation</h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="#ai-crm">AI CRM Setup</a></li>
                                            <li><a href="#email-sms">Email & SMS Flows</a></li>
                                            <li><a href="#email-campaigns">Email Campaigns</a></li>
                                            <li><a href="#funnel-automation">Funnel Automation</a></li>
                                            <li><a href="#chatbots">Chatbots</a></li>
                                            <li><a href="#ai-tools">AI Tools</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu-column">
                                        <h4 class="mega-menu-title">Websites</h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="#website-design">Website Design</a></li>
                                            <li><a href="#landing-pages">Landing Pages</a></li>
                                            <li><a href="#funnel-builds">Funnel Builds</a></li>
                                            <li><a href="#ux-ui">UX/UI Optimisation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="#solutions" class="nav-link">Solutions <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#lead-generation">Lead Generation (B2B/B2C)</a></li>
                                <li><a href="#automate-marketing">Automate Marketing</a></li>
                                <li><a href="#improve-roi">Improve ROI from Ads</a></li>
                                <li><a href="#rank-higher">Rank Higher Locally</a></li>
                                <li><a href="#high-converting-website">Build a High-Converting Website</a></li>
                                <li><a href="#streamline-funnel">Streamline Your Sales Funnel</a></li>
                            </ul>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="#industries" class="nav-link">Industries <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#automotive">Automotive</a></li>
                                <li><a href="#home-garden">Home and Garden</a></li>
                                <li><a href="#finance">Finance</a></li>
                                <li><a href="#professional-services">Professional Services</a></li>
                                <li><a href="#estate-agents">Estate Agents</a></li>
                                <li><a href="#coaches-consultants">Coaches & Consultants</a></li>
                                <li><a href="#ecommerce">E-commerce</a></li>
                            </ul>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="#resources" class="nav-link">Resources <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="#templates-tools">Templates & Tools</a></li>
                                <li><a href="#case-studies">Case Studies</a></li>
                                <li><a href="#events-webinars">Events & Webinars</a></li>
                                <li><a href="#training-mentoring">Training & Mentoring</a></li>
                            </ul>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="#about" class="nav-link">About <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#company">Company</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#testimonials">Testimonials</a></li>
                                <li><a href="#careers">Careers</a></li>
                                <li><a href="#become-partner">Become a Partner</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            
            <div class="header-ctas">
                <a href="#contact" class="btn-outline premium-hover">Get a Free Audit</a>
                <a href="tel:+441212858490" class="btn-primary shine-effect">Book a Call</a>
            </div>            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>

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
        <div class="hero-wrapper">
            <div class="hero-content">                <div class="hero-badge slide-up-delay-1">
                    <span>Award-Winning Digital Agency</span>
                </div><h1 class="hero-title">Scale Your Business With <span class="highlight curly-underline">PRECISION</span> Digital <span class="highlight-word" style="color: #f15a25 !important; -webkit-text-fill-color: #f15a25 !important;">Marketing</span></h1>                <div class="hero-straplines">
                    <span class="strapline active">No Fluff. Just Results.</span>
                    <span class="strapline">Data-Driven Strategy. Measurable Results.</span>
                    <span class="strapline">Grow Your Business With Precision Marketing.</span>
                    <span class="strapline">Your High-ROI Digital Marketing Partner</span>
                </div>
                <p class="hero-subtitle">Expert Lead Generation, SEO, PPC & Automation. Data-driven strategies that deliver <strong class="highlight-underline">MEASURABLE RESULTS</strong> and accelerate your <strong class="highlight-word">growth</strong>.</p>                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary large shine-effect pulse-animation">CLAIM YOUR FREE GROWTH STRATEGY</a>
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
    <div class="container">
        <div class="tags-wrapper slide-up">
            <div class="tag">SEO</div>
            <div class="tag">Google Ads</div>
            <div class="tag">Social Media</div>
            <div class="tag">Website</div>
            <div class="tag">Ads</div>
            <div class="tag">Email</div>
            <div class="tag">AI Automation</div>
            <div class="tag">CRM</div>
        </div>
    </div>
</section>

<!-- Agency Value Statement -->
<section class="value-statement">
    <div class="container">
        <div class="content-center">            <h2>A Results-Driven Digital Agency Obsessed With Your <span class="highlight curly-underline">SUCCESS</span></h2>
            <p>We partner with ambitious businesses to transform their digital presence through intelligent strategies and performance-focused marketing. Our proven methodologies deliver quantifiable results that drive exponential growth and maximize your competitive advantage.</p>
            <a href="#contact" class="btn-primary large">CLAIM YOUR FREE GROWTH AUDIT</a>
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
                <div class="stat-number" data-count="25">0</div>
                <div class="stat-label">Years of Experience</div>
            </div>
            <div class="stat-item counter">
                <div class="stat-number" data-count="98">0%</div>
                <div class="stat-label">Increase in Client Leads</div>
            </div>
            <div class="stat-item counter">
                <div class="stat-number" data-count="15">0+</div>
                <div class="stat-label">Industries Transformed</div>
            </div>
            <div class="stat-item counter">
                <div class="stat-number" data-count="199">0%</div>
                <div class="stat-label">Increase in Conversion Rates</div>
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
    
    <div class="container">
        <div class="content-center">            <h2>Premium Digital Marketing Solutions That <span class="highlight curly-underline">DELIVER</span></h2>
            <p class="section-subtitle">Zero fluff. Pure performance. Our integrated marketing ecosystem works seamlessly to transform prospects into profits.</p>
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
                        <p>Dominate search results with comprehensive SEO strategies including local SEO, technical optimization, and on-page excellence that drive organic traffic and qualified leads.</p>
                        <div class="service-features">
                            <span class="feature-tag">✓ Local SEO</span>
                            <span class="feature-tag">✓ Technical SEO</span>
                            <span class="feature-tag">✓ SEO Audits</span>
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
                        <p>Dominate search results with expertly crafted Google Ads campaigns that capture high-intent traffic and convert clicks into customers with surgical precision and maximum ROI.</p>
                        <div class="service-features">
                            <span class="feature-tag">✓ ROI Optimization</span>
                            <span class="feature-tag">✓ Keyword Research</span>
                            <span class="feature-tag">✓ A/B Testing</span>
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
                        <div class="service-features">
                            <span class="feature-tag">✓ Mobile First</span>
                            <span class="feature-tag">✓ SEO Ready</span>
                            <span class="feature-tag">✓ Fast Loading</span>
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
            <a href="#contact" class="btn-primary large pulse-animation">UNLOCK YOUR GROWTH POTENTIAL</a>
        </div>
    </div>
</section>

<!-- Visit Our Office Section -->
<section class="office-visit-section">
    <div class="container">
        <div class="office-content-wrapper">
            <div class="office-content">
                <h2>Come See Us... We're a <span class="highlight curly-underline">REAL</span> Company with Real Humans</h2>
                <p>Let's discuss your project over a coffee. Book a time to visit our Birmingham office and meet the team behind your marketing success.</p>
                
                <div class="calendar-booking">
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
                  <div class="office-details">
                    <h3>Our Birmingham Office</h3>
                    <p><strong>Located in: 55 Colmore Row</strong><br>
                    Address: 55 Colmore Row, Birmingham B3 2AA<br>
                    Right in the heart of Birmingham's business district</p>
                </div>
            </div>
            
            <div class="office-visual">
                <div class="office-image">
                    <!-- Office image - replace with actual image when available -->
                    <img src="https://images.unsplash.com/photo-1604328698692-f76ea9498e76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="55 Colmore Row Birmingham Office" />
                </div>
                <div class="office-map">
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
<section id="about" class="team-section premium-team">
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
    <div class="container">
        <div class="content-center">            <h2>Don't Just Take Our Word for It</h2>
            <div class="curly-underline-accent"></div>
            <p class="section-subtitle">Discover how we've transformed businesses across industries with strategies that deliver measurable growth:</p></div>
        <div class="testimonials-carousel-wrapper">
            <div class="testimonials-carousel-container">
                <div class="testimonials-carousel-track">
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"Honestly, if you have a business that relies on your website to bring in business, don't waste your time on any other company. From my experience, I have gained approximately 50% increase in qualified leads."</p>
                        </div>
                        <div class="testimonial-author">
                            <strong>Emily Hargreaves</strong>
                            <span>Marketing Director</span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"No negatives at all. One of the best companies we have ever worked with. So dynamic and on trend. Incredibly proactive in everything they do and the bonus is that they are such lovely people to work with."</p>
                        </div>
                        <div class="testimonial-author">
                            <strong>Charlotte Davies</strong>
                            <span>Business Owner</span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"The Google Ads campaigns run by Aimpro Digital have been a fantastic success. Their attention to detail and ability to target the right audience has really paid off. We've seen a significant increase in traffic and conversions, all thanks to their hard work and expertise!"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong>Tom Ridley</strong>
                            <span>Sales Director, Sheffield</span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"Aimpro Digital has been a game-changer for our business! Since partnering with them, we've seen a consistent flow of quality leads that truly align with our services. It's been a breath of fresh air to work with a team that understands our goals and delivers on their promises."</p>
                        </div>
                        <div class="testimonial-author">
                            <strong>Sarah Thompson</strong>
                            <span>Marketing Manager, London</span>
                        </div>
                    </div>
                    <div class="testimonial-card slide-up">
                        <div class="testimonial-content">
                            <p>"Our online visibility has improved dramatically thanks to Aimpro Digital's SEO expertise. Within months, we went from barely being on the map to ranking on the first page for key terms. The team is knowledgeable, transparent, and always ready with helpful advice. Couldn't recommend them more!"</p>
                        </div>
                        <div class="testimonial-author">
                            <strong>James Whitfield</strong>
                            <span>Director, Birmingham</span>
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
            <h2>Stay Ahead With Expert Insights & Cutting-Edge Industry Intelligence</h2>
            <p class="section-subtitle">Exclusive strategies and data-driven insights from our marketing experts to keep you at the forefront of digital innovation.</p>
        </div>
        <div class="insights-grid">            <article class="featured-insight">
                <div class="insight-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-background.png" alt="Featured Insight" />
                    <div class="insight-category">Featured</div>
                </div>
                <div class="insight-content">
                    <h3>The Future of AI in Digital Marketing: What You Need to Know</h3>
                    <p>Discover how artificial intelligence is revolutionizing digital marketing and what it means for your business in 2024.</p>
                    <div class="insight-meta">
                        <span class="read-time">8 min read</span>
                        <span class="publish-date">Dec 15, 2023</span>
                    </div>
                    <a href="#" class="insight-link">Read More →</a>
                </div>
            </article>
            <div class="insights-sidebar">
                <article class="insight-card">
                    <div class="insight-image-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.png" alt="Insight" />
                    </div>
                    <div class="insight-content-small">
                        <h4>Google Ads Best Practices for 2024</h4>
                        <span class="read-time">5 min read</span>
                    </div>
                </article>
                <article class="insight-card">
                    <div class="insight-image-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinesh-thapa.png" alt="Insight" />
                    </div>
                    <div class="insight-content-small">
                        <h4>SEO Trends That Will Drive Traffic</h4>
                        <span class="read-time">6 min read</span>
                    </div>
                </article>
                <article class="insight-card">
                    <div class="insight-image-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-butler.png" alt="Insight" />
                    </div>
                    <div class="insight-content-small">
                        <h4>Social Media ROI: Measuring Success</h4>
                        <span class="read-time">4 min read</span>
                    </div>
                </article>
            </div>
        </div>
        <div class="insights-cta">
            <a href="#" class="btn-outline premium-hover">View All Insights</a>
        </div>
    </div>
</section>

<!-- Latest Blogs -->
<section class="blog-section">
    <div class="container">
        <div class="content-center">            <h2>Scale Up Your <span class="highlight curly-underline">MARKETING</span></h2>
            <p class="section-subtitle">Zero secrets. Maximum value. We share proven strategies and insider insights to help ambitious marketers like you accelerate growth, drive traffic, and maximize revenue.</p>
        </div>
        <div class="blog-grid">
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3,
                'post_status' => 'publish'
            ));
            
            foreach($recent_posts as $post) {
                setup_postdata($post);
                $categories = get_the_category($post['ID']);
                $category_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
                ?>
                <article class="blog-card slide-up">                    <div class="blog-meta">
                        <span class="blog-date"><?php echo get_the_date('M j, Y', $post['ID']); ?></span>
                        <span class="blog-category"><?php echo $category_name; ?></span>
                    </div>
                    <h3><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></h3>
                    <p><?php echo wp_trim_words($post['post_content'], 20, '...'); ?></p>
                    <a href="<?php echo get_permalink($post['ID']); ?>" class="read-more">Read More</a>
                </article>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="blog-cta-section">
            <a href="/blog" class="btn-primary large">READ MORE INSIGHTS</a>
        </div>
    </div>
</section>

<!-- Contact & Footer -->
<section class="final-cta-section">
    <!-- Target Icons -->
    <div class="target-icon contact-target-1"></div>
    <div class="target-icon contact-target-2"></div>
    <div class="container">
        <div class="final-cta-content">
            <h2>You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span></h2>
            <p>Request a marketing review today. We'll send you a detailed analysis of your website and marketing, breaking down your next steps to success.</p>
            
            <!-- Contact Form -->
            <div class="contact-form-wrapper">
                <form class="contact-form" id="contact-form" method="post" action="#" novalidate>
                    <div class="form-header">
                        <h3>Get In Touch</h3>
                        <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="referral">Where did you find us?</label>
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
                            <label for="query">Query</label>
                            <textarea id="query" name="query" rows="4" placeholder="Tell us about your inquiry..."></textarea>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="form-submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer id="contact" class="footer-section">
    <div class="footer-background-pattern"></div>
    <div class="container">
        <div class="footer-content">            <div class="footer-column footer-brand">
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-Digital-UK-Final-Logo.png" alt="Aimpro Digital - Digital Marketing Agency" class="footer-logo-img">
                    <p class="brand-tagline">Transforming Businesses Through Digital Excellence</p>
                </div>
                <p class="footer-description">We're a certified digital marketing agency specializing in SEO, PPC, and web development. Let us help you dominate your market with data-driven strategies.</p>
                <div class="footer-certifications">
                    <span class="cert-badge">Google Certified</span>
                    <span class="cert-badge">Meta Partner</span>
                </div>
            </div>
            
            <div class="footer-column footer-services">
                <h3>Our Services</h3>
                <ul class="footer-links">
                    <li><a href="#services">Search Engine Optimization</a></li>
                    <li><a href="#services">Pay-Per-Click Advertising</a></li>
                    <li><a href="#services">Web Development</a></li>
                    <li><a href="#services">Social Media Marketing</a></li>
                    <li><a href="#services">Digital Strategy</a></li>
                </ul>
            </div>
            
            <div class="footer-column footer-contact">
                <h3>Get in Touch</h3>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Email</span>
                            <a href="mailto:hello@aimpro.co.uk">hello@aimpro.co.uk</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Phone</span>
                            <a href="tel:01212858490">0121 285 8490</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </div>
                        <div class="contact-details">
                            <span class="contact-label">Address</span>
                            <span>55 Colmore Row, Birmingham B3 2AA</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-column footer-connect">
                <h3>Connect With Us</h3>
                <p class="connect-description">Follow us for the latest digital marketing insights and updates.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon facebook" title="Facebook">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon linkedin" title="LinkedIn">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon instagram" title="Instagram">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-icon twitter" title="Twitter/X">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </a>                </div>
                
                <!-- Theme Toggle Button -->
                <div class="footer-theme-toggle">
                    <span class="theme-toggle-label">Theme:</span>
                    <button class="theme-toggle" id="theme-toggle" aria-label="Toggle light/dark theme">
                        <svg class="theme-icon sun-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="5"></circle>
                            <line x1="12" y1="1" x2="12" y2="3"></line>
                            <line x1="12" y1="21" x2="12" y2="23"></line>
                            <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                            <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                            <line x1="1" y1="12" x2="3" y2="12"></line>
                            <line x1="21" y1="12" x2="23" y2="12"></line>
                            <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                            <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                        </svg>
                        <svg class="theme-icon moon-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="footer-cta">
                    <h4>Ready to Grow?</h4>
                    <p>Get your free digital marketing audit today.</p>
                    <a href="#contact" class="cta-button">Get Free Audit</a>
                </div>
            </div>
        </div>
          <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="footer-copyright">
                    <p class="copyright-main">&copy; 2025 Aimpro Digital. All rights reserved.</p>
                    <p class="company-info">Digital Search Academy Ltd t/a Aimpro Digital</p>
                </div>
                <div class="footer-legal">
                    <a href="#" class="legal-link">Privacy Policy</a>
                    <a href="#" class="legal-link">Terms of Service</a>
                    <a href="#" class="legal-link">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
// Enhanced functionality
document.addEventListener('DOMContentLoaded', function() {    // Stats counter animation
    const counters = document.querySelectorAll('.stat-number');
    let counterAnimated = false;
    
    function animateCounters() {
        if (counterAnimated) return;
        counterAnimated = true;
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const originalText = counter.textContent;
            const suffix = originalText.replace(/\d+/g, ''); // Extract % or + or any suffix
            const duration = 2500; // Slightly longer for smoother animation
            let startTime = null;
            
            function updateCounter(timestamp) {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                
                // Use easeOutQuart easing for smooth deceleration
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                const current = Math.floor(easeOutQuart * target);
                
                counter.textContent = current + suffix;
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + suffix; // Ensure final value is exact
                }
            }
            
            requestAnimationFrame(updateCounter);
        });
    }
    
    // Trigger counter animation when stats section is visible
    const statsSection = document.querySelector('.stats-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
            }
        });
    }, { threshold: 0.5 });
    
    if (statsSection) {
        observer.observe(statsSection);
    }
      // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Animation intersection observer
    const animatedElements = document.querySelectorAll('.slide-up, .fade-in');
    const animationObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                animationObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '50px'
    });
    
    animatedElements.forEach(element => {
        animationObserver.observe(element);
    });
      // Mobile menu toggle
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    const headerCtas = document.querySelector('.header-ctas');
    
    if (mobileToggle) {
        mobileToggle.addEventListener('click', function() {
            this.classList.toggle('active');
            mainNav.classList.toggle('mobile-active');
            if (headerCtas) {
                headerCtas.classList.toggle('mobile-active');
            }
        });    }
    
    // Header scroll effect - SIMPLIFIED (header stays consistent)
    // No need for scroll-based class changes since header is always dark
    
    // Testimonials Carousel
    const carousel = {
        track: document.querySelector('.testimonials-carousel-track'),
        cards: document.querySelectorAll('.testimonial-card'),
        prevBtn: document.querySelector('.carousel-prev'),
        nextBtn: document.querySelector('.carousel-next'),
        dots: document.querySelectorAll('.dot'),
        currentIndex: 0,
        
        init() {
            if (!this.track || !this.cards.length) return;
            
            this.updateCarousel();
            this.bindEvents();
            this.autoPlay();
        },
        
        bindEvents() {
            this.prevBtn?.addEventListener('click', () => this.prev());
            this.nextBtn?.addEventListener('click', () => this.next());
            
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });
            
            // Pause autoplay on hover
            this.track.addEventListener('mouseenter', () => this.pauseAutoPlay());
            this.track.addEventListener('mouseleave', () => this.autoPlay());
        },
        
        updateCarousel() {
            const containerWidth = this.track.parentElement.offsetWidth;
            const gap = window.innerWidth >= 1024 ? 32 : window.innerWidth >= 768 ? 24 : 48;
            const itemsPerView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const cardWidth = (containerWidth - (gap * (itemsPerView - 1))) / itemsPerView;
            
            // Set card widths
            this.cards.forEach(card => {
                card.style.width = `${cardWidth}px`;
                card.style.flexShrink = '0';
            });
            
            const maxIndex = Math.max(0, this.cards.length - itemsPerView);
            this.currentIndex = Math.min(this.currentIndex, maxIndex);
            
            const translateX = -this.currentIndex * (cardWidth + gap);
            this.track.style.transform = `translateX(${translateX}px)`;
            
            // Update dots
            this.dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        },
        
        next() {
            const itemsPerView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const maxIndex = Math.max(0, this.cards.length - itemsPerView);
            
            this.currentIndex = this.currentIndex >= maxIndex ? 0 : this.currentIndex + 1;
            this.updateCarousel();
        },
        
        prev() {
            const itemsPerView = window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
            const maxIndex = Math.max(0, this.cards.length - itemsPerView);
            
            this.currentIndex = this.currentIndex <= 0 ? maxIndex : this.currentIndex - 1;
            this.updateCarousel();
        },
        
        goToSlide(index) {
            this.currentIndex = index;
            this.updateCarousel();
        },
        
        autoPlay() {
            this.pauseAutoPlay();
            this.autoPlayInterval = setInterval(() => this.next(), 5000);
        },
        
        pauseAutoPlay() {
            if (this.autoPlayInterval) {
                clearInterval(this.autoPlayInterval);
            }
        }
    };
    
    // Initialize carousel
    carousel.init();
    
    // Update on resize
    window.addEventListener('resize', () => {
        carousel.updateCarousel();
    });
    
    // Add loading animation delays to elements
    const loadAnimatedElements = document.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card');
    loadAnimatedElements.forEach((el, index) => {
        el.style.animationDelay = `${index * 0.1}s`;
    });    // GSAP Premium Animations
    gsap.registerPlugin(ScrollTrigger);

    // Floating elements animation (simplified)
    gsap.to('.floating-shape', {
        y: "random(-30, 30)",
        x: "random(-20, 20)",
        rotation: "random(-180, 180)",
        duration: "random(8, 12)",
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // Premium scroll animations
    gsap.utils.toArray('.premium-card').forEach(card => {
        gsap.fromTo(card, 
            {
                y: 100,
                opacity: 0,
                scale: 0.8
            },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: card,
                    start: "top 80%",
                    end: "bottom 20%"
                }
            }
        );
    });    // Hero badge animation (simplified)
    gsap.fromTo('.hero-badge', 
        {
            opacity: 0
        },
        {
            opacity: 1,
            duration: 1,
            delay: 0.8,
            ease: "power2.out"
        }
    );// Trust indicators simple fade-in
    gsap.set('.trust-indicators .trust-item', { opacity: 0 });
    gsap.to('.trust-indicators .trust-item', {
        opacity: 1,
        duration: 0.6,
        delay: 2,
        stagger: 0.2,
        ease: "power2.out"
    });

    // Section transitions with wave effect
    gsap.utils.toArray('section').forEach(section => {
        gsap.fromTo(section.querySelectorAll('h2, h3'), 
            {
                y: 50,
                opacity: 0
            },
            {
                y: 0,
                opacity: 1,
                duration: 0.8,
                stagger: 0.1,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: section,
                    start: "top 75%"
                }
            }
        );
    });

    // Video testimonial hover effects
    document.querySelectorAll('.video-testimonial').forEach(video => {
        video.addEventListener('mouseenter', () => {
            gsap.to(video.querySelector('.play-button'), {
                scale: 1.2,
                duration: 0.3,
                ease: "back.out(1.7)"
            });
            gsap.to(video.querySelector('.video-overlay'), {
                opacity: 0.3,
                duration: 0.3
            });
        });

        video.addEventListener('mouseleave', () => {
            gsap.to(video.querySelector('.play-button'), {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
            gsap.to(video.querySelector('.video-overlay'), {
                opacity: 0,
                duration: 0.3
            });
        });    });

    // Enhanced button hover effects
    document.querySelectorAll('.shine-effect').forEach(btn => {
        btn.addEventListener('mouseenter', () => {
            gsap.to(btn, {
                scale: 1.05,
                duration: 0.3,
                ease: "power2.out"
            });
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });

    // Loading screen animation
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
        gsap.to('.loading-spinner', {
            rotation: 360,
            duration: 2,
            repeat: -1,
            ease: "none"
        });

        window.addEventListener('load', () => {
            gsap.to(loadingScreen, {
                opacity: 0,
                duration: 0.8,
                ease: "power2.inOut",
                onComplete: () => {
                    loadingScreen.style.display = 'none';
                }
            });
        });
    }
    
    // Simple strapline rotation
    const straplines = document.querySelectorAll('.strapline');
    if (straplines.length > 1) {
        let currentIndex = 0;
        setInterval(() => {
            straplines[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % straplines.length;
            straplines[currentIndex].classList.add('active');
        }, 3000);
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
