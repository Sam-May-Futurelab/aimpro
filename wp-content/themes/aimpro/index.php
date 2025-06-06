<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
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
<header class="sticky-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">Aimpro Digital</a>
            </div>            <nav class="main-nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-ctas">
                <a href="#contact" class="btn-outline">GET FREE AUDIT</a>
                <a href="tel:+441212858490" class="btn-primary">TALK TO AN EXPERT</a>
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
<section id="home" class="hero-section">
    <div class="hero-background parallax-bg"></div>    <div class="container">
        <div class="hero-content">
            <h1>Get More Leads & More Customers With <span class="highlight curly-underline">PRECISION</span> Digital <span class="highlight-word">Magic</span>.</h1>
            <div class="curly-underline-accent"></div>
            <p class="hero-subtitle">Lead Generation, SEO, PPC, Website, AI Marketing and Automation. Drive <strong class="highlight-underline">REAL RESULTS</strong> and boost your revenue with strategies that actually <strong class="highlight-word">work</strong>.</p>
            <div class="hero-ctas">
                <a href="#contact" class="btn-primary large">GET FREE MARKETING REVIEW</a>
                <a href="tel:+441212858490" class="btn-secondary large">
                    <span class="phone-icon">📞</span>
                    CALL NOW: 0121 285 8490
                </a>
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
        <div class="content-center">
            <h2>A Data-Driven Digital Agency Committed To Your <span class="highlight curly-underline">GROWTH</span></h2>
            <div class="curly-underline-accent"></div>
            <p>We help businesses transform their digital presence through modern strategies and data-driven marketing. Our proven methodologies deliver measurable results that drive real growth and maximize your revenue potential.</p>
            <a href="#contact" class="btn-primary large">GET FREE STRATEGY AUDIT</a>
        </div>
    </div>
</section>

<!-- Stats Counter -->
<section class="stats-section">
    <div class="container">        <div class="stats-grid">
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
<section id="about" class="team-section">
    <div class="container">        <div class="content-center">
            <h2>Meet The Experts Who Make <span class="highlight curly-underline">MAGIC</span> Happen</h2>
            <p class="section-subtitle">Not all experts wear masks. Our marketing specialists love talking with clients. We're always hands-on, delivering results for businesses like yours.</p>
        </div>
        <div class="team-grid"><div class="team-member">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.svg" alt="Ajay Dhunna" />
                </div>
                <h3>Ajay Dhunna</h3>
                <p class="member-title">Director of Marketing</p>
            </div>
            <div class="team-member">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinesh-thapa.svg" alt="Dinesh Thapa" />
                </div>
                <h3>Dinesh Thapa</h3>
                <p class="member-title">Business Growth Specialist</p>
            </div>
            <div class="team-member">
                <div class="member-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-butler.svg" alt="James Butler" />
                </div>
                <h3>James Butler</h3>
                <p class="member-title">Creative Director</p>
            </div>
        </div>
        <div class="team-cta-section">
            <a href="#contact" class="btn-primary large">TALK TO OUR EXPERTS</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="content-center">
            <h2>Don't Just Take Our Word for It</h2>
            <div class="curly-underline-accent"></div>
            <p class="section-subtitle">Here's what our awesome clients have to say about working with us:</p>
        </div><div class="testimonials-grid">
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
        </div>
        <div class="testimonials-cta-section">
            <a href="#contact" class="btn-primary large">GET RESULTS LIKE THESE</a>
        </div>
    </div>
</section>

<!-- Latest Blogs -->
<section class="blog-section">
    <div class="container">
        <div class="content-center">
            <h2>Scale Up Your <span class="highlight curly-underline">MARKETING</span></h2>
            <div class="curly-underline-accent"></div>
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
        <div class="final-cta-content">
            <h2>You Bring the Ambition, We Drive the <span class="highlight curly-underline">RESULTS</span></h2>
            <div class="curly-underline-accent"></div>
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
document.addEventListener('DOMContentLoaded', function() {
    // Stats counter animation
    const counters = document.querySelectorAll('.stat-number');
    let counterAnimated = false;
    
    function animateCounters() {
        if (counterAnimated) return;
        counterAnimated = true;
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;
            
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    counter.textContent = target;
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current);
                }
            }, 16);
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
    
    // Add loading animation delays
    const animatedElements = document.querySelectorAll('.service-card, .team-member, .testimonial-card, .blog-card');
    animatedElements.forEach((el, index) => {
        el.style.animationDelay = `${index * 0.1}s`;
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>
