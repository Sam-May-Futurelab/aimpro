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

// Get page title and potential custom H1
$page_title = get_the_title();
$custom_h1 = get_field('custom_h1_text');
$display_title = !empty($custom_h1) ? $custom_h1 : $page_title;

// About specific fields
$about_intro = get_field('about_intro');
$about_mission = get_field('about_mission');
$about_values = get_field('about_values');
$team_members = get_field('team_members');
?>

<main id="primary" class="about-page">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>    <!-- About Hero Section -->
    <section class="page-hero about-hero">
        <div class="container">
            <div class="page-hero-content about-hero-content">
                <h1><?php echo esc_html($display_title); ?></h1>
                <?php if ($about_intro) : ?>
                    <div class="page-intro about-intro">
                        <?php echo wp_kses_post($about_intro); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="about-hero-image">
                <?php the_post_thumbnail('large', array('class' => 'about-featured-image')); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- About Content Section -->
    <section class="page-content about-content">
        <div class="container">
            <div class="page-main-content about-main-content">
                <?php the_content(); ?>
            </div>

            <!-- Mission & Values Section -->
            <?php if ($about_mission || $about_values) : ?>
            <div class="mission-values-section">
                <?php if ($about_mission) : ?>
                <div class="mission-box">
                    <h2><?php echo esc_html__('Our Mission', 'aimpro'); ?></h2>
                    <div class="mission-content">
                        <?php echo wp_kses_post($about_mission); ?>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if ($about_values) : ?>
                <div class="values-box">
                    <h2><?php echo esc_html__('Our Values', 'aimpro'); ?></h2>
                    <div class="values-content">
                        <?php echo wp_kses_post($about_values); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <!-- Team Members Section -->
            <?php if ($team_members) : ?>
            <div class="team-section">
                <h2><?php echo esc_html__('Meet Our Team', 'aimpro'); ?></h2>
                <div class="team-grid">
                    <?php foreach ($team_members as $member) : 
                        $member_image = isset($member['image']) ? $member['image'] : '';
                        $member_name = isset($member['name']) ? $member['name'] : '';
                        $member_title = isset($member['title']) ? $member['title'] : '';
                        $member_bio = isset($member['bio']) ? $member['bio'] : '';
                    ?>
                        <div class="team-member">
                            <?php if ($member_image) : ?>
                            <div class="team-member-image">
                                <img src="<?php echo esc_url($member_image['url']); ?>" alt="<?php echo esc_attr($member_name); ?>" class="team-photo">
                            </div>
                            <?php endif; ?>
                            
                            <div class="team-info">
                                <h3><?php echo esc_html($member_name); ?></h3>
                                <span class="team-title"><?php echo esc_html($member_title); ?></span>
                                <p class="team-bio"><?php echo wp_kses_post($member_bio); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>
