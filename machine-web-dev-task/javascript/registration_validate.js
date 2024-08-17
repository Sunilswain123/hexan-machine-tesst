// script.js
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registerForm');

    form.addEventListener('submit', function(event) {
        let valid = true;

        // Get form elements
        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirm_password').value;
        const captcha = document.getElementById('captcha').value.trim();

        // Validate username
        if (username === '') {
            alert('Username is required');
            valid = false;
        }

        // Validate email format
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Please enter a valid email address');
            valid = false;
        }

        // Validate passwords match
        const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;

        if (!passwordPattern.test(password)) {
            alert('Please enter a strong password with 8 to 16 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character');
            valid = false;
        }

        // Validate passwords match
        if (password !== confirmPassword) {
            alert('Passwords do not match');
            valid = false;
        }

        // Validate captcha
        if (captcha === '') {
            alert('Captcha is required');
            valid = false;
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
