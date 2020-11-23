const eyes = document.querySelectorAll('.eyes');
// const eye_konfir = document.getElementById('eye-konfir');

eyes.forEach(eye => {
    var arg = false;
    eye.addEventListener('click', () => {
        if (!arg) {
            eye.classList.replace('fa-eye-slash', 'fa-eye')
            eye.previousElementSibling.setAttribute('type', 'text');
            eye.classList.replace('text-gray-700', 'text-blue-600')
            arg = true
        } else {
            eye.classList.replace('fa-eye', 'fa-eye-slash')
            eye.previousElementSibling.setAttribute('type', 'password');
            eye.classList.replace('text-blue-600', 'text-gray-700')
            arg = false
        }
    })
});


// eye_konfir.addEventListener('click', () => {
//     if (eye_konfir.classList.contains('fa-eye-slash')) {
//         eye_konfir.classList.replace('fa-eye-slash', 'fa-eye')
//         eye_konfir.previousElementSibling.setAttribute('type', 'text');
//     } else {
//         eye_konfir.classList.replace('fa-eye', 'fa-eye-slash')
//         eye_konfir.previousElementSibling.setAttribute('type', 'password');
//     }
// })