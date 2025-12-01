document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    // Regex Nom/Prénom strict
    const nameRegex = /^[A-Za-zÀ-ÖØ-öø-ÿ]+([ '-][A-Za-zÀ-ÖØ-öø-ÿ]+)*$/;

    // Champs
    const lastName = document.getElementById('lastName');
    const firstName = document.getElementById('firstName');
    const email = document.getElementById('email');
    const birth = document.getElementById('birth');
    const password = document.getElementById('password');
    const password2 = document.getElementById('password2');
    const genres = document.getElementsByName('genre');
    const genreContainer = document.getElementById('genreContainer');
    const genreError = document.getElementById('genreError');
    const check = document.getElementById('checkIndeterminate');
    const checkWrapper = document.getElementById('checkWrapper');
    const checkError = document.getElementById('checkError');

    // Helpers
    function showError(input, message) {
        const small = input.nextElementSibling;
        if (small) small.textContent = message;
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');
    }

    function showSuccess(input) {
        const small = input.nextElementSibling;
        if (small) small.textContent = '';
        input.classList.remove('is-invalid');
        input.classList.add('is-valid');
    }

    function isAdult(dateString) {
        const today = new Date();
        const birthDate = new Date(dateString);
        let age = today.getFullYear() - birthDate.getFullYear();
        const m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) age--;
        return age >= 18;
    }

    function validateRadio() {
        return Array.from(genres).some(r => r.checked);
    }

    // Submit
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        let valid = true;

        // Genre
        if (!validateRadio()) {
            genreError.textContent = 'Veuillez sélectionner votre genre.';
            genreContainer.classList.add('is-invalid');
            genreContainer.classList.remove('is-valid');
            valid = false;
        } else {
            genreError.textContent = '';
            genreContainer.classList.remove('is-invalid');
            genreContainer.classList.add('is-valid');
        }

        // Nom
        if (lastName.value.trim() === '') {
            showError(lastName, 'Le nom est requis.');
            valid = false;
        } else if (!nameRegex.test(lastName.value.trim())) {
            showError(lastName, 'Le nom ne peut contenir que lettres, tirets ou apostrophes.');
            valid = false;
        } else {
            showSuccess(lastName);
        }

        // Prénom
        if (firstName.value.trim() === '') {
            showError(firstName, 'Le prénom est requis.');
            valid = false;
        } else if (!nameRegex.test(firstName.value.trim())) {
            showError(firstName, 'Le prénom ne peut contenir que lettres, tirets ou apostrophes.');
            valid = false;
        } else {
            showSuccess(firstName);
        }

        // Email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value.trim() === '') {
            showError(email, 'L’email est requis.');
            valid = false;
        } else if (!emailRegex.test(email.value.trim())) {
            showError(email, 'Adresse e-mail invalide.');
            valid = false;
        } else {
            showSuccess(email);
        }

        // Date naissance
        if (birth.value === '') {
            showError(birth, 'La date de naissance est requise.');
            valid = false;
        } else if (!isAdult(birth.value)) {
            showError(birth, 'Vous devez avoir au moins 18 ans.');
            valid = false;
        } else {
            showSuccess(birth);
        }

        // Mot de passe
        if (password.value.length < 6) {
            showError(password, 'Le mot de passe doit contenir au moins 6 caractères.');
            valid = false;
        } else {
            showSuccess(password);
        }

        // Confirmation mot de passe
        if (password2.value !== password.value || password2.value === '') {
            showError(password2, 'Les mots de passe ne correspondent pas.');
            valid = false;
        } else {
            showSuccess(password2);
        }

        // Checkbox conditions
        if (!check.checked) {
            checkError.textContent = 'Vous devez accepter les conditions.';
            checkWrapper.classList.add('is-invalid');
            checkWrapper.classList.remove('is-valid');
            valid = false;
        } else {
            checkError.textContent = '';
            checkWrapper.classList.remove('is-invalid');
            checkWrapper.classList.add('is-valid');
        }

        if (valid) form.submit();
    });

    // Validation en temps réel pour Nom / Prénom
    [lastName, firstName].forEach(input => {
        input.addEventListener('input', () => {
            if (input.value.trim() === '') {
                input.classList.remove('is-valid');
            } else if (!nameRegex.test(input.value.trim())) {
                input.classList.add('is-invalid');
                input.classList.remove('is-valid');
            } else {
                showSuccess(input);
            }
        });
    });

    // Validation en temps réel pour Email / Mot de passe / Date
    [email, password, password2, birth].forEach(input => {
        input.addEventListener('input', () => {
            if (input.value.trim() !== '') showSuccess(input);
            else input.classList.remove('is-valid');
        });
    });

    // Validation genre en temps réel
    genres.forEach(radio => {
        radio.addEventListener('change', () => {
            genreError.textContent = '';
            genreContainer.classList.remove('is-invalid');
            genreContainer.classList.add('is-valid');
        });
    });

    // Validation checkbox en temps réel
    check.addEventListener('change', () => {
        if (check.checked) {
            checkError.textContent = '';
            checkWrapper.classList.remove('is-invalid');
            checkWrapper.classList.add('is-valid');
        } else {
            checkWrapper.classList.remove('is-valid');
            checkWrapper.classList.add('is-invalid');
        }
    });
});
