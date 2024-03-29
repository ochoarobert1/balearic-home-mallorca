<?php
/**
* Template Name: Template - Pagina Gracias
*
* @package balearic
* @subpackage balearic-mk01-theme
* @since Mk. 1.0
*/
?>
<?php get_header(); ?>
<?php the_post(); ?>
<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row">
        <section id="post-<?php the_ID(); ?>" class="thanks-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="container">
                <div class="row">
                    <div class="section-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>

                        <a href="<?php echo home_url('/'); ?>" class="btn btn-md btn-back-home" title="<?php _e('Volver al Inicio', 'balearic'); ?>"><?php _e('Volver al Inicio', 'balearic'); ?></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>