<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>
        {{env('APP_NAME')}}
    </title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
</head>
<style>
    .login-box {
        width: 30%;
        margin: 100px auto 0 auto;
    }
    body{
        background: #eee;
    }
</style>
<body>
<div class="login-box">
    <div class="main-card mb-3 card">
        <div class="card-body"
        ><h5 class="card-title">
                {{env('APP_NAME')}}
            </h5>
            <form action="{{route('login')}}" method="POST">
                @csrf

                <div class="position-relative form-group">
                    <label for="exampleAddress" class="">Email</label>
                    <input
                        name="email"  placeholder="" type="text" class="form-control"  value="{{ old('email') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="position-relative form-group">
                    <label class="">Password</label><input
                        name="password" placeholder="" type="text"
                        class="form-control" value="{{ old('password') }}">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="position-relative form-check">
                    <input name="remember"  type="checkbox" class="form-check-input"><label
                                                                                                 class="form-check-label">Remember me </label></div>
                <button class="mt-2 btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
</div>

</body>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>
</html>
