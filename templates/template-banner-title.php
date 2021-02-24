<section class="main-banner-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <picture>
        <?php $bg_banner_id = get_post_meta(get_the_ID(), 'bhm_global_hero_image_id', true); ?>
        <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'global_hero', false); ?>
        <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
    </picture>
    <div class="wrapper">
        <h1><?php the_title(); ?></h1>
    </div>

</section>