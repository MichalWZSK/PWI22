(() => {
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    const form = document.querySelector('#my_form');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const emailInput = form.querySelector('[data-validate=email]');
        const email = emailInput.value;

        const errorHolder = emailInput.parentElement.querySelector('.error-holder');
        errorHolder.innerHTML = '';

        if (!emailRegex.test(email)) {
            emailInput.classList.add('error');
            const errorMessage = document.createElement('p');
            errorMessage.innerText = 'Please enter a valid email address';
            errorHolder.appendChild(errorMessage);
        } else {
            emailInput.classList.remove('error');
        }

        const passInput = form.querySelector('[data-validate=password]');
        const password = passInput.value;

        const passErrorHolder = passInput.parentElement.querySelector('.error-holder');
        passErrorHolder.innerHTML = '';

        if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/.test(password)) {
            passInput.classList.add('error');
            const passErrorMessage = document.createElement('p');
            passErrorMessage.innerText = 'Please enter a valid password';
            passErrorHolder.appendChild(passErrorMessage);
        } else {
            passInput.classList.remove('error');
        }

        const pass2Input = form.querySelector('[data-validate=password-repeat]');
        const passwordConfirm = pass2Input.value;

        const pass2ErrorHolder = pass2Input.parentElement.querySelector('.error-holder');
        pass2ErrorHolder.innerHTML = '';

        if (passwordConfirm !== password) {
            pass2Input.classList.add('error');
            const pass2ErrorMessage = document.createElement('p');
            pass2ErrorMessage.innerText = 'Password confirmation does not match password';
            pass2ErrorHolder.appendChild(pass2ErrorMessage);
        } else {
            pass2Input.classList.remove('error');
        }

        const nipInput = form.querySelector('[data-validate=nip]');
        const nip = nipInput.value;

        const nipErrorHolder = nipInput.parentElement.querySelector('.error-holder');
        nipErrorHolder.innerHTML = '';

        if (!validateNip(nip)) {
            nipInput.classList.add('error');
            const nipErrorMessage = document.createElement('p');
            nipErrorMessage.innerText = 'Please enter a valid NIP';
            nipErrorHolder.appendChild(nipErrorMessage);
        } else {
            nipInput.classList.remove('error');
        }
    });

    function validateNip(nip) {
        const nipRegex = /^\d{10}$/;
        if (!nipRegex.test(nip)) {
            return false;
        }
        const weights = [6, 5, 7, 2, 3, 4, 5, 6, 7]

        const control = +nip[9]

        let sum = 0

        for (let i = 0; i < 9; i++) {
            sum += (nip[i] * weights[i])

        }
        return (control == (sum  % 11))
    }
})();