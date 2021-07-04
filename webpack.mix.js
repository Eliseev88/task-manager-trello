const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/index.scss', 'public/css')
mix.sass('resources/sass/account.scss', 'public/css');
mix.sass('resources/sass/board.scss', 'public/css');
mix.sass('resources/sass/tuskForm.scss', 'public/css');
mix.sass('resources/sass/authForm.scss', 'public/css');
mix.sass('resources/sass/forms/auth/login.scss', 'public/css');

