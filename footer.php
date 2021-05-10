<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row align-items-start">
                    <?php if ( is_active_sidebar( 'sidebar_footer' ) ) : ?>
                    <div class="footer-item col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 align-self-center">
                        <ul id="sidebar-footer1" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar_footer-2' ) ) : ?>
                    <div class="footer-item col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer2" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer-2' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar_footer-3' ) ) : ?>
                    <div class="footer-item col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer3" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer-3' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'sidebar_footer-4' ) ) : ?>
                    <div class="footer-item col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <ul id="sidebar-footer4" class="footer-sidebar">
                            <?php dynamic_sidebar( 'sidebar_footer-4' ); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <div class="w-100"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<!-- Modal -->
<div class="modal modal-login fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><?php _e('Ingresar al Sistema', 'balearic'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[wpmem_form login redirect_to="'. home_url('/mi-cuenta') .'"]'); ?>
                <div class="extra-links">
                    <?php _e('¿No tienes una cuenta? Crea una cuenta personal', 'balearic'); ?> <a href="<?php echo home_url('/registro'); ?>"><?php _e('aquí', 'balearic'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>