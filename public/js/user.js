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

