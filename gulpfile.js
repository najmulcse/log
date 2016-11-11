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
    mix.sass('app.scss')


        .styles([
                'bootstrap.css',
                'bootstrap.min.css',
                'sb-admin.css',
                'plugins/morris.css'

         ],'./public/css/libs.css')


        .scripts([
                'bootstrap.js',
                'bootstrap.min.js',
                'jquery.js'

        ],'./public/js/libs.js')






});
