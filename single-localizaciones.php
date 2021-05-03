<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/template-banner-title'); ?>
        <div class="single-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="single-locals-gallery col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <?php $gallery = get_post_meta(get_the_ID(), 'bhm_main_locals_gallery', true); ?>
                                <?php foreach ((array)$gallery as $attachment_ID => $attachment_data) { ?>
                                    <?php $image = wp_get_attachment_image_src($attachment_ID, 'locals_big_image', false); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $image[0]; ?>" alt="Slide" class="img-fluid" />
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-special"></div>
                            <div class="swiper-button-prev swiper-button-special"></div>
                        </div>

                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php $gallery = get_post_meta(get_the_ID(), 'bhm_main_locals_gallery', true); ?>
                                <?php foreach ((array)$gallery as $attachment_ID => $attachment_data) { ?>
                                    <?php $image = wp_get_attachment_image_src($attachment_ID, 'locals_small_image', false); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $image[0]; ?>" alt="Slide" class="img-fluid" />
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="single-locals-main-info  col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <?php the_content(); ?>
                    </div>
                    <div class="single-details-options col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="single-title-container">
                            <h3><?php _e('Detalles', 'balearic'); ?></h3>
                        </div>
                        <div class="local-details-container">
                            <div class="single-data"><strong><?php _e('ID de Propiedad', 'balearic'); ?></strong> <?php echo get_post_meta(get_the_ID(), 'bhm_local_id', true); ?></div>
                            <div class="single-data"><strong><?php _e('Precio:', 'balearic'); ?></strong> <?php echo get_post_meta(get_the_ID(), 'bhm_local_price', true); ?></div>
                            <div class="single-data"><strong><?php _e('Tipo de Propiedad:', 'balearic'); ?></strong> <?php echo get_post_meta(get_the_ID(), 'bhm_local_type', true); ?></div>
                            <div class="single-data"><strong><?php _e('Tamaño de Propiedad:', 'balearic'); ?></strong> <?php echo get_post_meta(get_the_ID(), 'bhm_local_size', true); ?> M<small>2</small></div>
                            <div class="single-data"><strong><?php _e('Habitaciones:', 'balearic'); ?></strong> <?php echo get_post_meta(get_the_ID(), 'bhm_local_room', true); ?></div>
                            <div class="single-data"><strong><?php _e('Baños:', 'balearic'); ?></strong> <?php echo get_post_meta(get_the_ID(), 'bhm_local_bath', true); ?></div>
                            <div class="single-data"><strong><?php _e('Equipamiento:', 'balearic'); ?></strong> <?php echo ucfirst(get_post_meta(get_the_ID(), 'bhm_local_equip', true)); ?></div>
                        </div>
                    </div>

                    <div class="single-features-options col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                        <div class="single-title-container">
                            <h3><?php _e('Características', 'balearic'); ?></h3>
                        </div>
                        <div class="local-carac-container">
                            <?php $arr_group = get_post_meta(get_the_ID(), 'bhm_local_mics', true); ?>

                            <?php foreach ($arr_group as $key => $value) { ?>
                                <div class="single-data">
                                    <?php switch ($value) {
                                        case 'aire_acondicionado':
                                            echo 'Aire acondicionado';
                                            break;
                                        case 'vista_oceano':
                                            echo 'Vista al océano';
                                            break;
                                        default:
                                            echo ucfirst($value);
                                            break;
                                    }
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>