<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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

        .login-container {
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

        .register-link {
            display: block;
            margin-top: 1rem;
            font-size: 0.875rem;
            color: #2575fc;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form id="loginForm">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <small class="error-message" id="usernameError"></small>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <small class="error-message" id="passwordError"></small>
            </div>
            <button type="submit">Login</button>
            <a href="dashboard.html" class="dashboard-link"></a>
        </form>
    </div>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Clear previous errors
            document.getElementById('usernameError').textContent = '';
            document.getElementById('passwordError').textContent = '';

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            let isValid = true;

            if (username === '') {
                document.getElementById('usernameError').textContent = 'Username is required';
                isValid = false;
            }

            if (password === '') {
                document.getElementById('passwordError').textContent = 'Password is required';
                isValid = false;
            }

            if (isValid) {
                // Proceed with form submission or further processing
                alert('Form is valid. Submitting...');
            }
            window.location.href = '{{ route("dashboard") }}'; // Redirect to the dashboard route in Laravel
        });
    </script>
</body>
</html>
   </div>
   
