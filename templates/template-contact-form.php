<form id="mainForm" class="main-form-container">
    <div class="container">
        <div class="row">
            <div class="main-form-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="text" id="formName" name="formName" class="form-control custom-form-control" placeholder="<?php _e('Nombre y Apellido', 'balearic'); ?>">
                <small id="errorName" class="feedback danger d-none"></small>
            </div>
            <div class="main-form-item col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="text" id="formPhone" name="formPhone" class="form-control custom-form-control" placeholder="<?php _e('Teléfono', 'balearic'); ?>">
                <small id="errorPhone" class="feedback danger d-none"></small>
            </div>
            <div class="main-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <input type="text" id="formEmail" name="formEmail" class="form-control custom-form-control" placeholder="<?php _e('Correo Electrónico', 'balearic'); ?>">
                <small id="errorEmail" class="feedback danger d-none"></small>
            </div>
            <div class="main-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <textarea name="formMessage" id="formMessage" class="form-control custom-form-control custom-textarea-control" placeholder="<?php _e('Mensaje', 'balearic'); ?>"></textarea>
                <small id="errorMessage" class="feedback danger d-none"></small>
            </div>
            <div class="main-form-item main-form-submit col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <button id="formSubmit" class="btn btn-md btn-submit"><?php _e('Enviar', 'balearic'); ?></button>
                <div class="loader-css d-none"></div>
                <div id="formResponse" class="form-response"></div>
            </div>
        </div>
    </div>
</form>