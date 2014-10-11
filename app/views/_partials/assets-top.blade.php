@if(!App::environment('local'))
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900'></link>
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}">
    <!-- CODEMIRROR -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/lib/codemirror.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/theme/mdn-like.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/theme/cobalt.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/theme/monokai.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/theme/eclipse.css') }}" />
    <!-- Firepad -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/firepad/firepad.css') }}" />
    <!--Addons-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/addon/dialog/dialog.css') }}" />
    <!-- Pusher -->
    <link href="{{ asset('assets/plugins/pusher/pusher-chat-widget.css') }}" rel="stylesheet" type="text/css" />
    <!-- Apprise -->
    <link href="{{ asset('assets/plugins/apprise/apprise.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@else
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900'></link>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/combined-plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
@endif