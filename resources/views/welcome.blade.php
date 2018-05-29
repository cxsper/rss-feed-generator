<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RSS Feed Generator</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('feed') }}">Read</a>
                        <a href="{{ route('media.suggestions') }}">
                            Suggestions
                        </a>
                    @else
                        <a class="hidden-xs-down" href="{{ route('register') }}">Signup</a>
                        <a class="hidden-xs-down" href="{{ route('login') }}">Login</a>
                        <a href="{{ route('social-auth-login', 'google') }}">Google+</a>
                        <a href="{{ route('social-auth-login', 'github') }}">GitHub</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    RSS Feed Generator
                </div>

                <div class="links">
                    <a href="{{ route('media.index') }}">Media</a>
                    <a href="http://casper.one/presentation" target="_blank">Presentation</a>
                    <a href="https://github.com/caspermadara/curse" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
