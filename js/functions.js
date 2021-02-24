let menuBtn = document.getElementById('menuBtn');
let menuMobile = document.getElementById('menuMobile');
let validForm = true;
let mainForm = document.getElementById('mainForm');
let formSubmit = document.getElementById('formSubmit');

function documentCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');

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

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function validatePhone(str) {
    var patt = new RegExp(/^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm);
    return patt.test(str);
}