<?php
/**
 * Template Name: Company Page
 * Description: Company information page
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content">
                <h1>Our Company</h1>
                <p class="page-subtitle">The story behind Aimpro Digital</p>
            </div>
        </section>

        <!-- Company Overview Section -->
        <section class="company-overview">
            <div class="section-content">
                <div class="content-grid">
                    <div class="content-text">
                        <h2>About Aimpro Digital</h2>
                        <p>Founded in 2020, Aimpro Digital has grown from a small startup to a leading digital marketing agency serving clients across the globe. Our passion for innovation and commitment to results has driven us to become a trusted partner for businesses of all sizes.</p>
                        <p>We specialize in comprehensive digital marketing solutions that drive real business growth. From strategic planning to execution, we're dedicated to helping our clients achieve their goals through cutting-edge digital marketing strategies.</p>
                    </div>
                    <div class="content-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-building.jpg" alt="Aimpro Digital Office" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Company History Section -->
        <section class="company-history">
            <div class="section-content">
                <h2>Our Journey</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-year">2020</div>
                        <div class="timeline-content">
                            <h3>Company Founded</h3>
                            <p>Aimpro Digital was established with a vision to revolutionize digital marketing for small and medium businesses.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-content">
                            <h3>First 100 Clients</h3>
                            <p>Reached our first major milestone by successfully serving 100 clients across various industries.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2022</div>
                        <div class="timeline-content">
                            <h3>Team Expansion</h3>
                            <p>Expanded our team to 25+ specialists in SEO, PPC, content marketing, and web development.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2023</div>
                        <div class="timeline-content">
                            <h3>Industry Recognition</h3>
                            <p>Received multiple industry awards for innovation and client satisfaction in digital marketing.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2024</div>
                        <div class="timeline-content">
                            <h3>Global Expansion</h3>
                            <p>Expanded our services globally, now serving clients across North America, Europe, and Asia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission, Vision, Values Section -->
        <section class="company-values">
            <div class="section-content">
                <h2>Our Foundation</h2>
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Our Mission</h3>
                        <p>To empower businesses with innovative digital marketing strategies that drive sustainable growth and measurable results in an ever-evolving digital landscape.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Our Vision</h3>
                        <p>To become the world's most trusted digital marketing partner, known for delivering exceptional results and fostering long-term client relationships built on trust and transparency.</p>
                    </div>
                    <div class="value-card">
                        <div class="value-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Our Values</h3>
                        <ul>
                            <li><strong>Integrity:</strong> We operate with honesty and transparency in all our dealings</li>
                            <li><strong>Innovation:</strong> We continuously evolve and adapt to stay ahead of industry trends</li>
                            <li><strong>Excellence:</strong> We strive for the highest quality in everything we do</li>
                            <li><strong>Partnership:</strong> We treat our clients as partners in their success</li>
                            <li><strong>Results:</strong> We are committed to delivering measurable outcomes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Stats Section -->
        <section class="company-stats">
            <div class="section-content">
                <h2>Our Impact by the Numbers</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Clients Served</span>
                        <span class="stat-description">Businesses we've helped grow</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">$50M+</span>
                        <span class="stat-label">Revenue Generated</span>
                        <span class="stat-description">For our clients collectively</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">250%</span>
                        <span class="stat-label">Average ROI</span>
                        <span class="stat-description">Return on marketing investment</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Client Retention</span>
                        <span class="stat-description">Long-term partnerships</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">30+</span>
                        <span class="stat-label">Team Members</span>
                        <span class="stat-description">Digital marketing experts</span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support</span>
                        <span class="stat-description">Always here when you need us</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="company-cta">
            <div class="section-content">
                <h2>Ready to Partner with Us?</h2>
                <p>Let's discuss how Aimpro Digital can help accelerate your business growth</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Contact Us Today</a>
                    <a href="<?php echo home_url('/team'); ?>" class="btn btn-secondary">Meet Our Team</a>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
