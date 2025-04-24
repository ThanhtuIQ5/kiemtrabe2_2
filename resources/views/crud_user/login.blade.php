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
        <h2>Màn Hình Đăng Nhập</h2>
        <form action="{{ route('user.authUser') }}" method="post">
        @csrf
            <div class="text-box">
                <label for="username">Username</label>
                <input type="text" placeholder="username" id="name" name="name" required autofocus>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="text-box">
                <label for="password">Mật Khẩu</label>
                <input type="password" name="password"  placeholder="password" required autofocus>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="remember-box">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Nhớ mật khẩu</label>
            </div>
            <div class="button-box">
                <a href="#">Quên mật khẩu</a>
                <input class="submit" type="submit" value="Đăng nhập">
            </div>
        </form>
    </div>

    <div class="footer">
        <p>LapTrinhWeb @1/2024</p>
    </div>
</body>

</html>
@endsection