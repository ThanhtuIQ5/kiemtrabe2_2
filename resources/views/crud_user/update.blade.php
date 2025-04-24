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
        <h2>Màn Hình Cập Nhật</h2>
        <form action="{{ route('user.postUpdateUser') }}" method="post">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="text-box">
                <label for="username">Username</label>
                <input type="text" name="name" value="{{ $user->name }}" required>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="text-box">
                <label for="age">age</label>
                <input type="text" name="age" value="{{ $user->age }}" required>
                @if ($errors->has('age'))
                <span class="text-danger">{{ $errors->first('age') }}</span>
                @endif
            </div>
            <div class="text-box">
                <label for="github">github</label>
                <input type="text" name="github" value="{{ $user->github }}" required>
                @if ($errors->has('github'))
                <span class="text-danger">{{ $errors->first('github') }}</span>
                @endif
            </div>
            <div class="text-box">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" required>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="text-box">
                <label for="password">Mật Khẩu</label>
                <input type="password" placeholder="Password" id="password" name="password" required>
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            {{-- <div class="text-box">
                <label for="password_confirmation">Nhập Lại Mật Khẩu</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="nhập lại mật khẩu" required
                    oninput="this.setCustomValidity(this.value !== document.getElementById('password').value ? 'Mật khẩu nhập lại không khớp!' : '')">
            </div> --}}
            <div class="button-box">
                <input class="submit" type="submit" value="Cập Nhật">
            </div>
        </form>
    </div>

    <div class="footer">
        <p>LapTrinhWeb @1/2024</p>
    </div>
</body>

</html>
@endsection