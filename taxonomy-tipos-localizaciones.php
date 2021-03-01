<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/template-banner-title'); ?>
        <?php if (have_posts()) : ?>
            <section class="main-locals-search-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="main-locals-search-content col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/'); ?>">
                                <div class="input-group">
                                    <input type="hidden" name="post_type" value="localizaciones">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <input type="search" id="s" name="s" value="" class="form-control" placeholder="<?php _e('Busqueda Sencilla', 'balearic'); ?>" aria-label="<?php _e('Busqueda Sencilla', 'balearic'); ?>" aria-describedby="searchsubmit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="locals-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row align-items-top justify-content-between">
                        <?php while (have_posts()) : the_post(); ?>
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
                        <?php endwhile; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</main>
<?php get_footer(); ?>