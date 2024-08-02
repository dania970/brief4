<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1d3b37;
            color: #ffffff;
            direction: ltr;
        }

        header {
            background-color: #1d3b37;
            padding: 10px 50px;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #f2c33a;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #c7d4d0;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #f2c33a;
        }

        .icons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .login-section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 150px);
            background: url('https://i.pinimg.com/564x/c9/19/3e/c9193efb2ff431290270b586df00a939.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .login-container {
            background-color: #2b4d45;
            border-radius: 20px;
            box-shadow: 5px 0 10px rgba(255, 255, 255, 0.579);
            width: 600px;
            height: 400px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-top: 10px;
            position: relative;

        }

        .login-container h2 {
            margin-bottom: 30px;
            color: #ffffff;
            font-size: 30px;
        }

        .input-group {
            margin-bottom: 20px;
            width: 100%;
            text-align: left;
            position: relative;
        }

        .input-group label {
            display: block;
            color: #c7d4d0;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;
            width: 50%;
            margin-left: 10%;
        }

        .btn-primary {
            background-color: #00bbaa;
            color: #1d3b37;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e6b82e;
        }

        .error-message {
            color: #ff6b6b;
            font-size: 14px;
            margin-top: 5px;
        }

        .success-message {
            color: #4caf50;
            margin-top: 10px;
            font-size: 14px;
        }

        .options {
            margin-top: 20px;
            text-align: center;
        }

        .options a {
            color: #adaa71;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .options a:first-of-type {
            color: #f2f5f2;
        }

        .options a:last-of-type {
            color: #f2f5f2;
        }

        .options a:hover {
            color: #adaa71;
        }

        .custom-navbar {
            background: #3b5d50 !important;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .custom-navbar .navbar-brand {
            font-size: 32px;
            font-weight: 600;
        }

        .custom-navbar .navbar-brand>span {
            opacity: .4;
        }

        .custom-navbar .navbar-toggler {
            border-color: transparent;
        }

        .custom-navbar .navbar-toggler:active,
        .custom-navbar .navbar-toggler:focus {
            box-shadow: none;
            outline: none;
        }

        @media (min-width: 992px) {
            .custom-navbar .custom-navbar-nav li {
                margin-left: 15px;
                margin-right: 15px;
            }
        }

        .custom-navbar .custom-navbar-nav li a {
            font-weight: 500;
            color: #ffffff !important;
            opacity: .5;
            transition: .3s all ease;
            position: relative;
        }

        @media (min-width: 768px) {
            .custom-navbar .custom-navbar-nav li a:before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 8px;
                right: 8px;
                background: #f9bf29;
                height: 5px;
                opacity: 1;
                visibility: visible;
                width: 0;
                transition: .15s all ease-out;
            }
        }

        .custom-navbar .custom-navbar-nav li a:hover {
            opacity: 1;
        }

        .custom-navbar .custom-navbar-nav li a:hover:before {
            width: calc(100% - 16px);
        }

        .custom-navbar .custom-navbar-nav li.active a {
            opacity: 1;
        }

        .custom-navbar .custom-navbar-nav li.active a:before {
            width: calc(100% - 16px);
        }

        .custom-navbar .custom-navbar-cta {
            margin-left: 0 !important;
            flex-direction: row;
        }

        @media (min-width: 768px) {
            .custom-navbar .custom-navbar-cta {
                margin-left: 40px !important;
            }
        }

        .custom-navbar .custom-navbar-cta li {
            margin-left: 0px;
            margin-right: 0px;
        }

        .custom-navbar .custom-navbar-cta li:first-child {
            margin-right: 20px;
        }

        .custom-navbar .dropdown-menu {
            background-color: #3b5d50;
            border: none;
        }

        .custom-navbar .dropdown-item {
            color: #ffffff !important;
            opacity: .7;
            transition: .3s all ease;
        }

        .custom-navbar .dropdown-item:hover {
            background-color: #2e4b41;
            opacity: 1;
        }

        #btn {
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            color: #ffffff;
            background: #2f2f2f;
            border-color: #2f2f2f;
        }
    </style>
</head>

<body>
    <link rel="stylesheet" href="5.php">
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Furni<span>.</span></a>
            <form class="d-flex ms-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button id="btn" class="btn btn-outline-dark" type="submit">Search</button>
            </form>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" href="file:///C:/Users/Orange/Desktop/furni-1.0.0/home after login.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="#">Category 1</a></li>
                            <li><a class="dropdown-item" href="#">Category 2</a></li>
                            <li><a class="dropdown-item" href="#">Category 3</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="file:///C:/Users/Orange/Desktop/furni-1.0.0/about%20after%20login.html">About</a></li>
                    <li><a class="nav-link" href="file:///C:/Users/Orange/Desktop/furni-1.0.0/contact%20after%20login.html">Contact</a>
                    </li>
                    <li><a class="nav-link" href="file:///C:/Users/Orange/Desktop/furni-1.0.0/home.html">Logout</a></li>

                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="file:///C:/Users/Orange/Desktop/furni-1.0.0/User.html"><i class="fa-regular fa-user"></i></a></li>
                    <li><a class="nav-link" href="file:///C:/Users/Orange/Desktop/furni-1.0.0/cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="login-section">
            <div class="login-container">
                <h2>Welcome!</h2>
                <form id="loginForm" action="authenticate.php" method="post">
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                        <div class="error-message" id="username-error"></div>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        <div class="error-message" id="password-error"></div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                    <div class="options">
                        <a href="#">Can't remember your password? Recover it.</a>
                        <a href="#">Don't Have an Account? Create it.</a>

                    </div>
                </form>
            </div>
        </section>
    </main>

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
            }
        });
    </script>
</body>

</html>