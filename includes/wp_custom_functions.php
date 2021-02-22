<?php
/* IMAGES RESPONSIVE ON ATTACHMENT IMAGES */
function image_tag_class($class)
{
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class', 'image_tag_class');

/* ADD CONTENT WIDTH FUNCTION */

function balearic_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('balearic_content_width', 1170);
}
add_action('after_setup_theme', 'balearic_content_width', 0);

/* ADD CONTENT WIDTH FUNCTION */

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item)
{
    $classes[] = 'nav-item';
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

// let's add our custom class to the actual link tag

function atg_menu_classes($classes, $item, $args)
{
    if ($args->theme_location == 'topnav') {
        $classes[] = 'nav-link';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_menuclass($ulclass)
{
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'add_menuclass');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function balearic_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'balearic_pingback_header');

/** SOCIAL WIDGET **/
class Custom_Social_Widget extends WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'custom_social_widget', // Base ID
            'Widget Redes Sociales', // Name
            array('description' => __('Widget Personalizado para las Redes Sociales', 'balearic'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
?>
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
    <?php
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('Nuevo Título', 'balearic');
        }
    ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class Custom_Social_Widget
