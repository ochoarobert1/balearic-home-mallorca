<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//facebook.com" />
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#66C5E0" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#66C5E0" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <div id="fb-root"></div>
    <header class="container-fluid p-0" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="row no-gutters">
            <div class="top-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="top-header-left col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <a href="">ESP</a> <a href="">ING</a>
                        </div>
                        <div class="top-header-right col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="social-header">
                                <?php $social_settings = get_option('bhm_social_settings'); ?>
                                <?php if ($social_settings['facebook'] != '') { ?>
                                    <a href="<?php echo $social_settings['facebook']; ?>" title="<?php _e('Visita nuestro perfil en Facebook', 'balearic'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                <?php } ?>
                                <?php if ($social_settings['instagram'] != '') { ?>
                                    <a href="<?php echo $social_settings['instagram']; ?>" title="<?php _e('Visita nuestro perfil en Instagram', 'balearic'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                <?php } ?>
                                <?php if ($social_settings['twitter'] != '') { ?>
                                    <a href="<?php echo $social_settings['twitter']; ?>" title="<?php _e('Visita nuestro perfil en Twitter', 'balearic'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                <?php } ?>
                                <?php if ($social_settings['linkedin'] != '') { ?>
                                    <a href="<?php echo $social_settings['linkedin']; ?>" title="<?php _e('Visita nuestro perfil en LinkedIn', 'balearic'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                <?php } ?>
                                <?php if ($social_settings['youtube'] != '') { ?>
                                    <a href="<?php echo $social_settings['youtube']; ?>" title="<?php _e('Visita nuestro perfil en Instagram', 'balearic'); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a>
                                <?php } ?>
                            </div>
                            <a href=""><?php _e('Login/Registro', 'balearic'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-logo col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="logo-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo('name'); ?>">
                                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                                <?php $image = wp_get_attachment_image_src($custom_logo_id, 'logo'); ?>
                                <?php if (!empty($image)) { ?>
                                    <img src="<?php echo $image[0]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                                <?php } else { ?>
                                    Navbar
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="the-navbar col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-md navbar-light" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'header_menu',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'bs-example-navbar-collapse-1',
                        'menu_class'      => 'navbar-nav mr-auto ml-auto',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </nav>
            </div>
        </div>
    </header>