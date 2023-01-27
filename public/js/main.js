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

function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var preview = document.getElementById('preview');
        preview.classList.toggle('hidden')
        preview.classList.toggle('block')
        preview.src = reader.result;
        document.getElementById('oldImage').className = 'hidden';
    }
    reader.readAsDataURL(event.target.files[0]);
}

function loading() {
    document.getElementById('create').disabled = true;
    const loading = document.getElementById('loading_icon')
    loading.classList.toggle('hidden')
    loading.classList.toggle('inline')
}

let global_id;
function deleteBox(id) {
    global_id = id;
    document.getElementById('deleteBox').className = 'block';
}

function confirmDelete() {
    document.getElementById(`submitForm_${global_id}`).submit();
}