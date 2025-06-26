<?php
/**
 * Template Name: About Page
 * Description: About Aimpro Digital - Your trusted partner in digital marketing excellence
 */

get_header(); ?>

<main id="main" class="main-content about-page">      
    <!-- Breadcrumbs -->
    <div class="breadcrumbs-container">
        <div class="container">
            <nav class="breadcrumbs">
                <a href="<?php echo home_url(); ?>">Home</a>
                <span class="separator">›</span>
                <span class="current">About</span>
            </nav>
        </div>
    </div>

    <!-- Hero Section -->
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
        if (!empty($video_url)): ?>        <section class="about-video-section">
            <div class="section-content text-center" style="text-align: center;">
                <?php 
                $video_heading = aimpro_get_field('about_video_heading', '');
                $video_description = aimpro_get_field('about_video_description', '');
                if (!empty($video_heading)): ?>                <div class="content-header animate-on-scroll animate-fade-up" style="text-align: center;">
                    <h2 style="text-align: center;"><?php echo $video_heading; ?></h2>
                    <?php if (!empty($video_description)): ?>
                    <p class="section-description" style="text-align: center;"><?php echo $video_description; ?></p>
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
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_1_heading', 'Innovative Solutions'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_1_description', 'Our approach goes beyond the ordinary. We infuse creativity and innovation into every strategy, crafting unique solutions tailored to your brand\'s needs. By blending fresh ideas with strategic insights, we create campaigns that truly connect with your audience.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_2_heading', 'Data-Driven Strategies'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_2_description', 'We believe in the power of data. Every decision we make is backed by in-depth analytics, ensuring that each campaign is optimised to deliver maximum results and ROI. With data at the core, your marketing efforts are not only efficient but also highly effective.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_3_heading', 'Proven Track Record'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_3_description', 'Our results speak for themselves. Across diverse industries, we\'ve consistently delivered growth, enhanced visibility, and high-quality leads, proving our ability to drive real impact for our clients.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_4_heading', 'Collaborative Partnership'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_4_description', 'We\'re more than an agency—we\'re an extension of your team. Through open communication and a collaborative approach, we work closely with you to exceed expectations and achieve your goals together.'); ?></p>
                    </div>
                    
                    <div class="value-item animate-on-scroll animate-stagger animate-fade-up">
                        <div class="value-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3><?php echo aimpro_get_field('about_value_5_heading', 'Exceptional Customer Service'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_5_description', 'Client satisfaction is our top priority. From strategy through to execution, our dedicated team provides support at every step, ensuring a smooth and seamless experience tailored to your needs.'); ?></p>
                    </div>
                    
                    <div class="value-item">
                        <div class="value-icon">
                            <i class="fas fa-rocket"></i>
                        </div>                        <h3><?php echo aimpro_get_field('about_value_6_heading', 'Forward-Thinking Approach'); ?></h3>
                        <p><?php echo aimpro_get_field('about_value_6_description', 'In an ever-changing digital landscape, we keep your brand one step ahead. Our forward-thinking approach enables us to adapt quickly to trends, ensuring your brand stays competitive and relevant in the market.'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section">
            <div class="container">                <div class="section-header text-center animate-on-scroll animate-fade-up" style="text-align: center;">
                    <h2 style="text-align: center;">Meet Our Expert Team</h2>
                    <p style="text-align: center;">The passionate professionals driving your digital success</p>
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
                                <span>ROI optimisation</span>
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
                <div class="team-cta text-center animate-on-scroll animate-fade-up" style="text-align: center;">
                    <h3 style="text-align: center;">Ready to Work with Our Expert Team?</h3>
                    <p style="text-align: center;">Let's discuss how our specialists can help transform your digital presence and drive exceptional results for your business.</p>
                    <div class="team-cta-buttons" style="text-align: center;">
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">Get Started Today</a>
                        <a href="<?php echo home_url('/case-studies'); ?>" class="btn btn-secondary">View Our Work</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Director Spotlight Section -->
        <section class="company-values animate-on-scroll animate-fade-up" style="padding: 4rem 0; background: #f8f9fa;">
            <div class="container">
                <div class="section-content">
                    <div class="content-centre">
                        <h2>Leadership That Drives Results</h2>
                        <div class="curly-underline-accent"></div>
                    </div>
                    <div class="values-grid">
                        <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="value-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-dhunna.png" alt="Ajay Dhunna" style="width: 80px; height: 80px; border-radius: 50%; object-fit: cover;">
                            </div>
                            <h3>Ajay Dhunna</h3>
                            <p><strong>Director of Marketing</strong></p>
                            <p>With over 15 years of experience in digital marketing, Ajay founded Aimpro Digital with a vision to help businesses achieve exceptional growth through data-driven strategies and innovative solutions.</p>
                        </div>
                        
                        <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="value-icon">
                                <i class="fas fa-chart-line" style="font-size: 2.5rem;"></i>
                            </div>
                            <h3>Proven Expertise</h3>
                            <p>Specializing in SEO, PPC, marketing automation, and business development, Ajay has helped hundreds of businesses transform their digital presence and achieve sustainable growth.</p>
                        </div>
                        
                        <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="value-icon">
                                <i class="fas fa-users" style="font-size: 2.5rem;"></i>
                            </div>
                            <h3>Industry Leader</h3>
                            <p>When not strategizing for clients, Ajay shares his knowledge through industry speaking engagements and mentors the next generation of digital marketers.</p>
                        </div>
                        
                        <div class="value-card animate-on-scroll animate-stagger animate-fade-up">
                            <div class="value-icon">
                                <i class="fas fa-handshake" style="font-size: 2.5rem;"></i>
                            </div>
                            <h3>Client Partnership</h3>
                            <p>Building lasting relationships through transparent communication, strategic guidance, and delivering measurable results that exceed expectations for every client partnership.</p>
                        </div>
                    </div>
                    
                    <!-- Connect CTA -->
                    <div style="text-align: center; margin-top: 3rem;">
                        <a href="https://linkedin.com/in/ajaydhunna" class="btn btn-outline" target="_blank" style="margin-right: 1rem;">
                            <i class="fab fa-linkedin"></i>
                            Connect on LinkedIn
                        </a>
                        <a href="<?php echo home_url('/contact'); ?>" class="btn btn-primary">
                            Get in Touch
                        </a>
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

