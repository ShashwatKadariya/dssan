// live image preview
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var preview = document.getElementById('preview');
        preview.classList.toggle('hidden')
        preview.classList.toggle('block')
        preview.src = reader.result;
        var oldImage = document.getElementById('oldImage');
        if (oldImage) {
            oldImage.className = 'hidden';
        }
    }
    reader.readAsDataURL(event.target.files[0]);
}

// loading svg icon on click
function loading() {
    document.getElementById('create').disabled = true;
    const loading = document.getElementById('loading_icon')
    loading.classList.toggle('hidden')
    loading.classList.toggle('inline')
    document.getElementById('submitForm').submit();
}

// delete-box warning popup
var global_id = 0;
function deleteBox(id) {
    global_id = id;
    document.getElementById('deleteBox').className = 'block';
}

// confirm delete action
function confirmDelete() {
    document.getElementById(`submitForm_${global_id}`).submit();
}

// password view toggle
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#passwordField');
togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});