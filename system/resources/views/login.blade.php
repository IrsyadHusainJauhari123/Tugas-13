<!DOCTYPE html>
<html>

<head>
    <title>RP Bloggers - Free Login Page Template With HTML and CSS</title>
    <link rel="stylesheet" type="text/css" href="{{ url('public') }}/style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="form sign-in-container">
            @include('template.utils.notif')
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <h1>Sign in</h1>
                <div class=" social-container">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://rpbloggers.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <input type="email" placeholder="User Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <a href="https://rpblogger/">Forgot your password?</a>
                <button>Sign In</button>

            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Sign UP</h1>
                    <p>Sign up here if you don't have account.</p>
                    <button class="signup_btn">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
