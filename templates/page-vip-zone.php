<?php

/**
 * Template Name: Template - Zona VIP
 *
 * @package balearic
 * @subpackage balearic-mk01-theme
 * @since Mk. 1.0
 */
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row justify-content-center no-gutters">
        <?php echo get_template_part('templates/template-banner-title'); ?>

        <?php if (is_user_logged_in()) : ?>
        <?php $arr_locals = new WP_Query(array('post_type' => 'localizaciones', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date')); ?>
        <?php echo get_template_part('templates/template-filter-container'); ?>
        <?php if ($arr_locals->have_posts()) : ?>
        <section class="locals-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div id="filterResults" class="row align-items-top justify-content-between">
                    <?php while ($arr_locals->have_posts()) : $arr_locals->the_post(); ?>
                    <?php $is_blocked = get_post_meta(get_the_ID(), '_wpmem_block', true); ?>
                    <?php if (!is_user_logged_in()) { ?>
                    <?php if ($is_blocked == '0') { ?>
                    <article class="locals-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <picture>
                            <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                                <?php the_post_thumbnail('tax_boxed_item', array('class' => 'img-fluid')); ?>
                            </a>
                        </picture>
                        <header>
                            <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </header>
                    </article>
                    <?php } ?>
                    <?php } else { ?>
                    <article class="locals-item col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <picture>
                            <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                                <?php the_post_thumbnail('tax_boxed_item', array('class' => 'img-fluid')); ?>
                            </a>
                        </picture>
                        <header>
                            <a href="<?php echo get_permalink(); ?>" title="<?php _e('Ver Localización', 'balearic'); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                        </header>
                    </article>
                    <?php } ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <?php else : ?>
            <section class="vip-closed-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h1><?php _e('Esta zona es de acceso exclusivo de nuestros miembros registrados', 'balearic'); ?></h1>
            <p><?php printf(__('Puedes registrarte haciendo click <a href="%s">aquí</a>', 'balearic'), home_url('/registro')); ?></p>
            </section>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>