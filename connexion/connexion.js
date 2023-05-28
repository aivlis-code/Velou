document.addEventListener('DOMContentLoaded', function() {
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var submit = document.getElementById('submit');
    var emailError = document.getElementById('emailError');
    var passwordError = document.getElementById('passwordError');

    function validateForm() {
        var isValid = true;

        if (email.value === '' || !email.validity.valid) {
            emailError.textContent = 'Veuillez entrer une adresse e-mail valide.';
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        if (password.value === '') {
            passwordError.textContent = 'Veuillez entrer un mot de passe.';
            isValid = false;
        } else {
            passwordError.textContent = '';
        }

        submit.disabled = !isValid;
    }

    email.addEventListener('input', validateForm);
    password.addEventListener('input', validateForm);
});
