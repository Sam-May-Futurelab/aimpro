﻿<?php
/**
 * Template Name: Team Page
 * Description: Team members page
 */

get_header(); ?>

<main id="main" class="main-content">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <a href="<?php echo home_url('/about'); ?>">About</a>
                <span class="separator">›</span>
                <span class="current">Team</span>
            </nav>
        </div>
    </div>

    <div class="container">
          <!-- Page Header -->
        <section class="page-header">
            <div class="page-header-content animate-on-scroll animate-fade-up">
                <h1><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'team_header_title', true) ?: 'Our Team'); ?></h1>
                <p class="page-subtitle"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'team_header_subtitle', true) ?: 'Meet the experts behind your digital success'); ?></p>
            </div>
        </section>        <!-- Team Introduction -->
        <section class="team-intro">
            <div class="section-content">
                <div class="intro-content animate-on-scroll animate-fade-up">
                    <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'team_intro_heading', true) ?: 'The People Who Make It Happen'); ?></h2>
                    <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'team_intro_desc', true) ?: 'Our diverse team of digital marketing specialists, strategists, and creative professionals work together to deliver exceptional results for our clients. Each team member brings unique expertise and passion to help your business thrive in the digital landscape.'); ?></p>
                </div>
            </div>
        </section>        <!-- Leadership Team -->
        <section class="leadership-team">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up"><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'leadership_heading', true) ?: 'Leadership Team'); ?></h2>
                <div class="team-grid">
                    <!-- Ajay Dhunna -->
                    <div class="team-member animate-on-scroll animate-stagger animate-fade-up">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.png" alt="Ajay Dhunna" />
                            <div class="member-overlay">
                                <div class="credentials">
                                    <span class="credential-badge">Google Certified</span>
                                    <span class="credential-badge">Meta Partner</span>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'member1_name', true) ?: 'Ajay Dhunna'); ?></h3>
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), 'member1_title', true) ?: 'Director of Marketing'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'member1_bio', true) ?: 'With over 15 years of experience in digital marketing, Ajay leads strategic initiatives and ensures exceptional value to clients. His expertise spans SEO, PPC, and growth marketing.'); ?></p>
                            <div class="member-specialties">
                                <?php 
                                $specialties = get_post_meta(get_the_ID(), 'member1_specialties', true) ?: 'Strategic Planning,Business Development,Client Relations';
                                $specialty_array = explode(',', $specialties);
                                foreach ($specialty_array as $specialty): ?>
                                    <span class="specialty"><?php echo esc_html(trim($specialty)); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>                    <!-- Dinesh Thapa -->
                    <div class="team-member animate-on-scroll animate-stagger animate-fade-up">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinesh-thapa.png" alt="Dinesh Thapa" />
                            <div class="member-overlay">
                                <div class="credentials">
                                    <span class="credential-badge">Growth Expert</span>
                                    <span class="credential-badge">Data Analyst</span>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'member2_name', true) ?: 'Dinesh Thapa'); ?></h3>
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), 'member2_title', true) ?: 'Business Growth Specialist'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'member2_bio', true) ?: 'Dinesh brings innovative growth strategies and deep analytics expertise to our team. He oversees marketing operations and ensures our campaigns deliver measurable results for clients.'); ?></p>
                            <div class="member-specialties">
                                <?php 
                                $specialties = get_post_meta(get_the_ID(), 'member2_specialties', true) ?: 'ROI Optimisation,Analytics,Business Growth';
                                $specialty_array = explode(',', $specialties);
                                foreach ($specialty_array as $specialty): ?>
                                    <span class="specialty"><?php echo esc_html(trim($specialty)); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>                    <!-- James Butler -->
                    <div class="team-member animate-on-scroll animate-stagger animate-fade-up">
                        <div class="member-photo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-butler.png" alt="James Butler" />
                            <div class="member-overlay">
                                <div class="credentials">
                                    <span class="credential-badge">UX Designer</span>
                                    <span class="credential-badge">Brand Expert</span>
                                </div>
                            </div>
                        </div>
                        <div class="member-info">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'member3_name', true) ?: 'James Butler'); ?></h3>
                            <h4><?php echo esc_html(get_post_meta(get_the_ID(), 'member3_title', true) ?: 'Creative Director'); ?></h4>
                            <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'member3_bio', true) ?: 'James oversees our creative initiatives and ensures we stay at the forefront of digital design. His expertise in UX and brand strategy drives our creative solutions.'); ?></p>
                            <div class="member-specialties">
                                <?php 
                                $specialties = get_post_meta(get_the_ID(), 'member3_specialties', true) ?: 'UX/UI Design,Brand Strategy,Creative Direction';
                                $specialty_array = explode(',', $specialties);
                                foreach ($specialty_array as $specialty): ?>
                                    <span class="specialty"><?php echo esc_html(trim($specialty)); ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Values -->
        <section class="team-values">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'values_heading', true) ?: 'What Drives Our Team'); ?></h2>
                <div class="values-grid">
                    <?php 
                    $values_list = get_post_meta(get_the_ID(), 'values_list', true);
                    if (!$values_list) {
                        $values_list = 'Collaboration: We believe the best results come from working together, sharing knowledge, and supporting each other\'s growth.
Continuous Learning: Digital marketing evolves rapidly, and we\'re committed to staying ahead through ongoing education and skill development.
Client Success: Your success is our success. We\'re dedicated to delivering results that exceed expectations and drive real business growth.
Innovation: We embrace new technologies and creative approaches to solve complex marketing challenges and stay ahead of the curve.
Transparency: We maintain open, honest communication with our clients and team members, providing clear insights into our strategies and results.
Excellence: We hold ourselves to the highest standards, constantly refining our processes and delivering work that exceeds industry benchmarks.';
                    }
                    
                    $values = explode("\n", $values_list);
                    foreach ($values as $value) {
                        $value = trim($value);
                        if (!empty($value)) {
                            $parts = explode(':', $value, 2);
                            if (count($parts) === 2) {
                                echo '<div class="value-item">';
                                echo '<h3>' . wp_kses_post(trim($parts[0])) . '</h3>';
                                echo '<p>' . wp_kses_post(trim($parts[1])) . '</p>';
                                echo '</div>';
                            } else {
                                echo '<div class="value-item"><p>' . wp_kses_post($value) . '</p></div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </section>        <!-- Join Our Team CTA -->
        <section class="testimonials-cta team-cta">
            <div class="section-content">
                <h2><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'team_cta_heading', true) ?: 'Want to Join Our Team?'); ?></h2>
                <p><?php echo wp_kses_post(get_post_meta(get_the_ID(), 'team_cta_desc', true) ?: 'We\'re always looking for talented individuals who share our passion for digital marketing excellence'); ?></p>
                <div class="cta-buttons">
                    <?php 
                    $button1_text = get_post_meta(get_the_ID(), 'team_cta_button1_text', true) ?: 'View Open Positions';
                    $button1_url = get_post_meta(get_the_ID(), 'team_cta_button1_url', true) ?: home_url('/careers');
                    $button2_text = get_post_meta(get_the_ID(), 'team_cta_button2_text', true) ?: 'Get in Touch';
                    $button2_url = get_post_meta(get_the_ID(), 'team_cta_button2_url', true) ?: home_url('/contact');
                    ?>
                    <a href="<?php echo esc_url($button1_url); ?>" class="btn btn-primary"><?php echo esc_html($button1_text); ?></a>
                    <?php if (!empty($button2_text)): ?>
                        <a href="<?php echo esc_url($button2_url); ?>" class="btn btn-secondary"><?php echo esc_html($button2_text); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
