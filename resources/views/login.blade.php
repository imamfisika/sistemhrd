<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/login-vertical-horizontal.css">
    <link rel="stylesheet" href="assets/css/login-vertical-horizontal1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="login-clean">

      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {!! csrf_field() !!}

            <h2 class="sr-only">Login Form</h2>

            <!-- if there are login errors, show them here -->


                <a href="/sistemhrd/public/">Back to Menu</a>
            <div class="illustration"><span class="label label-primary" style="font-size:40%;">Login</span></div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div><a href="#" class="forgot">Forgot your email or password?</a>
<input type="hidden" name="_token" value="{{ csrf_token() }}">


          </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
