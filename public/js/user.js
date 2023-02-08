// navbar view toggle
const initApp = () => {
    const hamburgerBtm = document.getElementById('hamburger-button')
    const mobileMenu = document.getElementById('mobile-menu')
    const toggleMenu = () => {
        mobileMenu.classList.toggle('hidden')
        mobileMenu.classList.toggle('flex')
    }
    hamburgerBtm.addEventListener('click', toggleMenu)
    mobileMenu.addEventListener('click', toggleMenu)
}
if ($(window).width() <= 600) {
    document.addEventListener('DOMContentLoaded', initApp)
}

// feedback form view toggle
function feedbackForm() {
    document.getElementById("feedbackForm").className = "block";
}

// feedback_slide
var slideIndex = 1;
showDivs(slideIndex);
function currentDiv(n) {
    showDivs(slideIndex = n);
}
function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    }
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" bg-ui-footer-text-darker", " bg-gray-300");
    }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className =
        "demo w-3 h-3 rounded-full bg-ui-footer-text-darker hover:bg-ui-footer-text-darker cursor-pointer";
}
