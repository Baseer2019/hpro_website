
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/simple-line-icons.css') }}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the backend/css/skins
       folder instead of downloading all of them to reduce the load. -->

</head>
<body class="hold-transition login-page" style='height:0'>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="login-logo">
            <a href="#">Log in As Admin</a>
          </div>
        <div class="login-box-body">
            <div class="login-logo">
                <a href="#"><img src="{{ asset('backend/assets/img/logo.jpg') }}" alt="" width="100px"
                        style="border-radius: 50%"> </a>
            </div>
            <p class="login-box-msg">Sign in to Admin Panel</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group has-feedback">
                    <span class="fa fa-envelope form-control-feedback"></span>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group has-feedback">
                    <span class="fa fa-lock form-control-feedback"></span>
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ __('Login') }}
                        </button>

                    </div>
                    <!-- /.col -->
                </div>
            </form>

            {{-- <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign
                    in using
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign
                    in using
                    Google+</a>
            </div> --}}
            <!-- /.social-auth-links -->

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
</body>
</html>
