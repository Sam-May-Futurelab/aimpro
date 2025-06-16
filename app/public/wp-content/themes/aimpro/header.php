<?php
/**
 * Header template for Aimpro Digital theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
      <!-- Performance Optimization: Resource Hints -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/images/stats.json" as="fetch" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/js/main.js" as="script">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/style.css" as="style">
      <!-- Google Fonts - Inter with performance optimizations -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <!-- Prevent theme flash - set light theme as default immediately -->
    <style>
        :root { 
            --primary-black: #ffffff !important;
            --primary-black-light: #f8fafc !important;
            --bg-primary: #ffffff !important;
            --bg-secondary: #fefefe !important;
            --text-primary: #1a202c !important;
            --text-secondary: #2d3748 !important;
            --text-muted: #4a5568 !important;
        }
        html, body { 
            background-color: #ffffff !important;
            color: #1a202c !important;
        }
        .light-theme-default { 
            background: #ffffff !important;
            color: #1a202c !important;
        }
    </style>
    
    <!-- Critical theme script - executes immediately -->
    <script>
        (function() {
            // Check for saved dark theme preference
            const isDarkTheme = localStorage.getItem('darkTheme') === 'true';
            
            if (!isDarkTheme) {
                // Apply light theme classes immediately
                document.documentElement.classList.add('light-theme');
                document.body.classList.add('light-theme');
            }
        })();
    </script>
    
    <!-- GSAP for Premium Animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Sticky Header -->
<header class="sticky-header glassmorphism-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo home_url(); ?>" class="logo-link" aria-label="Aimpro Digital - Home">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Aimpro-Digital-UK-Final-Logo.png" alt="Aimpro Digital - Award-Winning Digital Marketing Agency" class="logo-image" width="200" height="45">
                </a>
            </div>            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo home_url(); ?>" class="nav-link">Home</a></li>                    <li class="nav-item-mega">
                        <a href="<?php echo home_url('/services'); ?>" class="nav-link">Services <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="mega-menu">
                            <div class="mega-menu-container">
                                <div class="mega-menu-grid">                                    <div class="mega-menu-column">
                                        <h4><a href="<?php echo home_url('/seo-services'); ?>">SEO Services</a></h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?php echo home_url('/local-seo'); ?>">Local SEO</a></li>
                                            <li><a href="<?php echo home_url('/seo-audit'); ?>">SEO Audit</a></li>
                                            <li><a href="<?php echo home_url('/technical-seo'); ?>">Technical SEO</a></li>
                                            <li><a href="<?php echo home_url('/on-page-seo'); ?>">On-Page SEO</a></li>
                                            <li><a href="<?php echo home_url('/white-label-seo'); ?>">White Label SEO</a></li>
                                        </ul>
                                    </div>                                    <div class="mega-menu-column">
                                        <h4><a href="<?php echo home_url('/advertising-ppc'); ?>">Advertising & PPC</a></h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?php echo home_url('/google-ads'); ?>">Google Ads</a></li>
                                            <li><a href="<?php echo home_url('/meta-ads'); ?>">Meta Ads</a></li>
                                            <li><a href="<?php echo home_url('/microsoft-ads'); ?>">Microsoft Ads</a></li>
                                            <li><a href="<?php echo home_url('/retargeting-display'); ?>">Retargeting</a></li>
                                            <li><a href="<?php echo home_url('/ppc-audit'); ?>">PPC Audit</a></li>
                                        </ul>
                                    </div>                                    <div class="mega-menu-column">
                                        <h4><a href="<?php echo home_url('/marketing-automation'); ?>">Marketing Automation</a></h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?php echo home_url('/ai-crm-setup'); ?>">AI CRM Setup</a></li>
                                            <li><a href="<?php echo home_url('/email-sms-flows'); ?>">Email & SMS</a></li>
                                            <li><a href="<?php echo home_url('/email-campaigns'); ?>">Email Campaigns</a></li>
                                            <li><a href="<?php echo home_url('/funnel-automation'); ?>">Funnels</a></li>
                                            <li><a href="<?php echo home_url('/chatbots'); ?>">Chatbots</a></li>
                                        </ul>
                                    </div>                                    <div class="mega-menu-column">
                                        <h4><a href="<?php echo home_url('/website-development'); ?>">Web Development</a></h4>
                                        <ul class="mega-menu-list">
                                            <li><a href="<?php echo home_url('/website-design'); ?>">Website Design</a></li>
                                            <li><a href="<?php echo home_url('/landing-pages'); ?>">Landing Pages</a></li>
                                            <li><a href="<?php echo home_url('/funnel-builds'); ?>">Funnel Builds</a></li>
                                            <li><a href="<?php echo home_url('/ux-ui-optimization'); ?>">UX/UI Design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li><li class="nav-item-dropdown">
                        <a href="<?php echo home_url('/solutions'); ?>" class="nav-link">Solutions <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="<?php echo home_url('/lead-generation'); ?>">Lead Generation (B2B/B2C)</a></li>
                                <li><a href="<?php echo home_url('/automate-marketing'); ?>">Automate Marketing</a></li>
                                <li><a href="<?php echo home_url('/improve-roi-ads'); ?>">Improve ROI from Ads</a></li>
                                <li><a href="<?php echo home_url('/rank-higher-locally'); ?>">Rank Higher Locally</a></li>
                                <li><a href="<?php echo home_url('/high-converting-website'); ?>">Build a High-Converting Website</a></li>
                                <li><a href="<?php echo home_url('/streamline-sales-funnel'); ?>">Streamline Your Sales Funnel</a></li>
                            </ul>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="<?php echo home_url('/industries'); ?>" class="nav-link">Industries <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="<?php echo home_url('/automotive'); ?>">Automotive</a></li>
                                <li><a href="<?php echo home_url('/home-garden'); ?>">Home and Garden</a></li>
                                <li><a href="<?php echo home_url('/finance'); ?>">Finance</a></li>
                                <li><a href="<?php echo home_url('/professional-services'); ?>">Professional Services</a></li>
                                <li><a href="<?php echo home_url('/estate-agents'); ?>">Estate Agents</a></li>
                                <li><a href="<?php echo home_url('/coaches-consultants'); ?>">Coaches & Consultants</a></li>
                                <li><a href="<?php echo home_url('/ecommerce'); ?>">E-commerce</a></li>
                            </ul>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="<?php echo home_url('/resources'); ?>" class="nav-link">Resources <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="<?php echo home_url('/blog'); ?>">Blog & Insights</a></li>
                                <li><a href="<?php echo home_url('/case-studies'); ?>">Case Studies</a></li>
                                <li><a href="<?php echo home_url('/templates-tools'); ?>">Templates & Tools</a></li>
                                <li><a href="<?php echo home_url('/events-webinars'); ?>">Events & Webinars</a></li>
                                <li><a href="<?php echo home_url('/training-mentoring'); ?>">Training & Mentoring</a></li>
                            </ul>
                        </div>
                    </li>                    <li class="nav-item-dropdown">
                        <a href="<?php echo home_url('/about'); ?>" class="nav-link">About <span class="nav-arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </span></a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="<?php echo home_url('/company'); ?>">Company</a></li>
                                <li><a href="<?php echo home_url('/team'); ?>">Team</a></li>
                                <li><a href="<?php echo home_url('/testimonials'); ?>">Testimonials</a></li>
                                <li><a href="<?php echo home_url('/careers'); ?>">Careers</a></li>
                                <li><a href="<?php echo home_url('/become-a-partner'); ?>">Become a Partner</a></li>
                            </ul>
                        </div>
                    </li><li><a href="<?php echo home_url('/contact'); ?>" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="header-ctas">
                <a href="<?php echo home_url('/contact'); ?>" class="btn-outline premium-hover">Get a Free Audit</a>
                <a href="tel:+441212858490" class="btn-primary shine-effect">Book a Call</a>
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle Mobile Menu">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>
    </div>
</header>
