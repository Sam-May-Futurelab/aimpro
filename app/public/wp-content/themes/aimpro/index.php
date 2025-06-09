<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo home_url(); ?>" class="logo-text">
                    <span class="logo-gradient">Aimpro</span>
                    <span class="logo-subtitle">Digital</span>
                </a>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="#home" class="nav-link">Home</a></li>
                    <li><a href="#services" class="nav-link">Services</a></li>
                    <li><a href="#about" class="nav-link">About</a></li>
                    <li><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="header-ctas">
                <a href="#contact" class="btn-outline premium-hover">GET FREE AUDIT</a>
                <a href="tel:+441212858490" class="btn-primary shine-effect">TALK TO AN EXPERT</a>
            </div>
            <div class="mobile-menu-toggle">
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
    <div class="hero-background"></div>
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
    </div>    <div class="container">
        <div class="hero-wrapper">
            <div class="hero-content">
                <div class="hero-badge slide-up-delay-1">
                    <span class="badge-icon">🚀</span>
                    <span>Award-Winning Digital Agency</span>
                </div>
                <h1 class="hero-title">Get More Leads & More Customers With <span class="highlight curly-underline">PRECISION</span> Digital <span class="highlight-word">Marketing</span>.</h1>
                <p class="hero-subtitle">Lead Generation, SEO, PPC, Website, AI Marketing and Automation. Drive <strong class="highlight-underline">REAL RESULTS</strong> and boost your revenue with strategies that actually <strong class="highlight-word">work</strong>.</p>
                <div class="hero-ctas">
                    <a href="#contact" class="btn-primary large shine-effect pulse-animation">GET FREE MARKETING REVIEW</a>
                    <a href="tel:+441212858490" class="btn-secondary large premium-hover">
                        <span class="phone-icon">📞</span>
                        CALL NOW: 0121 285 8490
                    </a>
                </div>
                <!-- Trust Indicators -->
                <div class="trust-indicators">
                    <div class="trust-item">
                        <span class="trust-icon">⭐</span>
                        <span>5.0 Rating</span>
                    </div>
                    <div class="trust-item">
                        <span class="trust-icon">🏆</span>
                        <span>Award Winning</span>
                    </div>                    <div class="trust-item">
                        <span class="trust-icon">✅</span>
                        <span>Guaranteed Results</span>
                    </div>
                </div>
            </div>
            <!-- Lottie Animation Container -->
            <div class="hero-animation">
                <div id="lottie-hero-animation"></div>
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
        <div class="content-center">            <h2>A Data-Driven Digital Agency Committed To Your <span class="highlight curly-underline">GROWTH</span></h2>
            <p>We help businesses transform their digital presence through modern strategies and data-driven marketing. Our proven methodologies deliver measurable results that drive real growth and maximize your revenue potential.</p>
            <a href="#contact" class="btn-primary large">GET FREE STRATEGY AUDIT</a>
        </div>
    </div>
</section>

<!-- Stats Counter -->
<section class="stats-section">
    <!-- Stats Lottie Animation Background -->
    <div class="stats-animation-bg">
        <div class="animation-layer">
            <div id="lottie-stats-animation-left" class="lottie-stats-instance"></div>
            <div id="lottie-stats-animation-center" class="lottie-stats-instance"></div>
            <div id="lottie-stats-animation-right" class="lottie-stats-instance"></div>
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

