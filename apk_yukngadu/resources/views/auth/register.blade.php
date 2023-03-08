<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
        <link rel="stylesheet" type="text/css" href="/assets/css/logreg.css">
    <div class="container">
        <div class="img"></div>
            <div class="login-content">

        <form action="{{ route('register') }}" method="POST" class="form login">
            @csrf
                    <h2 class="title">REGISTER</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="text"></i>
                </div>
            <div class="div">
                <input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="__('NIK')" placeholder="nik" :value="old('nik')" required autofocus/>
            </div>
        </div>
        <div class="input-div one">
            <div class="i">
                <i class="text"></i>
            </div>
        <div class="div">
            <input id="name" class="block mt-1 w-full" type="text" name="name" :value="__('Name')" placeholder="name" :value="old('name')" required autofocus/>
        </div>
    </div>
        <div class="input-div one">
            <div class="i">
                <i class="text"></i>
            </div>
        <div class="div">
                <input id="email" type="email" name="email" :value="__('Email')" placeholder="Username" :value="old('email')" required>
            </div>
        </div>
        <div class="input-div one">
            <div class="i">
                <i class="text"></i>
            </div>
        <div class="div">
            <input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="__('No. HP')" placeholder="phone" :value="old('phone')" required/>
        </div>
    </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="pass"></i>
                </div>
            <div class="div">
                <input id="login__password" type="password"
                name="password"
                :value="__('Password')"
                placeholder="Password"
                required autocomplete="new-password">
            </div>
        </div>
        <div class="input-div pass">
                <div class="i">
                    <i class="pass"></i>
                </div>
            <div class="div">
                <input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" :value="__('konfirmasi sandi')" placeholder="password confirmation" required/>
            </div>
        </div>
                <input type="submit" class="btn" value="Register" {{ __('Register') }}>
                <a href="{{ route('login') }}">Sudah punya akun? Login</a>
        </form>

        </div>
    </div>

</body>

</html>
