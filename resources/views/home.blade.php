<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Paper and Cinnamon Farming</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
        }

        .navbar {
            background-color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: green;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
            transition: background-color 0.3s;
            font-weight: bold;
        }

        .navbar a:hover {
            background-color: #45a049;
        }

        .navbar .login-btn {
            background-color: green;
            border-radius: 5px;
            padding: 10px 20px;
            color: white;
        }

        .navbar .login-btn:hover {
            background-color: #6B3F1E;
        }

        .container {
            position: relative;
            text-align: center;
            color: white;
        }

        .container img {
            width: 100%;
            height: calc(100vh - 78px);
            object-fit: cover;
        }

        .container .text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 56px;
            font-weight: bold;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
        }

        .box-container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            gap: 40px;
        }

        .box {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        }

        .box img {
            width: 120px;
            height: 120px;
            margin-bottom: 15px;
            border-radius: 8px;
        }

        .box h4 {
            color: #333;
            margin-bottom: 10px;
        }

        .box .description {
            font-size: 16px;
            color: #555;
        }

        .info-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f8f8f8;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            margin: 60px 100px;
        }

        .info-section img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-right: 20px;
        }

        .info-section .text-content {
            color: #333;
            max-width: 600px;
        }

        .info-section .text-content h4 {
            margin-top: 0;
            margin-bottom: 15px;
        }

        .info-section .text-content p {
            margin-bottom: 0;
        }

        .info-section .register {
            text-align: center;
            margin-top: 20px;
        }

        .info-section .register a {
            background-color: #8B4513;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .info-section .register a:hover {
            background-color: #6B3F1E;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 60px;
        }

        .footer p {
            margin: 0;
        }
        .offering {
            padding: 50px 15%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .description {
            flex: 1;
            padding-right: 50px;
            color: black;
        }

        .images-container {
            position: relative;
            flex: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .large-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            z-index: 1;
            margin-left: 600px;
        }

        .large-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .small-image {
            position: absolute;
            left: 800px;
            transform: translateY(-50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            z-index: 2;
            border: 9px solid white;
            margin-top:-60px;
        }

        .small-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .text{
            margin-left:40px;

        }
        .text h3 {
    color: green;
    text-align: center;
    margin-left:80px;
}
.four-images-container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
            height:300px;
            width:1000px;
            margin-left:100px;
            border-radius: 12px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);

        }

        .four-images-container .image-box {
            width: 200px;
            height: 210px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .four-images-container .image-box:hover {
            transform: translateY(-5px);
        }

        .four-images-container .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

    </style>
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <a href="#">Paper & Cinnamon Farming</a>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <a href="{{ route('Login') }}" class="login-btn">Login</a>
        </nav>
    </header>

    <div class="container">
        <img src="{{ asset('images/img4.png') }}" alt="Background Image">
        <div class="text">CeylonCinnaPepperDSS</div>
    </div>

    <div class="box-container">
        <div class="box">
            <h4>Cinnamon</h4>
            <img src="{{ asset('images/img3.png') }}" alt="Cinnamon">
            <div class="description">Learn more about the benefits and cultivation of cinnamon.</div>
        </div>
        <div class="box">
            <h4>Pepper</h4>
            <img src="{{ asset('images/img2.png') }}" alt="Pepper">
            <div class="description">Explore the best practices for growing pepper in your area.</div>
        </div>
    </div>
    <div class="whyus">
    </div>

    <div class="info-section">
        <img src="{{ asset('images/img6.png') }}" alt="Circular Image">
        <div class="text-content">
            <h4>Cinnamon and Pepper Decision Support</h4>
            <p>This system provides comprehensive support for cinnamon and pepper farming decisions. Access valuable insights and data to optimize your farming practices.</p>
        </div>
        <div class="register">
            <a href="{{ route('register') }}">Register Now</a>
        </div>
    </div>



<div class="3rd">
    <div class="text">
<h3>What We Offer</h3>
            <p>If you're a cinnamon or pepper farmer, you can sell your goods directly to customers through our online platform. Reach more buyers and grow your business with ease!</p>
    </div>
<div class="offering">
<div class="large-image">
                <img src="{{ asset('images/img10.png') }}" alt="Large Image">
            </div>
    </div>
    <div class="small-image">
                <img src="{{ asset('images/img11.png') }}" alt="Small Image">
    </div>
    </div>
    </div>

    <div class="four-images-container">
        <div class="image-box">
            <img src="{{ asset('images/img1.png') }}" alt="Image 1">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/img2.png') }}" alt="Image 2">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/img3.png') }}" alt="Image 3">
        </div>
        <div class="image-box">
            <img src="{{ asset('images/img4.png') }}" alt="Image 4">
        </div>
    </div>










    <footer class="footer">
        <p>&copy; 2024 Paper & Cinnamon Farming. All rights reserved.</p>
    </footer>
</body>
</html>
