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

// fact number increment animation
var observer = new IntersectionObserver(function (entries) {
    if (entries[0].isIntersecting === true) {
        // graduates
        new numberRush('numberOne', {
            speed: 15,
            steps: 20,
            maxNumber: 2000,
        })
        // team members
        new numberRush('numberTwo', {
            speed: 150,
            steps: 1,
            maxNumber: 9,
        })
        // batches
        new numberRush('numberThree', {
            speed: 150,
            steps: 1,
            maxNumber: 12,
        })
    }
}, { threshold: [1] });
observer.observe(document.getElementById('numberAnimation'));
