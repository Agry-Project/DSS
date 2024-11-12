<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CeylonCinnaPepperDSS</title>
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
        .register-form {
            width: 100%;
            max-width: 400px;
        }
        .register-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: green;
        }
        .register-form input[type="text"],
        .register-form input[type="email"],
        .register-form input[type="password"],
        .register-form input[type="tel"],
        .register-form select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .register-form button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .register-form button:hover {
            background-color: #45a049;
        }
        .image-section {
            width: 60%;
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
            <div class="register-form">
                <h2>Register</h2>
                <form action="register.php" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="contact_no" placeholder="Contact No" required>
                    <select name="option1" required>
                        <option value="">Select Option 1</option>
                        <option value="buyer">Buyer</option>
                        <option value="farmer">Farmer</option>
                        <option value="other">Other</option>
                    </select>
                    <select name="option2" required>
                        <option value="">Select Option 2</option>
                        <option value="cinnamon">Cinnamon</option>
                        <option value="pepper">Pepper</option>
                        <option value="both">Both</option>
                    </select>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>

        <!-- Right side image section -->
        <div class="image-section"></div>
    </div>
</body>
</html>
