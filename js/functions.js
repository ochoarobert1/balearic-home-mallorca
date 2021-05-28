let menuBtn = document.getElementById('menuBtn');
let menuMobile = document.getElementById('menuMobile');
let validForm = true;
let mainForm = document.getElementById('mainForm');
let formSubmit = document.getElementById('formSubmit');
let filterForm = document.getElementById('filterForm');
let filterSubmit = document.getElementById('filterBtn');
let filterBtnMobile = document.getElementById('filterBtnMobile');


function documentCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');

    var loginForm = document.getElementById('loginForm');
    var loginFormBtn = document.getElementById('loginBtn');

    var registerForm = document.getElementById('registerForm');
    var registerFormBtn = document.getElementById('registerBtn');

    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var filterValues = document.getElementsByClassName('filter-form-control');
            var info = 'action=search_filter&busqueda_sencilla=' + filterValues[0].value + '&bhm_local_type=' + filterValues[1].value + '&bhm_local_price=' + filterValues[2].value + '&bhm_local_size=' + filterValues[3].value + '&bhm_local_room=' + filterValues[4].value + '&bhm_local_bath=' + filterValues[5].value + '&bhm_local_equip=' + filterValues[6].value;
            var loaderContainer = document.getElementById('loaderFilter');
            loaderContainer.classList.toggle("d-none");
            var ajaxResponse = document.getElementById('filterResults');
            ajaxResponse.innerHTML = '';
            var filterContainer = document.getElementById('filterContainer');
            filterContainer.classList.add('mobile-filter-hidden');
            /* SEND AJAX */
            var newRequest = new XMLHttpRequest();
            newRequest.open('POST', custom_admin_url.ajax_url, true);
            newRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            newRequest.onload = function() {
                loaderContainer.classList.toggle("d-none");
                var respuesta = JSON.parse(newRequest.response);
                var ajaxResponse = document.getElementById('filterResults');
                ajaxResponse.innerHTML = respuesta;
            };
            newRequest.send(info);
        });

        filterBtnMobile.addEventListener('click', function(e) {
            e.preventDefault();
            var filterContainer = document.getElementById('filterContainer');
            filterContainer.classList.toggle('mobile-filter-hidden');
        });
    }


    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 80,
        slidesPerView: 4,
        loop: true,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: {
                loopedSlides: 2, //looped slides should be the same
                spaceBetween: 5,
                slidesPerView: 2,
            },
            768: {
                loopedSlides: 2, //looped slides should be the same
                spaceBetween: 10,
                slidesPerView: 2,
            },
            1024: {
                loopedSlides: 3, //looped slides should be the same
                spaceBetween: 40,
                slidesPerView: 3,
            },
            1171: {
                loopedSlides: 5, //looped slides should be the same
                spaceBetween: 40,
                slidesPerView: 5,
            },
        }
    });

    var galleryTop = new Swiper('.gallery-top', {
        spaceBetween: 0,
        loop: true,
        loopedSlides: 5, //looped slides should be the same
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: galleryThumbs,
        },
        breakpoints: {
            0: {
                loopedSlides: 2, //looped slides should be the same
            },
            768: {
                loopedSlides: 2, //looped slides should be the same
            },
            1024: {
                loopedSlides: 3, //looped slides should be the same
            },
            1171: {
                loopedSlides: 5, //looped slides should be the same
            },
        }
    });

    menuBtn.addEventListener('click', function(e) {
        e.preventDefault();
        menuMobile.classList.toggle('menu-container-hidden');
    });

    if (mainForm) {
        formSubmit.addEventListener('click', function(e) {
            e.preventDefault();
            validForm = true;
            var elements = document.getElementById('formName');
            var errorText = document.getElementById('errorName');
            if (elements.value == '') {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.error_nombre;
                validForm = false;
            } else {
                if (elements.value == '') {
                    errorText.classList.remove('d-none');
                    errorText.innerHTML = custom_admin_url.invalid_nombre;
                    validForm = false;
                } else {
                    errorText.classList.add('d-none');
                    errorText.innerHTML = '';
                    validForm = true;
                }
            }

            var elements = document.getElementById('formPhone');
            var errorText = document.getElementById('errorPhone');
            if (elements.value == '') {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.error_phone;
                validForm = false;
            } else {
                if (validatePhone(elements.value) == false) {
                    errorText.classList.remove('d-none');
                    errorText.innerHTML = custom_admin_url.invalid_phone;
                    validForm = false;
                } else {
                    errorText.classList.add('d-none');
                    errorText.innerHTML = '';
                    validForm = true;
                }
            }

            var elements = document.getElementById('formEmail');
            var errorText = document.getElementById('errorEmail');
            if (elements.value == '') {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.error_email;
                validForm = false;
            } else {
                if (validateEmail(elements.value) == false) {
                    errorText.classList.remove('d-none');
                    errorText.innerHTML = custom_admin_url.invalid_email;
                    validForm = false;
                } else {
                    errorText.classList.add('d-none');
                    errorText.innerHTML = '';
                    validForm = true;
                }
            }

            var elements = document.getElementById('formMessage');
            var errorText = document.getElementById('errorMessage');
            if (elements.value == '') {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.error_message;
                validForm = false;
            } else {
                errorText.classList.add('d-none');
                errorText.innerHTML = '';
                validForm = true;
            }

            if (validForm == true) {
                submitForm();
            }
        });
    }

    loginFormBtn.addEventListener('click', function(e) {
        e.preventDefault();
        validForm = true;
        var elements = document.getElementById('user_login');
        var errorText = document.getElementById('errorLoginName');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            validForm = false;
        } else {
            errorText.classList.add('d-none');
            validForm = true;
        }

        var elements = document.getElementById('user_pass');
        var errorText = document.getElementById('errorLoginPass');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            validForm = false;
        } else {
            errorText.classList.add('d-none');
            errorText.innerHTML = '';
            validForm = true;
        }

        if (validForm == true) {
            submitLogin();
        }
    });

    registerFormBtn.addEventListener('click', function(e) {
        e.preventDefault();
        validForm = true;
        var elements = document.getElementById('registerFname');
        var errorText = document.getElementById('errorFname');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            errorText.innerHTML = custom_admin_url.error_nombre;
            validForm = false;
        } else {
            if (elements.value.length < 3) {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.invalid_nombre;
                validForm = false;
            } else {
                errorText.classList.add('d-none');
                errorText.innerHTML = '';
                validForm = true;
            }
        }

        var elements = document.getElementById('registerLname');
        var errorText = document.getElementById('errorLname');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            errorText.innerHTML = custom_admin_url.error_apellido;
            validForm = false;
        } else {
            if (elements.value.length < 3) {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.invalid_apellido;
                validForm = false;
            } else {
                errorText.classList.add('d-none');
                errorText.innerHTML = '';
                validForm = true;
            }
        }

        var elements = document.getElementById('registerEmail');
        var errorText = document.getElementById('errorEmail');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            errorText.innerHTML = custom_admin_url.error_email;
            validForm = false;
        } else {
            if (validateEmail(elements.value) == false) {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.invalid_email;
                validForm = false;
            } else {
                errorText.classList.add('d-none');
                errorText.innerHTML = '';
                validForm = true;
            }
        }

        var elements = document.getElementById('registerPass');
        var errorText = document.getElementById('errorPass');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            errorText.innerHTML = custom_admin_url.error_password;
            validForm = false;
        } else {
            if (elements.value.length < 3) {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.invalid_password;
                validForm = false;
            } else {
                errorText.classList.add('d-none');
                errorText.innerHTML = '';
                validForm = true;
            }
        }

        var elements = document.getElementById('registerCpass');
        var errorText = document.getElementById('errorCpass');
        if (elements.value == '') {
            errorText.classList.remove('d-none');
            errorText.innerHTML = custom_admin_url.error_password;
            validForm = false;
        } else {
            if (elements.value.length < 3) {
                errorText.classList.remove('d-none');
                errorText.innerHTML = custom_admin_url.invalid_password;
                validForm = false;
            } else {
                errorText.classList.add('d-none');
                errorText.innerHTML = '';
                validForm = true;
            }
        }

        if (validForm == true) {
            registerFormAction();
        }
    });



}
document.addEventListener("DOMContentLoaded", documentCustomLoad, false);

