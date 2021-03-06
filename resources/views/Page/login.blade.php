<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Regist/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('Regist/css/style.css')}}">
</head>

<body>
    <div class="main">
        <div class="container">
            <form action="{{route('postlogin')}}" method="POST" class="appointment-form" id="appointment-form">
                {{csrf_field()}}
                <h2>Pendaftaran OR HMSI 2021/2022</h2>
                <div class="form-group-1">
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <input type="password" name="password" id="password" placeholder="Password" required />
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" class="submit" value="Login" />
                    <a href="{{route('home')}}">Back to Home</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="{{asset('Regist/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Regist/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>