<?php

/**
 * Template Name: Template - Mi Cuenta
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
        <div class="main-page-content-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="main-page-content main-account-page col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-dashboard"></i> <?php _e('Escritorio', 'balearic'); ?></a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-user-circle-o"></i> <?php _e('Perfil', 'balearic'); ?></a>
                                    <a class="nav-link" href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-sign-out"></i> <?php _e('Salir', 'balearic'); ?></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                        <h2 class="tab-title"><?php _e('Escritorio', 'balearic'); ?></h2>
                                        <?php the_content(); ?>
                                        <h3><?php _e('Localizaciones Destacadas', 'balearic'); ?></h3>
                                        <?php echo do_shortcode('[closed-locations]');?>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        <h2 class="tab-title"><?php _e('Perfil de Usuario', 'balearic'); ?></h2>
                                        <?php echo do_shortcode('[wpmem_form user_edit]');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>