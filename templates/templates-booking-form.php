<form id="bookingForm" class="booking-form-container">
    <div class="container">
        <div class="row">
            <div id="bookingCalendar" class="booking-calendar-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="container">
                    <div class="row">
                        <div class="booking-calendar-content col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Haga su reservación aquí', 'balearic')?></h3>
                            <div class="booking-calendar-wrapper">
                                <div class="container p-0">
                                    <div class="row no-gutters">
                                        <div class="booking-date booking-checkin col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label for=""><?php _e('Check-In / Check-Out', 'balearic'); ?></label>
                                            <div class="input-daterange input-group" id="datepicker">
                                                <input id="checkIn" type="text" class="input-sm booking-form-control form-control" name="start" autocomplete="off" />
                                                <span class="input-group-addon">/</span>
                                                <input id="checkOut" type="text" class="input-sm booking-form-control form-control" name="end" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="booking-qty booking-quantity col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label for=""><?php _e('Cantidad de Personas', 'balearic'); ?></label>
                                            <div id="qtyDropdown" class="dropdown">
                                                <button class="btn btn-secondary btn-booking dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <span id="qtySelected"><?php _e('Seleccione cantidad de personas', 'balearic'); ?></span>
                                                </button>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                                                    <form class="p-2">
                                                        <div class="form-group">
                                                            <label for="cantidadAdultos"><?php _e('Adultos / Adolescentes', 'balearic'); ?></label>
                                                            <input type="number" class="form-control booking-form-control" min="0" name="cantidad-adults" id="cantidadAdultos" placeholder="<?php _e('Ingrese la cantidad de Adultos', 'balearic'); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cantidadAdultos"><?php _e('Niños menores de 12 años', 'balearic'); ?></label>
                                                            <input type="number" class="form-control booking-form-control" min="0" name="cantidad-kids" id="cantidadKids" placeholder="<?php _e('Ingrese la cantidad de Niños', 'balearic'); ?>">
                                                        </div>
                                                        <button id="qtySave" type="submit" class="btn btn-primary btn-save"><?php _e('Guardar Valores', 'balearic'); ?></button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="booking-selected-button col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button id="nextStep" class="btn btn-md btn-booking"><?php _e('Continuar', 'balearic'); ?></button>
                                        </div>
                                        <div id="errorBooking" class="booking-error col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-none">
                                            <span class="danger"><?php _e('Para poder continuar, debe rellenar las fechas y cantidades', 'balearic')?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bookingContact" class="booking-contact-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-none">
                <div class="container">
                    <div class="row">
                        <div class="booking-selected-button col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button id="prevStep" class="btn btn-md btn-back">.<i class="fa fa-chevron-circle-left" aria-hidden="true"></i> <?php _e('Volver', 'balearic'); ?></button>
                        </div>
                        <div class="main-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3><?php _e('Ingrese sus datos personales', 'balearic')?></h3>
                        </div>
                    </div>
                    <div class="row row-form">
                        <div class="main-form-booking-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="main-form-item  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="text" id="formName" name="formName" class="form-control booking-form-control custom-form-control" placeholder="<?php _e('Nombre y Apellido', 'balearic'); ?>">
                                <small id="errorName" class="feedback danger d-none"></small>
                            </div>
                            <div class="main-form-item  col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="text" id="formPhone" name="formPhone" class="form-control booking-form-control custom-form-control" placeholder="<?php _e('Teléfono', 'balearic'); ?>">
                                <small id="errorPhone" class="feedback danger d-none"></small>
                            </div>
                            <div class="main-form-item col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="text" id="formEmail" name="formEmail" class="form-control booking-form-control custom-form-control" placeholder="<?php _e('Correo Electrónico', 'balearic'); ?>">
                                <small id="errorEmail" class="feedback danger d-none"></small>
                            </div>
                            <div class="main-form-item main-form-textarea col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <textarea name="formMessage" id="formMessage" class="form-control booking-form-control custom-form-control custom-textarea-control" placeholder="<?php _e('Mensaje', 'balearic'); ?>"></textarea>
                                <small id="errorMessage" class="feedback danger d-none"></small>
                            </div>
                            <div class="main-form-item main-form-submit col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <input type="hidden" name="formLocation" id="formLocation" class="form-control booking-form-control" value="<?php echo get_the_ID(); ?>">
                                <button id="formSubmit" class="btn btn-md btn-submit"><?php _e('Completar Reservación', 'balearic'); ?></button>
                                <div id="registerLoader" class="loader-css d-none"></div>
                                <div id="formResponse" class="form-response"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>