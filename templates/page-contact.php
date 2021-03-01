<?php

/**
 * Template Name: Template - Contacto
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
        <?php echo get_template_part('templates/template-banner-title'); ?>
        <section class="main-contact-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-center">
                    <div class="main-contact-logo col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                        <?php $image = wp_get_attachment_image_src($custom_logo_id, 'medium'); ?>
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                    </div>
                    <div class="main-contact-preview col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <?php $contenido = get_post_meta(get_the_ID(), 'bhm_main_contact_content', true); ?>
                        <?php echo apply_filters('the_content', $contenido); ?>
                    </div>
                    <div class="main-contact-info-container col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <?php $arr_contact = get_post_meta(get_the_ID(), 'bhm_main_contact_group', true); ?>
                            <?php if (!empty($arr_contact)) { ?>
                                <?php $i = 1; ?>
                                <?php foreach ($arr_contact as $item) { ?>
                                    <article class="main-contact-item col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <h2><?php echo $item['title']; ?></h2>
                                        <?php echo apply_filters('the_content', $item['desc']); ?>
                                    </article>
                                <?php $i++;
                                } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-contact-form-section col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-contact-form-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php echo get_template_part('templates/template-contact-form'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-contact-map-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-contact-map-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="embed-responsive embed-responsive-16by9 embed-responsive-special">
                            <?php echo get_post_meta(get_the_ID(), 'bhm_main_contact_embed', true); ?>
                        </div>
                    </div>
                    <div class="main-contact-post-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php $contenido = get_post_meta(get_the_ID(), 'bhm_main_contact_post_content', true); ?>
                        <?php echo apply_filters('the_content', $contenido); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>