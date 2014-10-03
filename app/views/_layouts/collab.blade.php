<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collab.Center</title>
    @include('._partials/assets-top')
    <script type="text/javascript">
        // $padId comes from the data that we pass into the view, please refer to HomeController@getMyPad
        var userPadId = "{{ $padId }}";
    </script>
</head>
<body>
    @include('._partials/navigation')
    <div class="container-fluid">
        <div class="wrapper">
        @yield('main')
        </div>
    </div>
    @include('._partials.assets-bottom')
</body>
</html>