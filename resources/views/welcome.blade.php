{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}

    <!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <link rel=icon type=image/jpg href="{{ asset('dist/favicon.ico') }}"> <title>Suuma Intranet</title>
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,700,800,900" rel=stylesheet>
    <link rel=stylesheet href=https://use.fontawesome.com/releases/v5.7.0/css/all.css
          integrity=sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ crossorigin=anonymous>
    <link href=/dist/css/chunk-002bffb4.7e3193e5.css rel=prefetch>
    <link href=/dist/css/chunk-0ebb692e.98e75ce8.css rel=prefetch>
    <link href=/dist/css/chunk-210b2ab0.56fa7ecc.css rel=prefetch>
    <link href=/dist/css/chunk-2473b2c8.4fea3741.css rel=prefetch>
    <link href=/dist/css/chunk-64dcd9d2.f78c98c3.css rel=prefetch>
    <link href=/dist/css/chunk-6fe86800.45cdff3d.css rel=prefetch>
    <link href=/dist/css/chunk-7ac6ce93.c9386f83.css rel=prefetch>
    <link href=/dist/css/chunk-ab2489fa.965076d5.css rel=prefetch>
    <link href=/dist/css/chunk-b5197f6e.dd142320.css rel=prefetch>
    <link href=/dist/js/chunk-002bffb4.88efa0ee.js rel=prefetch>
    <link href=/dist/js/chunk-0ebb692e.3d84036b.js rel=prefetch>
    <link href=/dist/js/chunk-210b2ab0.7bded023.js rel=prefetch>
    <link href=/dist/js/chunk-2473b2c8.16a802a4.js rel=prefetch>
    <link href=/dist/js/chunk-2d207d33.027d2417.js rel=prefetch>
    <link href=/dist/js/chunk-2d22253a.d39d8e49.js rel=prefetch>
    <link href=/dist/js/chunk-64dcd9d2.ffe20a16.js rel=prefetch>
    <link href=/dist/js/chunk-6fe86800.733ee9ce.js rel=prefetch>
    <link href=/dist/js/chunk-7ac6ce93.691fc990.js rel=prefetch>
    <link href=/dist/js/chunk-ab2489fa.4620db49.js rel=prefetch>
    <link href=/dist/js/chunk-b5197f6e.323bfcee.js rel=prefetch>
    <link href=/dist/css/app.222c3cf5.css rel=preload as=style>
    <link href=/dist/css/chunk-vendors.3684d323.css rel=preload as=style>
    <link href=/dist/js/app.b711b25e.js rel=preload as=script>
    <link href=/dist/js/chunk-vendors.6ed8b563.js rel=preload as=script>
    <link href=/dist/css/chunk-vendors.3684d323.css rel=stylesheet>
    <link href=/dist/css/app.222c3cf5.css rel=stylesheet>
</head>

<body><noscript><strong>We're sorry but suuma doesn't work properly without JavaScript enabled. Please enable it to
        continue.</strong></noscript>
<div id=app></div>
<script src=/dist/js/chunk-vendors.6ed8b563.js> </script> <script src=/dist/js/app.b711b25e.js> </script>
</body>
</html>
