process.env.DISABLE_NOTIFIER = true;
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('global.scss', 'resources/assets/css/global.css');

    mix.styles(['_html5-boilerplate.css', '_bootstrap.min.css', '_bootstrap-theme.min.css', '_technology-icons.css', 'global.css'], 'public/css/app.css');

    mix.scriptsIn('resources/assets/js', 'public/js/app.js')

    mix.version(['css/app.css', 'js/app.js']);
});
