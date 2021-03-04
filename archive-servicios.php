<?php get_header(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <?php echo get_template_part('templates/template-banner-title'); ?>
        <section class="home-locations-section servicios-location-tax col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-top justify-content-between">
                    <?php $args = array('taxonomy' => 'tipos-localizaciones', 'hide_empty' => false, 'order' => 'DESC', 'orderby' => 'date'); ?>
                    <?php $arr_tipos = get_terms($args); ?>
                    <?php if (!empty($arr_tipos)) { ?>
                        <?php foreach ($arr_tipos as $item) { ?>
                            <article class="home-location-tax col-xl-3 col-lg-3 col-md col-sm-12 col-12">
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
        <?php if (have_posts()) : ?>
            <?php $i = 1; ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $class = ($i % 2 == 0) ? 'even' : 'odd'; ?>
                <section class="main-services-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 <?php echo $class; ?>">
                    <div class="container">
                        <div class="row align-items-center">
                            <picture class="main-services-item-picture col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                                <?php $bg_banner_id = get_post_thumbnail_id(); ?>
                                <?php $bg_banner = wp_get_attachment_image_src($bg_banner_id, 'logo', false); ?>
                                <img itemprop="image" content="<?php echo $bg_banner[0]; ?>" src="<?php echo $bg_banner[0]; ?>" title="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" alt="<?php echo get_post_meta($bg_banner_id, '_wp_attachment_image_alt', true); ?>" class="img-fluid" width="<?php echo $bg_banner[1]; ?>" height="<?php echo $bg_banner[2]; ?>" />
                                <h3><?php the_title(); ?></h3>
                            </picture>
                            <div class="main-services-item-content col-xl-9 col-lg-9 col-md-8 col-sm-12 col-12">
                                <?php $arr_group = get_post_meta(get_the_ID(), 'bhm_services_description_group', true); ?>
                                <?php if (!empty($arr_group)) { ?>
                                    <?php foreach ($arr_group as $item) { ?>
                                        <div class="main-services-item-wrapper">
                                            <?php echo apply_filters('the_content', $item['desc']); ?>
                                            <?php if ($item['btn_text'] != '') { ?>
                                                <a href="<?php echo $item['btn_link']; ?>" class="btn btn-md btn-services" title="<?php echo $item['btn_text']; ?>"><?php echo $item['btn_text']; ?></a>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php $i++;
            endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</main>
<?php get_footer(); ?>