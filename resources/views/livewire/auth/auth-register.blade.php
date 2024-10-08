<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .register-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-sizing: border-box;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #333;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
            color: #555;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 1rem;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus {
            border-color: #2575fc;
            box-shadow: 0 0 0 3px rgba(37, 117, 252, 0.2);
            outline: none;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #2575fc;
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #1a4d92;
            transform: translateY(-2px);
        }

        button:active {
            background-color: #1a4d92;
            transform: translateY(0);
        }

        .error-message {
            color: #d9534f;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <form id="registerForm">
            <h2>Register</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <small class="error-message" id="usernameError"></small>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <small class="error-message" id="emailError"></small>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <small class="error-message" id="passwordError"></small>
            </div>
            <div class="input-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <small class="error-message" id="confirmPasswordError"></small>
            </div>
            <button type="submit">Register</button>
            <p><a href="{{ route('login') }}">Already have an account? Login Here.</a></p>
        </form>
    </div>

    <script>
        const form = document.getElementById('registerForm');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            // Clear previous error messages
            document.getElementById('usernameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('passwordError').textContent = '';
            document.getElementById('confirmPasswordError').textContent = '';

            let hasError = false;

            // Validate username
            const username = document.getElementById('username').value.trim();
            if (username.length < 3) {
                document.getElementById('usernameError').textContent = 'Username must be at least 3 characters long.';
                hasError = true;
            }

            // Validate email
            const email = document.getElementById('email').value.trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address.';
                hasError = true;
            }

            // Validate password
            const password = document.getElementById('password').value;
            if (password.length < 6) {
                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters long.';
                hasError = true;
            }

            // Validate confirm password
            const confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match.';
                hasError = true;
            }

            // If there are no errors, simulate form submission (you can handle the form submission as needed)
            if (!hasError) {
                // Placeholder for actual registration logic (e.g., AJAX request to the server)
                alert('Registration successful! Redirecting to login...');

                // Reset form inputs
                form.reset();

                // Redirect to the login page after a brief delay
                setTimeout(() => {
                    window.location.href = '{{ route("login") }}'; // Redirect to the login route in Laravel
                }, 1000); // 1 second delay for better user experience
            }
        });
    </script>
</body>
</html>

</div>
