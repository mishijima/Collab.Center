<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
  var sc_project=9847367;
  var sc_invisible=1;
  var sc_security="8d165f65";
  var scJsHost = (("https:" == document.location.protocol) ?
  "https://" : "http://www.");
  document.write("<sc"+"ript type='text/javascript' src='" +
  scJsHost+
  "statcounter.com/counter/counter.js'></"+"script>");
</script>
<!-- End of StatCounter Code for Default Guide -->
@if(App::environment('local'))
    <script src="{{ asset('assets/libs/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/plugins/cookies/Cookies.js') }}"></script>
    <!-- CODEMIRROR -->
    <script src="{{ asset('assets/plugins/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/addon/dialog/dialog.js') }}"></script>
    <!--Addons-->
    <script src="{{ asset('assets/plugins/codemirror/addon/mode/loadmode.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/addon/edit/matchbrackets.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/addon/edit/closebrackets.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/addon/search/search.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/addon/search/searchcursor.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/addon/dialog/dialog.js') }}"></script>
    <script src="{{ asset('assets/plugins/codemirror/keymap/sublime.js') }}"></script>
    <!-- Firebase -->
    <script src="{{ asset('assets/plugins/firebase/firebase.js') }}"></script>
    <!-- Firepad -->
    <script src="{{ asset('assets/plugins/firepad/firepad.js') }}"></script>
    {{--<script src='https://cdn.firebase.com/js/client/1.0.15/firebase.js'></script>--}}
    <!-- Include userlist. -->
    <script src="{{ asset('assets/plugins/firepad/firepad-userlist.js') }}"></script>
    <!-- Pusher -->
    <script src="{{ asset('assets/plugins/pusher/pusher.js') }}"></script>
    <script src="{{ asset('assets/plugins/pusher/PusherChatWidget.js') }}"></script>
    <!-- Cookies Tool -->
    <script src="{{ asset('assets/plugins/cookies/Cookies.js') }}"></script>
    <!-- ToxBox Video -->
    <script src="{{ asset('assets/plugins/misc/videoChatTokBox.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@else
    <script src="{{ asset('assets/js/libs/combined-libs.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/combined-plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
@endif