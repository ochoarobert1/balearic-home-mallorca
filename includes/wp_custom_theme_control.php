<?php
/* --------------------------------------------------------------
WP CUSTOMIZE SECTION - CUSTOM SETTINGS
-------------------------------------------------------------- */

add_action( 'customize_register', 'balearic_customize_register' );

function balearic_customize_register( $wp_customize ) {

    $wp_customize->add_section('bhm_cover_settings', array(
        'title'    => __('Covers', 'balearic'),
        'description' => __('Opciones de Covers', 'balearic'),
        'priority' => 176,
    ));
    
    $wp_customize->add_setting('bhm_cover_settings[services_cover]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'services_cover', array(
        'type'     => 'dropdown-pages',
        'section' => 'bhm_cover_settings',
        'settings' => 'bhm_cover_settings[services_cover]',
        'label' => __( 'Página para obtener el cover de Servicios', 'balearic' ),
    ) );

    $wp_customize->add_setting('bhm_cover_settings[local_cover]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'local_cover', array(
        'type'     => 'dropdown-pages',
        'section' => 'bhm_cover_settings',
        'settings' => 'bhm_cover_settings[local_cover]',
        'label' => __( 'Página para obtener el cover de Localizaciones', 'balearic' ),
    ) );

    /* SOCIAL */
    $wp_customize->add_section('bhm_social_settings', array(
        'title'    => __('Redes Sociales', 'balearic'),
        'description' => __('Agregue aqui las redes sociales de la página, serán usadas globalmente', 'balearic'),
        'priority' => 175,
    ));

    $wp_customize->add_setting('bhm_social_settings[facebook]', array(
        'default'           => '',
        'sanitize_callback' => 'balearic_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'facebook', array(
        'type' => 'url',
        'section' => 'bhm_social_settings',
        'settings' => 'bhm_social_settings[facebook]',
        'label' => __( 'Facebook', 'balearic' ),
    ) );

    $wp_customize->add_setting('bhm_social_settings[twitter]', array(
        'default'           => '',
        'sanitize_callback' => 'balearic_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'twitter', array(
        'type' => 'url',
        'section' => 'bhm_social_settings',
        'settings' => 'bhm_social_settings[twitter]',
        'label' => __( 'Twitter', 'balearic' ),
    ) );

    $wp_customize->add_setting('bhm_social_settings[instagram]', array(
        'default'           => '',
        'sanitize_callback' => 'balearic_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'instagram', array(
        'type' => 'url',
        'section' => 'bhm_social_settings',
        'settings' => 'bhm_social_settings[instagram]',
        'label' => __( 'Instagram', 'balearic' ),
    ) );

    $wp_customize->add_setting('bhm_social_settings[linkedin]', array(
        'default'           => '',
        'sanitize_callback' => 'balearic_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'linkedin', array(
        'type' => 'url',
        'section' => 'bhm_social_settings',
        'settings' => 'bhm_social_settings[linkedin]',
        'label' => __( 'LinkedIn', 'balearic' ),
    ) );

    $wp_customize->add_setting('bhm_social_settings[youtube]', array(
        'default'           => '',
        'sanitize_callback' => 'balearic_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'youtube', array(
        'type' => 'url',
        'section' => 'bhm_social_settings',
        'settings' => 'bhm_social_settings[youtube]',
        'label' => __( 'YouTube', 'balearic' ),
    ) );

    $wp_customize->add_setting('bhm_social_settings[yelp]', array(
        'default'           => '',
        'sanitize_callback' => 'balearic_sanitize_url',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'yelp', array(
        'type' => 'url',
        'section' => 'bhm_social_settings',
        'settings' => 'bhm_social_settings[yelp]',
        'label' => __( 'Yelp', 'balearic' ),
    ) );


    $wp_customize->add_section('bhm_cookie_settings', array(
        'title'    => __('Cookies', 'balearic'),
        'description' => __('Opciones de Cookies', 'balearic'),
        'priority' => 176,
    ));

    $wp_customize->add_setting('bhm_cookie_settings[cookie_text]', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
        'capability'        => 'edit_theme_options',
        'type'           => 'option'

    ));

    $wp_customize->add_control( 'cookie_text', array(
        'type' => 'textarea',
        'label'    => __('Cookie consent', 'balearic'),
        'description' => __( 'Texto del Cookie consent.' ),
        'section'  => 'bhm_cookie_settings',
        'settings' => 'bhm_cookie_settings[cookie_text]'
    ));

    $wp_customize->add_setting('bhm_cookie_settings[cookie_link]', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( 'cookie_link', array(
        'type'     => 'dropdown-pages',
        'section' => 'bhm_cookie_settings',
        'settings' => 'bhm_cookie_settings[cookie_link]',
        'label' => __( 'Link de Cookies', 'balearic' ),
    ) );

}

function balearic_sanitize_url( $url ) {
    return esc_url_raw( $url );
}

/* --------------------------------------------------------------
CUSTOM CONTROL PANEL
-------------------------------------------------------------- */
/*
function register_balearic_settings() {
    register_setting( 'balearic-settings-group', 'monday_start' );
    register_setting( 'balearic-settings-group', 'monday_end' );
    register_setting( 'balearic-settings-group', 'monday_all' );
}

add_action('admin_menu', 'balearic_custom_panel_control');

function balearic_custom_panel_control() {
    add_menu_page(
        __( 'Panel de Control', 'balearic' ),
        __( 'Panel de Control','balearic' ),
        'manage_options',
        'balearic-control-panel',
        'balearic_control_panel_callback',
        'dashicons-admin-generic',
        120
    );
    add_action( 'admin_init', 'register_balearic_settings' );
}

function balearic_control_panel_callback() {
    ob_start();
?>
<div class="balearic-admin-header-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="balearic" />
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
</div>
<form method="post" action="options.php" class="balearic-admin-content-container">
    <?php settings_fields( 'balearic-settings-group' ); ?>
    <?php do_settings_sections( 'balearic-settings-group' ); ?>
    <div class="balearic-admin-content-item">
        <table class="form-table">
            <tr valign="center">
                <th scope="row"><?php _e('Monday', 'balearic'); ?></th>
                <td>
                    <label for="monday_start">Starting Hour: <input type="time" name="monday_start" value="<?php echo esc_attr( get_option('monday_start') ); ?>"></label>
                    <label for="monday_end">Ending Hour: <input type="time" name="monday_end" value="<?php echo esc_attr( get_option('monday_end') ); ?>"></label>
                    <label for="monday_all">All Day: <input type="checkbox" name="monday_all" value="1" <?php checked( get_option('monday_all'), 1 ); ?>></label>
                </td>
            </tr>
        </table>
    </div>
    <div class="balearic-admin-content-submit">
        <?php submit_button(); ?>
    </div>
</form>
<?php 
    $content = ob_get_clean();
    echo $content;
}
*/