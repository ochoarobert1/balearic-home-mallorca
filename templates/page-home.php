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
        <section class="home-locations-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-top">
                    <div class="home-locations-title title-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php echo get_post_meta(get_the_ID(), 'bhm_home_locals_title', true); ?></h2>
                    </div>
                    <?php $args = array('taxonomy' => 'tipos-localizaciones', 'hide_empty' => false, 'order' => 'DESC', 'orderby' => 'date'); ?>
                    <?php $arr_tipos = get_terms($args); ?>
                    <?php if (!empty($arr_tipos)) { ?>
                        <?php foreach ($arr_tipos as $item) { ?>
                            <article class="home-location-tax col-xl col-lg col-md col-sm-12 col-12">
                                <div class="wrapper">
                                    <picture>
                                        <?php $bg_banner_id = get_term_meta($item->term_id, 'bhm_tax_image_id', true); ?>
                                        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'tax_boxed_img', false); ?>
                                        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                    </picture>
                                    <a href="<?php echo get_term_link($item, 'tipos-localizaciones') ?>" class="home-location-tax-wrap">
                                        <h2><?php echo $item->name; ?></h2>
                                    </a>
                                </div>
                            </article>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="home-services-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-top">
                    <div class="home-services-title title-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2><?php echo get_post_meta(get_the_ID(), 'bhm_home_services_title', true); ?></h2>
                    </div>
                    <?php $arr_group = get_post_meta(get_the_ID(), 'bhm_home_services_group', true); ?>
                    <?php if (!empty($arr_group)) { ?>
                        <?php foreach ($arr_group as $item) { ?>
                            <article class="home-service-item col-xl col-lg col-md col-sm-6 col-12">
                                <?php $bg_banner_id = $item['icon_id']; ?>
                                <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'logo', false); ?>
                                <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                <div class="home-service-item-content">
                                    <h3><?php echo $item['title']; ?></h3>
                                </div>
                            </article>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="home-contact-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="home-contact-preview col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <?php $contenido = get_post_meta(get_the_ID(), 'bhm_home_contact_content', true); ?>
                        <?php echo apply_filters('the_content', $contenido); ?>
                    </div>
                    <div class="home-contact-info-container col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <?php $arr_contact = get_post_meta(get_the_ID(), 'bhm_home_contact_group', true); ?>
                            <?php if (!empty($arr_contact)) { ?>
                                <?php $i = 1; ?>
                                <?php foreach ($arr_contact as $item) { ?>
                                    <article class="home-contact-item col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <h4>0<?php echo $i; ?> .</h4>
                                        <h2><?php echo $item['title']; ?></h2>
                                        <?php echo apply_filters('the_content', $item['desc']); ?>
                                    </article>
                                <?php $i++; } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-contact-map-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="embed-responsive embed-responsive-16by9 embed-responsive-special">
                <?php echo get_post_meta(get_the_ID(), 'bhm_home_contact_embed', true); ?>
            </div>

        </section>
    </div>
</main>
<?php get_footer(); ?>