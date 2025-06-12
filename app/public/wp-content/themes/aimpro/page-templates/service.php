<?php
/**
 * Template Name: Service Page
 *
 * This template is used for service pages, with specific layout and structure
 * to showcase a service offering with key features and benefits.
 *
 * @package Aimpro
 */

get_header();

// Get page title and potential custom H1
$page_title = get_the_title();
$custom_h1 = get_field('custom_h1_text');
$display_title = !empty($custom_h1) ? $custom_h1 : $page_title;

// Service page specific fields
$service_intro = get_field('service_intro');
$service_features = get_field('service_features');
$service_video = get_field('service_video');
$service_cta_text = get_field('service_cta_text');
$service_cta_link = get_field('service_cta_link');
?>

<main id="primary" class="service-page">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>    <!-- Service Hero Section -->
    <section class="page-hero service-hero">
        <div class="container">
            <div class="page-hero-content service-hero-content">
                <h1><?php echo esc_html($display_title); ?></h1>
                <?php if ($service_intro) : ?>
                    <div class="page-intro service-intro">
                        <?php echo wp_kses_post($service_intro); ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($service_cta_text && $service_cta_link) : ?>
                    <a href="<?php echo esc_url($service_cta_link); ?>" class="btn-primary"><?php echo esc_html($service_cta_text); ?></a>
                <?php endif; ?>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="service-hero-image">
                <?php the_post_thumbnail('large', array('class' => 'service-featured-image')); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Service Content Section -->
    <section class="page-content service-content">
        <div class="container">
            <div class="page-main-content service-main-content">
                <?php the_content(); ?>
            </div><?php if ($service_video) : ?>
            <div class="service-video-container">
                <?php if (function_exists('aimpro_video_embed')) : ?>
                    <?php echo aimpro_video_embed($service_video, array('title' => $display_title . ' - Video')); ?>
                <?php else: ?>
                    <div class="video-embed">
                        <?php echo wp_oembed_get($service_video, array('width' => 800, 'height' => 450)); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($service_features) : ?>
            <div class="service-features">
                <h2><?php echo esc_html__('Key Features', 'aimpro'); ?></h2>
                <div class="service-feature-list">
                    <?php foreach ($service_features as $feature) : ?>
                        <div class="service-feature-item">
                            <?php if (!empty($feature['icon'])) : ?>
                                <div class="service-feature-icon">
                                    <i class="<?php echo esc_attr($feature['icon']); ?>"></i>
                                </div>
                            <?php endif; ?>
                            <h3><?php echo esc_html($feature['title']); ?></h3>
                            <p><?php echo wp_kses_post($feature['description']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
              <div class="service-cta">
                <div class="cta-box">
                    <h3><?php echo esc_html__('Ready to get started?', 'aimpro'); ?></h3>
                    <p><?php echo esc_html__('Contact us today to learn how our services can benefit your business.', 'aimpro'); ?></p>
                    <?php if ($service_cta_text && $service_cta_link) : ?>
                        <a href="<?php echo esc_url($service_cta_link); ?>" class="btn-primary"><?php echo esc_html($service_cta_text); ?></a>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary"><?php echo esc_html__('Get in Touch', 'aimpro'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
