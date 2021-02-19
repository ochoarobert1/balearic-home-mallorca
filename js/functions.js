let menuBtn = document.getElementById('menuBtn');
let menuMobile = document.getElementById('menuMobile');

function documentCustomLoad() {
    "use strict";
    console.log('Functions Correctly Loaded');

    menuBtn.addEventListener('click', function(e) {
        e.preventDefault();
        menuMobile.classList.toggle('menu-container-hidden');
    });


}
document.addEventListener("DOMContentLoaded", documentCustomLoad, false);