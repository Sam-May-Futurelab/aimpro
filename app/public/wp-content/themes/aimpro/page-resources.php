<?php
/**
 * Template Name: Resources Page
 * Description: Main resources hub page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Resources</h1>
                <p class="page-subtitle">Everything you need to succeed in digital marketing</p>
            </div>
        </section>

        <!-- Resources Introduction -->
        <section class="resources-intro">
            <div class="section-content">
                <div class="intro-content">
                    <h2>Your Digital Marketing Knowledge Hub</h2>
                    <p>Explore our comprehensive collection of resources designed to help you stay ahead in the ever-evolving digital landscape. From the latest industry insights to practical tools and expert guidance, we've got everything you need to elevate your marketing strategy.</p>
                </div>
            </div>
        </section>

        <!-- Resources Grid -->
        <section class="resources-grid">
            <div class="section-content">
                <div class="resource-categories">
                    
                    <!-- Blog -->
                    <div class="resource-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Blog & Insights</h3>
                            <p>Stay updated with the latest digital marketing trends, strategies, and industry insights from our expert team.</p>
                            <ul class="category-highlights">
                                <li>SEO & Search Marketing Tips</li>
                                <li>PPC Campaign Strategies</li>
                                <li>Industry Trend Analysis</li>
                                <li>Expert Interviews</li>
                            </ul>
                            <a href="<?php echo home_url('/blog'); ?>" class="resource-cta">Read Our Blog</a>
                        </div>
                    </div>

                    <!-- Case Studies -->
                    <div class="resource-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Case Studies</h3>
                            <p>Discover real success stories and learn how we've helped businesses achieve their digital marketing goals.</p>
                            <ul class="category-highlights">
                                <li>ROI Improvement Stories</li>
                                <li>Campaign Performance Data</li>
                                <li>Strategy Implementations</li>
                                <li>Client Testimonials</li>
                            </ul>
                            <a href="<?php echo home_url('/case-studies'); ?>" class="resource-cta">View Case Studies</a>
                        </div>
                    </div>

                    <!-- Templates & Tools -->
                    <div class="resource-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 7L9 18L4 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Templates & Tools</h3>
                            <p>Access our collection of free templates, checklists, and tools to streamline your marketing efforts.</p>
                            <ul class="category-highlights">
                                <li>SEO Audit Checklists</li>
                                <li>Campaign Planning Templates</li>
                                <li>Performance Tracking Tools</li>
                                <li>Content Calendar Templates</li>
                            </ul>
                            <a href="<?php echo home_url('/templates-tools'); ?>" class="resource-cta">Get Free Tools</a>
                        </div>
                    </div>

                    <!-- Events & Webinars -->
                    <div class="resource-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 2V6M16 2V6M3 10H21M5 4H19C20.1046 4 21 4.89543 21 6V20C21 21.1046 20.1046 22 19 22H5C3.89543 22 3 21.1046 3 20V6C3 4.89543 3.89543 4 5 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Events & Webinars</h3>
                            <p>Join our upcoming events and webinars to learn from industry experts and network with peers.</p>
                            <ul class="category-highlights">
                                <li>Monthly Expert Webinars</li>
                                <li>Industry Conference Coverage</li>
                                <li>Networking Events</li>
                                <li>Workshop Sessions</li>
                            </ul>
                            <a href="<?php echo home_url('/events-webinars'); ?>" class="resource-cta">View Events</a>
                        </div>
                    </div>

                    <!-- Training & Mentoring -->
                    <div class="resource-category">
                        <div class="category-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14L9 11L13 15L15 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="category-content">
                            <h3>Training & Mentoring</h3>
                            <p>Accelerate your digital marketing skills with our personalized training programs and expert mentoring.</p>
                            <ul class="category-highlights">
                                <li>One-on-One Mentoring</li>
                                <li>Team Training Sessions</li>
                                <li>Skill Development Programs</li>
                                <li>Certification Guidance</li>
                            </ul>
                            <a href="<?php echo home_url('/training-mentoring'); ?>" class="resource-cta">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Featured Content -->
        <section class="featured-resources">
            <div class="section-content">
                <h2>Featured Resources</h2>
                <div class="featured-grid">
                    
                    <div class="featured-item">
                        <div class="featured-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/seo-guide.jpg" alt="Complete SEO Guide" />
                        </div>
                        <div class="featured-content">
                            <span class="featured-type">Guide</span>
                            <h3>The Complete SEO Guide for 2025</h3>
                            <p>Everything you need to know about SEO in 2025, from technical optimization to content strategy.</p>
                            <a href="#" class="featured-link">Download Free Guide</a>
                        </div>
                    </div>

                    <div class="featured-item">
                        <div class="featured-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/ppc-calculator.jpg" alt="PPC ROI Calculator" />
                        </div>
                        <div class="featured-content">
                            <span class="featured-type">Tool</span>
                            <h3>PPC ROI Calculator</h3>
                            <p>Calculate your pay-per-click advertising return on investment with our easy-to-use tool.</p>
                            <a href="#" class="featured-link">Use Calculator</a>
                        </div>
                    </div>

                    <div class="featured-item">
                        <div class="featured-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/webinar-upcoming.jpg" alt="Upcoming Webinar" />
                        </div>
                        <div class="featured-content">
                            <span class="featured-type">Webinar</span>
                            <h3>Digital Marketing Trends 2025</h3>
                            <p>Join our upcoming webinar to discover the latest trends shaping digital marketing this year.</p>
                            <a href="#" class="featured-link">Register Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Newsletter Signup -->
        <section class="resources-newsletter">
            <div class="section-content">
                <div class="newsletter-content">
                    <h2>Stay Updated</h2>                    <p>Get the latest resources, insights, and industry updates delivered directly to your inbox.</p>
                    <form class="newsletter-form" action="#" method="post">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email address" required>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
