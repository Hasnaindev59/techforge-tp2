<!--/
    developer : Anonymous, Anonymous
    Anonymous : Anonymous, Anonymous
/-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {

            font-family: Arial, sans-serif;
            background-image: url('{{ asset("img/loginbackground.jpg") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Login container */
        .login-container {
            background-color: #010035;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading with logo */
        .login-heading {
            display: block;
            align-items: center;
            justify-content: center;
            /* Center text */
            margin-bottom: 20px;
        }

        .login-heading h2 {
            color: white;
            margin-left: 20px;
            /* Space between logo and text */
            font-size: 24px;
        }

        .login-heading img {
            height: 90px;
            /* Increased size of the logo */
            width: auto;
        }

        /* Form styling */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: white;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #003f91;
        }

        .google-login {
            margin-top: 20px;
        }

        .google-btn {
            background-color: #4285F4;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s ease;
        }

        .google-btn:hover {
            background-color: #357ae8;
        }

        .google-btn img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .forgot-password {
            margin-top: 15px;
            font-size: 14px;
            color: #ccc;
        }

        .forgot-password a {
            color: #fff;
            text-decoration: none;
        }
        .alert {
        background-color:rgb(1, 201, 124);
        color: rgb();
        padding: 12px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: bold;
        animation: fadeOut 4s ease-in-out forwards;
        }

        @keyframes fadeOut {
            0% { opacity: 1; }
            80% { opacity: 1; }
            100% { opacity: 0; display: none; }
        }

    </style>
</head>

<body>

    <!-- Login Form Container -->
    <div class="login-container">
        @if(session('registered'))
            <div class="alert" id="registration-success">
                {{ session('registered') }}
            </div>
        @endif
        <!-- Login Heading with Logo -->
        <div class="login-heading">
	  <a href="/">
            <img src='{{ asset("img/techForgeWide.jpg") }}' alt="TechForge Logo"> <!-- Add your logo here -->
            <h2>Login to Your Account</h2>
	  </a>
        </div>

        <!-- Login Form -->
        <form action="/login" method="POST">
            @csrf
            <!-- Username -->
            <div class="form-group">
                <label for="CustomerEmail">Email</label>
                <input type="email" id="CustomerEmail" name="CustomerEmail" placeholder="Enter your email" required>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="CustomerPassword" placeholder="Enter your password" required>
            </div>

            <!-- Submit Button -->
            <input type="submit" value="Login">
        </form>
        <div class="forgot-password">
            <a href="#">Don't have an account?</a>
        </div>

        <div class="google-login">
            <a href="/register">
                <button class="google-btn">
                    Make an account
                </button>
            </a>
        </div>

        <!-- Forgot Password Link -->
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>

        <!-- Google Login Button -->
        <div class="google-login">
            <a href="{{ route('google.login') }}" class="google-btn">
                <img src="https://img.icons8.com/?size=100&id=V5cGWnc9R4xj&format=png&color=000000" alt="Google Logo">
                Sign in with Google
            </a>
        </div>
    </div>



</body>

</html>
