<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CeylonCinnaPepperDSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            width: 70%;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .form-section {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: green;
        }
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-form .forgot-password {
            display: block;
            text-align: right;
            margin-top: -10px;
            margin-bottom: 20px;
            font-size: 14px;
            color: green;
            text-decoration: none;
        }
        .login-form .forgot-password:hover {
            text-decoration: underline;
        }
        .login-form .remember-me {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }
        .login-form .remember-me input[type="checkbox"] {
            margin-right: 10px;
        }
        .login-form .remember-me label {
            color: green;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #45a049;
        }
        .login-form .register {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
        .login-form .register a {
            color: green;
            text-decoration: none;
            font-weight: bold;
        }
        .login-form .register a:hover {
            text-decoration: underline;
        }
        .image-section {
            width: 50%;
            background-image: url('{{ asset("images/img8.png") }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left side form section -->
        <div class="form-section">
            <div class="login-form">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    <div class="remember-me">
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="{{ route('buyer') }}" class="button">Login</a>
                </form>
                <div class="register">
                    Don't have an account? <a href="register.php">Register</a>
                </div>
            </div>
        </div>

        <!-- Right side image section -->
        <div class="image-section"></div>
    </div>
</body>
</html>
