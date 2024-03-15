<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Login</title>
    <link rel="stylesheet" href="backend/css/login-style.css">
    <link rel="stylesheet" href="backend/css/customize.css">

</head>
<body style="background-color:#f0f2f5;">
    <div id="container">
        <form method="POST" role="form" id="form-login" action="{{route('auth.login')}}">
        @csrf 
        <h1>VUI LÒNG ĐĂNG NHẬP</h1>
          <div class="form-group">
                <input type="text" name="email" class="form-input" placeholder="Tên đăng nhập" value="{{old('email')}}">
                @if ($errors->has('email'))
                    <span class="error-message">*{{$errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
                @if ($errors->has('password'))
                    <span class="error-message">*{{$errors->first('password') }}</span>
                @endif
            </div>
                <button type="submit" value="Đăng nhập" class="form-submit">Đăng Nhập</button>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        </form>
    </div>
</body>
</html>