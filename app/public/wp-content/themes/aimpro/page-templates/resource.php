<?php
/**
 * Template Name: Resource Page
 *
 * This template is used for resource pages, guides, and
 * educational content pages.
 *
 * @package Aimpro
 */

get_header();

// Get page title and potential custom H1
$page_title = get_the_title();
$custom_h1 = get_field('custom_h1_text');
$display_title = !empty($custom_h1) ? $custom_h1 : $page_title;

// Resource specific fields
$resource_intro = get_field('resource_intro');
$resource_download = get_field('resource_download');
$resource_cta = get_field('resource_cta');
$resource_video = get_field('resource_video');
?>

<main id="primary" class="resource-page">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>    <!-- Resource Hero Section -->
    <section class="page-hero resource-hero">
        <div class="container">
            <div class="page-hero-content resource-hero-content">
                <h1><?php echo esc_html($display_title); ?></h1>
                <?php if ($resource_intro) : ?>
                    <div class="page-intro resource-intro">
                        <?php echo wp_kses_post($resource_intro); ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($resource_download) : ?>
                <div class="resource-download">
                    <a href="<?php echo esc_url($resource_download['url']); ?>" class="btn-primary" download>
                        <?php echo esc_html($resource_download['title'] ? $resource_download['title'] : __('Download Resource', 'aimpro')); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="resource-hero-image">
                <?php the_post_thumbnail('large', array('class' => 'resource-featured-image')); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Resource Content Section -->    <section class="page-content resource-content">
        <div class="container">
            <div class="page-main-content resource-main-content">
                <?php the_content(); ?>
            </div>

            <?php if ($resource_video) : ?>
            <div class="resource-video-container">
                <?php if (function_exists('aimpro_video_embed')) : ?>
                    <?php echo aimpro_video_embed($resource_video, array('title' => $display_title . ' - Video')); ?>
                <?php else: ?>
                    <div class="video-embed">
                        <?php echo wp_oembed_get($resource_video, array('width' => 800, 'height' => 450)); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <?php if ($resource_download) : ?>
            <div class="resource-download-box">
                <div class="resource-download-content">
                    <h3><?php echo esc_html__('Download Resource', 'aimpro'); ?></h3>
                    <p><?php echo esc_html__('Get the complete resource document to read offline or share with your team.', 'aimpro'); ?></p>
                </div>
                <div class="resource-download-button">
                    <a href="<?php echo esc_url($resource_download['url']); ?>" class="btn-primary" download>
                        <i class="fas fa-download"></i> <?php echo esc_html($resource_download['title'] ? $resource_download['title'] : __('Download Resource', 'aimpro')); ?>
                    </a>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Resource CTA Section -->
            <?php if ($resource_cta) : 
                $cta_title = isset($resource_cta['title']) ? $resource_cta['title'] : '';
                $cta_text = isset($resource_cta['text']) ? $resource_cta['text'] : '';
                $cta_button_text = isset($resource_cta['button_text']) ? $resource_cta['button_text'] : '';
                $cta_button_link = isset($resource_cta['button_link']) ? $resource_cta['button_link'] : '';
            ?>
            <div class="resource-cta-box">
                <h3><?php echo esc_html($cta_title); ?></h3>
                <p><?php echo wp_kses_post($cta_text); ?></p>
                <?php if ($cta_button_text && $cta_button_link) : ?>
                    <a href="<?php echo esc_url($cta_button_link); ?>" class="btn-primary"><?php echo esc_html($cta_button_text); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    
    <!-- Related Resources Section -->
    <section class="related-resources">
        <div class="container">
            <h2><?php echo esc_html__('Related Resources', 'aimpro'); ?></h2>
            
            <?php
            // Get related resources based on categories or tags
            $current_id = get_the_ID();
            $categories = get_the_category();
            $tags = get_the_tags();
            
            $category_ids = array();
            if ($categories) {
                foreach ($categories as $category) {
                    $category_ids[] = $category->term_id;
                }
            }
            
            $tag_ids = array();
            if ($tags) {
                foreach ($tags as $tag) {
                    $tag_ids[] = $tag->term_id;
                }
            }
            
            $args = array(
                'post_type' => 'page',
                'post__not_in' => array($current_id),
                'posts_per_page' => 3,
                'meta_query' => array(
                    array(
                        'key' => '_wp_page_template',
                        'value' => 'page-templates/resource.php',
                    ),
                ),
            );
            
            // If no categories or tags, just show other resources
            if (!empty($category_ids) || !empty($tag_ids)) {
                $args['tax_query'] = array('relation' => 'OR');
                
                if (!empty($category_ids)) {
                    $args['tax_query'][] = array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $category_ids,
                    );
                }
                
                if (!empty($tag_ids)) {
                    $args['tax_query'][] = array(
                        'taxonomy' => 'post_tag',
                        'field' => 'term_id',
                        'terms' => $tag_ids,
                    );
                }
            }
            
            $related_query = new WP_Query($args);
            
            if ($related_query->have_posts()) : ?>
                <div class="resources-grid">
                    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                        <article class="resource-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="resource-card-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'resource-thumbnail')); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="resource-card-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="btn-outline btn-sm">Read More</a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p><?php echo esc_html__('No related resources found.', 'aimpro'); ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
?>
