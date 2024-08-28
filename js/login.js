document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('loginForm');
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');

    form.addEventListener('submit', function (event) {
        let valid = true;
        const errorsDiv = document.getElementById('formErrors');
        errorsDiv.innerHTML = ''; 

        if (usernameInput.value.trim() === '') {
            valid = false;
            errorsDiv.innerHTML += '<div class="alert alert-danger">Username is required.</div>';
        }

        if (passwordInput.value.trim() === '') {
            valid = false;
            errorsDiv.innerHTML += '<div class="alert alert-danger">Password is required.</div>';
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
