<?php
/**
 * Template Name: About Page
 * Description: Main About page template
 */

get_header(); ?>

<main id="main" class="main-content">
    <div class="container">
        
        <!-- Hero Section -->
        <section class="about-hero">
            <div class="hero-content">
                <h1>About Aimpro Digital</h1>
                <p class="hero-subtitle">Your trusted partner in digital marketing excellence</p>
            </div>
        </section>

        <!-- About Company Section -->
        <section class="about-company">
            <div class="section-content">
                <h2>About Our Company</h2>
                <div class="company-overview">
                    <div class="company-text">
                        <p>Insert company overview content here...</p>
                        <p>Add company history, mission, values...</p>
                    </div>
                    <div class="company-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-image.jpg" alt="Aimpro Digital Office" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Story Section -->
        <section class="our-story">
            <div class="section-content">
                <h2>Our Story</h2>
                <div class="story-content">
                    <p>Add your company story content here...</p>
                </div>
            </div>
        </section>

        <!-- Mission & Values Section -->
        <section class="mission-values">
            <div class="section-content">
                <h2>Mission & Values</h2>
                <div class="values-grid">
                    <div class="value-item">
                        <h3>Mission</h3>
                        <p>Insert mission statement...</p>
                    </div>
                    <div class="value-item">
                        <h3>Vision</h3>
                        <p>Insert vision statement...</p>
                    </div>
                    <div class="value-item">
                        <h3>Values</h3>
                        <p>Insert core values...</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Preview Section -->
        <section class="team-preview">
            <div class="section-content">
                <h2>Meet Our Team</h2>
                <p>The experts behind your success</p>
                <div class="team-preview-grid">
                    <!-- Team member previews will go here -->
                    <div class="team-member-preview">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team-placeholder.jpg" alt="Team Member" />
                        </div>
                        <h4>Team Member Name</h4>
                        <p>Position</p>
                    </div>
                    <!-- Repeat for more team members -->
                </div>
                <div class="team-cta">
                    <a href="<?php echo home_url('/team'); ?>" class="btn btn-primary">Meet the Full Team</a>
                </div>
            </div>
        </section>

        <!-- Quick Stats Section -->
        <section class="about-stats">
            <div class="section-content">
                <h2>Our Track Record</h2>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Clients Served</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Client Satisfaction</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">250%</span>
                        <span class="stat-label">Average ROI Increase</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support Available</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="about-cta">
            <div class="section-content">
                <h2>Ready to Work Together?</h2>
                <p>Let's discuss how we can help grow your business</p>
                <div class="cta-buttons">
                    <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Started</a>
                    <a href="<?php echo home_url('/careers'); ?>" class="btn btn-secondary">Join Our Team</a>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
