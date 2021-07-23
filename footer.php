<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div id="footer" class="the-footer col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><i class="fa fa-sign-in" aria-hidden="true"></i> <?php _e('Iniciar Sesión', 'balearic'); ?></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php _e('Registrarme', 'balearic'); ?></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form id="loginForm" class="custom-login-container col-12">
                            <div class="row">
                                <div class="custom-login-item col-12">
                                    <label for="user_login"><?php _e('Correo electrónico o nombre de usuario', 'balearic'); ?></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" id="user_login" name="log" class="form-control login-form-control" placeholder="<?php _e('Ingresa tu correo o nombre de usuario', 'balearic'); ?>">
                                    </div>
                                    <small id="errorLoginName" class="error d-none"><?php _e('el correo o nombre de usuario no puede estar vacio', 'balearic'); ?></small>
                                </div>
                                <div class="custom-login-item col-12">
                                    <label for="user_pass"><?php _e('Contraseña', 'balearic'); ?></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span>
                                        </div>
                                        <input type="password" id="user_pass" name="pwd" class="form-control login-form-control" placeholder="<?php _e('Ingresa tu contraseña', 'balearic'); ?>" />
                                    </div>
                                    <small id="errorLoginPass" class="error d-none"><?php _e('su contraseña no puede estar vacia', 'balearic'); ?></small>
                                </div>
                                <div class="custom-login-item col-12">
                                    <button id="loginBtn" class="btn btn-md btn-login"><?php _e('Iniciar Sesión', 'balearic'); ?></button>
                                    <div id="loginLoader" class="loader d-none">
                                        <div class="lds-ripple">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div id="loginResponse" class="login-response"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form id="registerForm" class="custom-register-container col-12">
                            <div class="row">
                                <div class="custom-register-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="registerFname"><?php _e('Nombre', 'balearic'); ?></label>
                                        <input type="text" class="form-control register-form-control" name="user_fname" id="registerFname" placeholder="<?php _e('Ingrese su nombre', 'balearic'); ?>">
                                        <small id="errorFname" class="form-text text-muted d-none"></small>
                                    </div>
                                </div>
                                <div class="custom-register-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="registerLname"><?php _e('Apellido', 'balearic'); ?></label>
                                        <input type="text" class="form-control register-form-control" name="user_fname" id="registerLname" placeholder="<?php _e('Ingresa tu apellido', 'balearic'); ?>">
                                        <small id="errorLname" class="form-text text-muted d-none"></small>
                                    </div>
                                </div>
                                <div class="custom-register-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="registerEmail"><?php _e('Correo electrónico', 'balearic'); ?></label>
                                        <input type="text" class="form-control register-form-control" name="user_email" id="registerEmail" placeholder="<?php _e('Ingresa tu correo electrónico', 'balearic'); ?>">
                                        <small id="errorEmail" class="form-text text-muted d-none"></small>
                                    </div>
                                </div>
                                <div class="custom-register-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="registerPass"><?php _e('Contraseña', 'balearic'); ?></label>
                                        <input type="password" class="form-control register-form-control" name="user_pass" id="registerPass" placeholder="<?php _e('Ingrese su contraseña', 'balearic'); ?>">
                                        <small id="errorPass" class="form-text text-muted d-none"></small>
                                    </div>
                                </div>
                                <div class="custom-register-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="registerCpass"><?php _e('Confirmar contraseña', 'balearic'); ?></label>
                                        <input type="password" class="form-control register-form-control" name="user_confirm" id="registerCpass" placeholder="<?php _e('Confirme su contraseña', 'balearic'); ?>">
                                        <small id="errorCpass" class="form-text text-muted d-none"></small>
                                    </div>
                                </div>
                                <div class="custom-register-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button id="registerBtn" class="btn btn-md btn-login"><?php _e('Registrarse', 'balearic'); ?></button>
                                    <div id="registerLoader" class="loader d-none">
                                        <div class="lds-ripple">
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div id="registerResponse" class="register-response"></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>