<script>
    class Validator {
        constructor(username, password) {
            this.username = username;
            this.password = password;
        }

        validate() {
            let errors = {};

            if (this.username === '') {
                errors.username = 'Username is required.';
            } else if (this.username.length < 3) {
                errors.username = 'Username must be at least 3 characters long.';
            }

            if (this.password === '') {
                errors.password = 'Password is required.';
            } else if (this.password.length < 6) {
                errors.password = 'Password must be at least 6 characters long.';
            }

            return errors;
        }
    }

    document.getElementById('loginForm').addEventListener('submit', function(event) {
        const username = document.getElementById('username').value.trim();
        const password = document.getElementById('password').value.trim();

        const validator = new Validator(username, password);
        const errors = validator.validate();

        document.getElementById('username-error').innerText = '';
        document.getElementById('password-error').innerText = '';

        if (Object.keys(errors).length > 0) {
            event.preventDefault();

            if (errors.username) {
                document.getElementById('username-error').innerText = errors.username;
            }
            if (errors.password) {
                document.getElementById('password-error').innerText = errors.password;
            }
        } else {
            // Save username in session storage
            sessionStorage.setItem('username', username);

            // Redirect to home page after successful login
            window.location.href = 'home_after_login.html';
        }
    });

    // Check if username is stored and display welcome message
    window.addEventListener('load', function() {
        const storedUsername = sessionStorage.getItem('username');
        if (storedUsername) {
            document.querySelector('h2').innerText = `Welcome, ${storedUsername}!`;
        }
    });
</script>
