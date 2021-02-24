<?php

/**
 * Template Name: Template - Home
 *
 * @package balearic
 * @subpackage balearic-mk01-theme
 * @since Mk. 1.0
 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="home-main-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid container-special-fluid p-0">
                <div class="row no-gutters align-items-center">
                    <div class="home-main-content col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xl-1 order-lg-1 order-md-12 order-sm-12 order-12">
                        <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                        <?php $image = wp_get_attachment_image_src($custom_logo_id, 'medium'); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                        <?php the_content(); ?>
                    </div>
                    <picture class="home-main-picture col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-xl-12 order-lg-12 order-md-1 order-sm-1 order-1">
                        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'bhm_home_hero_image_id', true); ?>
                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'home_special_img', false); ?>
                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                    </picture>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>