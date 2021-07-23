<form id="bookingForm" class="booking-form-container">
    <div class="container">
        <div class="row">
            <div class="booking-calendar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="booking-calendar-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Haga su reservación aquí', 'balearic')?></h3>
                            <div class="booking-calendar-wrapper">
                                <div class="container p-0">
                                    <div class="row no-gutters">
                                        <div class="booking-date booking-checkin col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label for=""><?php _e('Fechas', 'balearic'); ?></label>
                                            <div class="input-daterange input-group" id="datepicker">
                                                <input type="text" class="input-sm form-control" name="start" />
                                                <span class="input-group-addon">/</span>
                                                <input type="text" class="input-sm form-control" name="end" />
                                            </div>
                                        </div>
                                        <div class="booking-qty booking-quantity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label for=""><?php _e('Cantidad de Personas', 'balearic'); ?></label>
                                            <input type="text" class="form-control" placeholder="No hay personas seleccionadas" />
                                        </div>
                                        <div class="booking-selected-button col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="btn btn-md btn-booking"><?php _e('Completar Booking', 'balearic'); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking-contact-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-none">
                <div class="container">
                    <div class="row">
                        <div class="main-form-item  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <input type="text" id="formName" name="formName" class="form-control custom-form-control" placeholder="<?php _e('Nombre y Apellido', 'balearic'); ?>">
                            <small id="errorName" class="feedback danger d-none"></small>
                        </div>
                        <div class="main-form-item  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
            </div>
        </div>
    </div>
</form>