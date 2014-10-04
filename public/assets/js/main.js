"use strict";

(function($) {
    $(document).ready(function () {
        var padId = userPadId;

        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
            return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        //language firebase ref global var
        var langBaseRef = new Firebase("https://resplendent-torch-5520.firebaseio.com").child(padId);
        var langBaseVal = "";

        langBaseRef.child("lang").once('value', function(snapshot) {
            if (snapshot.val() != null) {
                langBaseValue = snapshot.val();

                var fileext = {"Plain Text" : "txt", "apl" : "apl", "asterisk" : "conf", "c" : "c", "c++" : "cc", "c#" : "cs", "clojure" : "clj", "cobol" : "cob", "coffeescript" : "coffee", "commonlisp" : "lisp", "css" : "css", "d" : "d", "diff" : "diff", "dtd" : "dtd", "ecl" : "ecl", "eiffel" : "e", "erlang" : "erl", "fortran" : "f", "gas" : "s", "gfm" : "gfm", "gherkin" : "feature", "go" : "go", "groovy" : "groovy", "haml" : "haml", "haskell" : "hs", "haxe" : "hx", "htmlembedded" : "html", "htmlmixed" : "html", "http" : "none", "jade" : "jade", "java" : "java", "javascript" : "js", "jinja2" : "py", "julia" : "jl", "livescript" : "ls", "lua" : "lua", "markdown" : "md", "mirc" : "mrc", "f#" : "fs", "ocaml" : "ml", "nginx" : "conf", "ntriples" : "nt", "octave" : "m", "pascal" : "pas", "pegjs" : "pegjs", "perl" : "pl", "php" : "php", "pig" : "pig", "properties" : "properties", "puppet" : "pp", "python" : "py", "q" : "q", "r" : "r", "rpm" : "rpm", "rst" : "rst", "ruby" : "rb", "rust" : "rs", "sass" : "scss", "scheme" : "scm", "shell" : "none", "sieve" : "none", "smalltalk" : "st", "smarty" : "tpl", "smartymixed" : "tpl", "solr" : "none", "sparql" : "sparql", "sql" : "sql", "stex" : "tex", "tcl" : "tcl", "tiddlywiki" : "none", "tikiwiki" : "none", "toml" : "toml", "turtle" : "ttl", "vb" : "vb", "vbscript" : "vbs", "velocity" : "vm", "verilog" : "v", "xml" : "xml", "xquery" : "xq", "yaml" : "yaml", "z80" : "z80"};

                $("#fileext").text('.' + fileext[snapshot.val()]);
            }
        });

        var codeMirrorInst;
        var firepadInst;
        /**
        onload for Firepad & Codemirror related stuff
        */

        CodeMirror.modeURL = "../../tools/CodeMirror/codemirror-4.0/mode/%N/%N.js";
        // Create a random ID to use as our user ID (we must give this to firepad and FirepadUserList).
        var userId = Math.floor(Math.random() * 9999999999).toString();

        var firepadRef = new Firebase('https://collaborative-coding.firebaseio.com').child(padId);
        var codeMirrorFirepad = CodeMirror(document.getElementById('firepad'), { lineWrapping: true, lineNumbers : true, theme : 'eclipse', matchBrackets : true, autoCloseBrackets : true, keyMap : "sublime"});
        codeMirrorInst = codeMirrorFirepad;
        var firepad = Firepad.fromCodeMirror(firepadRef, codeMirrorFirepad, {userId: userId});
        firepadInst = firepad;
        var firepadUserList = FirepadUserList.fromDiv(firepadRef.child('users'), document.getElementById('userlist'), userId);

        firepad.on('ready', function() {
            if (firepad.isHistoryEmpty()) {
                firepad.setHtml("Hello, and Welcome to Collab.Center! This is how it works:<br> 1. Put some code here.<br> 2. Share the URL with your friends so you can collaborate (Hint: Use the Mail icon in the top-right!).<br> 3. Toggle some options above.<br> That's all there is to it!");
            }
        });
    });
})(jQuery);
