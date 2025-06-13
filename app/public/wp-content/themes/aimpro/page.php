<?php
/**
 * The base template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Other "page" templates can extend this file to provide
 * different layouts while maintaining core functionality.
 *
 * @package Aimpro
 */

get_header();

// DEBUG: Add console log to identify which template is loading
echo '<script>console.log("🔴 LOADING: page.php template");</script>';

// Get page title and potential custom H1
$page_title = get_the_title();
$custom_h1 = get_field('custom_h1_text'); // Using ACF for custom H1
$display_title = !empty($custom_h1) ? $custom_h1 : $page_title;
?>

<main id="primary" class="page-content">
    <?php if (function_exists('aimpro_breadcrumbs')) : ?>
    <div class="breadcrumbs-container">
        <div class="container">
            <?php aimpro_breadcrumbs(); ?>
        </div>
    </div>
    <?php endif; ?>

    <div class="container">
        <header class="page-header">
            <h1 class="page-title"><?php echo esc_html($display_title); ?></h1>
        </header>

        <div class="page-content-wrapper">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
?>
