<?php
/**
 * Template Name: Industry Page
 *
 * This template is used for industry-specific pages to showcase
 * how Aimpro's services apply to particular industries.
 *
 * @package Aimpro
 */

get_header();

// Get page title and potential custom H1
$page_title = get_the_title();
$custom_h1 = get_field('custom_h1_text');
$display_title = !empty($custom_h1) ? $custom_h1 : $page_title;

// Industry specific fields
$industry_intro = get_field('industry_intro');
$industry_challenges = get_field('industry_challenges');
$industry_solutions = get_field('industry_solutions');
$industry_stats = get_field('industry_stats');
$industry_case_studies = get_field('industry_case_studies');
$industry_video = get_field('industry_video');
?>

<main id="primary" class="industry-page">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>    <!-- Industry Hero Section -->
    <section class="page-hero industry-hero">
        <div class="container">
            <div class="page-hero-content industry-hero-content">
                <h1><?php echo esc_html($display_title); ?></h1>
                <?php if ($industry_intro) : ?>
                    <div class="page-intro industry-intro">
                        <?php echo wp_kses_post($industry_intro); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="industry-hero-image">
                <?php the_post_thumbnail('large', array('class' => 'industry-featured-image')); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Industry Content Section -->
    <section class="page-content industry-content">
        <div class="container">
            <div class="page-main-content industry-main-content">
                <?php the_content(); ?>
            </div>
            
            <!-- Industry Challenges Section -->
            <?php if ($industry_challenges) : ?>
            <div class="industry-challenges">
                <h2><?php echo esc_html__('Industry Challenges', 'aimpro'); ?></h2>
                <div class="challenges-grid">
                    <?php foreach ($industry_challenges as $challenge) : 
                        $challenge_title = isset($challenge['title']) ? $challenge['title'] : '';
                        $challenge_description = isset($challenge['description']) ? $challenge['description'] : '';
                    ?>
                        <div class="challenge-item">
                            <h3><?php echo esc_html($challenge_title); ?></h3>
                            <p><?php echo wp_kses_post($challenge_description); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Industry Solutions Section -->
            <?php if ($industry_solutions) : ?>
            <div class="industry-solutions">
                <h2><?php echo esc_html__('Our Solutions', 'aimpro'); ?></h2>
                <div class="solutions-grid">
                    <?php foreach ($industry_solutions as $solution) : 
                        $solution_title = isset($solution['title']) ? $solution['title'] : '';
                        $solution_description = isset($solution['description']) ? $solution['description'] : '';
                        $solution_icon = isset($solution['icon']) ? $solution['icon'] : '';
                        $solution_link = isset($solution['link']) ? $solution['link'] : '';
                    ?>
                        <div class="solution-item">
                            <?php if ($solution_icon) : ?>
                                <div class="solution-icon">
                                    <i class="<?php echo esc_attr($solution_icon); ?>"></i>
                                </div>
                            <?php endif; ?>
                            <h3><?php echo esc_html($solution_title); ?></h3>
                            <p><?php echo wp_kses_post($solution_description); ?></p>
                            <?php if ($solution_link) : ?>
                                <a href="<?php echo esc_url($solution_link); ?>" class="btn-outline btn-sm">Learn More</a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
              <!-- Industry Stats Section -->
            <?php if ($industry_stats) : ?>
            <div class="industry-stats-section">
                <h2><?php echo esc_html__('Industry Statistics', 'aimpro'); ?></h2>
                <div class="industry-stats">
                    <?php foreach ($industry_stats as $stat) : 
                        $stat_number = isset($stat['number']) ? $stat['number'] : '';
                        $stat_label = isset($stat['label']) ? $stat['label'] : '';
                    ?>
                        <div class="industry-stat-item">
                            <div class="industry-stat-number"><?php echo esc_html($stat_number); ?></div>
                            <div class="industry-stat-label"><?php echo esc_html($stat_label); ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Industry Video Section -->
            <?php if ($industry_video) : ?>
            <div class="industry-video-container">
                <h2><?php echo esc_html__('Watch: Industry Insights', 'aimpro'); ?></h2>
                <?php if (function_exists('aimpro_video_embed')) : ?>
                    <?php echo aimpro_video_embed($industry_video, array('title' => $display_title . ' - Video')); ?>
                <?php else: ?>
                    <div class="video-embed">
                        <?php echo wp_oembed_get($industry_video, array('width' => 800, 'height' => 450)); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <!-- Case Studies Section -->
            <?php if ($industry_case_studies) : ?>
            <div class="case-studies-section">
                <h2><?php echo esc_html__('Industry Success Stories', 'aimpro'); ?></h2>
                <div class="case-studies-grid">
                    <?php foreach ($industry_case_studies as $case_study) : 
                        $case_study_title = $case_study->post_title;
                        $case_study_excerpt = wp_trim_words($case_study->post_excerpt ? $case_study->post_excerpt : $case_study->post_content, 20, '...');
                        $case_study_link = get_permalink($case_study->ID);                        $case_study_image = get_the_post_thumbnail_url($case_study->ID, 'medium');
                    ?>
                        <div class="case-study-item">
                            <?php if ($case_study_image) : ?>
                                <div class="case-study-image">
                                    <img src="<?php echo esc_url($case_study_image); ?>" alt="<?php echo esc_attr($case_study_title); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="case-study-content">
                                <h3><?php echo esc_html($case_study_title); ?></h3>
                                <p><?php echo wp_kses_post($case_study_excerpt); ?></p>
                                <a href="<?php echo esc_url($case_study_link); ?>" class="btn-outline btn-sm">Read Case Study</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Industry CTA Section -->
            <div class="industry-cta">
                <div class="cta-box">
                    <h3><?php echo esc_html__('Ready to Transform Your Business?', 'aimpro'); ?></h3>
                    <p><?php echo esc_html__('We understand the unique challenges of your industry. Contact us to discuss how our tailored solutions can help you succeed.', 'aimpro'); ?></p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-primary"><?php echo esc_html__('Get Started', 'aimpro'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
