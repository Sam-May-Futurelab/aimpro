<?php
/**
 * Template Name: About Page
 *
 * This template is used for the About Us page and other
 * informational pages about the company.
 *
 * @package Aimpro
 */

get_header();
?>

<main id="primary" class="about-page">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>
    
    <!-- About Hero Section -->
    <section class="page-hero about-hero">
        <div class="container">
            <div class="page-hero-content about-hero-content">
                <h1>About Aimpro Digital</h1>
                <div class="page-intro about-intro">
                    <p>We're a leading digital marketing agency dedicated to helping businesses grow through innovative strategies, cutting-edge technology, and measurable results. Since 2020, we've been the trusted partner for companies looking to excel in the digital landscape.</p>
                </div>
            </div>
            
            <div class="about-hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-hero.jpg" alt="Aimpro Digital Team" class="about-featured-image">
            </div>
        </div>
    </section>
    
    <!-- About Content Section -->
    <section class="page-content about-content">
        <div class="container">
            <div class="page-main-content about-main-content">
                <div class="about-story">
                    <h2>Our Story</h2>
                    <p>Founded in 2020 with a vision to revolutionize digital marketing for businesses of all sizes, Aimpro Digital has grown from a small startup to a leading agency serving clients across the globe. Our founders recognized the need for a more personalized, results-driven approach to digital marketing.</p>
                    
                    <p>What started as a passion project quickly evolved into a comprehensive digital marketing powerhouse. Today, we're proud to work with over 500 clients, from innovative startups to established enterprises, helping them achieve unprecedented growth through strategic digital marketing initiatives.</p>
                    
                    <p>Our success is built on a foundation of transparency, innovation, and an unwavering commitment to delivering measurable results. We don't just create campaigns; we build partnerships that drive sustainable business growth.</p>
                </div>

                <div class="about-stats">
                    <h2>Our Impact</h2>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Clients Served</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">$50M+</span>
                            <span class="stat-label">Revenue Generated</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">250%</span>
                            <span class="stat-label">Average ROI</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99%</span>
                            <span class="stat-label">Client Retention</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission & Values Section -->
            <div class="mission-values-section">
                <div class="mission-box">
                    <h2>Our Mission</h2>
                    <div class="mission-content">
                        <p>To empower businesses with innovative digital marketing strategies that drive sustainable growth and measurable results. We believe every business deserves access to world-class marketing expertise, regardless of size or industry.</p>
                        <p>We're committed to staying ahead of digital trends, embracing new technologies, and continuously evolving our approaches to ensure our clients maintain a competitive edge in an ever-changing digital landscape.</p>
                    </div>
                </div>
                
                <div class="values-box">
                    <h2>Our Values</h2>
                    <div class="values-content">
                        <div class="values-grid">
                            <div class="value-item">
                                <h3>Transparency</h3>
                                <p>We believe in open communication and clear reporting. Our clients always know what we're doing, why we're doing it, and what results we're achieving.</p>
                            </div>
                            <div class="value-item">
                                <h3>Innovation</h3>
                                <p>We continuously explore new technologies, strategies, and approaches to stay ahead of industry trends and deliver cutting-edge solutions.</p>
                            </div>
                            <div class="value-item">
                                <h3>Results</h3>
                                <p>Everything we do is focused on delivering measurable outcomes that directly impact our clients' bottom line and business growth.</p>
                            </div>
                            <div class="value-item">
                                <h3>Partnership</h3>
                                <p>We don't just work for our clients; we work with them as true partners, invested in their long-term success and growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Team Members Section -->
            <div class="team-section">
                <h2>Meet Our Leadership Team</h2>
                <div class="team-grid">
                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/john-smith-ceo.jpg" alt="John Smith - CEO" class="team-photo">
                        </div>
                        <div class="team-info">
                            <h3>John Smith</h3>
                            <span class="team-title">Chief Executive Officer</span>
                            <p class="team-bio">With over 15 years of experience in digital marketing, John leads Aimpro Digital's strategic vision and growth. He's passionate about helping businesses unlock their digital potential and has been recognized as a thought leader in the industry.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/sarah-johnson-cmo.jpg" alt="Sarah Johnson - CMO" class="team-photo">
                        </div>
                        <div class="team-info">
                            <h3>Sarah Johnson</h3>
                            <span class="team-title">Chief Marketing Officer</span>
                            <p class="team-bio">Sarah brings innovative marketing strategies and deep industry expertise to our team. She oversees all client campaigns and ensures our marketing approaches deliver exceptional ROI for our diverse client base.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/mike-chen-cto.jpg" alt="Mike Chen - CTO" class="team-photo">
                        </div>
                        <div class="team-info">
                            <h3>Mike Chen</h3>
                            <span class="team-title">Chief Technology Officer</span>
                            <p class="team-bio">Mike oversees our technology stack and ensures we stay at the forefront of digital innovation. His technical expertise drives our platform development and marketing automation solutions.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/emily-rodriguez-seo.jpg" alt="Emily Rodriguez - SEO Lead" class="team-photo">
                        </div>
                        <div class="team-info">
                            <h3>Emily Rodriguez</h3>
                            <span class="team-title">SEO Team Lead</span>
                            <p class="team-bio">Emily leads our SEO initiatives with 8+ years of experience in organic search optimization. She specializes in technical SEO, content strategy, and has helped countless clients achieve top search rankings.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/lisa-thompson-ppc.jpg" alt="Lisa Thompson - PPC Lead" class="team-photo">
                        </div>
                        <div class="team-info">
                            <h3>Lisa Thompson</h3>
                            <span class="team-title">PPC Team Lead</span>
                            <p class="team-bio">Lisa manages our paid advertising campaigns across Google Ads, Facebook, and other platforms. She's a Google Ads certified professional with expertise in campaign optimization and conversion tracking.</p>
                        </div>
                    </div>

                    <div class="team-member">
                        <div class="team-member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/maria-gonzalez-content.jpg" alt="Maria Gonzalez - Content Lead" class="team-photo">
                        </div>
                        <div class="team-info">
                            <h3>Maria Gonzalez</h3>
                            <span class="team-title">Content Strategy Lead</span>
                            <p class="team-bio">Maria develops comprehensive content strategies that engage audiences and drive conversions. She specializes in blog content, social media strategy, and content calendar development across multiple industries.</p>
                        </div>
                    </div>
                </div>

                <div class="team-cta">
                    <p>Want to learn more about our full team of specialists?</p>
                    <a href="<?php echo home_url('/team'); ?>" class="btn btn-primary">Meet Our Full Team</a>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="why-choose-us">
                <h2>Why Choose Aimpro Digital?</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Proven Results</h3>
                        <p>Our track record speaks for itself with 500+ successful campaigns and an average 250% ROI for our clients.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Full-Service Approach</h3>
                        <p>From SEO and PPC to content marketing and web development, we provide comprehensive digital marketing solutions.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Data-Driven Strategies</h3>
                        <p>Every decision is backed by data and analytics to ensure maximum effectiveness and ROI for your campaigns.</p>
                    </div>
                    
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                <circle cx="9" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Dedicated Support</h3>
                        <p>You'll have a dedicated account manager and direct access to our team of specialists whenever you need support.</p>
                    </div>
                </div>
            </div>

            <!-- Call to Action Section -->
            <div class="about-cta">
                <h2>Ready to Grow Your Business?</h2>
                <p>Let's discuss how Aimpro Digital can help you achieve your digital marketing goals and drive sustainable growth for your business.</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Started Today</a>
                    <a href="<?php echo home_url('/services'); ?>" class="btn btn-secondary">View Our Services</a>
                </div>
            </div>        </div>
    </section>
</main>

<?php
get_footer();
?>