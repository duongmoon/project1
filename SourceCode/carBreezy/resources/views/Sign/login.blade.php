<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="icon" href="Favicon.png">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
          crossorigin="anonymous">


    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .navbar-laravel {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        .navbar-brand, .nav-link, .my-form, .login-form {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }
        .rounded-circle{
            border-radius: 0 !important;
        }
        .containerk{
            height: 50px;
        }
        .containerk>span>a {
            color: rgb(26, 78, 33);
            display: inline-block ;
            margin: 12px 10px;
            text-decoration: none;
        }
        a:hover{
            color: #f44336;
        }
</style>

    <title>Login Car-Breezy</title>
</head>
<body>



<main class="login-form">

    <div class="container d-flex flex-column" >
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome to Car-Breezy</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>
                <div class="card">
                    <div class="card-body">
                        <div class="m-sm-4">
                            <div class="text-center">
                                <a href="{{route('auth.home')}}"><img src="{{asset('/storage/images/logo/'.'login.gif')}}" alt="" class="img-fluid rounded-circle"></a>
                            </div>
                        <form
                            action="{{route('auth.signin')}}"
                            method="post">
                            @csrf
                            <div class="form-group">
                                <label label for="contact" class="form-label" >Contact </label>
                                <input class="au-input au-input--full" type="text" class="form-control form-control-lg"
                                       id = "contact" name="contact"
                                       placeholder="contact"
                                       value="{{old('contact')}}">
                            </div>
                            <div class="form-group">
                                <label label for="password" class="form-label" >Password </label>
                                <input class="au-input au-input--full" type="password" id="password" class="form-control form-control-lg" name="password"
                                       placeholder="Password"
                                       >
                            </div>

                            <div class="text-center mt-3 ">
                                <button class="au-btn au-btn--block au-btn--green m-b-20 " style=" background-color: #533f03" type="submit">sign in</button>
                            </div>
                        </form>
                    </div>

                    <div class="containerk" style="background-color:#f1f1f1">
                        <span ><a type="button "  class="form-submit-reset" href="{{route('auth.home')}}" class="homebtn"  style="">Back to Home</a></span>
                        <span >  <a type="button "  class="form-submit-reset" href="{{route('Cus.fomat')}}" class="psw" style="float: right; color: rgb(26, 78, 33);
                            display: inline-block;text-decoration: none;margin: 12px 10px;">Forgot password?</a></span>
                    </div>
                        @include('partial.error')
                </div>
            </div>
          </div>
        </div>
    </div>
    </div>
</main>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

<script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}">
</script>

<!-- Main JS-->
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