<!-- Service Overview Grid -->
<section id="services" class="services-grid">
    <div class="container">        <div class="content-center">
            <h2>Digital Marketing Services That <span class="highlight curly-underline">DELIVER</span></h2>
            <p class="section-subtitle">No fluff. Just results. Our multi-channel marketing services integrate to make marketing magic happen.</p>
        </div>
        <div class="grid">
            <div class="service-card slide-up">
                <div class="service-icon">🎯</div>
                <h3>Lead Generation</h3>
                <p>Generate high-quality leads with targeted campaigns that convert prospects into customers using advanced data analytics and proven strategies.</p>
                <a href="#contact" class="service-cta">GET MORE LEADS →</a>
            </div>
            <div class="service-card slide-up">
                <div class="service-icon">📊</div>
                <h3>Google Ads Management</h3>
                <p>Maximize your ROI with expertly managed Google Ads campaigns that target the right audience at the right time with precision targeting.</p>
                <a href="#contact" class="service-cta">BOOST YOUR ROI →</a>
            </div>
            <div class="service-card slide-up">
                <div class="service-icon">🌐</div>
                <h3>Website Design</h3>
                <p>Create stunning, conversion-focused websites that not only look great but drive results and provide exceptional user experiences.</p>
                <a href="#contact" class="service-cta">BUILD BETTER WEBSITE →</a>
            </div>
            <div class="service-card slide-up">
                <div class="service-icon">📱</div>
                <h3>Social Media Ads</h3>
                <p>Reach your target audience on social platforms with compelling ad campaigns that drive engagement and conversions across all channels.</p>
                <a href="#contact" class="service-cta">SCALE YOUR REACH →</a>
            </div>
            <div class="service-card slide-up">
                <div class="service-icon">🤖</div>
                <h3>AI Powered CRM</h3>
                <p>Streamline your customer relationships with intelligent CRM systems that automate processes and provide valuable insights.</p>
                <a href="#contact" class="service-cta">AUTOMATE YOUR CRM →</a>
            </div>
            <div class="service-card slide-up">
                <div class="service-icon">⚡</div>
                <h3>Marketing Automation</h3>
                <p>Automate your marketing workflows to nurture leads, retain customers, and scale your business efficiently with smart automation.</p>
                <a href="#contact" class="service-cta">AUTOMATE YOUR GROWTH →</a>
            </div>
        </div>
        <div class="services-cta-section">
            <a href="#contact" class="btn-primary large">GET FREE MARKETING REVIEW</a>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="about" class="team-section premium-team">
    <div class="container">
        <div class="content-center">
            <h2>Meet The Experts Who Make <span class="highlight curly-underline">MAGIC</span> Happen</h2>
            <p class="section-subtitle">Not all experts wear masks. Our marketing specialists love talking with clients. We're always hands-on, delivering results for businesses like yours.</p>
        </div>
        <div class="team-grid">
            <div class="team-member premium-card">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.svg" alt="Ajay Dhunna" />
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
            </div>
            <div class="team-member premium-card">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinesh-thapa.svg" alt="Dinesh Thapa" />
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
            </div>
            <div class="team-member premium-card">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-butler.svg" alt="James Butler" />
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
    <div class="container">
        <div class="content-center">
            <h2>Don't Just Take Our Word for It</h2>
            <div class="curly-underline-accent"></div>
            <p class="section-subtitle">Here's what our awesome clients have to say about working with us:</p>        </div>
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
            <a href="#contact" class="btn-primary large shine-effect">GET RESULTS LIKE THESE</a>
        </div>
    </div>
</section>



<!-- Magazine-Style Insights Section -->
<section class="insights-section magazine-layout">
    <div class="container">
        <div class="content-center">
            <h2>Latest Insights & Digital Marketing Trends</h2>
            <p class="section-subtitle">Stay ahead with our expert insights and industry analysis</p>
        </div>
        <div class="insights-grid">
            <article class="featured-insight">
                <div class="insight-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insight-featured.jpg" alt="Featured Insight" />
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insight-1.jpg" alt="Insight" />
                    </div>
                    <div class="insight-content-small">
                        <h4>Google Ads Best Practices for 2024</h4>
                        <span class="read-time">5 min read</span>
                    </div>
                </article>
                <article class="insight-card">
                    <div class="insight-image-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insight-2.jpg" alt="Insight" />
                    </div>
                    <div class="insight-content-small">
                        <h4>SEO Trends That Will Drive Traffic</h4>
                        <span class="read-time">6 min read</span>
                    </div>
                </article>
                <article class="insight-card">
                    <div class="insight-image-small">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insight-3.jpg" alt="Insight" />
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
            <p class="section-subtitle">No secrets here. We share what we know so marketers like you can increase your leads, traffic and sales.</p>
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
    <div class="container">
        <div class="final-cta-content">            <h2>You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span></h2>
            <p>Request a marketing review today. We'll send you a detailed analysis of your website and marketing, breaking down your next steps to success.</p>
            <div class="final-cta-buttons">
                <a href="#contact" class="btn-primary large">GET FREE MARKETING REVIEW</a>
                <a href="tel:+441212858490" class="btn-secondary large">
                    <span class="phone-icon">📞</span>
                    CALL NOW: 0121 285 8490
                </a>
            </div>
        </div>
    </div>
</section>

<footer id="contact" class="footer-section">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <h3>Let's Connect!</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon facebook">📘</a>
                    <a href="#" class="social-icon linkedin">💼</a>
                </div>
            </div>
            <div class="footer-right">
                <h3>Get in Touch</h3>
                <div class="contact-info">
                    <p>📧 hello@aimpro.co.uk</p>
                    <p>📞 0121 285 8490</p>
                    <p>📍 55 Colmore Row, Birmingham B3 2AA</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright © 2025 Aimpro Digital. All rights reserved.<br>
            Digital Search Academy Ltd t/a Aimpro Digital. <a href="#">Privacy Policy</a></p>
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
        });
    }
    
    // Header scroll effect
    const header = document.querySelector('.sticky-header');
    let lastScrollY = window.scrollY;
    
    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
          lastScrollY = currentScrollY;
    });

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
});
</script>

<?php wp_footer(); ?>
</body>
</html>
