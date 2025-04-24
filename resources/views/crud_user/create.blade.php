@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Đăng Nhập</title>
    <style>

    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="">Home |</a></li>
            <li><a href="{{route('login')}}">Đăng Nhập |</a></li>
            <li><a href="{{route('user.createUser')}}">Đăng Ký</a></li>
        </ul>
    </nav>

    <div class="Form-login">
        <h2>Màn Hình Đăng Ký</h2>
        <form action="{{ route('user.postUser') }}" method="post">
            @csrf
            <div class="text-box">
                <label for="username">Username</label>
                <input type="text" name="name" id="name" placeholder="name" require autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="text-box">
                <label for="password">Mật Khẩu</label>
                <input type="password" placeholder="Password" id="password" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="text-box">
                <label for="password_confirmation">Nhập Lại Mật Khẩu</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="nhập lại mật khẩu" required
                    oninput="this.setCustomValidity(this.value !== document.getElementById('password').value ? 'Mật khẩu nhập lại không khớp!' : '')">
            </div>
            <div class="text-box">
                <label for="email">Email</label>
                <input type="text" placeholder="Email" id="email_address" name="email" required autofocus>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="button-box">
                <a href="./login.html">Đã có tài khoản</a>
                <input class="submit" type="submit" value="Đăng Ký">
            </div>
        </form>
    </div>

    <div class="footer">
        <p>LapTrinhWeb @1/2024</p>
    </div>
</body>

</html>
@endsection