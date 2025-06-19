<?php
/**
 * Template Name: Company Page
 * Description: Company information page
 */

get_header(); ?>

<main id="main" class="main-content about-page">
    <div class="container">
        
        <!-- Page Header -->
        <section class="page-header animate-on-scroll animate-fade-up">
            <div class="page-header-content">
                <h1><?php echo esc_html(get_post_meta(get_the_ID(), 'company_header_title', true) ?: 'Our Company'); ?></h1>
                <p class="page-subtitle"><?php echo esc_html(get_post_meta(get_the_ID(), 'company_header_subtitle', true) ?: 'The story behind Aimpro Digital'); ?></p>
            </div>
        </section>
        
        <!-- Company Overview Section -->
        <section class="company-overview">
            <div class="section-content">
                <div class="content-grid">                    <div class="content-text animate-on-scroll animate-slide-left">
                        <h2 style="text-align: centre;"><?php echo esc_html(get_post_meta(get_the_ID(), 'company_overview_heading', true) ?: 'About Aimpro Digital'); ?></h2>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_overview_desc1', true) ?: 'Founded in 2020, Aimpro Digital has grown from a small startup to a leading digital marketing agency serving clients across the globe. Our passion for innovation and commitment to results has driven us to become a trusted partner for businesses of all sizes.'); ?></p>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_overview_desc2', true) ?: 'We specialise in comprehensive digital marketing solutions that drive real business growth. From strategic planning to execution, we\'re dedicated to helping our clients achieve their goals through cutting-edge digital marketing strategies.'); ?></p>
                    </div>                    <div class="content-image animate-on-scroll animate-slide-right" style="text-align: centre; padding-top: 40px;">
                        <?php 
                        $company_image = get_post_meta(get_the_ID(), 'company_overview_image', true);
                        $default_image = 'https://images.unsplash.com/photo-1604328698692-f76ea9498e76?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80';
                        ?>
                        <img src="<?php echo esc_url($company_image ?: $default_image); ?>" alt="55 Colmore Row Birmingham Office - Aimpro Digital" style="max-width: 600px; height: auto; width: 100%;" />
                    </div>
                </div>
            </div>        </section>
        
        <!-- Company History Section -->
        <section class="company-history" style="padding-top: 20px;">
            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: centre;"><?php echo esc_html(get_post_meta(get_the_ID(), 'company_history_heading', true) ?: 'Our Journey'); ?></h2>
                <div class="timeline">
                      <div class="timeline-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="timeline-year" style="padding-top: 15px;">2020</div>
                        <div class="timeline-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'company_timeline_2020_title', true) ?: 'Company Founded'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_timeline_2020_desc', true) ?: 'Aimpro Digital was established with a vision to revolutionize digital marketing for small and medium businesses.'); ?></p>
                        </div>
                    </div>
                    <div class="timeline-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="timeline-year">2021</div>
                        <div class="timeline-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'company_timeline_2021_title', true) ?: 'First 100 Clients'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_timeline_2021_desc', true) ?: 'Reached our first major milestone by successfully serving 100 clients across various industries.'); ?></p>
                        </div>                    </div>
                    <div class="timeline-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="timeline-year">2022</div>
                        <div class="timeline-content">
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'company_timeline_2022_title', true) ?: 'Team Expansion'); ?></h3>
                            <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_timeline_2022_desc', true) ?: 'Expanded our team to 25+ specialists in SEO, PPC, content marketing, and web development.'); ?></p>
                        </div>                    </div>
                    <div class="timeline-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="timeline-year">2023</div>
                        <div class="timeline-content">
                            <h3>Industry Recognition</h3>
                            <p>Received multiple industry awards for innovation and client satisfaction in digital marketing.</p>
                        </div>                    </div>
                    <div class="timeline-item animate-on-scroll animate-stagger animate-fade-up">
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
                <h2 class="animate-on-scroll animate-fade-up"><?php echo esc_html(get_post_meta(get_the_ID(), 'company_foundation_heading', true) ?: 'Our Foundation'); ?></h2>
                
                <div class="values-grid">
                    <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 17.77L5.82 21L7 14L2 9L8.91 8.26L12 2Z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'company_mission_title', true) ?: 'Our Mission'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_mission_desc', true) ?: 'To empower businesses with innovative digital marketing strategies that drive sustainable growth and measurable results in an ever-evolving digital landscape.'); ?></p>
                    </div>
                    <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'company_values_title', true) ?: 'Our Values'); ?></h3>
                        <ul>
                            <?php 
                            $values_list = get_post_meta(get_the_ID(), 'company_values_list', true);
                            if (!$values_list) {
                                $values_list = 'Integrity: We operate with honesty and transparency in all our dealings
Innovation: We continuously evolve and adapt to stay ahead of industry trends
Excellence: We strive for the highest quality in everything we do
Partnership: We treat our clients as partners in their success
Results: We are committed to delivering measurable outcomes';
                            }
                            $values = explode("\n", $values_list);
                            foreach ($values as $value) {
                                $value = trim($value);
                                if (!empty($value)) {
                                    $parts = explode(':', $value, 2);
                                    if (count($parts) === 2) {
                                        echo '<li><strong>' . esc_html(trim($parts[0])) . ':</strong>' . esc_html(trim($parts[1])) . '</li>';
                                    } else {
                                        echo '<li>' . esc_html($value) . '</li>';
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>                    <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentcolour" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="12" r="3" stroke="currentcolour" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'company_vision_title', true) ?: 'Our Vision'); ?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_vision_desc', true) ?: 'To become the world\'s most trusted digital marketing partner, known for delivering exceptional results and fostering long-term client relationships built on trust and transparency.'); ?></p>
                    </div>
                </div>
            </div>
        </section>        <!-- Company Stats Section -->
        <section class="company-stats">            <div class="section-content">
                <h2 class="animate-on-scroll animate-fade-up" style="text-align: centre;"><?php echo esc_html(get_post_meta(get_the_ID(), 'company_stats_heading', true) ?: 'Our Impact by the Numbers'); ?></h2>
                <div class="stats-grid">
                    <?php                    // Loop through all 4 stat fields
                    for ($i = 1; $i <= 4; $i++) {
                        $stat_data = get_post_meta(get_the_ID(), 'company_stat' . $i, true);
                        if (!$stat_data) {                            // If we don't have a default from the old template, continue
                            if ($i > 4) continue;
                              // Default values from original template (copied from meta.php)
                            $defaults = array(
                                '500+|Clients Served|Businesses we\'ve helped grow',
                                '250%|Average ROI|Return on marketing investment',
                                '99%|Client Retention|Long-term partnerships',
                                '30+|Team Members|Digital marketing experts'
                            );
                            $stat_data = $defaults[$i-1];
                        }
                        
                        // Split the stat data by pipe character
                        $stat_parts = explode('|', $stat_data);
                        $stat_number = isset($stat_parts[0]) ? $stat_parts[0] : '';
                        $stat_label = isset($stat_parts[1]) ? $stat_parts[1] : '';
                        $stat_description = isset($stat_parts[2]) ? $stat_parts[2] : '';
                        ?>
                        <div class="stat-card">
                            <span class="stat-number"><?php echo esc_html($stat_number); ?></span>
                            <span class="stat-label"><?php echo esc_html($stat_label); ?></span>
                            <span class="stat-description"><?php echo esc_html($stat_description); ?></span>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>        <!-- CTA Section -->
        <section class="company-cta">
            <div class="section-content">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(), 'company_cta_heading', true) ?: 'Ready to Partner with Us?'); ?></h2>
                <p><?php echo esc_html(get_post_meta(get_the_ID(), 'company_cta_desc', true) ?: 'Let\'s discuss how Aimpro Digital can help accelerate your business growth'); ?></p>
                <div class="cta-buttons">
                    <?php 
                    $button1_text = get_post_meta(get_the_ID(), 'company_cta_button1_text', true) ?: 'Contact Us Today';
                    $button1_url = get_post_meta(get_the_ID(), 'company_cta_button1_url', true) ?: home_url('/contact');
                    $button2_text = get_post_meta(get_the_ID(), 'company_cta_button2_text', true) ?: 'Meet Our Team';
                    $button2_url = get_post_meta(get_the_ID(), 'company_cta_button2_url', true) ?: home_url('/team');
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
