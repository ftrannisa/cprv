<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tech Assessment CPR Vision</title>
    <style>
            html, body {
                background-color: #fff;
                color: #444;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .m-l {
                display: flex;
                justify-content: center;
            }

            .m-t {
                margin-top: 20px;
            }

            table, th, td {
            border: 1px solid gray;
            border-collapse: collapse;
            }

            th, td {
            padding: 5px;
            text-align: left;
            }

            #t01 {
            width: 70%;    
            }

            h5 {
                margin-top: 10px;
                text-align: center;
            }

            .buttonProduct {
                margin: 5px 15px;
                width: 30px;
                height: 30px;
                border-radius: 20,
            }

            .login {
                justify-content: start;
            }

            .submitProduct {
                margin-top: 20px;
                width: 90px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

        </style>
</head>
<body>

    <div class="container-fluid mt-0 full-height">

        @include('inc/navbar')

        <div class="row">
            <div class="col-md-8 col-lg-12">
                @yield('content')

            </div>
        </div>

    </div>

        <footer class="align-content-center container bg-light footer text-center m-t m-b-md">
            &copy; 2020 <strong> Fitri Annisa </strong> | <a href="mailto:ftrannisaa@gmail.com" target="_blank">ftrannisaa@gmail.com</a>
        </footer>

</body>
</html>
