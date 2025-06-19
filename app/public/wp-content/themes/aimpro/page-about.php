<?php
/**
 * Template Name: About Page
 * Description: About Aimpro Digital - Your trusted partner in digital marketing excellence
 */

get_header(); ?>

<main id="main" class="main-content about-page">      <!-- Hero Section -->
    <section class="page-hero">
        <div class="container">
            <div class="hero-content animate-on-scroll animate-fade-up">
                <div class="hero-badge"><?php echo aimpro_get_field('about_hero_badge', 'About Us'); ?></div>
                <h1 class="hero-title"><?php echo aimpro_get_field('about_hero_heading', 'About Aimpro Digital'); ?></h1>
                <p class="hero-description"><?php echo aimpro_get_field('about_hero_subtitle', 'Your trusted partner in digital marketing excellence'); ?></p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">        <!-- Company Overview -->
        <section class="company-overview">
            <div class="section-content">
                <div class="content-header text-center animate-on-scroll animate-fade-up">
                    <h2><?php echo aimpro_get_field('about_overview_heading', 'Empowering Brands with Data-Driven Growth'); ?></h2>
                    <p class="section-description"><?php echo aimpro_get_field('about_overview_description', 'Welcome to Aimpro Digital, where strategy, creativity, and technology converge to drive exceptional results. We\'re a team of passionate digital experts dedicated to helping UK businesses achieve their full potential. From lead generation to marketing automation, we build powerful, data-backed solutions that fuel your brand\'s success.'); ?></p>
                </div>
            </div>
        </section><!-- Video Section -->
        <?php 
        $video_url = aimpro_get_field('about_video_url', '');
        if (!empty($video_url)): ?>
        <section class="about-video-section">
            <div class="section-content text-center">
                <?php 
                $video_heading = aimpro_get_field('about_video_heading', '');
                $video_description = aimpro_get_field('about_video_description', '');
                if (!empty($video_heading)): ?>                <div class="content-header animate-on-scroll animate-fade-up">
                    <h2><?php echo $video_heading; ?></h2>
                    <?php if (!empty($video_description)): ?>
                    <p class="section-description"><?php echo $video_description; ?></p>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                  <div class="video-container animate-on-scroll animate-scale-up" style="max-width: 800px; margin: 0 auto;">
                    <?php
                    // Handle different video types
                    if (strpos($video_url, 'youtube.com') !== false || strpos($video_url, 'youtu.be') !== false) {
                        // YouTube video
                        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video_url, $matches);
                        $youtube_id = $matches[1] ?? '';
                        if ($youtube_id) {
                            echo '<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"><iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://www.youtube.com/embed/' . $youtube_id . '" frameborder="0" allowfullscreen></iframe></div>';
                        }
                    } elseif (strpos($video_url, 'vimeo.com') !== false) {
                        // Vimeo video
                        preg_match('/vimeo\.com\/(\d+)/', $video_url, $matches);
                        $vimeo_id = $matches[1] ?? '';
                        if ($vimeo_id) {
                            echo '<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"><iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://player.vimeo.com/video/' . $vimeo_id . '" frameborder="0" allowfullscreen></iframe></div>';
                        }
                    } else {
                        // Direct video file
                        $poster = aimpro_get_field('about_video_poster', '');
                        echo '<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;"><video style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" controls' . (!empty($poster) ? ' poster="' . esc_url($poster) . '"' : '') . '>';
                        echo '<source src="' . esc_url($video_url) . '" type="video/mp4">';
                        echo 'Your browser does not support the video tag.';
                        echo '</video></div>';
                    }
                    ?>
                </div>
            </div>
        </section>
        <?php endif; ?>        <!-- Values Section -->
        <section class="values-section">
            <div class="section-content">
                <div class="content-header text-center animate-on-scroll animate-fade-up">
                    <h2><?php echo aimpro_get_field('about_values_heading', 'Experiences Fueled by<br>Data and Dedication'); ?></h2>
                    <p class="section-description"><?php echo aimpro_get_field('about_values_subtitle', 'At Aimpro Digital, we\'re more than a digital marketing agency.<br>We\'re a team of strategists, creatives, and tech enthusiasts<br>committed to making a meaningful impact for our clients.'); ?></p>
                </div>

                <!-- Stats Section -->
                <div class="stats-container animate-on-scroll animate-stagger animate-scale-up">
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number"><?php echo aimpro_get_field('about_stat_1_number', '25'); ?></div>
                            <div class="stat-label"><?php echo aimpro_get_field('about_stat_1_label', 'Years of Experience'); ?></div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo aimpro_get_field('about_stat_2_number', '98'); ?></div>
                            <div class="stat-label"><?php echo aimpro_get_field('about_stat_2_label', '% Increase in Client Leads'); ?></div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo aimpro_get_field('about_stat_3_number', '15'); ?></div>
                            <div class="stat-label"><?php echo aimpro_get_field('about_stat_3_label', '+ Industries Transformed'); ?></div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number"><?php echo aimpro_get_field('about_stat_4_number', '199'); ?></div>
                            <div class="stat-label"><?php echo aimpro_get_field('about_stat_4_label', '% Increase in Conversion Rates'); ?></div>
                        </div>
                    </div>
                </div>                <!-- Values Grid -->
                <div class="values-grid">
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L13.09 8.26L22 9L13.09 9.74L12 16L10.91 9.74L2 9L10.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_1_heading', 'Innovative Solutions'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_1_description', 'Our approach goes beyond the ordinary. We infuse creativity and innovation into every strategy, crafting unique solutions tailored to your brand\'s needs. By blending fresh ideas with strategic insights, we create campaigns that truly connect with your audience.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 3V21H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 9L12 6L16 10L21 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_2_heading', 'Data-Driven Strategies'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_2_description', 'We believe in the power of data. Every decision we make is backed by in-depth analytics, ensuring that each campaign is optimized to deliver maximum results and ROI. With data at the core, your marketing efforts are not only efficient but also highly effective.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_3_heading', 'Proven Track Record'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_3_description', 'Our results speak for themselves. Across diverse industries, we\'ve consistently delivered growth, enhanced visibility, and high-quality leads, proving our ability to drive real impact for our clients.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_4_heading', 'Collaborative Partnership'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_4_description', 'We\'re more than an agency—we\'re an extension of your team. Through open communication and a collaborative approach, we work closely with you to exceed expectations and achieve your goals together.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L15.09 8.26L22 9L17 14L18.18 21L12 18L5.82 21L7 14L2 9L8.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_5_heading', 'Exceptional Customer Service'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_5_description', 'Client satisfaction is our top priority. From strategy through to execution, our dedicated team provides support at every step, ensuring a smooth and seamless experience tailored to your needs.'); ?></p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>                        <h3><?php echo aimpro_get_field('about_value_6_heading', 'Forward-Thinking Approach'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_6_description', 'In an ever-changing digital landscape, we keep your brand one step ahead. Our forward-thinking approach enables us to adapt quickly to trends, ensuring your brand stays competitive and relevant in the market.'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">
                <div class="section-header text-center animate-on-scroll animate-fade-up">
                    <h2>Meet Our Expert Team</h2>
                    <p>The passionate professionals driving your digital success</p>
                </div>
                
                <div class="team-grid">                    <div class="team-member animate-on-scroll animate-stagger animate-fade-up">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.png" alt="Ajay Dhunna">
                        </div>
                        <div class="member-info">
                            <h3>Ajay Dhunna</h3>
                            <p class="member-title">Director of Marketing</p>
                            <div class="member-skills">
                                <span>Strategic Planning</span>
                                <span>Business Development</span>
                                <span>Client Relations</span>
                            </div>
                        </div>
                    </div>                    <div class="team-member animate-on-scroll animate-stagger animate-fade-up">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dinesh-thapa.png" alt="Dinesh Thapa">
                        </div>
                        <div class="member-info">
                            <h3>Dinesh Thapa</h3>
                            <p class="member-title">Business Growth Specialist</p>
                            <div class="member-skills">
                                <span>ROI Optimization</span>
                                <span>Analytics</span>
                                <span>Business Growth</span>
                            </div>
                        </div>
                    </div>                    <div class="team-member animate-on-scroll animate-stagger animate-fade-up">
                        <div class="member-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/james-butler.png" alt="James Butler">
                        </div>
                        <div class="member-info">
                            <h3>James Butler</h3>
                            <p class="member-title">Creative Director</p>
                            <div class="member-skills">
                                <span>UX/UI Design</span>
                                <span>Brand Strategy</span>
                                <span>Creative Direction</span>                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Team CTA -->
                <div class="team-cta text-center animate-on-scroll animate-fade-up">
                    <h3>Ready to Work with Our Expert Team?</h3>
                    <p>Let's discuss how our specialists can help transform your digital presence and drive exceptional results for your business.</p>
                    <div class="team-cta-buttons">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Started Today</a>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Our Work</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About the Author Section -->
        <section class="author-section">
            <div class="container">
                <div class="author-content animate-on-scroll animate-fade-up">                    <div class="author-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.png" alt="Ajay Dhunna">
                    </div>
                    <div class="author-info">
                        <div class="author-badge">About the Director</div>
                        <h2>Ajay Dhunna</h2>
                        <p class="author-title">Director of Marketing</p>
                        <div class="author-description">
                            <p>With over 15 years of experience in digital marketing, Ajay founded Aimpro Digital with a vision to help businesses achieve exceptional growth through data-driven strategies and innovative solutions.</p>
                            <p>His expertise spans across SEO, PPC, marketing automation, and business development. Ajay has helped hundreds of businesses transform their digital presence and achieve sustainable growth.</p>
                            <p>When he's not strategizing for clients, Ajay enjoys sharing his knowledge through industry speaking engagements and mentoring the next generation of digital marketers.</p>
                        </div>
                        <div class="author-cta">
                            <a href="https://linkedin.com/in/ajaydhunna" class="btn btn-outline" target="_blank">
                                <i class="fab fa-linkedin"></i>
                                Connect on LinkedIn
                            </a>
                            <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                                Get in Touch
                            </a>
                        </div>
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
        </section>        <!-- CTA Section -->
        <section class="about-cta">
            <div class="container">
                <div class="cta-content text-center animate-on-scroll animate-scale-up">
                    <h2><?php echo aimpro_get_field('about_cta_heading', 'Ready to Transform Your Digital Presence?'); ?></h2>
                    <p><?php echo aimpro_get_field('about_cta_description', 'Partner with Aimpro Digital and discover how our data-driven strategies, innovative solutions, and dedicated team can elevate your brand to new heights. Whether you\'re looking to increase leads, boost conversions, or build a stronger online presence, we\'re here to make it happen.'); ?></p>
                    <p class="cta-sub-text"><?php echo aimpro_get_field('about_cta_sub_text', 'Join the growing number of businesses that trust us to deliver exceptional results. Let\'s start building your digital success story today.'); ?></p>
                    <div class="cta-buttons">
                        <?php 
                        $button_1_url = aimpro_get_field('about_cta_button_1_url', '/contact');
                        $button_1_text = aimpro_get_field('about_cta_button_1_text', 'Get In Touch');
                        
                        // Ensure URLs are properly formatted
                        if (!empty($button_1_url) && $button_1_url[0] === '/') {
                            $button_1_url = home_url($button_1_url);
                        }
                        ?>
                        <a href="<?php echo esc_url($button_1_url); ?>" class="btn btn-primary"><?php echo esc_html($button_1_text); ?></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
