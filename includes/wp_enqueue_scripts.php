<?php
function balearic_load_js()
{
    $version_remove = null;
    if (!is_admin()) {
        if ($_SERVER['REMOTE_ADDR'] == '::1') {

            /*- MODERNIZR ON LOCAL  -*/
            wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array('jquery'), '2.8.3', true);
            wp_enqueue_script('modernizr');

            /*- POPPER ON LOCAL  -*/
            wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '4.4.1', true);
            wp_enqueue_script('bootstrap-bundle');

            /*- BOOTSTRAP ON LOCAL  -*/
            wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
            wp_enqueue_script('bootstrap');

            /*- JQUERY STICKY ON LOCAL  -*/
            wp_register_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'), '1.0.4', true);
            wp_enqueue_script('sticky');

            /*- JQUERY NICESCROLL ON LOCAL  -*/
            //wp_register_script('nicescroll', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array('jquery'), '3.7.6', true);
            //wp_enqueue_script('nicescroll');

            /*- LETTERING  -*/
            //wp_register_script('lettering', get_template_directory_uri() . '/js/jquery.lettering.js', array('jquery'), '0.7.0', true);
            //wp_enqueue_script('lettering');

            /*- SMOOTH SCROLL -*/
            //wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.min.js', array('jquery'), '16.0.3', true);
            //wp_enqueue_script('smooth-scroll');

            /*- SMOOTH SCROLL | POLYFILLS -*/
            //wp_register_script('smooth-scroll-polyfills', get_template_directory_uri() . '/js/smooth-scroll.polyfills.min.js', array('jquery', 'smooth-scroll'), '16.0.3', true);
            //wp_enqueue_script('smooth-scroll-polyfills');

            /*- IMAGESLOADED ON LOCAL  -*/
            //wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.js', array('jquery'), '4.1.4', true);
            //wp_enqueue_script('imagesloaded');

            /*- ISOTOPE ON LOCAL  -*/
            //wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
            //wp_enqueue_script('isotope');

            /*- FLICKITY ON LOCAL  -*/
            //wp_register_script('flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array('jquery'), '2.2.0', true);
            //wp_enqueue_script('flickity');

            /*- MASONRY ON LOCAL  -*/
            //wp_register_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array('jquery'), '4.2.2', true);
            //wp_enqueue_script('masonry');

            /*- OWL ON LOCAL -*/
            //wp_register_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
            //wp_enqueue_script('owl-js');

            /*- WOW ON LOCAL -*/
            //wp_register_script('wow-js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.1.3', true);
            //wp_enqueue_script('wow-js');

            /*- AOS ON LOCAL -*/
            wp_register_script('aos-js', get_template_directory_uri() . '/js/aos.js', array('jquery'), '3.0.0', true);
            wp_enqueue_script('aos-js');
        } else {

            /*- MODERNIZR -*/
            wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array('jquery'), '2.8.3', true);
            wp_enqueue_script('modernizr');

            /*- POPPER -*/
            wp_register_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '4.4.1', true);
            wp_enqueue_script('bootstrap-bundle');

            /*- BOOTSTRAP -*/
            wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
            wp_enqueue_script('bootstrap');

            /*- JQUERY STICKY -*/
            wp_register_script('sticky', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.sticky/1.0.4/jquery.sticky.min.js', array('jquery'), '1.0.4', true);
            wp_enqueue_script('sticky');

            /*- JQUERY NICESCROLL -*/
            //wp_register_script('nicescroll', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js', array('jquery'), '3.7.6', true);
            //wp_enqueue_script('nicescroll');

            /*- LETTERING  -*/
            //wp_register_script('lettering', 'https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js', array('jquery'), '0.7.0', true);
            //wp_enqueue_script('lettering');

            /*- SMOOTH SCROLL -*/
            //wp_register_script('smooth-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.0.3/smooth-scroll.min.js', array('jquery'), '16.0.3', true);
            //wp_enqueue_script('smooth-scroll');

            /*- SMOOTH SCROLL | POLYFILLS -*/
            //wp_register_script('smooth-scroll-polyfills', 'https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.0.3/smooth-scroll.polyfills.min.js', array('jquery', 'smooth-scroll'), '16.0.3', true);
            //wp_enqueue_script('smooth-scroll-polyfills');

            /*- IMAGESLOADED -*/
            //wp_register_script('imagesloaded', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array('jquery'), '4.1.4', true);
            //wp_enqueue_script('imagesloaded');

            /*- ISOTOPE -*/
            //wp_register_script('isotope', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
            //wp_enqueue_script('isotope');

            /*- FLICKITY -*/
            //wp_register_script('flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), '2.2.0', true);
            //wp_enqueue_script('flickity');

            /*- MASONRY -*/
            //wp_register_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), '4.2.2', true);
            //wp_enqueue_script('masonry');

            /*- OWL CAROUSEL -*/
            //wp_register_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true);
            //wp_enqueue_script('owl-js');

            /*- WOW -*/
            //wp_register_script('wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array('jquery'), '1.1.2', true);
            //wp_enqueue_script('wow-js');

            /*- AOS -*/
            wp_register_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array('jquery'), '3.0.0', true);
            wp_enqueue_script('aos-js');
        }

        /*- SWIPER JS -*/
        wp_register_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', [], '6.1.2', true);
        wp_enqueue_script('swiper-js');

        wp_register_script('bootstrap-datepicker-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js', array('jquery'), '1.9.0', true);
        wp_enqueue_script('bootstrap-datepicker-js');

        /*- MAIN FUNCTIONS -*/
        wp_register_script('main-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), $version_remove, true);
        //wp_register_script('main-functions', get_template_directory_uri() . '/js/functions.min.js', array('jquery'), $version_remove, true);
        wp_enqueue_script('main-functions');

        if (function_exists('pll_current_language')) {
            $lang = pll_current_language('slug');
        } else {
            $lang = 'es';
        }

        if ($lang == 'es') {
            wp_register_script('bootstrap-datepicker-lang-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js', array('jquery', 'bootstrap-datepicker-js' ), '1.9.0', true);
            wp_enqueue_script('bootstrap-datepicker-lang-js');
            $redirect_route = network_home_url( '/mi-cuenta/' );
            $redirect_thanks_reservation = network_home_url( '/gracias/' );
        } else {
            $redirect_route = network_home_url( '/en/my-account/' );
            $redirect_thanks_reservation = network_home_url( '/en/thanks/' );
        }

        wp_localize_script('main-functions', 'custom_admin_url', array(
            'ajax_url'          => admin_url('admin-ajax.php'),
            'redirect_home'    => home_url('/'),
            'redirect_route'    => $redirect_route,
            'redirect_thanks_reservation'    => $redirect_thanks_reservation,
            'error_nombre'      => __('Error: El nombre no puede estar vacio.', 'balearic'),
            'invalid_nombre'    => __('Error: El nombre no es válido.', 'balearic'),
            'error_apellido'      => __('Error: El apellido no puede estar vacio.', 'balearic'),
            'invalid_apellido'    => __('Error: El apellido no es válido.', 'balearic'),
            'error_password'      => __('Error: La contraseña no puede estar vacia.', 'balearic'),
            'invalid_password'    => __('Error: La contraseña no es válido.', 'balearic'),
            'error_phone'       => __('Error: El teléfono no puede estar vacio.', 'balearic'),
            'invalid_phone'     => __('Error: El teléfono no es válido.', 'balearic'),
            'error_email'       => __('Error: El correo no puede estar vacio.', 'balearic'),
            'invalid_email'     => __('Error: El correo no es válido.', 'balearic'),
            'error_message'     => __('Error: El Mensaje no puede estar vacio.', 'balearic'),
        ));

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', 'balearic_load_js');