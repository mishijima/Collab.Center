/*global module:false*/
module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
             development: {
                 options: {
                     paths: ["public/assets"]
                 },
                 files: {
                    "public/assets/plugins/bootstrap/css/bootstrap.css": "public/assets/plugins/bootstrap/less/bootstrap.less",
                    "public/assets/plugins/font-awesome/css/font-awesome.css": "public/assets/plugins/font-awesome/less/font-awesome.less",
                }
             },
             production: {
                 options: {
                     paths: ["public/assets"],
                     cleancss: true
                 },
                 files: {
                    "public/assets/plugins/bootstrap/less/bootstrap.css": "public/assets/plugins/bootstrap/less/bootstrap.less",
                    "public/assets/plugins/font-awesome/css/font-awesome.css": "public/assets/plugins/font-awesome/less/font-awesome.less",
                }
             }
        },
        concat: {
            css_plugins: {
                src: [
                    'public/assets/plugins/bootstrap/css/bootstrap.css',
                    'public/assets/plugins/font-awesome/css/font-awesome.css',
                    'public/assets/plugins/codemirror/lib/codemirror.css',
                    'public/assets/plugins/codemirror/theme/mdn-like.css',
                    'public/assets/plugins/codemirror/theme/cobalt.css',
                    'public/assets/plugins/codemirror/theme/monokai.css',
                    'public/assets/plugins/codemirror/theme/eclipse.css',
                    'public/assets/plugins/firepad/firepad.css',
                    'public/assets/plugins/codemirror/addon/dialog/dialog.css',
                    'public/assets/plugins/pusher/pusher-chat-widget.css',
                    'public/assets/plugins/apprise/apprise.css',
                ],
                dest: 'public/assets/css/plugins/combined-plugins.css'
            },
            js_plugins: {
                src: [
                    'public/assets/plugins/bootstrap/js/bootstrap.js',
                    'public/assets/plugins/cookies/Cookies.js',
                    'public/assets/plugins/codemirror/lib/codemirror.js',
                    'public/assets/plugins/codemirror/addon/dialog/dialog.js',
                    'public/assets/plugins/codemirror/addon/mode/loadmode.js',
                    'public/assets/plugins/codemirror/addon/edit/matchbrackets.js',
                    'public/assets/plugins/codemirror/addon/edit/closebrackets.js',
                    'public/assets/plugins/codemirror/addon/search/search.js',
                    'public/assets/plugins/codemirror/addon/search/searchcursor.js',
                    'public/assets/plugins/codemirror/addon/dialog/dialog.js',
                    'public/assets/plugins/codemirror/keymap/sublime.js',
                    'public/assets/plugins/firebase/firebase.js',
                    'public/assets/plugins/firepad/firepad.js',
                    'public/assets/plugins/firepad/firepad-userlist.js',
                    'public/assets/plugins/pusher/pusher.js',
                    'public/assets/plugins/pusher/PusherChatWidget.js',
                    'public/assets/plugins/misc/videoChatTokBox.js',
                ],
                dest: 'public/assets/js/plugins/combined-plugins.js'
            },
            js_libs: {
                src: [
                    'public/assets/libs/**/*.js',
                ],
                dest: 'public/assets/js/libs/combined-libs.js'
            },
        },
        cssmin: {
            css_plugins: {
                src: 'public/assets/css/plugins/combined-plugins.css',
                dest: 'public/assets/css/plugins/combined-plugins.min.css'
            },
            css : {
                src: 'public/assets/css/style.css',
                dest: 'public/assets/css/style.min.css'
            }
        },
        uglify: {
            js: {
                files: {
                    'public/assets/js/plugins/combined-plugins.min.js' : ['public/assets/js/plugins/combined-plugins.js'],
                    'public/assets/js/libs/combined-libs.min.js': ['public/assets/js/libs/combined-libs.js'],
                    'public/assets/js/main.min.js': ['public/assets/js/main.js']
                }
            }
        },
        watch: {
            files: '<%= jshint.src %>',
            tasks: ['jshint']
        },
        jshint: {
            src: [
                'Gruntfile.js',
                'src/app/**/*.js',
                'src/config.js',
                'tests/app/**/*.js'
            ],
            options: {
                curly: true,
                eqeqeq: true,
                immed: true,
                latedef: true,
                newcap: true,
                noarg: true,
                sub: true,
                undef: true,
                boss: true,
                eqnull: true,
                browser: true,
                globals: {
                    require: true,
                    define: true,
                    requirejs: true,
                    describe: true,
                    expect: true,
                    it: true
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');

    // grunt.registerTask('default', ['less']);
    grunt.registerTask('default', ['less', 'concat', 'cssmin', 'uglify', 'jshint']);
};