<?php
/**
 * Template Name: Resources Page
 * Description: Main resources hub page
 */

get_header(); ?>

<main id="primary" class="service-page resources-page">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">Resources</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="hero-content">
                <h1>Resources</h1>
                <p class="hero-subtitle">Your Digital Marketing Knowledge Hub - Everything you need to succeed in digital marketing</p>
                <div class="hero-description">
                    <p>Explore our comprehensive collection of resources designed to help you stay ahead in the ever-evolving digital landscape. From the latest industry insights to practical tools and expert guidance, we've got everything you need to elevate your marketing strategy.</p>
                </div>
            </div>
        </div>
    </section>    <!-- Resources Grid -->
    <section class="service-overview">
        <div class="container">
            <div class="section-header">
                <h2>Resource Categories</h2>
                <p>Comprehensive resources to power your digital marketing success across all channels and strategies.</p>
            </div>
            <div class="services-grid">
                
                <!-- Blog -->
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Blog & Insights</h3>
                    <p>Stay updated with the latest digital marketing trends, strategies, and industry insights from our expert team.</p>
                    <ul class="service-features">
                        <li>SEO & Search Marketing Tips</li>
                        <li>PPC Campaign Strategies</li>
                        <li>Industry Trend Analysis</li>
                        <li>Expert Interviews</li>
                    </ul>
                    <a href="<?php echo home_url('/blog'); ?>" class="service-link">Read Our Blog</a>
                </div>

                <!-- Case Studies -->
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Case Studies</h3>
                    <p>Discover real success stories and learn how we've helped businesses achieve their digital marketing goals.</p>
                    <ul class="service-features">
                        <li>ROI Improvement Stories</li>
                        <li>Campaign Performance Data</li>
                        <li>Strategy Implementations</li>
                        <li>Client Testimonials</li>
                    </ul>
                    <a href="<?php echo home_url('/case-studies'); ?>" class="service-link">View Case Studies</a>
                </div>

                <!-- Templates & Tools -->
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 7L9 18L4 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Templates & Tools</h3>
                    <p>Access our collection of free templates, checklists, and tools to streamline your marketing efforts.</p>
                    <ul class="service-features">
                        <li>SEO Audit Checklists</li>
                        <li>Campaign Planning Templates</li>
                        <li>Performance Tracking Tools</li>
                        <li>Content Calendar Templates</li>
                    </ul>
                    <a href="<?php echo home_url('/templates-tools'); ?>" class="service-link">Get Free Tools</a>
                </div>

                <!-- Events & Webinars -->
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 2V6M16 2V6M3 10H21M5 4H19C20.1046 4 21 4.89543 21 6V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V6C3 4.89543 3.89543 4 5 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Events & Webinars</h3>
                    <p>Join our upcoming events and webinars to learn from industry experts and network with peers.</p>
                    <ul class="service-features">
                        <li>Monthly Expert Webinars</li>
                        <li>Industry Conference Coverage</li>
                        <li>Networking Events</li>
                        <li>Workshop Sessions</li>
                    </ul>
                    <a href="<?php echo home_url('/events-webinars'); ?>" class="service-link">View Events</a>
                </div>

                <!-- Training & Mentoring -->
                <div class="service-item">
                    <div class="service-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14L9 11L13 15L15 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Training & Mentoring</h3>
                    <p>Accelerate your digital marketing skills with our personalized training programs and expert mentoring.</p>
                    <ul class="service-features">
                        <li>One-on-One Mentoring</li>
                        <li>Team Training Sessions</li>
                        <li>Skill Development Programs</li>
                        <li>Certification Guidance</li>
                    </ul>
                    <a href="<?php echo home_url('/training-mentoring'); ?>" class="service-link">Learn More</a>
                </div>

            </div>
        </div>
    </section>    <!-- Featured Content -->
    <section class="features-section">
        <div class="container">
            <div class="section-header">
                <h2>Featured Resources</h2>
                <p>Hand-picked resources to accelerate your digital marketing success and stay ahead of the competition.</p>
            </div>
            <div class="features-grid">
                
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/seo-guide.jpg" alt="Complete SEO Guide" />
                    </div>
                    <div class="feature-content">
                        <span class="feature-type">Guide</span>
                        <h3>The Complete SEO Guide for 2025</h3>
                        <p>Everything you need to know about SEO in 2025, from technical optimization to content strategy.</p>
                        <a href="#" class="feature-link">Download Free Guide</a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/ppc-calculator.jpg" alt="PPC ROI Calculator" />
                    </div>
                    <div class="feature-content">
                        <span class="feature-type">Tool</span>
                        <h3>PPC ROI Calculator</h3>
                        <p>Calculate your pay-per-click advertising return on investment with our easy-to-use tool.</p>
                        <a href="#" class="feature-link">Use Calculator</a>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/webinar-upcoming.jpg" alt="Upcoming Webinar" />
                    </div>
                    <div class="feature-content">
                        <span class="feature-type">Webinar</span>
                        <h3>Digital Marketing Trends 2025</h3>
                        <p>Join our upcoming webinar to discover the latest trends shaping digital marketing this year.</p>
                        <a href="#" class="feature-link">Register Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section id="contact" class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Stay Updated</h2>
                <p>Get the latest resources, insights, and industry updates delivered directly to your inbox.</p>
                <form class="newsletter-form" action="#" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter your email address" required>
                        <button type="submit" class="btn-primary">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
