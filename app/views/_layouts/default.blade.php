<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Collab.Center - Online, Collaborative Coding in Real-Time!</title>
    @include('._partials/assets-top')
</head>
<body>
    <div class="home-wrapper">
        <div class="home-wrapper-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Welcome to Collab.Center!<sup>Beta</sup></h1>
                        <p>Collab.center is an easy way to share collaborative coding docs or even plain text online! Just select a language and your ready to go!</p>
                    </div>
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
</body>
</html>