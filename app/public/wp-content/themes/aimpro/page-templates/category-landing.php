<?php
/**
 * Template Name: Category Landing Page
 *
 * This template is used for top-level category pages that show
 * all related submenu items visually and provide an introduction
 * to the category/service area.
 *
 * @package Aimpro
 */

get_header();

// Get page title and potential custom H1
$page_title = get_the_title();
$custom_h1 = get_field('custom_h1_text');
$display_title = !empty($custom_h1) ? $custom_h1 : $page_title;

// Category specific fields
$category_intro = get_field('category_intro');
$category_items = get_field('category_items');
$category_cta_text = get_field('category_cta_text');
$category_cta_link = get_field('category_cta_link');
?>

<main id="primary" class="category-landing-page">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>    <!-- Category Hero Section -->
    <section class="page-hero category-hero">
        <div class="container">
            <div class="page-hero-content category-hero-content">
                <h1><?php echo esc_html($display_title); ?></h1>
                <?php if ($category_intro) : ?>
                    <div class="page-intro category-intro">
                        <?php echo wp_kses_post($category_intro); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="category-hero-image">
                <?php the_post_thumbnail('large', array('class' => 'category-featured-image')); ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
      <!-- Category Content Section -->
    <section class="page-content category-content">
        <div class="container">
            <div class="page-main-content category-main-content">
                <?php the_content(); ?>
            </div>

            <!-- Sub-items Grid -->
            <?php if ($category_items) : ?>
            <div class="category-items-grid">
                <?php foreach ($category_items as $item) : 
                    $item_image = isset($item['image']) ? $item['image'] : '';
                    $item_title = isset($item['title']) ? $item['title'] : '';
                    $item_description = isset($item['description']) ? $item['description'] : '';
                    $item_link = isset($item['link']) ? $item['link'] : '';
                ?>                    <div class="category-item-card">
                        <?php if ($item_image) : ?>
                        <div class="category-item-image">
                            <img src="<?php echo esc_url($item_image['url']); ?>" alt="<?php echo esc_attr($item_title); ?>">
                        </div>
                        <?php endif; ?>
                        
                        <div class="category-item-content">
                            <h3><?php echo esc_html($item_title); ?></h3>
                            <p><?php echo wp_kses_post($item_description); ?></p>
                            
                            <?php if ($item_link) : ?>
                            <a href="<?php echo esc_url($item_link); ?>" class="btn-outline btn-sm">Learn More</a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php else : ?>
            
            <!-- Dynamically get child pages if no ACF field data -->
            <?php
            $child_pages = get_pages(array(
                'child_of' => get_the_ID(),
                'sort_column' => 'menu_order',
                'sort_order' => 'ASC',
            ));
            
            if ($child_pages) : ?>            <div class="category-items-grid">
                <?php foreach ($child_pages as $child_page) : 
                    $child_id = $child_page->ID;
                    $child_title = $child_page->post_title;
                    $child_excerpt = $child_page->post_excerpt ? $child_page->post_excerpt : wp_trim_words(strip_shortcodes($child_page->post_content), 20);
                    $child_permalink = get_permalink($child_id);
                    $child_excerpt = $child_page->post_excerpt ? $child_page->post_excerpt : wp_trim_words(strip_shortcodes(strip_tags($child_page->post_content)), 20);
                    $child_link = get_permalink($child_id);
                    $thumbnail = get_the_post_thumbnail_url($child_id, 'medium');
                ?>
                    <div class="category-item">
                        <?php if ($thumbnail) : ?>
                        <div class="category-item-image">
                            <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($child_title); ?>">
                        </div>
                        <?php endif; ?>
                          <div class="category-item-content">
                            <h3><?php echo esc_html($child_title); ?></h3>
                            <p><?php echo wp_kses_post($child_excerpt); ?></p>
                            <a href="<?php echo esc_url($child_link); ?>" class="btn-outline btn-sm">Learn More</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            
            <!-- Category CTA Section -->
            <div class="category-cta-section">
                <div class="cta-box">
                    <h3><?php echo esc_html__('Ready to get started?', 'aimpro'); ?></h3>
                    <p><?php echo esc_html__('Contact our team today to learn more about our solutions.', 'aimpro'); ?></p>
                    <?php if ($category_cta_text && $category_cta_link) : ?>
                        <a href="<?php echo esc_url($category_cta_link); ?>" class="btn-primary"><?php echo esc_html($category_cta_text); ?></a>
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