function submitForm() {
    var emailForm = document.getElementsByClassName('custom-form-control');
    var info = 'action=send_message&form_name=' + emailForm[0].value + '&form_phone=' + emailForm[1].value + '&form_email=' + emailForm[2].value + '&form_message=' + emailForm[3].value;
    var loaderContainer = document.getElementsByClassName('loader-css');
    loaderContainer[0].classList.toggle("d-none");
    /* SEND AJAX */
    newRequest = new XMLHttpRequest();
    newRequest.open('POST', custom_admin_url.ajax_url, true);
    newRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    newRequest.onload = function() {
        loaderContainer[0].classList.toggle("d-none");
        var respuesta = JSON.parse(newRequest.response);
        var ajaxResponse = document.getElementById('formResponse');
        ajaxResponse.innerHTML = respuesta.data;
    };
    newRequest.send(info);
}


function registerFormAction() {
    var emailForm = document.getElementsByClassName('register-form-control');
    var info = 'action=register_action&fname=' + emailForm[0].value + '&lname=' + emailForm[1].value + '&email=' + emailForm[2].value + '&pass=' + emailForm[3].value + '&cpass=' + emailForm[4].value;
    var loaderContainer = document.getElementById('registerLoader');
    loaderContainer.classList.toggle("d-none");
    /* SEND AJAX */
    newRequest = new XMLHttpRequest();
    newRequest.open('POST', custom_admin_url.ajax_url, true);
    newRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    newRequest.onload = function() {
        loaderContainer.classList.toggle("d-none");
        var respuesta = JSON.parse(newRequest.response);
        var ajaxResponse = document.getElementById('registerResponse');
        ajaxResponse.innerHTML = respuesta.data;
        if (respuesta.success == true) {
            setTimeout(function() {
                window.location.replace(custom_admin_url.redirect_home);
            }, 2000);
        }
    };
    newRequest.send(info);
}


function submitLogin() {
    var loginForm = document.getElementsByClassName('login-form-control');
    var info = 'action=login_action&user_name=' + loginForm[0].value + '&user_pass=' + loginForm[1].value;
    var loaderContainer = document.getElementById('loginLoader');
    loaderContainer.classList.toggle("d-none");
    /* SEND AJAX */
    newRequest = new XMLHttpRequest();
    newRequest.open('POST', custom_admin_url.ajax_url, true);
    newRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    newRequest.onload = function() {
        loaderContainer.classList.toggle("d-none");
        var respuesta = JSON.parse(newRequest.response);
        var ajaxResponse = document.getElementById('loginResponse');
        ajaxResponse.innerHTML = respuesta.data;
        if (respuesta.success == true) {
            setTimeout(function() {
                window.location.replace(custom_admin_url.redirect_route);
            }, 1000);
        }
    };
    newRequest.send(info);
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validatePhone(str) {
    var patt = new RegExp(/^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm);
    return patt.test(str);
}

AOS.init();