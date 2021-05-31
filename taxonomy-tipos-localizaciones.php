<?php get_header(); ?>
<?php if (function_exists('pll_current_language')) { ?>
<?php $lang = pll_current_language('slug'); ?>
<?php } else { ?>
<?php $lang = 'es'; ?>
<?php } ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row justify-content-center no-gutters">
        <?php echo get_template_part('templates/template-banner-title'); ?>
        <div class="back-btn-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="back-btn-content col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
                        <?php if ($lang == 'es') { ?>
                        <?php $link = home_url('/servicios'); ?>
                        <?php } else { ?>
                        <?php $link = home_url('/services'); ?>
                        <?php } ?>
                        <a href="<?php echo $link; ?>" title="<?php _e('Volver al Listado', 'balearic'); ?>"><i class="fa fa-chevron-left"></i> <?php _e('Volver al Listado', 'balearic'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo get_template_part('templates/template-filter-container'); ?>
        <?php if (have_posts()) : ?>
        <section class="locals-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div id="filterResults" class="row align-items-top justify-content-between">
                    <?php while (have_posts()) : the_post(); ?>
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
    </div>
</main>
<?php get_footer(); ?>