<?php
/**
 * Template Name: About Page
 * Description: About Aimpro Digital - Your trusted partner in digital marketing excellence
 */

get_header(); ?>

<main id="main" class="main-content about-page">
    
    <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-badge">About Us</div>
                <h1 class="hero-title">About Aimpro Digital</h1>
                <p class="hero-description">Your trusted partner in digital marketing excellence</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
          <!-- Company Overview -->
        <section class="company-overview">
            <div class="section-content">
                <div class="content-header">
                    <h2>Empowering Brands with Data-Driven Growth</h2>
                    <p class="section-description">Welcome to Aimpro Digital, where strategy, creativity, and technology converge to drive exceptional results. We're a team of passionate digital experts dedicated to helping UK businesses achieve their full potential. From lead generation to marketing automation, we build powerful, data-backed solutions that fuel your brand's success.</p>
                </div>
            </div>
        </section>        <!-- Admin Managed Video Section -->
        <?php echo aimpro_display_about_video(); ?>

        <!-- Values Section -->
        <section class="values-section">
            <div class="section-content">
                <div class="content-header text-center">
                    <h2>Experiences Fueled by<br>Data and Dedication</h2>
                    <p class="section-description">At Aimpro Digital, we're more than a digital marketing agency.<br>We're a team of strategists, creatives, and tech enthusiasts<br>committed to making a meaningful impact for our clients.</p>
                </div>

                <!-- Stats Section -->
                <div class="stats-container">
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">25</div>
                            <div class="stat-label">Years of Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98</div>
                            <div class="stat-label">% Increase in Client Leads</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15</div>
                            <div class="stat-label">+ Industries Transformed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">199</div>
                            <div class="stat-label">% Increase in Conversion Rates</div>
                        </div>
                    </div>
                </div>

                <!-- Values Grid -->
                <div class="values-grid">
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L13.09 8.26L22 9L13.09 9.74L12 16L10.91 9.74L2 9L10.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Innovative Solutions</h3>
                        <p>Our approach goes beyond the ordinary. We infuse creativity and innovation into every strategy, crafting unique solutions tailored to your brand's needs. By blending fresh ideas with strategic insights, we create campaigns that truly connect with your audience.</p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3V21H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 9L12 6L16 10L21 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Data-Driven Strategies</h3>
                        <p>We believe in the power of data. Every decision we make is backed by in-depth analytics, ensuring that each campaign is optimized to deliver maximum results and ROI. With data at the core, your marketing efforts are not only efficient but also highly effective.</p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Proven Track Record</h3>
                        <p>Our results speak for themselves. Across diverse industries, we've consistently delivered growth, enhanced visibility, and high-quality leads, proving our ability to drive real impact for our clients.</p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Collaborative Partnership</h3>
                        <p>We're more than an agency—we're an extension of your team. Through open communication and a collaborative approach, we work closely with you to exceed expectations and achieve your goals together.</p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 18L5.82 21L7 14L2 9L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Exceptional Customer Service</h3>
                        <p>Client satisfaction is our top priority. From strategy through to execution, our dedicated team provides support at every step, ensuring a smooth and seamless experience tailored to your needs.</p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Forward-Thinking Approach</h3>
                        <p>In an ever-changing digital landscape, we keep your brand one step ahead. Our forward-thinking approach enables us to adapt quickly to trends, ensuring your brand stays competitive and relevant in the market.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Ticker -->
        <section class="services-ticker">
            <div class="ticker-wrapper">
                <div class="ticker-content">
                    <span>Branding</span>
                    <span>Website Design</span>
                    <span>App Design</span>
                    <span>Development</span>
                    <span>UI/UX Design</span>
                    <span>Graphic Design</span>
                    <span>Motion Graphic</span>
                    <span>Digital Marketing</span>
                    <span>SEO</span>
                    <span>Branding</span>
                    <span>Website Design</span>
                    <span>App Design</span>
                    <span>Development</span>
                    <span>UI/UX Design</span>
                    <span>Graphic Design</span>
                    <span>Motion Graphic</span>
                    <span>Digital Marketing</span>
                    <span>SEO</span>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="about-cta">
            <div class="section-content text-center">
                <h2>Let's Connect!</h2>
                <p>Ready to transform your digital presence? Get in touch with our team today.</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Started Today</a>
                    <a href="tel:01212858490" class="btn btn-secondary">Call Us Now</a>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
