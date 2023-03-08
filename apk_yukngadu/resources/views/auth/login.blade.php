<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
        <link rel="stylesheet" type="text/css" href="/assets/css/logreg.css">
    <div class="container">
        <div class="img"></div>
            <div class="login-content">

        <form action="{{ route('login') }}" method="POST" class="form login">
            @csrf
                <h2 class="title">LOGIN</h2>
        <div class="input-div one">
            <div class="i">
                <i class="text"></i>
            </div>
                <div class="div">
                    <input autocomplete="username" id="login__username" type="text" name="email" class="form__input" placeholder="Username" required>
                </div>
            </div>
                <div class="input-div pass">
                    <div class="i">
                    <i class="pass"></i>
                </div>
            <div class="div">
                    <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
            </div>
        </div>
                    <input type="submit" class="btn" value="Login">
                    <a href="{{ route('register') }}">Belum punya akun? register</a>
        </form>

        </div>
    </div>
</body>

</html>
